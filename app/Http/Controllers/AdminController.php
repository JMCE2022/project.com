<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function listarchive(Request $request)
    {
        // Initial data
        $data = [
            'Header_title' => "Admin List",
        ];

        // Get data using the User model method
        $query = User::getArchive();

        // Get the search input from the request
        $search = $request->input('search');

        // Use Eloquent to filter data based on the search input
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('firstname', 'LIKE', "%$search%")
                    ->orWhere('lastname', 'LIKE', "%$search%")
                    ->orWhere('user_type', 'LIKE', "%$search%")
                    ->orWhere('username', 'LIKE', "%$search%");
            });
        }

        // Paginate the results
        $data['getRecord'] = $query->orderBy('id', 'asc')->paginate(10);

        // Pass data to the view
        return view("admin.users.listarchive", $data);
    }


    public function listUsers(Request $request)
    {
        // Initial data
        $data = [
            'Header_title' => "Admin List",
        ];

        // Get data using the User model method
        $query = User::getAdmin();

        // Get the search input from the request
        $search = $request->input('search');

        // Use Eloquent to filter data based on the search input
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->whereRaw("CONCAT(firstname, ' ', lastname) LIKE ?", ["%$search%"])
                    ->orWhere('lastname', 'LIKE', "%$search%")
                    ->orWhere('user_type', 'LIKE', "%$search%")
                    ->orWhere('username', 'LIKE', "%$search%");
            });
        }

        // Paginate the results
        $data['getRecord'] = $query->orderBy('id', 'asc')->paginate(10);

        // Pass data to the view
        return view("admin.users.listusers", $data);
    }

    public function addusers()
    {
        $data['Header_title'] = "Add Users";
        return view("admin.users.addusers", $data);
    }

    public function add(Request $request)
    {
        $user = new User;
        $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
                'alpha_dash', // Allow only alphanumeric characters, dashes, and underscores
                Rule::unique('users', 'username')->ignore($user->id), // Check uniqueness except for the current user
            ],
        ]);


        $user->firstname = trim($request->firstname);
        $user->lastname = trim($request->lastname);
        $user->user_type = trim($request->user_type);
        $user->username = trim($request->username);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('Admin/Listusers')->with('success', 'Users successfully created');
    }
    public function edit($id)
    {


        $data['getRecord'] = User::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['Header_title'] = "Edit Users";
            return view("admin.users.editusers", $data);
        } else {
            abort(404);
        }
    }
    public function update($id, Request $request)
    {

        $user = User::getSingle($id);
        $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
                'alpha_dash', // Allow only alphanumeric characters, dashes, and underscores
                Rule::unique('users', 'username')->ignore($user->id), // Check uniqueness except for the current user
            ],
        ]);



        $user->firstname = trim($request->firstname);
        $user->lastname = trim($request->lastname);
        $user->user_type = trim($request->user_type);
        $user->username = trim($request->username);
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect('Admin/Listusers')->with('success', 'Users successfully updated');
    }

    public function archived($id)
    {
        $user = User::getSingle($id);
        $user->is_deleted = 1;
        $user->save();

        return redirect('Admin/Listusers')->with('success', 'Users successfully archived');
    }

    public function archive($id)
    {
        $user = User::getSingle($id);
        $user->is_deleted = 0;
        $user->save();

        return redirect('Admin/Listarchive')->with('success', 'Users successfully restore');
    }
    public function deletePermanent($id)
    {
        // Find the user by ID
        $user = User::getSingle($id);

        if (!$user) {
            // Handle case where user is not found
            // You may want to redirect or display an error message
        }

        // Perform the permanent deletion
        $user->forceDelete();

        // Redirect or return a response as needed
        return redirect('Admin/Listarchive')->with('success', 'Users successfully Deleted');
    }



}
