<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Children;
class DashboardController extends Controller
{
    public function dashboard()
    {
        $childrenCount = Children::all()->count();
        $maleCount = Children::where('Sex', 'Male')->count();
    $femaleCount = Children::where('Sex', 'Female')->count();
    $dischargedCount = Children::where('is_deleted', '1')->count();
   

        if (Auth::user()->user_type == 'Admin') {
            return view('admin.dashboard',compact('maleCount', 'femaleCount','dischargedCount','childrenCount'));
        } else if (Auth::user()->user_type == 'Staff') {
            return view('staff.dashboard',compact('maleCount', 'femaleCount','dischargedCount','childrenCount'));
        }
    }
    
    
    
}
