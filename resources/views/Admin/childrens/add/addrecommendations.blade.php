@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Recommendation, Plan of Action & Action Taken</h2>
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
                        <select name="children_id" class="custom-input mb-2">
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


                <div class="col-sm-12 col-xl-12">
                   
                    <div class=" mb-3">
                        <label>Recommendation</label>
                        <input type="text"name="recommendation_recommendation" class="custom-input bg-white" style="height:100px;">
                    </div>
                    @if($errors->has('recommendation_recommendation'))
                    <span class="text-danger">{{ $errors->first('recommendation_recommendation') }}</span>
                    @endif
                    <div class="mb-3">
                        <label>Plan of Action</label>
                        <input type="text" name="recommendation_plan_of_action" class="custom-input bg-white " style="height:100px;">
                    </div>
                    @if($errors->has('recommendation_plan_of_action'))
                    <span class="text-danger">{{ $errors->first('recommendation_plan_of_action') }}</span>
                    @endif


                    <div class="">
                        <label>Action Taken</label>
                        <input type="text" name="recommendation_action_taken"
                            class="custom-input bg-white my-1 me-1" style="height:100px;">
                    </div>
                    @if($errors->has('recommendation_action_taken'))
                    <span class="text-danger">{{ $errors->first('recommendation_action_taken') }}</span>
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