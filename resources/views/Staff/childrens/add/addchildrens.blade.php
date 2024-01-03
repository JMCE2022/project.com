@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Children</h2>
    </div>
    @include('layouts._message')

    <div class="container-fluid pt-4 px-4 text-dark">
        <div class="container bg-white rounded">
            <div class="row pt-4">
                <div class="col-md-3">
                    @include('layouts.addpage')
                    <div class="col-md-12 text-center">


                        <div class="clickable-box">
                            @include('layouts.addpage2')
                        </div>


                    </div>
                    <div>
                    </div>
                    <div class="col-md-4 ">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label class="form-label ">First Name</label>
                                <input type="text" name="firstname" class="custom-input bg-transparent">
                            </div>
                            @if($errors->has('firstname'))
                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            @endif
                            <div class="mb-3">
                                <label class="form-label ">Last Name</label>
                                <input type="text" name="lastname" class="custom-input bg-transparent">
                            </div>
                            @if($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                            <div class="mb-3">
                                <label class="form-label ">Age</label>
                                <input type="text" name="age" class="custom-input bg-transparent">
                            </div>
                            @if($errors->has('age'))
                            <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                            <div class="">
                                <label>Religion</label>
                                <input rows="1" name="religion" class="custom-input bg-white my-1 me-1"></input>
                            </div>
                            @if($errors->has('religion'))
                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                            @endif
                            <div class="form-floating mb-3">
                                <select class="form-select bg-white text-dark custom-input" name="sex"
                                    aria-label="Floating label select example">
                                    <option disabled selected class="text-dark">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
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
                            <input rows="1" name="place_of_birth" class="custom-input bg-white my-1 me-1"></input>
                        </div>
                        @if($errors->has('place_of_birth'))
                        <span class="text-danger">{{ $errors->first('place_of_birth') }}</span>
                        @endif
                        <!-- New Box Content for DOB -->
                        <div class="">
                            <label>Date of Birth</label>
                            <input type="date"  name="date_of_birth" class="custom-input bg-white my-1 me-1 text-dark">
                        </div>
                        @if($errors->has('date_of_birth'))
                        <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                        @endif
                        <!-- New Box Content for sex -->

                        <!-- New Box Content for Religion -->
                        <div class="">
                            <label>Educational Attainment</label>
                            <input rows="1" name="educational_attainment" class="custom-input bg-white my-1 me-1">
                        </div>
                        @if($errors->has('educational_attainment'))
                        <span class="text-danger">{{ $errors->first('educational_attainment') }}</span>
                        @endif
                        <!-- New Box Content for Things brought in the center -->


                        <div class=" ">
                            <label>Region</label>
                            <input rows="1" name="region" class="custom-input bg-white my-1 me-1"></input>
                        </div>
                        @if($errors->has('region'))
                        <span class="text-danger">{{ $errors->first('region') }}</span>
                        @endif
                        <div class=" ">
                            <label>Province</label>
                            <input rows="1" name="province" class="custom-input bg-white my-1 me-1"></input>
                        </div>
                        @if($errors->has('province'))
                        <span class="text-danger">{{ $errors->first('province') }}</span>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <div class=" ">
                            <label>City</label>
                            <input rows="1" name="city" class="custom-input bg-white my-1 me-1">
                        </div>
                        @if($errors->has('city'))
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif
                        <div class=" ">
                            <label>Barangay</label>
                            <input rows="1" name="barangay" class="custom-input bg-white my-1 me-1">
                        </div>
                        @if($errors->has('barangay'))
                        <span class="text-danger">{{ $errors->first('barangay') }}</span>
                        @endif
                        <div class=" ">
                            <label>Street Address</label>
                            <input rows="1" name="street_address" class="custom-input bg-white my-1 me-1">
                        </div>
                        @if($errors->has('street_address'))
                        <span class="text-danger">{{ $errors->first('street_address') }}</span>
                        @endif
                        <div class=" ">
                            <label>Present Health Condition</label>
                            <input rows="1" name="present_health_condition" class="custom-input bg-white my-1 me-1">
                        </div>
                        @if($errors->has('present_health_condition'))
                        <span class="text-danger">{{ $errors->first('present_health_condition') }}</span>
                        @endif
                        <div class=" ">
                            <label>Physical Characteristic</label>
                            <input rows="1" name="physical_characteristic"
                                class="custom-input bg-white my-1 me-1"></input>
                        </div>
                        @if($errors->has('physical_characteristic'))
                        <span class="text-danger">{{ $errors->first('physical_characteristic') }}</span>
                        @endif

                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-white rounded h-100 p-4 text-dark">



                            <div class="mb-3">
                                <label class="form-label ">Initial Assessment</label>
                                <input type="text" class="custom-input bg-transparent" name="initial_assessment">
                            </div>
                            @if($errors->has('initial_assessment'))
                            <span class="text-danger">{{ $errors->first('initial_assessment') }}</span>
                            @endif

                            <div class="d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-success">Add</button>
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
        </div>
    </div>
    @endsection