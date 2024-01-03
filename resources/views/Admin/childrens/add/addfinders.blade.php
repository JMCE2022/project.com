@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Finders</h2>
    </div>
    @include('layouts._message')

    <div class="container-fluid pt-4 px-4 text-dark">
        <div class="container bg-white rounded">
            <div class="row pt-4">
                <div class="col-md-3">
                    @include('layouts.addpage')
                    <div class="col-md-12 text-center">


                        <div class="clickable-box">
                            @include('layouts.addpage3')
                        </div>


                    </div>
                    <div>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf

                            <label>Select Child</label>
                            <select name="children_id" class="custom-input">
                                <option value="" disabled selected>Select a child</option>
                                @foreach($getRecord as $child)
                                <option value="{{ $child->id }}">{{ $child->id }} - {{ $child->firstname }} {{ $child->lastname }}</option>
                                @endforeach
                            </select>
                    </div>

                    @if($errors->has('children_id'))
                    <div class="col-sm-12 col-xl-12">
                        <span class="text-danger">{{ $errors->first('children_id') }}</span>
                    </div>
                    @endif
                    <div class="col-md-6 ">


                        <div class=" mb-3">
                            <label>Full Name</label>
                            <input name="finder_fullname" class="custom-input bg-white">
                        </div>
                        @if($errors->has('finder_fullname'))
                        <span class="text-danger">{{ $errors->first('finder_fullname') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="number" name="finder_age" class="custom-input bg-white">
                        </div>
                        @if($errors->has('finder_age'))
                        <span class="text-danger">{{ $errors->first('finder_age') }}</span>
                        @endif
                        <div class=" mb-3">
                            <label>Sex</label>
                            <select class="form-select bg-white text-dark custom-input" name="finder_sex required"
                                aria-label="Floating label select example">
                                <option value="" disabled selected class="text-dark">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        @if($errors->has('finder_sex'))
                        <span class="text-danger">{{ $errors->first('finder_sex') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">


                        <div class=" mb-3">
                            <label>Civil Status</label>
                            <input name="finder_civil_status" class="custom-input bg-white">
                        </div>
                        @if($errors->has('finder_civil_status'))
                        <span class="text-danger">{{ $errors->first('finder_civil_status') }}</span>
                        @endif
                        <div class="">
                            <label>Occupation</label>
                            <input rows="1" name="finder_occupation" class="custom-input bg-white my-1 me-1"></input>
                        </div>
                        @if($errors->has('finder_occupation'))
                        <span class="text-danger">{{ $errors->first('finder_occupation') }}</span>
                        @endif
                        <!-- New Box Content for DOB -->
                        <div class="">
                            <label>Relationship</label>
                            <input name="finder_relationship" class="custom-input bg-white my-1 me-1 text-dark">
                        </div>
                        @if($errors->has('finder_relationship'))
                        <span class="text-danger">{{ $errors->first('finder_relationship') }}</span>
                        @endif

                    </div>

                    <div class="col-sm-12 col-xl-12">



                        <div class="">
                            <label>Problem Presented</label>
                            <input rows="1" name="finder_problem_presented" class="custom-input bg-white my-1 me-1"
                                style="height:100px;">
                        </div>
                        @if($errors->has('finder_problem_presented'))
                        <span class="text-danger">{{ $errors->first('finder_problem_presented') }}</span>
                        @endif
                        <!-- New Box Content for DOB -->
                        <div class="">
                            <label>Background Information</label>
                            <input name="finder_background_information"
                                class="custom-input bg-white my-1 me-1 text-dark" style="height:100px;">
                        </div>
                        @if($errors->has('finder_background_information'))
                        <span class="text-danger">{{ $errors->first('finder_background_information') }}</span>
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
    @endsection