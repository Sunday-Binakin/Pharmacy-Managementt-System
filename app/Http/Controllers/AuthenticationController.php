<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        // $password = Hash::make('123456789');
        // dd($password);
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
    public function forgot_post(Request $request)
    {
        // dd($request->all());
        $count = User::where('email', "=", $request->email)->count();
        if ($count > 0) {
            $user=User::where("email","=", $request->email)->first();
            $user->remember_token=Str::random(50);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with("success","Password Reset Successful. Please check your SPAM or Junk mail folder");
        } else {
            return redirect()->back()->withInput()->with("error", "Email not Found");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
