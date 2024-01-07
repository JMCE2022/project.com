<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginDashboardController extends Controller
{
    public function login(Request $request)
    {
        // Check if the user has already agreed to data privacy terms
        if (!$request->session()->get('privacy_agreement')) {
            return view('auth.login');
        }

        if (!empty(Auth::check())) {
            if (Auth::user()->user_type == 'Admin') {
                return redirect('Admin/Dashboard');
            } elseif (Auth::user()->user_type == 'Staff') {
                return redirect('Staff/Dashboard');
            }
        }

        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        // Check if the user has agreed to data privacy terms
       

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
            'is_deleted' => 0, // Assuming 0 means not deleted
        ];

        if (Auth::attempt($credentials, true)) {
            if (Auth::user()->user_type == 'Admin') {
                return redirect('Admin/Dashboard');
            } elseif (Auth::user()->user_type == 'Staff') {
                return redirect('Staff/Dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Please input the correct username and password');
        }
    }

    public function logoutButton()
    {
        Auth::logout();
        return redirect(url(''));
    }
}


