<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
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
        return view('auth.forgot', ['page_title' => $page_title]);
    }
    public function forgot_post(Request $request)
    {
        // dd($request->all());
        $count = User::where('email', "=", $request->email)->count();
        if ($count > 0) {
            $user = User::where("email", "=", $request->email)->first();
            $user->remember_token = Str::random(60);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with("success", "Password Reset Successful. Please check your SPAM or Junk mail folder");
        } else {
            return redirect()->back()->withInput()->with("error", "Email not Found");
        }
    }

    public function getReset($token)
    {
        //dd($token);
        $page_title = 'reset password';
        if (Auth::check()) {
            return redirect('admin/dashboard');
        }
        $user = User::where('remember_token', '=', $token);
        if ($user->count() == 0) {
            abort(403);
        }
        $user = $user->first();
        $data['token'] = $token;
        return view('auth.reset', $data)->with('page_title', $page_title);;

    }
    // public function postReset($token, ResetPasswordRequest $request)
    // {
    //     $page_title = 'reset password';
    //     $user = User::where('remember_token', $token);
    //     // if ($user->count() == 0) {
    //     //     abort(403);
    //     // }
    //     if (!$user) {
    //         abort(403);
    //     }
    //     //$user = $user->first();
    //     $user->password = Hash::make($request->password);
    //     $user->remember_token = Str::random(60);

    //     $user->save();

    //     return redirect('/')->with('success', 'Password reset Successfully')->with('page_title', $page_title);
    // }
    public function postReset($token, ResetPasswordRequest $request)
{
    $page_title = 'reset password';

    // Correctly execute the query to find the user
    $user = User::where('remember_token', $token)->first();

    if (!$user) {
        abort(403);
    }

    // Update the user's password and remember token
    $user->password = Hash::make($request->password);
    $user->remember_token = Str::random(60);

    $user->save();

    return redirect('/')->with('success', 'Password reset Successfully')->with('page_title', $page_title);
}

    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
}
