<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    // MessagingController.php
    public function index() {
        $authUser = Auth::user();
        if($authUser->role == 0) {
            $users = User::where('userId','!=',$authUser->userId)->get();
        } else {
            $users = User::where('role',0)->get();
        }
        return view('messages.index', compact('users'));
    }

    public function sendMessage(Request $request) {
        $authUser = Auth::user();
        $receiver = User::findOrFail($request->receiverId);

        // Permission enforcement
        if($authUser->role != 0 && $receiver->role != 0){
            return redirect()->back()->withErrors('You can only message Admin.');
        }

        
        
        Message::create([
            'senderId'=> $authUser->userId,
            'receiverId'=> $request->receiverId, // <- hidden input
            'content' => $request->content,      // <- text input
        ]);


        // return redirect()->back();
    }

    public function loadMessages($userId)
    {
        $authUser = Auth::user();
        $selectedUser = User::findOrFail($userId);

        // Permission enforcement
        if ($authUser->role != 0 && $selectedUser->role != 0) {
            abort(403, 'You can only chat with Admin.');
        }

        $messages = Message::where(function($q) use ($authUser, $selectedUser) {
            $q->where('senderId', $authUser->userId)
            ->where('receiverId', $selectedUser->userId);
        })->orWhere(function($q) use ($authUser, $selectedUser) {
            $q->where('senderId', $selectedUser->userId)
            ->where('receiverId', $authUser->userId);
        })->orderBy('created_at', 'asc')->get();

        return view('messages.chat-panel', compact('messages', 'authUser'))->render();
    }


}
