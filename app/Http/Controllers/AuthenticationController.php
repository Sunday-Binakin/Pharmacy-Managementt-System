<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        return view('Auth.login');
    }
    public function forgot(Request $request)
    {
        return view('Auth.forgot');
    }
}
