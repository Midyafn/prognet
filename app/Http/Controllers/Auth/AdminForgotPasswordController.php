<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Password;

class AdminForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    // construct login
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    // To view admin email page
    public function showLinkRequest()
    {
        return view('auth.password.admin-email');
    }

    // Password broker
    public function broker()
    {
        return Password::broker('admins');
    }
}
