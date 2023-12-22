@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Information Family</h2>
    </div>
    @include('layouts._message')

    <div class="container-fluid pt-4 px-4 text-dark">
        <div class="container bg-white rounded">
            <div class="row pt-4">
                <div class="col-md-3">
                    @include('layouts.addpage')
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
                    <div class="col-sm-12 col-xl-12">
                        <span class="text-danger">{{ $errors->first('children_id') }}</span>
                    </div>
                    @endif
                    <div class="col-md-6 ">


                        <div class=" mb-3">
                            <label>Name of Father</label>
                            <input name="infofamily_name_of_father" class="custom-input bg-white">
                        </div>
                        @if($errors->has('infofamily_name_of_father'))
                        <span class="text-danger">{{ $errors->first('infofamily_name_of_father') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Name of Mother</label>
                            <input name="infofamily_name_of_mother" class="custom-input bg-white">
                        </div>
                        @if($errors->has('infofamily_name_of_mother'))
                        <span class="text-danger">{{ $errors->first('infofamily_name_of_mother') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class=" mb-3">
                            <label>Age of Father</label>
                            <input name="infofamily_age_of_father" class="custom-input bg-white">
                        </div>
                        @if($errors->has('infofamily_age_of_father'))
                        <span class="text-danger">{{ $errors->first('infofamily_age_of_father') }}</span>
                        @endif
                        <div class="mb-3">
                            <label>Age of Mother</label>
                            <input name="infofamily_age_of_mother" class="custom-input bg-white">
                        </div>
                        @if($errors->has('infofamily_age_of_mother'))
                        <span class="text-danger">{{ $errors->first('infofamily_age_of_mother') }}</span>
                        @endif

                    </div>

                    <div class="col-sm-12 col-xl-12">



                        <div class="">
                            <label>Address</label>
                            <input rows="1" name="infofamily_address" class="custom-input bg-white my-1 me-1"></input>
                        </div>
                        @if($errors->has('infofamily_address'))
                        <span class="text-danger">{{ $errors->first('infofamily_address') }}</span>
                        @endif
                        <!-- New Box Content for DOB -->
                        <div class="">
                            <label>Occupation Father</label>
                            <input name="infofamily_occupation" class="custom-input bg-white my-1 me-1 text-dark">
                        </div>
                        @if($errors->has('infofamily_occupation'))
                        <span class="text-danger">{{ $errors->first('infofamily_occupation') }}</span>
                        @endif
                        <div class="">
                            <label>Occupation Mother</label>
                            <input name="infofamily_occupation_mother"
                                class="custom-input bg-white my-1 me-1 text-dark">
                        </div>
                        @if($errors->has('infofamily_occupation_mother'))
                        <span class="text-danger">{{ $errors->first('infofamily_occupation_mother') }}</span>
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