<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $page_title = "Login Page";
        return view('Auth.login',['page_title'=>$page_title]);
    }
    public function forgot(Request $request)
    {
        $page_title = "Forgot Password";
        return view('Auth.forgot',['page_title'=>$page_title]);
    }
}
