@extends('layouts.app')

@section('content')


<div class=" m-4">

    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark text-capitalize">{{$getRecord->firstname}} {{$getRecord->lastname}} Profile</h2>
    </div>
    @include('layouts._message')

    <div class="container-fluid pt-4 px-4 text-dark">
        <div class="container bg-white rounded">
            <div class="row pt-4">
                <div class="col-md-4 ">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label ">First Name</label>
                            <input type="text" name="firstname" class="custom-input bg-transparent"
                                value="{{$getRecord->firstname  ?? ''}}">
                        </div>
                        @if($errors->has('firstname'))
                        <span class="text-danger">{{ $errors->first('firstname') }}</span>
                        @endif
                        <div class="mb-3">
                            <label class="form-label ">Last Name</label>
                            <input type="text" name="lastname" class="custom-input bg-transparent"
                                value="{{$getRecord->lastname  ?? ''}}">
                        </div>
                        @if($errors->has('lastname'))
                        <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        @endif
                        <div class="mb-3">
                            <label class="form-label ">Age</label>
                            <input type="text" name="age" class="custom-input bg-transparent"
                                value="{{$getRecord->age  ?? ''}}">
                        </div>
                        @if($errors->has('age'))
                        <span class="text-danger">{{ $errors->first('age') }}</span>
                        @endif
                        <div class="">
                            <label>Religion</label>
                            <input rows="1" name="religion" class="custom-input bg-white my-1 me-1"
                                value="{{$getRecord->religion  ?? ''}}">
                        </div>
                        @if($errors->has('religion'))
                        <span class="text-danger">{{ $errors->first('religion') }}</span>
                        @endif
                        <div class="form-floating mb-3">
                            <select class="form-select bg-white text-dark custom-input" name="sex"
                                aria-label="Floating label select example">
                                <option disabled selected class="text-dark">Select</option>
                                <option value="M" @if($getRecord->sex == 'M') selected @endif>Male</option>
                                <option value="F" @if($getRecord->sex == 'F') selected @endif>Female</option>
                            </select>
                            <label for="floatingSelect">Sex</label>
                        </div>
                        @if($errors->has('sex'))
                        <span class="text-danger">{{ $errors->first('sex') }}</span>
                        @endif
                </div>
                <div class="col-md-4">
                    <div class="">
                        <label>Place of Birth</label>
                        <input rows="1" name="place_of_birth" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->place_of_birth  ?? ''}}">
                    </div>
                    @if($errors->has('place_of_birth'))
                    <span class="text-danger">{{ $errors->first('place_of_birth') }}</span>
                    @endif
                    <!-- New Box Content for DOB -->
                    <div class="">
                        <label>Date of Birth</label>
                        <input type="date" name="date_of_birth" class="custom-input bg-white my-1 me-1 text-dark"
                            value="{{$getRecord->date_of_birth  ?? ''}}">
                    </div>
                    @if($errors->has('date_of_birth'))
                    <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                    @endif
                    <!-- New Box Content for sex -->

                    <!-- New Box Content for Religion -->
                    <div class="">
                        <label>Educational Attainment</label>
                        <input rows="1" name="educational_attainment" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->educational_attainment  ?? ''}}">
                    </div>
                    @if($errors->has('educational_attainment'))
                    <span class="text-danger">{{ $errors->first('educational_attainment') }}</span>
                    @endif
                    <!-- New Box Content for Things brought in the center -->
                    <div class=" ">
                        <label>Region</label>
                        <input rows="1" name="region" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->region  ?? ''}}">
                    </div>
                    @if($errors->has('region'))
                    <span class="text-danger">{{ $errors->first('region') }}</span>
                    @endif
                    <div class=" ">
                        <label>Province</label>
                        <input rows="1" name="province" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->province  ?? ''}}">
                    </div>
                    @if($errors->has('province'))
                    <span class="text-danger">{{ $errors->first('province') }}</span>
                    @endif
                </div>
                <div class="col-md-4">
                    <div class=" ">
                        <label>City</label>
                        <input rows="1" name="city" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->city  ?? ''}}">
                    </div>
                    @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif
                    <div class=" ">
                        <label>Barangay</label>
                        <input rows="1" name="barangay" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->barangay  ?? ''}}">
                    </div>
                    @if($errors->has('barangay'))
                    <span class="text-danger">{{ $errors->first('barangay') }}</span>
                    @endif
                    <div class=" ">
                        <label>Street Address</label>
                        <input rows="1" name="street_address" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->street_address  ?? ''}}">
                    </div>
                    @if($errors->has('street_address'))
                    <span class="text-danger">{{ $errors->first('street_address') }}</span>
                    @endif
                    <div class=" ">
                        <label>Present Health Condition</label>
                        <input rows="1" name="present_health_condition" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->present_health_condition  ?? ''}}">
                    </div>
                    @if($errors->has('present_health_condition'))
                    <span class="text-danger">{{ $errors->first('present_health_condition') }}</span>
                    @endif
                    <div class=" ">
                        <label>Physical Characteristic</label>
                        <input rows="1" name="physical_characteristic" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->physical_characteristic  ?? ''}}">
                    </div>
                    @if($errors->has('physical_characteristic'))
                    <span class="text-danger">{{ $errors->first('physical_characteristic') }}</span>
                    @endif
                </div>
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-white rounded h-100 p-4 text-dark">
                        <div class="mb-3">
                            <label class="form-label ">Initial Assessment</label>
                            <input type="text" class="custom-input bg-transparent" name="initial_assessment"
                                value="{{$getRecord->initial_assessment  ?? ''}}">
                        </div>
                        @if($errors->has('initial_assessment'))
                        <span class="text-danger">{{ $errors->first('initial_assessment') }}</span>
                        @endif
                    </div>
                </div>
                @if($getRecord->infofamily)
                <div class="row pt-4">
                    <h5 class="text-center text-dark">Family Information</h5>
                    <div class="col-md-6 ">
                        <div class=" mb-3">
                            <label>Name of Father</label>
                            <input name="infofamily_name_of_father" class="custom-input bg-white"
                                value="{{$getRecord->infofamily->infofamily_name_of_father  ?? ''}}">
                        </div>
                        @if($errors->has('infofamily_name_of_father'))
                        <span class="text-danger">{{ $errors->first('infofamily_name_of_father') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Name of Mother</label>
                            <input name="infofamily_name_of_mother" class="custom-input bg-white"
                                value="{{$getRecord->infofamily->infofamily_name_of_mother  ?? ''}}">
                        </div>
                        @if($errors->has('infofamily_name_of_mother'))
                        <span class="text-danger">{{ $errors->first('infofamily_name_of_mother') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class=" mb-3">
                            <label>Age of Father</label>
                            <input name="infofamily_age_of_father" class="custom-input bg-white"
                                value="{{$getRecord->infofamily->infofamily_age_of_father  ?? ''}}">
                        </div>
                        @if($errors->has('infofamily_age_of_father'))
                        <span class="text-danger">{{ $errors->first('infofamily_age_of_father') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Age of Mother</label>
                            <input name="infofamily_age_of_mother" class="custom-input bg-white"
                                value="{{$getRecord->infofamily->infofamily_age_of_mother  ?? ''}}">
                        </div>
                        @if($errors->has('infofamily_age_of_mother'))
                        <span class="text-danger">{{ $errors->first('infofamily_age_of_mother') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-12 col-xl-12">
                    <div class="">
                        <label>Address</label>
                        <input rows="1" name="infofamily_address" class="custom-input bg-white my-1 me-1"
                            value="{{$getRecord->infofamily->infofamily_address  ?? ''}}">
                    </div>
                    @if($errors->has('infofamily_address'))
                    <span class="text-danger">{{ $errors->first('infofamily_address') }}</span>
                    @endif
                    <!-- New Box Content for DOB -->





                    <div class="">
                        <label>Occupation Father</label>
                        <input name="infofamily_occupation" class="custom-input bg-white my-1 me-1 text-dark"
                            value="{{$getRecord->infofamily->infofamily_occupation  ?? ''}}">
                    </div>
                    @if($errors->has('infofamily_occupation'))
                    <span class="text-danger">{{ $errors->first('infofamily_occupation') }}</span>
                    @endif
                    <div class="">
                        <label>Occupation Mother</label>
                        <input name="infofamily_occupation_mother" class="custom-input bg-white my-1 me-1 text-dark"
                            value="{{$getRecord->infofamily->infofamily_occupation_mother  ?? ''}}">
                    </div>
                    @if($errors->has('infofamily_occupation_mother'))
                    <span class="text-danger">{{ $errors->first('infofamily_occupation_mother') }}</span>
                    @endif
                </div>

                @endif
                @if(count($siblings) > 0)
                <h5 class="text-center text-dark">Sibling Information</h5>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Birthdate</th>
                                <th scope="col">Educational Attainment</th>
                                <th scope="col">Relationship</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($siblings as $sibling)
                            <tr>
                                <td><input class="text-center input_table " name="sibling_fullname[{{ $sibling->id }}]"
                                        value="{{ $sibling->sibling_fullname }}"></td>
                                <td><input class="text-center input_table" name="sibling_age[{{ $sibling->id }}]"
                                        value="{{ $sibling->sibling_age }}"></td>
                                <td>
                                    <input class="text-center input_table" name="sibling_sex[{{ $sibling->id }}]"
                                        value="{{ $sibling->sibling_sex }}">
                                </td>
                                <td><input class="text-center input_table" type="date"
                                        name="sibling_date_of_birth[{{ $sibling->id }}]"
                                        value="{{ $sibling->sibling_date_of_birth }}"></td>
                                <td><input class="text-center input_table"
                                        name="sibling_educational_attainment[{{ $sibling->id }}]"
                                        value="{{ $sibling->sibling_educational_attainment }}"></td>
                                <td><input class="text-center input_table"
                                        name="sibling_relationship[{{ $sibling->id }}]"
                                        value="{{ $sibling->sibling_relationship }}"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif


                @if($getRecord->guardian)
                <div class="row pt-4">
                    <h5 class="text-center text-dark">Guardian Information</h5>
                    <div class="col-md-6 ">
                        <div class=" mb-3">
                            <label>Full Name</label>
                            <input name="guardian_name" class="custom-input bg-white"
                                value="{{$getRecord->guardian->guardian_name  ?? ''}}">
                        </div>
                        @if($errors->has('guardian_name'))
                        <span class="text-danger">{{ $errors->first('guardian_name') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="number" name="guardian_age" class="custom-input bg-white"
                                value="{{$getRecord->guardian->guardian_age  ?? ''}}">
                        </div>
                        @if($errors->has('guardian_age'))
                        <span class="text-danger">{{ $errors->first('guardian_age') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class=" mb-3">
                            <label>Sex</label>
                            <select class="form-select bg-white text-dark custom-input" name="guardian_sex"
                                aria-label="Floating label select example">
                                <option value="" disabled selected class="text-dark">Select</option>
                                <option value="M" @if($getRecord->guardian->guardian_sex == 'M') selected
                                    @endif>Male</option>
                                <option value="F" @if($getRecord->guardian->guardian_sex == 'F') selected
                                    @endif>Female</option>
                            </select>
                        </div>
                        @if($errors->has('sex'))
                        <span class="text-danger">{{ $errors->first('sex') }}</span>
                        @endif
                        <div class=" mb-3">
                            <label>Occupation</label>
                            <input name="guardian_occupation" class="custom-input bg-white"
                                value="{{$getRecord->guardian->guardian_occupation  ?? ''}}">
                        </div>
                        @if($errors->has('guardian_occupation'))
                        <span class="text-danger">{{ $errors->first('guardian_occupation') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="">
                            <label>Circumstances of Guardian</label>
                            <input rows="1" name="guardian_circumstances_of_guardian"
                                class="custom-input bg-white my-1 me-1"
                                value="{{$getRecord->guardian->guardian_circumstances_of_guardian  ?? ''}}">
                            @if($errors->has('guardian_circumstances_of_guardian'))
                            <span class="text-danger">{{
                                $errors->first('guardian_circumstances_of_guardian')
                                }}</span>
                            @endif
                            <!-- New Box Content for DOB -->
                            <div class="">
                                <label>Economic Situation of the Family</label>
                                <input name="guardian_economic_situation_of_the_family"
                                    class="custom-input bg-white my-1 me-1 text-dark"
                                    value="{{$getRecord->guardian->guardian_economic_situation_of_the_family  ?? ''}}">
                            </div>
                            @if($errors->has('guardian_economic_situation_of_the_family'))
                            <span class="text-danger">{{
                                $errors->first('guardian_economic_situation_of_the_family') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @if($getRecord->finder)
                <div class="row pt-4">
                    <h5 class="text-center text-dark">Finder Information</h5>
                    <div class="col-md-6 ">
                        <div class=" mb-3">
                            <label>Full Name</label>
                            <input name="finder_fullname" class="custom-input bg-white"
                                value="{{$getRecord->finder->finder_fullname  ?? ''}}">
                        </div>
                        @if($errors->has('finder_fullname'))
                        <span class="text-danger">{{ $errors->first('finder_fullname') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="number" name="finder_age" class="custom-input bg-white"
                                value="{{$getRecord->finder->finder_age  ?? ''}}">
                        </div>
                        @if($errors->has('finder_age'))
                        <span class="text-danger">{{ $errors->first('finder_age') }}</span>
                        @endif
                        <div class=" mb-3">
                            <label>Sex</label>
                            <select class="form-select bg-white text-dark custom-input" name="finder_sex"
                                aria-label="Floating label select example">
                                <option value="" disabled selected class="text-dark">Select
                                </option>
                                <option value="M" @if($getRecord->finder->finder_sex == 'M') selected @endif>Male
                                </option>
                                <option value="F" @if($getRecord->finder->finder_sex == 'F') selected
                                    @endif>Female</option>
                            </select>
                        </div>
                        @if($errors->has('finder_sex'))
                        <span class="text-danger">{{ $errors->first('finder_sex') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class=" mb-3">
                            <label>Civil Status</label>
                            <input name="finder_civil_status" class="custom-input bg-white"
                                value="{{$getRecord->finder->finder_civil_status  ?? ''}}">
                        </div>
                        @if($errors->has('finder_civil_status'))
                        <span class="text-danger">{{ $errors->first('finder_civil_status')
                            }}</span>
                        @endif
                        <div class="">
                            <label>Occupation</label>
                            <input rows="1" name="finder_occupation" class="custom-input bg-white my-1 me-1"
                                value="{{$getRecord->finder->finder_occupation  ?? ''}}">
                        </div>
                        @if($errors->has('finder_occupation'))
                        <span class="text-danger">{{ $errors->first('finder_occupation')
                            }}</span>
                        @endif
                        <!-- New Box Content for DOB -->
                        <div class="">
                            <label>Relationship</label>
                            <input name="finder_relationship" class="custom-input bg-white my-1 me-1 text-dark"
                                value="{{$getRecord->finder->finder_relationship  ?? ''}}">
                        </div>
                        @if($errors->has('finder_relationship'))
                        <span class="text-danger">{{ $errors->first('finder_relationship')
                            }}</span>
                        @endif
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="">
                            <label>Problem Presented</label>
                            <input rows="1" name="finder_problem_presented" class="custom-input bg-white my-1 me-1"
                                style="height:100px;" value="{{$getRecord->finder->finder_problem_presented  ?? ''}}">
                        </div>
                        @if($errors->has('finder_problem_presented'))
                        <span class="text-danger">{{ $errors->first('finder_problem_presented')
                            }}</span>
                        @endif
                        <!-- New Box Content for DOB -->
                        <div class="">
                            <label>Background Information</label>
                            <input name="finder_background_information"
                                class="custom-input bg-white my-1 me-1 text-dark" style="height:100px;"
                                value="{{$getRecord->finder->finder_background_information  ?? ''}}">
                        </div>
                        @if($errors->has('finder_background_information'))
                        <span class="text-danger">{{
                            $errors->first('finder_background_information') }}</span>
                        @endif
                    </div>
                </div>
                @endif
                @if($getRecord->development)
                <div class="row pt-4">
                    <h5 class="text-center text-dark">Development</h5>
                    <div class="col-sm-12 col-xl-12">
                        <div class=" mb-3">
                            <label>Birth History</label>
                            <select class="form-select bg-white text-dark custom-input" name="development_birth_history"
                                aria-label="Floating label select example">
                                <option value="" disabled selected class="text-dark">
                                    Select</option>
                                <option value="Full Term" @if($getRecord->development->development_birth_history == 'Full Term') selected @endif >Full Term</option>
                                <option value="Premature" @if($getRecord->development->development_birth_history == 'Premature') selected @endif>Premature</option>
                                <option value="Borne at Home" @if($getRecord->development->development_birth_history == 'Borne at Home') selected @endif>Borne at Home</option>
                                <option value="Hospital" @if($getRecord->development->development_birth_history == 'Hospital') selected @endif>Hospital</option>
                                <option value="Normal Delivery" @if($getRecord->development->development_birth_history == 'Normal Delivery') selected @endif>Normal Delivery</option>
                                <option value="Caesarean" @if($getRecord->development->development_birth_history == 'Caesarean') selected @endif>Caesarean</option>
                                <option value="Forceps" @if($getRecord->development->development_birth_history == 'Forceps') selected @endif>Forceps</option>
                                <option value="Delivery by Physician" @if($getRecord->development->development_birth_history == 'Delivery by Physician') selected @endif>Delivery by
                                    Physician</option>
                                <option value="Midwife" @if($getRecord->development->development_birth_history == 'Midwife') selected @endif>Midwife</option>
                                <option value="Hilot" @if($getRecord->development->development_birth_history == 'Hilot') selected @endif>Hilot</option>
                            </select>
                        </div>
                        @if($errors->has('development_birth_history'))
                        <span class="text-danger">{{
                            $errors->first('development_birth_history') }}</span>
                        @endif
                        <div class=" mb-3">
                            <label>Birth Weight in KG</label>
                            <input type="number" name="development_birth_weight" class="custom-input bg-white"
                                value="{{$getRecord->development->development_birth_weight  ?? ''}}">
                        </div>
                        @if($errors->has('development_birth_weight'))
                        <span class="text-danger">{{
                            $errors->first('development_birth_weight') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Birth Height in CM</label>
                            <input type="number" name="development_birth_height" class="custom-input bg-white"
                                value="{{$getRecord->development->development_birth_height ?? ''}}">
                        </div>
                        @if($errors->has('development_birth_height'))
                        <span class="text-danger">{{
                            $errors->first('development_birth_height') }}</span>
                        @endif
                        <div class="">
                            <label>Describe Abnormalities</label>
                            <input rows="1" type="text" name="development_describe_abnormalities"
                                class="custom-input bg-white my-1 me-1" style="height:100px;"
                                value="{{$getRecord->development->development_describe_abnormalities  ?? ''}}">
                        </div>
                        @if($errors->has('development_describe_abnormalities'))
                        <span class="text-danger">{{
                            $errors->first('development_describe_abnormalities')
                            }}</span>
                        @endif
                    </div>
                </div>
                @endif
                @if($getRecord->habit)
                <div class="row pt-4">
                    <h5 class="text-center text-dark">Habit</h5>
                    <div class="col-sm-12 col-xl-12">
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_bedwetting" type="checkbox" class="form-check-input" {{
                                $getRecord->habit->habit_bedwetting =='Yes' ? 'checked' : '' }} />
                            <label class="form-check-label mb-0">Bedwetting</label>
                        </div>
                        @if($errors->has('habit_bedwetting'))
                        <span class="text-danger">{{ $errors->first('habit_bedwetting') }}</span>
                        @endif
                    

                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_thumb_sucking" type="checkbox" class="form-check-input" 
                        {{$getRecord->habit->habit_thumb_sucking =='Yes' ? 'checked' : '' }}/>
                        <label class="form-check-label mb-0">Thumb
                            Sucking</label>
                    </div>
                    @if($errors->has('habit_thumb_sucking'))
                    <span class="text-danger">{{
                        $errors->first('habit_thumb_sucking') }}</span>
                    @endif
                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_nail_biting" type="checkbox" class="form-check-input"
                        {{$getRecord->habit->habit_nail_biting =='Yes' ? 'checked' : '' }} />
                        <label class="form-check-label mb-0">Nail
                            Biting</label>
                    </div>
                    @if($errors->has('habit_nail_biting'))
                    <span class="text-danger">{{
                        $errors->first('habit_nail_biting') }}</span>
                    @endif
                    <div class=" mb-3">
                        <label>Others</label>
                        <input type="text" name="habit_others" class="custom-input bg-white" style="height:100px;"
                            value="{{$getRecord->habit->habit_others  ?? ''}}">
                    </div>
                    @if($errors->has('habit_others'))
                    <span class="text-danger">{{
                        $errors->first('habit_others') }}</span>
                    @endif
                    <h6 class="text-dark text-center my-4">Disease During
                        Childhood</h6>
                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_measles" type="checkbox" class="form-check-input" 
                        {{$getRecord->habit->habit_measles =='Yes' ? 'checked' : '' }}/>
                        <label class="form-check-label mb-0">Measles</label>
                    </div>
                    @if($errors->has('habit_measles'))
                    <span class="text-danger">{{
                        $errors->first('habit_measles') }}</span>
                    @endif
                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_chickenpox" type="checkbox" class="form-check-input" 
                        {{$getRecord->habit->habit_chickenpox =='Yes' ? 'checked' : '' }}/>
                        <label class="form-check-label mb-0">Chickenpox</label>
                    </div>
                    @if($errors->has('habit_chickenpox'))
                    <span class="text-danger">{{
                        $errors->first('habit_chickenpox') }}</span>
                    @endif
                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_mumps" type="checkbox" class="form-check-input" 
                        {{$getRecord->habit->habit_mumps =='Yes' ? 'checked' : '' }}/>
                        <label class="form-check-label mb-0">Mumps</label>
                    </div>
                    @if($errors->has('habit_mumps'))
                    <span class="text-danger">{{
                        $errors->first('habit_mumps') }}</span>
                    @endif
                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_allergy" type="checkbox" class="form-check-input" 
                        {{$getRecord->habit->habit_allergy =='Yes' ? 'checked' : '' }}/>
                        <label class="form-check-label mb-0">Allergy</label>
                    </div>
                    @if($errors->has('habit_allergy'))
                    <span class="text-danger">{{
                        $errors->first('habit_allergy') }}</span>
                    @endif
                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_convulsions" type="checkbox" class="form-check-input" 
                        {{$getRecord->habit->habit_convulsions =='Yes' ? 'checked' : '' }}/>
                        <label class="form-check-label mb-0">Convulsions</label>
                    </div>
                    @if($errors->has('habit_convulsions'))
                    <span class="text-danger">{{
                        $errors->first('habit_convulsions') }}</span>
                    @endif
                    <div class="form-check mr-sm-2">
                        <input value="Yes" name="habit_primary_complex" type="checkbox" class="form-check-input" 
                        {{$getRecord->habit->habit_primary_complex =='Yes' ? 'checked' : '' }}/>
                        <label class="form-check-label mb-0">Primary
                            Complex</label>
                    </div>
                    @if($errors->has('habit_primary_complex'))
                    <span class="text-danger">{{
                        $errors->first('habit_primary_complex') }}</span>
                    @endif
                    <div class=" mb-3">
                        <label>Others and Specify</label>
                        <input type="text" name="habit_other_specify" class="custom-input bg-white"
                            style="height:100px;" value="{{$getRecord->habit->habit_other_specify  ?? ''}}">
                    </div>
                    @if($errors->has('habit_other_specify'))
                    <span class="text-danger">{{
                        $errors->first('habit_other_specify') }}</span>
                    @endif
                    <div class=" mb-3">
                        <label>Motor Development (describe, when, include
                            problems, if any)</label>
                        <input type="text" name="habit_motor_development" class="custom-input bg-white"
                            style="height:100px;" value="{{$getRecord->habit->habit_motor_development  ?? ''}}">
                    </div>
                    @if($errors->has('habit_motor_development'))
                    <span class="text-danger">{{
                        $errors->first('habit_motor_development') }}</span>
                    @endif
                    <div class=" mb-3">
                        <label>Toilet Training (describe, when, include
                            problems, if any)</label>
                        <input type="text" name="habit_toilet_training" class="custom-input bg-white"
                            style="height:100px;" value="{{$getRecord->habit->habit_toilet_training  ?? ''}}">
                    </div>
                    @if($errors->has('habit_toilet_training'))
                    <span class="text-danger">{{
                        $errors->first('habit_toilet_training') }}</span>
                    @endif
                </div>
            </div>
            @endif
            @if($getRecord->rehabilitation)
            <div class="row pt-4">
                <h5 class="text-center text-dark">Rehabilitation
                    Goal & Objective</h5>
                <div class="col-sm-12 col-xl-12">
                    <div class=" mb-3">
                        <label>1. To restore/develop social
                            functioning of the child.</label>
                        <input type="text" name="rehabilitation_restore_develop" class="custom-input bg-white"
                            style="height:100px;"
                            value=" {{$getRecord->rehabilitation->rehabilitation_restore_develop  ?? ''}}">
                    </div>
                    @if($errors->has('rehabilitation_restore_develop'))
                    <span class="text-danger">{{
                        $errors->first('rehabilitation_restore_develop')
                        }}</span>
                    @endif
                    <div class="mb-3">
                        <label>2. To improve the nutritional and
                            health status of the child.</label>
                        <input type="text" name="rehabilitation_improve" class="custom-input bg-white "
                            style="height:100px;"
                            value=" {{$getRecord->rehabilitation->rehabilitation_improve  ?? ''}}">
                    </div>
                    @if($errors->has('rehabilitation_improve'))
                    <span class="text-danger">{{
                        $errors->first('rehabilitation_improve')
                        }}</span>
                    @endif
                    <div class="">
                        <label>3. To reintegrate child to parents
                            and/ or relatives.</label>
                        <input type="text" name="rehabilitation_reintegrate" class="custom-input bg-white my-1 me-1"
                            style="height:100px;"
                            value=" {{$getRecord->rehabilitation->rehabilitation_reintegrate  ?? ''}}">
                    </div>
                    @if($errors->has('rehabilitation_reintegrate'))
                    <span class="text-danger">{{
                        $errors->first('rehabilitation_reintegrate')
                        }}</span>
                    @endif
                    <div class="">
                        <label>4. To placed out child for
                            adoption.</label>
                        <input type="text" name="rehabilitation_placed" class="custom-input bg-white my-1 me-1"
                            style="height:100px;" value=" {{$getRecord->rehabilitation->rehabilitation_placed  ?? ''}}">
                    </div>
                    @if($errors->has('rehabilitation_placed'))
                    <span class="text-danger">{{
                        $errors->first('rehabilitation_placed')
                        }}</span>
                    @endif
                    <div class="">
                        <label>5. To refer child to foster care
                            placement.</label>
                        <input type="text" name="rehabilitation_refer" class="custom-input bg-white my-1 me-1"
                            style="height:100px;" value=" {{$getRecord->rehabilitation->rehabilitation_refer  ?? ''}}">
                    </div>
                    @if($errors->has('rehabilitation_refer'))
                    <span class="text-danger">{{
                        $errors->first('rehabilitation_refer')
                        }}</span>
                    @endif
                    <div class="">
                        <label>6. To transfer child to other
                            institution that can provide the
                            necessary services needed by the
                            child.</label>
                        <input type="text" name="rehabilitation_transfer" class="custom-input bg-white my-1 me-1"
                            style="height:100px;"
                            value=" {{$getRecord->rehabilitation->rehabilitation_transfer  ?? ''}}">
                    </div>
                    @if($errors->has('rehabilitation_transfer'))
                    <span class="text-danger">{{
                        $errors->first('rehabilitation_transfer')
                        }}</span>
                    @endif
                </div>
            </div>
            @endif
            @if($getRecord->recommendation)
            <div class="row pt-4">
                <h5 class="text-center text-dark">
                    Recommendation</h5>
                <div class="col-sm-12 col-xl-12">
                    <div class=" mb-3">
                        <input type="text" name="recommendation_recommendation" class="custom-input bg-white"
                            style="height:100px;"
                            value=" {{$getRecord->recommendation->recommendation_recommendation  ?? ''}}">
                    </div>
                    @if($errors->has('recommendation_recommendation'))
                    <span class="text-danger">{{
                        $errors->first('recommendation_recommendation')
                        }}</span>
                    @endif
                    <div class="mb-3">
                        <h5 class="text-center text-dark">
                            Plan of Action</h5>
                        <input type="text" name="recommendation_plan_of_action" class="custom-input bg-white "
                            style="height:100px;"
                            value=" {{$getRecord->recommendation->recommendation_plan_of_action  ?? ''}}">
                    </div>
                    @if($errors->has('recommendation_plan_of_action'))
                    <span class="text-danger">{{
                        $errors->first('recommendation_plan_of_action')
                        }}</span>
                    @endif
                    <div class="">
                        <h5 class="text-center text-dark">
                            Action Taken</h5>
                        <input type="text" name="recommendation_action_taken" class="custom-input bg-white my-1 me-1"
                            style="height:100px;"
                            value=" {{$getRecord->recommendation->recommendation_action_taken  ?? ''}}">
                    </div>
                    @if($errors->has('recommendation_action_taken'))
                    <span class="text-danger">{{
                        $errors->first('recommendation_action_taken')
                        }}</span>
                    @endif
                </div>
            </div>
            @endif
            <div class="d-flex align-items-center justify-content-between">
                <button type="submit" class="btn btn-success">Update</button>
                @if(Auth::user()->user_type == 'Admin')
                <a class=" btn btn-outline-primary  m-2" href="{{url('Admin/Listchildrens')}}">Done</a>
                @elseif(Auth::user()->user_type == 'Staff')
                <a class=" btn btn-outline-primary  m-2" href="{{url('Staff/Listchildrens')}}">Done</a>
                @endif
            </div>
            </form>
        </div>
    </div>
</div>

</div>
@endsection