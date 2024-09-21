<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
    }

    public function logout()
    {
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
    }

    public function changePassword()
    {
        return view('auth.change-password');
    }

    public function postChangePassword(Request $request)
    {
    }

    public function verifyEmail($token)
    {
    }
}
