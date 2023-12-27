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
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ChildrenController extends Controller
{

    public function listChildrens(Request $request)
    {
        if (Auth::user()->user_type == 'Admin') {
            $data = [
                'Header_title' => "Admin List",
            ];

            // Get data using the User model method
            $query = Children::getChildren();

            // Get the search input from the request
            $search = $request->input('search');

            // Use Eloquent to filter data based on the search input
            if ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('full_name', 'LIKE', "%$search%")
                        ->orWhere('id', 'LIKE', "%$search%")
                        ->orWhere('created_by', 'LIKE', "%$search%");
                });
            }

            // Paginate the results
            $data['getRecord'] = $query->orderBy('id', 'desc')->paginate(10);

            // Pass data to the view
            return view("admin.childrens.listchildrens", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data = [
                'Header_title' => "Admin List",
            ];

            // Get data using the User model method
            $query = Children::getChildren();

            // Get the search input from the request
            $search = $request->input('search');

            // Use Eloquent to filter data based on the search input
            if ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('full_name', 'LIKE', "%$search%")
                        ->orWhere('id', 'LIKE', "%$search%")
                        ->orWhere('created_by', 'LIKE', "%$search%");
                });
            }

            // Paginate the results
            $data['getRecord'] = $query->orderBy('id', 'desc')->paginate(10);

            // Pass data to the view
            return view("staff.childrens.listchildrens", $data);
        }

        // Initial data

    }

    public function addChildrens()
    {
        if (Auth::user()->user_type == 'Admin') {
            $data['Header_title'] = "Add Users";
            return view("admin.childrens.add.addchildrens", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data['Header_title'] = "Add Users";
            return view("staff.childrens.add.addchildrens", $data);
        }


    }

    public function add(Request $request)
    {
       
            $user = new Children;
            $request->validate([
                'full_name' => [
                    'required',
                    'string',
                    'max:255', // Check uniqueness except for the current user
                ],
            ]);


            $user->full_name = trim($request->full_name);
            $user->sex = trim($request->sex);
            $user->age = trim($request->age);
            $user->religion = trim($request->religion);
            $user->date_of_birth = trim($request->date_of_birth);
            $user->place_of_birth = trim($request->place_of_birth);
            $user->educational_attainment = trim($request->educational_attainment);
            $user->region = trim($request->region);
            $user->province = trim($request->province);
            $user->city = trim($request->city);
            $user->barangay = trim($request->barangay);
            $user->street_address = trim($request->street_address);
            $user->present_health_condition = trim($request->present_health_condition);
            $user->physical_characteristic = trim($request->physical_characteristic);
            $user->initial_assessment = trim($request->initial_assessment);
            $user->created_by = Auth::user()->firstname . ' ' . Auth::user()->lastname;
            $user->save();


            return redirect()->back()->with('success', 'Users successfully created');
     

    }

    public function edit($id)
    {
       
            $data['getRecord'] = Children::getSingle($id);

            if (!empty($data['getRecord'])) {
                // Retrieve siblings related to the child
                $data['siblings'] = $data['getRecord']->sibling;

                $data['Header_title'] = "Edit Children";
                return view("admin.childrens.editchildrens", $data);
            } else {
                abort(404);
            }

        



    }

    public function update($id, Request $request)
    {
       
            $user = Children::getSingle($id);
            $request->validate([
                'full_name' => [
                    'required',
                    'string',
                    'max:255', // Check uniqueness except for the current user
                ],
            ]);



            $user->full_name = trim($request->full_name);
            $user->sex = trim($request->sex);
            $user->age = trim($request->age);
            $user->religion = trim($request->religion);
            $user->date_of_birth = trim($request->date_of_birth);
            $user->place_of_birth = trim($request->place_of_birth);
            $user->educational_attainment = trim($request->educational_attainment);
            $user->region = trim($request->region);
            $user->province = trim($request->province);
            $user->city = trim($request->city);
            $user->barangay = trim($request->barangay);
            $user->street_address = trim($request->street_address);
            $user->present_health_condition = trim($request->present_health_condition);
            $user->physical_characteristic = trim($request->physical_characteristic);
            $user->initial_assessment = trim($request->initial_assessment);
            $user->save();

            if ($user->infofamily) {
                $user->infofamily->infofamily_name_of_father = trim($request->infofamily_name_of_father);
                $user->infofamily->infofamily_name_of_mother = trim($request->infofamily_name_of_mother);
                $user->infofamily->infofamily_age_of_father = trim($request->infofamily_age_of_father);
                $user->infofamily->infofamily_age_of_mother = trim($request->infofamily_age_of_mother);
                $user->infofamily->infofamily_address = trim($request->infofamily_address);
                $user->infofamily->infofamily_occupation = trim($request->infofamily_occupation);
                $user->infofamily->infofamily_occupation_mother = trim($request->infofamily_occupation_mother);
                $user->infofamily->save();
            }
            if ($user->sibling) {
                $siblings = $user->sibling;

                // Loop through each sibling and update
                foreach ($siblings as $sibling) {
                    $siblingId = $sibling->id;

                    if (isset($request->sibling_fullname[$siblingId])) {
                        $sibling->update([
                            'sibling_fullname' => trim($request->sibling_fullname[$siblingId]),
                            'sibling_age' => trim($request->sibling_age[$siblingId]),
                            'sibling_sex' => trim($request->sibling_sex[$siblingId]),
                            'sibling_date_of_birth' => trim($request->sibling_date_of_birth[$siblingId]),
                            'sibling_educational_attainment' => trim($request->sibling_educational_attainment[$siblingId]),
                            'sibling_relationship' => trim($request->sibling_relationship[$siblingId]),
                        ]);
                    }
                }
            }

            if ($user->guardian) {
                $user->guardian->guardian_name = trim($request->guardian_name);
                $user->guardian->guardian_age = trim($request->guardian_age);
                $user->guardian->guardian_sex = trim($request->guardian_sex);
                $user->guardian->guardian_occupation = trim($request->guardian_occupation);
                $user->guardian->guardian_circumstances_of_guardian = trim($request->guardian_circumstances_of_guardian);
                $user->guardian->guardian_economic_situation_of_the_family = trim($request->guardian_economic_situation_of_the_family);

            }
            if ($user->finder) {
                $user->finder->finder_fullname = trim($request->finder_fullname);
                $user->finder->finder_age = trim($request->finder_age);
                $user->finder->finder_sex = trim($request->finder_sex);
                $user->finder->finder_occupation = trim($request->finder_occupation);
                $user->finder->finder_civil_status = trim($request->finder_civil_status);
                $user->finder->finder_relationship = trim($request->finder_relationship);
                $user->finder->finder_others = trim($request->others);
                $user->finder->finder_problem_presented = trim($request->finder_problem_presented);
                $user->finder->finder_background_information = trim($request->finder_background_information);
            }
            if ($user->development) {

                $user->development->development_birth_history = trim($request->development_birth_history);
                $user->development->development_birth_weight = trim($request->development_birth_weight);
                $user->development->development_birth_height = trim($request->development_birth_height);
                $user->development->development_describe_abnormalities = trim($request->development_describe_abnormalities);
            }
            if ($user->habit) {
                $user->habit->habit_bedwetting = trim($request->habit_bedwetting);
                $user->habit->habit_thumb_sucking = trim($request->habit_thumb_sucking);
                $user->habit->habit_nail_biting = trim($request->habit_nail_biting);
                $user->habit->habit_others = trim($request->habit_others);
                $user->habit->habit_measles = trim($request->habit_measles);
                $user->habit->habit_chickenpox = trim($request->habit_chickenpox);
                $user->habit->habit_mumps = trim($request->habit_mumps);
                $user->habit->habit_allergy = trim($request->habit_allergy);
                $user->habit->habit_convulsions = trim($request->habit_convulsions);
                $user->habit->habit_primary_complex = trim($request->habit_primary_complex);
                $user->habit->habit_other_specify = trim($request->habit_other_specify);
                $user->habit->habit_motor_development = trim($request->habit_motor_development);
                $user->habit->habit_toilet_training = trim($request->habit_toilet_training);
            }
            if ($user->rehabilitation) {
                $user->rehabilitation->rehabilitation_restore_develop = trim($request->rehabilitation_restore_develop);
                $user->rehabilitation->rehabilitation_improve = trim($request->rehabilitation_improve);
                $user->rehabilitation->rehabilitation_reintegrate = trim($request->rehabilitation_reintegrate);
                $user->rehabilitation->rehabilitation_placed = trim($request->rehabilitation_placed);
                $user->rehabilitation->rehabilitation_refer = trim($request->rehabilitation_refer);
                $user->rehabilitation->rehabilitation_transfer = trim($request->rehabilitation_transfer);
            }
            if ($user->recommendation) {
                $user->recommendation->recommendation_recommendation = trim($request->recommendation_recommendation);
                $user->recommendation->recommendation_plan_of_action = trim($request->recommendation_plan_of_action);
                $user->recommendation->recommendation_action_taken = trim($request->recommendation_action_taken);

            }
            return redirect()->back()->with('success', 'Children Profile successfully updated');
        
        





    }
    public function childrenlistarchive(Request $request)
    {
        if (Auth::user()->user_type == 'Admin') {
            $data = [
                'Header_title' => "Admin List",
            ];

            // Get data using the User model method
            $query = Children::getArchive();

            // Get the search input from the request
            $search = $request->input('search');

            // Use Eloquent to filter data based on the search input
            if ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('full_name', 'LIKE', "%$search%")
                        ->orWhere('id', 'LIKE', "%$search%")
                        ->orWhere('created_by', 'LIKE', "%$search%");
                });
            }

            // Paginate the results
            $data['getRecord'] = $query->orderBy('id', 'desc')->paginate(10);

            // Pass data to the view
            return view("admin.childrens.listarchive", $data);
        } else if (Auth::user()->user_type == 'Staff') {
            $data = [
                'Header_title' => "Admin List",
            ];

            // Get data using the User model method
            $query = Children::getArchive();

            // Get the search input from the request
            $search = $request->input('search');

            // Use Eloquent to filter data based on the search input
            if ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('full_name', 'LIKE', "%$search%")
                        ->orWhere('id', 'LIKE', "%$search%")
                        ->orWhere('created_by', 'LIKE', "%$search%");
                });
            }
            

            // Paginate the results
            $data['getRecord'] = $query->orderBy('id', 'desc')->paginate(10);

            // Pass data to the view
            return view("staff.childrens.listarchive", $data);
        }

        // Initial data

    }

    public function archived($id)
    {
        $user = Children::getSingle($id);
        $user->is_deleted = 1;
        $user->save();

        return redirect()->back()->with('success', 'Users successfully add to Archived');
    }
    public function archive($id)
    {
        $user = Children::getSingle($id);
        $user->is_deleted = 0;
        $user->save();

        return redirect()->back()->with('success', 'Users successfully restore');
    }
    public function deletePermanentChildren($id)
    {
        // Find the user by ID
        $user = Children::getSingle($id);

        if (!$user) {
            // Handle case where user is not found
            // You may want to redirect or display an error message
        }

        // Perform the permanent deletion
        $user->forceDelete();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Users successfully Deleted');
    }
    public function preview($id)
    {
        if (Auth::user()->user_type == 'Admin') {
            $data['getRecord'] = Children::getSingle($id);

            if (!empty($data['getRecord'])) {
                // Retrieve siblings related to the child
                $data['siblings'] = $data['getRecord']->sibling;

                $data['Header_title'] = "Edit Users";
                return view("admin.childrens.preview", $data);
            } else {
                abort(404);
            }
        } else if (Auth::user()->user_type == 'Staff') {
            $data['getRecord'] = Children::getSingle($id);

            if (!empty($data['getRecord'])) {
                // Retrieve siblings related to the child
                $data['siblings'] = $data['getRecord']->sibling;

                $data['Header_title'] = "Edit Users";
                return view("staff.childrens.preview", $data);
            } else {
                abort(404);
            }
        }


    }
   


    public function Addsiblings()
    {
        $data['Header_title'] = "Add Siblings";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.addsiblings'
            : 'staff.childrens.add.addsiblings';
    
        
            return view($viewPath, $data);


    }
    public function addInfofamilies()
    {
        $data['Header_title'] = "Add Family";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.addinfofamilies'
            : 'staff.childrens.add.addinfofamilies';
    
        // Add this line for debugging
        return view($viewPath, $data);
    }
    

