<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    // Construct Login
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    // To Regist Form View
    public function showRegistrationForm()
    {
        return view('auth.admin-register');
    }

    // Register Function
    public function register(Request $request)
    {
        // Validate data
        $this->validate($request, 
            [
                'name' => 'required|string|max:50',
                'username' => 'required|string|max:50|unique:admins',
                'password' => 'required|string|min:8',
                'phone' => 'required|string',
                'profile_image' =>'required|string'
            ]
        );

        // Create Admin
        try
        {
            $admin = Admin::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'profile_image' => $request->profile_image
            ]);

            // Login admin
            Auth::guard('admin')->loginUsingId($admin->id);
            return redirect()->route('admin.dashboard');

        }catch(\Exeception $e)
        {
            return redirect()->back()->withInput($request->only('name', 'username'));
        }
    }
}
