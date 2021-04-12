<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // Construct Login
    public function __construct()
    {
        @$this->middleware('guest:admin')->except('logout');
    }


    // To Login Form View
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    // Login
    public function login(Request $request)
    {
        // validate form data
        $this->validate($request,
            [
                'username' => 'required|string',
                'password' => 'required|string'
            ]
        );

        // Attempt login as admin
        if (Auth::guard('admin')->attempt($request->only('username','password'),$request->filled('remember'))) {
            // succes redirect to intended or admin dashboard
            return redirect()->intended(route('admin.dashboard'));
        }

        // unsucces redirect to login
        return redirect()->back()->withInput($request->only('username', 'remember'));
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
