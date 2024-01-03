<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Region;
use App\Models\Province;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GeneralController extends Controller
{
    //
    public function myaccount()
    {
        $data['getRecord'] = User::getSingle(Auth::user()->id);
        $data['regions'] = Region::get(["name", "id"]);
        

        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.myprofile.myaccount'
            : 'staff.myprofile.myaccount';
    
        return view($viewPath, $data);

    }
    public function getProvince(Request $request)
    {
        $data['provinces'] = Province::where("region_id",$request->region_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("province_id",$request->province_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    public function updateMyAccount(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'firstname' => 'required|string|max:30',
            'lastname' => 'required|string|max:30',
            'user_type' => 'nullable|string|max:5',
            'username' => 'required|string|max:30|unique:users,username,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100',
            'middle_initial' => 'nullable|string|max:1',
            
            
             // Adjust mime types and max size as needed
        ]);

        if (Auth::user()->user_type == 'Admin') {
            // ... Existing code ...
            $admin = User::getSingle($id);
        $admin->firstname = trim($request->firstname);
        $admin->lastname = trim($request->lastname);
        $admin->user_type = trim($request->user_type);
        $admin->username = trim($request->username);
        $admin->middle_initial = trim($request->middle_initial);
        $admin->suffix = trim($request->suffix);
        $admin->sex = trim($request->sex);
        $admin->place_of_birth = trim($request->place_of_birth);
        $admin->date_of_birth = $request->input('date_of_birth') ? trim($request->input('date_of_birth')) : null;
        $admin->religion = trim($request->religion);
        $admin->age = $request->has('age') ? (int) $request->input('age') : null;
        $admin->civil_status = trim($request->civil_status);
        $admin->height = trim($request->height);
        $admin->weight = trim($request->weight);
        $admin->phone_number = trim($request->phone_number);
        $admin->email_address = trim($request->email_address);
        $admin->region = trim($request->region);
        $admin->province = trim($request->province);
        $admin->city = trim($request->city);
        $admin->barangay = trim($request->barangay);
        $admin->street_address = trim($request->street_address);
        $admin->zip_code = trim($request->zip_code);

        if (!empty($request->password)) {
            $admin->password = Hash::make($request->password);
        }

        if (!empty($request->file('profile_pic'))) {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('public/accountprofile/', $filename);

            $admin->profile_pic = $filename;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Account successfully updated');
        } else if (Auth::user()->user_type == 'Staff') {
            // ... Existing code ...
            $admin = User::getSingle($id);
        $admin->firstname = trim($request->firstname);
        $admin->lastname = trim($request->lastname);
       
        $admin->username = trim($request->username);
        $admin->middle_initial = trim($request->middle_initial);
        $admin->suffix = trim($request->suffix);
        $admin->sex = trim($request->sex);
        $admin->place_of_birth = trim($request->place_of_birth);
        $admin->date_of_birth = $request->input('date_of_birth') ? trim($request->input('date_of_birth')) : null;
        $admin->religion = trim($request->religion);
        $admin->age = $request->has('age') ? (int) $request->input('age') : null;
        $admin->civil_status = trim($request->civil_status);
        $admin->height = trim($request->height);
        $admin->weight = trim($request->weight);
        $admin->phone_number = trim($request->phone_number);
        $admin->email_address = trim($request->email_address);
        $admin->region = trim($request->region);
        $admin->province = trim($request->province);
        $admin->city = trim($request->city);
        $admin->barangay = trim($request->barangay);
        $admin->street_address = trim($request->street_address);
        $admin->zip_code = trim($request->zip_code);

        if (!empty($request->password)) {
            $admin->password = Hash::make($request->password);
        }

        if (!empty($request->file('profile_pic'))) {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('public/accountprofile/', $filename);

            $admin->profile_pic = $filename;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Account successfully updated');
        }

       
    }

}
