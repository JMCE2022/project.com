@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Guardians</h2>
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
                <div class="col-sm-12 col-xl-12">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf

                        <label>Select Child</label>
                        <select name="children_id" class="custom-input">
                            <option value="" disabled selected>Select a child</option>
                            @foreach($getRecord as $child)
                            <option value="{{ $child->id }}">{{ $child->id }} - {{ $child->full_name }}</option>
                            @endforeach
                        </select>
                </div>

                @if($errors->has('children_id'))
                
                    <span class="text-danger">{{ $errors->first('children_id') }}</span>
                    @endif
                    <div class="col-sm-12 col-xl-12">
                </div>
               
                
                <div class="col-md-6 ">


                    <div class=" mb-3">
                        <label>Full Name</label>
                        <input name="guardian_name" class="custom-input bg-white">
                    </div>
                    @if($errors->has('guardian_fullname'))
                    <span class="text-danger">{{ $errors->first('guardian_fullname') }}</span>
                    @endif
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="number" name="guardian_age" class="custom-input bg-white">
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
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        @if($errors->has('sex'))
                        <span class="text-danger">{{ $errors->first('sex') }}</span>
                        @endif
                    <div class=" mb-3">
                        <label>Occupation</label>
                        <input  name="guardian_occupation" class="custom-input bg-white">
                    </div>
                    @if($errors->has('guardian_occupation'))
                    <span class="text-danger">{{ $errors->first('guardian_occupation') }}</span>
                    @endif
                    

                </div>

                <div class="col-sm-12 col-xl-12">



                    <div class="">
                        <label>Circumstances of Guardian</label>
                        <input rows="1" name="guardian_circumstances_of_guardian" class="custom-input bg-white my-1 me-1"></input>
                    </div>
                    @if($errors->has('guardian_circumstances_of_guardian'))
                    <span class="text-danger">{{ $errors->first('guardian_circumstances_of_guardian') }}</span>
                    @endif
                    <!-- New Box Content for DOB -->
                    <div class="">
                        <label>Economic Situation of the Family</label>
                        <input name="guardian_economic_situation_of_the_family" class="custom-input bg-white my-1 me-1 text-dark">
                    </div>
                    @if($errors->has('guardian_economic_situation_of_the_family'))
                    <span class="text-danger">{{ $errors->first('guardian_economic_situation_of_the_family') }}</span>
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