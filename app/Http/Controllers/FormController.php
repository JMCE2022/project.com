<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use App\Models\Rehabilitation;
use App\Models\Habit;
use App\Models\Development;
use App\Models\Finder;
use App\Models\Guardian;
use App\Models\Sibling;
use App\Models\Children;
use App\Models\Infofamily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function pic1()
    {
        if (Auth::user()->user_type == 'Admin') {
            $data['Header_title'] = "Forms";
            $data['getRecord'] = Children::getChildren();
            return view("admin.form.pic1", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data['Header_title'] = "Forms";
        $data['getRecord'] = Children::getChildren();
        return view("staff.form.pic1", $data);
        }
        

       
    }
    public function pic2()
    {
        if (Auth::user()->user_type == 'Admin') {
            $data['Header_title'] = "Forms";
        $data['getRecord'] = Children::getChildren();
        return view("admin.form.pic2", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data['Header_title'] = "Forms";
            $data['getRecord'] = Children::getChildren();
            return view("staff.form.pic2", $data);
        }
       
        
    }
    public function pic3A()
    {
        if (Auth::user()->user_type == 'Admin') {
            $data['Header_title'] = "Forms";
            $data['getRecord'] = Children::getChildren();
            return view("admin.form.pic3a", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data['Header_title'] = "Forms";
        $data['getRecord'] = Children::getChildren();
        return view("staff.form.pic3a", $data);
        }
       
       
    }
    public function pic3B()
    {
        if (Auth::user()->user_type == 'Admin') {
            $data['Header_title'] = "Forms";
        $data['getRecord'] = Children::getChildren();
        return view("admin.form.pic3b", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data['Header_title'] = "Forms";
            $data['getRecord'] = Children::getChildren();
            return view("staff.form.pic3b", $data);
        }
        
        
    }
    public function pic4()
    {
        if (Auth::user()->user_type == 'Admin') {
            $data['Header_title'] = "Forms";
        $data['getRecord'] = Children::getChildren();
        return view("admin.form.pic4", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data['Header_title'] = "Forms";
            $data['getRecord'] = Children::getChildren();
            return view("staff.form.pic4", $data);
        }
       
        
    }
}
