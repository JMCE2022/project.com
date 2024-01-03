<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Children;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $ageCount0 = Children::where('sex', '=', 'Male')->where('age', '=', 0)->count();
        $ageCount1 = Children::where('sex', '=', 'Male')->where('age', '>=', 1)->where('age', '<=', 5)->count();
        $ageCount2 = Children::where('sex', '=', 'Male')->where('age', '>=', 6)->where('age', '<=', 10)->count();
        $ageCount3 = Children::where('sex', '=', 'Male')->where('age', '>=', 11)->where('age', '<=', 15)->count();
        $ageCount4 = Children::where('sex', '=', 'Male')->where('age', '>=', 16)->where('age', '<=', 17)->count();
        $ageCount5 = Children::where('sex', '=', 'Male')->where('age', '>=', 18)->count();

        // Array containing age range labels and corresponding counts
        $ageLabels = ['Unknown', '1-5 Years old', '6-10 Years old', '11-15 Years old', '16-17 Years old', '18+ Years old'];
        $ageCounts = [$ageCount0, $ageCount1, $ageCount2, $ageCount3, $ageCount4, $ageCount5];

        $ageCount00 = Children::where('sex', '=', 'Female')->where('age', '=', 0)->count();
        $ageCount11 = Children::where('sex', '=', 'Female')->where('age', '>=', 1)->where('age', '<=', 5)->count();
        $ageCount22 = Children::where('sex', '=', 'Female')->where('age', '>=', 6)->where('age', '<=', 10)->count();
        $ageCount33 = Children::where('sex', '=', 'Female')->where('age', '>=', 11)->where('age', '<=', 15)->count();
        $ageCount44 = Children::where('sex', '=', 'Female')->where('age', '>=', 16)->where('age', '<=', 17)->count();
        $ageCount55 = Children::where('sex', '=', 'Female')->where('age', '>=', 18)->count();

        $ageLabelsFemale = ['Unknown', '1-5 Years old', '6-10 Years old', '11-15 Years old', '16-17 Years old', '18+ Years old'];
        $ageCountsFemale = [$ageCount00, $ageCount11, $ageCount22, $ageCount33, $ageCount44, $ageCount55];

        
        $dischargeCount11 = Children::where('is_deleted', '=', 1)->where('sex', '=', 'Male')->count();
        $dischargeCount22 = Children::where('is_deleted', '=', 1)->where('sex', '=', 'Female')->count();
       
        $dischargeLabels = ['Male', 'Female'];
        $dischargeCounts = [$dischargeCount11, $dischargeCount22];

        $clientCount11 = Children::all()->where('sex', '=', 'Male')->count();
        $clientCount22 = Children::all()->where('sex', '=', 'Female')->count();
       
        $clientLabels = ['Male', 'Female'];
        $clientCounts = [$clientCount11, $clientCount22];

        $childrenCount = Children::all()->count();
        $maleCount = Children::where('Sex', 'Male')->count();
        $femaleCount = Children::where('Sex', 'Female')->count();
        $dischargedCount = Children::where('is_deleted', '1')->count();

 
        if (Auth::user()->user_type == 'Admin') {
            return view('admin.dashboard', compact('maleCount', 'femaleCount', 'dischargedCount', 'childrenCount', 'ageLabels', 'ageCounts', 'ageLabelsFemale', 'ageCountsFemale', 'dischargeLabels', 'dischargeCounts','clientLabels','clientCounts'));
        } else if (Auth::user()->user_type == 'Staff') {
            return view('staff.dashboard', compact('maleCount', 'femaleCount', 'dischargedCount', 'childrenCount', 'ageLabels', 'ageCounts', 'ageLabelsFemale', 'ageCountsFemale', 'dischargeLabels', 'dischargeCounts','clientLabels','clientCounts'));
        }
    }



}
