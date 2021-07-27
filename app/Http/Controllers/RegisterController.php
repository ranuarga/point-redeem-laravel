<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PointHistory;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }
    
    public function index(){
        return view('member.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'email|required|unique:users,user_email',
            'user_password' => 'required',
            'confirm_password' => 'required|same:user_password'
        ]);

        $user = User::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_password' => Hash::make($request->user_password),
            'user_point' => 15
        ]);

        $user->point_history()->create(['activity_id' => 1]);

        return redirect('/')->with('success', 'Account Created');
    }
}