public function Infofamilies(Request $request)
{
    try {
        $request->validate([
            'children_id' => 'required|integer',
            // Add other validation rules if needed
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);

        // Log the incoming request data for debugging
        Log::info('Request Data:', $request->all());

        // Check if the record with the specified children_id already exists
        $existingInfofamily = Infofamily::where('children_id', $request->input('children_id'))->first();

        if ($existingInfofamily) {
            return redirect()->back()->with('error', 'Family for this child already exists');
        }

        // If the record doesn't exist, proceed to create and save a new record
        $user = new Infofamily;
        $user->infofamily_name_of_father = trim($request->infofamily_name_of_father);
        $user->infofamily_name_of_mother = trim($request->infofamily_name_of_mother);
        $user->infofamily_age_of_father = trim($request->infofamily_age_of_father);
        $user->infofamily_age_of_mother = trim($request->infofamily_age_of_mother);
        $user->infofamily_address = trim($request->infofamily_address);
        $user->infofamily_occupation = trim($request->infofamily_occupation);
        $user->infofamily_occupation_mother = trim($request->infofamily_occupation_mother);

        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);

            if ($children) {
                $user->children()->associate($children);
            } else {
                // Log the error and handle the case where the child with the specified ID is not found
                Log::error('Child not found for ID: ' . $childrenId);
                return redirect()->back()->with('error', 'Child not found');
            }
        }

        $user->save();

        return redirect()->back()->with('success', 'Family successfully added');
    } catch (\Exception $e) {
        // Log any exceptions for debugging
        Log::error('Error in Infofamilies method: ' . $e->getMessage());

        // Handle the exception as needed
        return redirect()->back()->with('error', 'An error occurred. Please try again.');
    }
}


    public function siblings(request $request)
    {
        $user = new Sibling;
        //dd($request->all());
        $request->validate([
            'children_id' => 'required|integer', // Add any other validation rules you need
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);


        $user->sibling_fullname = trim($request->sibling_fullname);
        $user->sibling_age = trim($request->sibling_age);
        $user->sibling_sex = trim($request->sibling_sex);
        $user->sibling_date_of_birth = trim($request->sibling_date_of_birth);
        $user->sibling_educational_attainment = trim($request->sibling_educational_attainment);
        $user->sibling_relationship = trim($request->sibling_relationship);
        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);
            $user->children()->associate($children);
        }

        $user->save();

        return redirect()->back()->with('success', 'Siblings successfully added');
    }

    public function Addguardians()
    {
       
        $data['Header_title'] = "Add Guardians";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.addguardians'
            : 'staff.childrens.add.addguardians';
    
        // Add this line for debugging
        return view($viewPath, $data);
        
       



    }

    public function guardians(request $request)
    {

        $user = new Guardian;
        //dd($request->all());
        $request->validate([
            'children_id' => 'required|integer', // Add any other validation rules you need
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);

        $existingGuardian = Guardian::where('children_id', $request->input('children_id'))->first();

        if ($existingGuardian) {
            return redirect()->back()->with('error', 'Family for this child already exists');
        }

        $user->guardian_name = trim($request->guardian_name);
        $user->guardian_age = trim($request->guardian_age);
        $user->guardian_sex = trim($request->guardian_sex);
        $user->guardian_occupation = trim($request->guardian_occupation);
        $user->guardian_circumstances_of_guardian = trim($request->guardian_circumstances_of_guardian);
        $user->guardian_economic_situation_of_the_family = trim($request->guardian_economic_situation_of_the_family);
        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);
            $user->children()->associate($children);
        }

        $user->save();

        return redirect()->back()->with('success', 'Guardians successfully added');
    }
    public function Addfinders()
    {
        $data['Header_title'] = "Add Finders";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.addfinders'
            : 'staff.childrens.add.addfinders';
    
        // Add this line for debugging
        return view($viewPath, $data);
       
       




    }

    public function finders(request $request)
    {
        $user = new Finder;
        //dd($request->all());
        $request->validate([
            'children_id' => 'required|integer', // Add any other validation rules you need
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);

        $existingFinder = Finder::where('children_id', $request->input('children_id'))->first();

        if ($existingFinder) {
            return redirect()->back()->with('error', 'Family for this child already exists');
        }

        $user->finder_fullname = trim($request->finder_fullname);
        $user->finder_age = trim($request->finder_age);
        $user->finder_sex = trim($request->finder_sex);
        $user->finder_occupation = trim($request->finder_occupation);
        $user->finder_civil_status = trim($request->finder_civil_status);
        $user->finder_relationship = trim($request->finder_relationship);
        $user->finder_others = trim($request->others);
        $user->finder_problem_presented = trim($request->finder_problem_presented);
        $user->finder_background_information = trim($request->finder_background_information);
        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);
            $user->children()->associate($children);
        }

        $user->save();

        return redirect()->back()->with('success', 'Finders successfully added');
    }
    public function Adddevelopments()
    {
        $data['Header_title'] = "Add Developments";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.adddevelopments'
            : 'staff.childrens.add.adddevelopments';
    
        // Add this line for debugging
        return view($viewPath, $data);
       




    }

    public function developments(request $request)
    {
        $user = new Development;
        //dd($request->all());
        $request->validate([
            'children_id' => 'required|integer', // Add any other validation rules you need
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);

        $existingDevelopment = Development::where('children_id', $request->input('children_id'))->first();

        if ($existingDevelopment) {
            return redirect()->back()->with('error', 'Family for this child already exists');
        }

        $user->development_birth_history = trim($request->development_birth_history);
        $user->development_birth_weight = trim($request->development_birth_weight);
        $user->development_birth_height = trim($request->development_birth_height);
        $user->development_describe_abnormalities = trim($request->development_describe_abnormalities);

        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);
            $user->children()->associate($children);
        }

        $user->save();

        return redirect()->back()->with('success', 'Developmental History successfully added');
    }
    public function Addhabits()
    {
        $data['Header_title'] = "Add Habits";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.addhabits'
            : 'staff.childrens.add.addhabits';
    
        // Add this line for debugging
        return view($viewPath, $data);
       
       
    




    }

    public function habits(request $request)
    {
        $user = new Habit;
        //dd($request->all());
        $request->validate([
            'children_id' => 'required|integer', // Add any other validation rules you need
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);

        $existingHabit = Habit::where('children_id', $request->input('children_id'))->first();

        if ($existingHabit) {
            return redirect()->back()->with('error', 'Family for this child already exists');
        }

        $user->habit_bedwetting = trim($request->habit_bedwetting);
        $user->habit_thumb_sucking = trim($request->habit_thumb_sucking);
        $user->habit_nail_biting = trim($request->habit_nail_biting);
        $user->habit_others = trim($request->habit_others);
        $user->habit_measles = trim($request->habit_measles);
        $user->habit_chickenpox = trim($request->habit_chickenpox);
        $user->habit_mumps = trim($request->habit_mumps);
        $user->habit_allergy = trim($request->habit_allergy);
        $user->habit_convulsions = trim($request->habit_convulsions);
        $user->habit_primary_complex = trim($request->habit_primary_complex);
        $user->habit_other_specify = trim($request->habit_other_specify);
        $user->habit_motor_development = trim($request->habit_motor_development);
        $user->habit_toilet_training = trim($request->habit_toilet_training);

        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);
            $user->children()->associate($children);
        }

        $user->save();

        return redirect()->back()->wisiblingsth('success', 'Habits successfully added');
    }
    public function Addrehabilitations()
    {
        $data['Header_title'] = "Add Rehabilitations";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.addrehabilitations'
            : 'staff.childrens.add.addrehabilitations';
    
        // Add this line for debugging
        return view($viewPath, $data);
        





    }

    public function rehabilitations(request $request)
    {
        $user = new Rehabilitation;
        //dd($request->all());
        $request->validate([
            'children_id' => 'required|integer', // Add any other validation rules you need
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);

        $existingRehabilitation = Rehabilitation::where('children_id', $request->input('children_id'))->first();

        if ($existingRehabilitation) {
            return redirect()->back()->with('error', 'Family for this child already exists');
        }

        $user->rehabilitation_restore_develop = trim($request->rehabilitation_restore_develop);
        $user->rehabilitation_improve = trim($request->rehabilitation_improve);
        $user->rehabilitation_reintegrate = trim($request->rehabilitation_reintegrate);
        $user->rehabilitation_placed = trim($request->rehabilitation_placed);
        $user->rehabilitation_refer = trim($request->rehabilitation_refer);
        $user->rehabilitation_transfer = trim($request->rehabilitation_transfer);


        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);
            $user->children()->associate($children);
        }

        $user->save();

        return redirect()->back()->with('success', 'Rehabilitation successfully added');
    }
    public function Addrecommendations()
    {

        $data['Header_title'] = "Add Recommendations";
        $data['getRecord'] = Children::all();
    
        $viewPath = Auth::user()->user_type == 'Admin'
            ? 'admin.childrens.add.addrecommendations'
            : 'staff.childrens.add.addrecommendations';
    
        // Add this line for debugging
        return view($viewPath, $data);


       



    }

    public function recommendations(request $request)
    {
        $user = new Recommendation;
        //dd($request->all());
        $request->validate([
            'children_id' => 'required|integer', // Add any other validation rules you need
        ], [
            'children_id.required' => 'Please select a child.',
            'children_id.integer' => 'Invalid value for child.',
            // Add other custom error messages if needed 
        ]);

        $existingRecommendation = Recommendation::where('children_id', $request->input('children_id'))->first();

        if ($existingRecommendation) {
            return redirect()->back()->with('error', 'Family for this child already exists');
        }

        $user->recommendation_recommendation = trim($request->recommendation_recommendation);
        $user->recommendation_plan_of_action = trim($request->recommendation_plan_of_action);
        $user->recommendation_action_taken = trim($request->recommendation_action_taken);



        if ($request->has('children_id')) {
            $childrenId = $request->input('children_id');
            $children = Children::find($childrenId);
            $user->children()->associate($children);
        }

        $user->save();

        return redirect()->back()->with('success', 'Recomendation, Plan of Action & Action Taken/Date successfully added');
    }



}
