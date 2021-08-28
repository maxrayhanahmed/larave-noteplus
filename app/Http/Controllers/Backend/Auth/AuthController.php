<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function loginForm(){
        return view('backend.auth.login');
    }

    public function registerForm(){
        return view('backend.auth.register');
    }


    public function forgotPassword(){
        return view('backend.auth.forgot-password');
    }

    public function resetPassword($token){
        return view('backend.auth.reset-password',['token' => $token]);
    }

}
