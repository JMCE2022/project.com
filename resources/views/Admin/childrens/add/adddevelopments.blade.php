@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Development History</h2>
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


                <div class="col-sm-12 col-xl-12">
                    <div class=" mb-3">
                        <label>Birth History</label>
                        <select class="form-select bg-white text-dark custom-input" name="development_birth_history"
                            aria-label="Floating label select example">
                            <option value="" disabled selected class="text-dark">Select</option>
                            <option value="Full Term">Full Term</option>
                            <option value="Premature">Premature</option>
                            <option value="Borne at Home">Borne at Home</option>
                            <option value="Hospital">Hospital</option>
                            <option value="Normal Delivery">Normal Delivery</option>
                            <option value="Caesarean">Caesarean</option>
                            <option value="Forceps">Forceps</option>
                            <option value="Delivery by Physician">Delivery by Physician</option>
                            <option value="Midwife">Midwife</option>
                            <option value="Hilot">Hilot</option>
                        </select>
                    </div>
                    @if($errors->has('development_birth_history'))
                    <span class="text-danger">{{ $errors->first('development_birth_history') }}</span>
                    @endif
                    <div class=" mb-3">
                        <label>Birth Weight</label>
                        <input type="number"name="development_birth_weight" class="custom-input bg-white">
                    </div>
                    @if($errors->has('development_birth_weight'))
                    <span class="text-danger">{{ $errors->first('development_birth_weight') }}</span>
                    @endif
                    <div class="mb-3">
                        <label>Birth Height</label>
                        <input type="number" name="development_birth_height" class="custom-input bg-white">
                    </div>
                    @if($errors->has('development_birth_height'))
                    <span class="text-danger">{{ $errors->first('development_birth_height') }}</span>
                    @endif


                    <div class="">
                        <label>Describe Abnormalities</label>
                        <input rows="1" type="text" name="development_describe_abnormalities"
                            class="custom-input bg-white my-1 me-1" style="height:100px;">
                    </div>
                    @if($errors->has('development_describe_abnormalities'))
                    <span class="text-danger">{{ $errors->first('development_describe_abnormalities') }}</span>
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