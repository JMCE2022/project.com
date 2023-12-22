<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->user_type == 'Admin') {
            return view('admin.dashboard');
        } else if (Auth::user()->user_type == 'Staff') {
            return view('staff.dashboard');
        }
    }
    
    
    
}
