@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Habits</h2>
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
                                <option value="{{ $child->id }}">{{ $child->id }} - {{ $child->full_name }}</option>
                                @endforeach
                            </select>
                    </div>

                    @if($errors->has('children_id'))
                    <div class="col-sm-12 col-xl-12">
                        <span class="text-danger">{{ $errors->first('children_id') }}</span>
                    </div>
                    @endif

                    <h6 class="text-dark text-center my-4">Habits</h6>

                    <div class="col-sm-12 col-xl-12">
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_bedwetting" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Bedwetting</label>
                        </div>
                        @if($errors->has('habit_bedwetting'))
                        <span class="text-danger">{{ $errors->first('habit_bedwetting') }}</span>
                        @endif
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_thumb_sucking" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Thumb Sucking</label>
                        </div>
                        @if($errors->has('habit_bedwetting'))
                        <span class="text-danger">{{ $errors->first('habit_bedwetting') }}</span>
                        @endif
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_nail_biting" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Nail Biting</label>
                        </div>
                        @if($errors->has('habit_nail_biting'))
                        <span class="text-danger">{{ $errors->first('habit_nail_biting') }}</span>
                        @endif

                        <div class=" mb-3">
                            <label>Others</label>
                            <input type="text" name="habit_others" class="custom-input bg-white" style="height:100px;">
                        </div>
                        @if($errors->has('habit_others'))
                        <span class="text-danger">{{ $errors->first('habit_others') }}</span>
                        @endif


                        <h6 class="text-dark text-center my-4">Disease During Childhood</h6>



                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_measles" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Measles</label>
                        </div>
                        @if($errors->has('habit_measles'))
                        <span class="text-danger">{{ $errors->first('habit_measles') }}</span>
                        @endif
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_chickenpox" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Chickenpox</label>
                        </div>
                        @if($errors->has('habit_chickenpox'))
                        <span class="text-danger">{{ $errors->first('habit_chickenpox') }}</span>
                        @endif
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_mumps" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Mumps</label>
                        </div>
                        @if($errors->has('habit_mumps'))
                        <span class="text-danger">{{ $errors->first('habit_mumps') }}</span>
                        @endif
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_allergy" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Allergy</label>
                        </div>
                        @if($errors->has('habit_allergy'))
                        <span class="text-danger">{{ $errors->first('habit_allergy') }}</span>
                        @endif
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_convulsions" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Convulsions</label>
                        </div>
                        @if($errors->has('habit_convulsions'))
                        <span class="text-danger">{{ $errors->first('habit_convulsions') }}</span>
                        @endif
                        <div class="form-check mr-sm-2">
                            <input value="Yes" name="habit_primary_complex" type="checkbox" class="form-check-input" />
                            <label class="form-check-label mb-0">Primary Complex</label>
                        </div>
                        @if($errors->has('habit_primary_complex'))
                        <span class="text-danger">{{ $errors->first('habit_primary_complex') }}</span>
                        @endif

                        <div class=" mb-3">
                            <label>Others and Specify</label>
                            <input type="text" name="habit_other_specify" class="custom-input bg-white"
                                style="height:100px;">
                        </div>
                        @if($errors->has('habit_other_specify'))
                        <span class="text-danger">{{ $errors->first('habit_other_specify') }}</span>
                        @endif
                        <div class=" mb-3">
                            <label>Motor Development (describe, when, include problems, if any)</label>
                            <input type="text" name="habit_motor_development" class="custom-input bg-white"
                                style="height:100px;">
                        </div>
                        @if($errors->has('habit_motor_development'))
                        <span class="text-danger">{{ $errors->first('habit_motor_development') }}</span>
                        @endif
                        <div class=" mb-3">
                            <label>Toilet Training (describe, when, include problems, if any)</label>
                            <input type="text" name="habit_toilet_training" class="custom-input bg-white"
                                style="height:100px;">
                        </div>
                        @if($errors->has('habit_toilet_training'))
                        <span class="text-danger">{{ $errors->first('habit_toilet_training') }}</span>
                        @endif


                        <!-- New Box Content for DOB -->

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