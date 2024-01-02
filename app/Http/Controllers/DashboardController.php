<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Children;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $ageCount0 = Children::where('age', '=', 0)->count();
        $ageCount1 = Children::where('age', '>=', 1)->where('age', '<=', 5)->count();
        $ageCount2 = Children::where('age', '>=', 6)->where('age', '<=', 10)->count();
        $ageCount3 = Children::where('age', '>=', 11)->where('age', '<=', 15)->count();
        $ageCount4 = Children::where('age', '>=', 16)->where('age', '<=', 17)->count();
        $ageCount5 = Children::where('age', '>=', 18)->count();

        // Array containing age range labels and corresponding counts
        $ageLabels = ['Unknown','1-5 Years old', '6-10 Years old', '11-15 Years old', '16-17 Years old', '18+ Years old'];
        $ageCounts = [$ageCount0, $ageCount1, $ageCount2, $ageCount3, $ageCount4, $ageCount5];

        $childrenCount = Children::all()->count();
        $maleCount = Children::where('Sex', 'Male')->count();
        $femaleCount = Children::where('Sex', 'Female')->count();
        $dischargedCount = Children::where('is_deleted', '1')->count();


        if (Auth::user()->user_type == 'Admin') {
            return view('admin.dashboard', compact('maleCount', 'femaleCount', 'dischargedCount', 'childrenCount','ageLabels', 'ageCounts'));
        } else if (Auth::user()->user_type == 'Staff') {
            return view('staff.dashboard', compact('maleCount', 'femaleCount', 'dischargedCount', 'childrenCount','ageLabels', 'ageCounts'));
        }
    }



}
