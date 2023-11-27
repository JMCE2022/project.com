<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginDashboardController extends Controller
{
   public function login(){
    if(!empty(Auth::check())){
        if(Auth::user()->user_type == 'Admin'){
            return redirect('admin/dashboard');
        }else if (Auth::user()->user_type == 'Staff'){
            return redirect('staff/dashboard');
        }
    }
    return view('auth.login');
   }
   public function AuthLogin(Request $request){
    if(Auth::attempt(['username' => $request->username, 'password' => $request->password], true)){

        if(Auth::user()->user_type == 'Admin'){
            return redirect('admin/dashboard');
        }else if (Auth::user()->user_type == 'Staff'){
            return redirect('staff/dashboard');
        }
        
    }else{
        return redirect()->back()->with('error','Please input the correct username and password');
    }
}
    public function logoutButton(){
        Auth::logout();
        return redirect(url(''));
    }
   
}
