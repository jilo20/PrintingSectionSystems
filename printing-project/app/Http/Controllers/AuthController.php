<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        $departments = Department::all();
        return view('auth.register', compact('departments'));
    }

    public function showHome()
    {   
        // $userDeptId = Auth::user()->deptId;
        // $departments = Department::all();
        // $requests = Requests::with('department')
        // ->where('deptId',$userDeptId)
        // ->get();
        // return view('home', compact('requests','departments'));

    }

    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'fname' => 'required|max:100|string',
            'lname' => 'required|max:100|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:255|confirmed',
            'deptId' => 'required|integer',
            'role' => 'required|integer'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);

        return redirect()->route('show.login');
    }

    public function login(Request $request)
    {
        // $incomingFields = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // if (Auth::attempt($incomingFields)) {
        //     $request->session()->regenerate();
        //     if(Auth::user()->role == 2 || Auth::user()->role == 3){
        //         return redirect()->route('show.home');
        //     }else if(Auth::user()->role == 0){
        //         return redirect()->route('admin.dashboard');
        //     }else if(Auth::user()->role == 1){
        //         return redirect()->route('head.dashboard');
        //     }
        // }

        // return back()->withErrors([
        //     'email' => 'Invalid credentials',
        // ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return redirect()->route('show.login');
    }
}
