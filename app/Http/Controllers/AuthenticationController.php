<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $page_title = "Login Page";

        return view('Auth.login', ['page_title' => $page_title]);
    }
    public function login_post(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->is_role == "1") {
                return redirect()->intended('admin/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid Credentials');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
    public function forgot(Request $request)
    {
        $page_title = "Forgot Password";
        return view('Auth.forgot', ['page_title' => $page_title]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
