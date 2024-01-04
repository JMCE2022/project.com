@extends('layouts.app')

@section('content')

<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Profile Account</h2>
    </div>
    @include('layouts._message')

    <div class="container-fluid pt-4 px-4 text-dark">


        <!-- Profile Image and Add/Update Picture Box -->
        <div class="container bg-white rounded">
            <div class="row pt-4">

                <div class="col-md-4 ">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative d-flex align-items-center justify-content-around ">
                            <img class="rounded" src="{{ asset('public/accountprofile/' . $getRecord->profile_pic) }}"
                                style="width: 200px; height: 200px;">

                        </div>
                        <h3 class="text-dark d-flex align-items-center justify-content-around">Picture</h3>

                        <div class="mb-3">
                            <label class="form-label ">First Name</label>
                            <input type="text" name="firstname" class="custom-input bg-transparent"
                                value="{{$getRecord->firstname}}">
                        </div>
                        @if($errors->has('firstname'))
                        <span class="text-danger">{{ $errors->first('firstname') }}</span>
                        @endif
                        <div class="mb-3">
                            <label class="form-label ">Last Name</label>
                            <input type="text" name="lastname" class="custom-input bg-transparent"
                                value="{{$getRecord->lastname}}">
                        </div>
                        @if($errors->has('lastname'))
                        <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        @endif
                        <div class="">
                            <label>Midile Initial</label>
                            <input rows="1" name="middle_initial" value="{{$getRecord->middle_initial}}"
                                class="custom-input bg-white my-1 me-1"></input>
                        </div>
                        @if($errors->has('middle_initial'))
                        <span class="text-danger">{{ $errors->first('middle_initial') }}</span>
                        @endif
                        <div class="form-floating mb-3">
                            <select class="form-select bg-white text-dark custom-input" name="suffix"
                                aria-label="Floating label select example">
                                <option disabled selected class="text-dark">Select</option>
                                <option value="Jr" @if($getRecord->suffix == 'Jr') selected @endif>Jr</option>
                                <option value="Sr" @if($getRecord->suffix == 'Sr') selected @endif>Sr</option>
                            </select>
                            <label for="floatingSelect">Suffix</label>
                        </div>
                        @if($errors->has('suffix'))
                        <span class="text-danger">{{ $errors->first('suffix') }}</span>
                        @endif
                </div>

                <div class="col-md-4">
                    <!-- New Box Content for Case ID -->
                    <div class="form-floating mb-3">
                        <select class="form-select bg-white text-dark custom-input" name="sex"
                            aria-label="Floating label select example">
                            <option disabled selected class="text-dark">Select a Gender</option>
                            <option value="M" @if( $getRecord->sex == 'M') selected @endif >Male</option>
                            <option value="F" @if($getRecord->sex == 'F') selected @endif >Female</option>
                        </select>
                        <label for="floatingSelect">Sex</label>
                    </div>
                    @if($errors->has('sex'))
                    <span class="text-danger">{{ $errors->first('sex') }}</span>
                    @endif
                    <!-- New Box Content for First Name -->

                    <!-- New Box Content for POB -->
                    <div class="">
                        <label>Place of Birth</label>
                        <input rows="1" name="place_of_birth" value="{{$getRecord->place_of_birth}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('place_of_birth'))
                    <span class="text-danger">{{ $errors->first('place_of_birth') }}</span>
                    @endif
                    <!-- New Box Content for DOB -->
                    <div class="">
                        <label>Date of Birth</label>
                        <input type="date" name="date_of_birth" value="{{$getRecord->date_of_birth}}"
                            class="custom-input bg-white my-1 me-1 text-dark">
                    </div>
                    @if($errors->has('date_of_birth'))
                    <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                    @endif
                    <!-- New Box Content for sex -->

                    <!-- New Box Content for Religion -->
                    <div class="">
                        <label>Religion</label>
                        <input rows="1" name="religion" value="{{$getRecord->religion}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('religion'))
                    <span class="text-danger">{{ $errors->first('religion') }}</span>
                    @endif
                    <!-- New Box Content for Things brought in the center -->
                    <div class=" ">
                        <label>Age</label>
                        <input rows="1" type="number" name="age" value="{{$getRecord->age}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('age'))
                    <span class="text-danger">{{ $errors->first('age') }}</span>
                    @endif
                    <div class="form-floating mb-3">
                        <select class="form-select bg-white text-dark custom-input" name="civil_status"
                            aria-label="Floating label select example">
                            <option disabled selected class="text-dark">Select a Status</option>
                            <option value="Single" @if($getRecord->civil_status == 'Single') selected @endif >Single
                            </option>
                            <option value="Married" @if($getRecord->civil_status == 'Married') selected @endif >Married
                            </option>
                            <option value="Widowed" @if($getRecord->civil_status == 'Widowed') selected @endif >Widowed
                            </option>
                            <option value="Others" @if($getRecord->civil_status == 'Others') selected @endif >Others
                            </option>
                        </select>
                        <label for="floatingSelect">Civil Status</label>
                    </div>
                    @if($errors->has('civil_status'))
                    <span class="text-danger">{{ $errors->first('civil_status') }}</span>
                    @endif
                    <div class=" ">
                        <label>Phone Number</label>
                        <input rows="1" type="number" name="phone_number" value="{{$getRecord->phone_number}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    

                </div>
                <div class="col-md-4">

                    
                    @if($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    @endif
                    <div class=" ">
                        <label>Email Address</label>
                        <input rows="1" name="email_address" value="{{$getRecord->email_address}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('email_address'))
                    <span class="text-danger">{{ $errors->first('email_address') }}</span>
                    @endif
                    @if($getRecord->region != null)
                    <div class=" ">
                        <label>Region</label>
                        <input type="text" rows="1" name="region" class="custom-input text-dark bg-white my-1 me-1"
                            value="{{$getRecord->region}}" >
                    </div>
                    @else
                    <div class="">
                        <label for="region">Region</label>
                        <select class="custom-input" id="region-dropdown" onchange="updateHiddenInput('region')">
                            <option value="">Select Region</option>

                            @foreach ($regions as $region)
                            <option value="{{$region->id}}">
                                {{$region->name}}
                            </option>
                            @endforeach
                        </select>
                        @if($errors->has('region'))
                        <span class="text-danger">{{ $errors->first('region') }}</span>
                        @endif
                        <input type="hidden" name="region" id="sample-column-region-input" value="">
                    </div>
                    @endif
                    @if($getRecord->province != null)
                    <div class=" ">
                        <label>Province</label>
                        <input type="text" rows="1" name="province" class="custom-input text-dark bg-white my-1 me-1"
                            value="{{$getRecord->province}}" >
                    </div>
                    @else
                    <div class=" ">
                        <label for="province">Province</label>
                        <select class="custom-input" id="province-dropdown" onchange="updateHiddenInput('province')">
                            <!-- Options for provinces go here -->
                        </select>
                        @if($errors->has('province'))
                        <span class="text-danger">{{ $errors->first('province') }}</span>
                        @endif
                        <input type="hidden" name="province" id="sample-column-province-input" value="">
                    </div>
                    @endif
                    

                    @if($getRecord->city != null)
                    <div class=" ">
                        <label>City</label>
                        <input type="text" rows="1" name="city" class="custom-input text-dark bg-white my-1 me-1"
                            value="{{$getRecord->city}}" >
                    </div>
                    @else
                    <div class=" ">
                        <label for="city">City/Municipality</label>
                        <select class="custom-input" id="city-dropdown" onchange="updateHiddenInput('city')">
                            <!-- Options for cities go here -->
                        </select>
                        @if($errors->has('City'))
                        <span class="text-danger">{{ $errors->first('province') }}</span>
                        @endif
                        <input type="hidden" name="city" id="sample-column-city-input" value="">
                    </div>
                    @endif
                    <div class=" ">
                        <label>Barangay</label>
                        <input rows="1" name="barangay" value="{{$getRecord->barangay}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('barangay'))
                    <span class="text-danger">{{ $errors->first('barangay') }}</span>
                    @endif
                    <div class=" ">
                        <label>Street Address</label>
                        <input rows="1" name="street_address" value="{{$getRecord->street_address}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('street_address'))
                    <span class="text-danger">{{ $errors->first('street_address') }}</span>
                    @endif
                    <div class=" ">
                        <label>Zip</label>
                        <input rows="1" type="number" name="zip_code" value="{{$getRecord->zip_code}}"
                            class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('zip_code'))
                    <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                    @endif


                </div>
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-white rounded h-100 p-4 text-dark">


                        <div class="mb-3">
                            <label class="form-label ">Upload Profile</label>
                            <input type="file" name="profile_pic" class="custom-input bg-transparent"
                                value="{{$getRecord->profile_pic}}">
                        </div>
                        @if($errors->has('profile_pic'))
                        <span class="text-danger">{{ $errors->first('profile_pic') }}</span>
                        @endif


                        <div class="form-floating mb-3">
                            <select class="form-select bg-transparent custom-input" name="user_type"
                                aria-label="Floating label select example">
                                <option disabled selected class="text-dark">Open this select menu</option>
                                <option value="Staff" @if($getRecord->user_type == 'Staff') selected @endif>Staff
                                </option>
                                <option value="Admin" @if($getRecord->user_type == 'Admin') selected @endif>Admin
                                </option>
                            </select>
                            <label for="floatingSelect">Role of this Account</label>
                        </div>

                        @if($errors->has('user_type'))
                        <span class="text-danger">{{ $errors->first('user_type') }}</span>
                        @endif



                        <div class="mb-3">
                            <label class="form-label ">Username</label>
                            <input type="text" class="custom-input bg-transparent" name="username"
                                value="{{$getRecord->username}}">
                        </div>
                        @if($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="custom-input bg-transparent" name="password">
                            <p>Do you want to change password so Please add new password</p>
                        </div>
                        @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-success">Update</button>
                            @if(Auth::user()->user_type == 'Admin')
                            <a class=" btn btn-outline-primary  m-2" href="{{url('Admin/Dashboard')}}">Done</a>
                            @elseif(Auth::user()->user_type == 'Staff')
                            <a class=" btn btn-outline-primary  m-2" href="{{url('Staff/Dashboard')}}">Done</a>
                            @endif
                        </div>
                        </form>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection