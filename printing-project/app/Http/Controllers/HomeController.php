<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showMessage(){
        $messages = Message::all();
        $users = User::all();
        return view('messaging', compact(['messages', 'users']));
    }
}
