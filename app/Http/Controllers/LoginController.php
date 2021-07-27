<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'adminLogout']);
        $this->middleware('guest:admin')->except('adminLogout');
        $this->middleware('guest:member')->except('logout');
    }

    public function showLoginForm()
    {
        return view('member.login');
    }

    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_email' => 'email|required',
            'user_password' => 'required'
        ]);

        if (Auth::guard('member')->attempt(['user_email' => $request->user_email, 'password' => $request->user_password])) {
            return redirect('/');
        } else {
            return redirect('login')->with('error', 'Email or Password are incorrect.');
        }
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'admin_email' => 'email|required',
            'admin_password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['admin_email' => $request->admin_email, 'password' => $request->admin_password])) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/admin/login')->with('error', 'Email or Password are incorrect.');
        }
    }

    public function adminLogout(Request $request)
    {
        if (Auth::guard('admin')->check()) 
        {
            Auth::guard('admin')->logout();
            return redirect('admin/login');
        }else{
            return redirect('admin/login');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('member')->check()) 
        {
            Auth::guard('member')->logout();
            return redirect('/');
        }else{
            return redirect('login');
        }
    }

}
