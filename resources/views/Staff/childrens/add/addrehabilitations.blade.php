@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Rehabilitations</h2>
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
                        <label>1. To restore/develop social functioning of the child.</label>
                        <input type="text"name="rehabilitation_restore_develop" class="custom-input bg-white" style="height:100px;">
                    </div>
                    @if($errors->has('rehabilitation_restore_develop'))
                    <span class="text-danger">{{ $errors->first('rehabilitation_restore_develop') }}</span>
                    @endif
                    <div class="mb-3">
                        <label>2. To improve the nutritional and health status of the child.</label>
                        <input type="text" name="rehabilitation_improve" class="custom-input bg-white " style="height:100px;">
                    </div>
                    @if($errors->has('rehabilitation_improve'))
                    <span class="text-danger">{{ $errors->first('rehabilitation_improve') }}</span>
                    @endif


                    <div class="">
                        <label>3. To reintegrate child to parents and/ or relatives.</label>
                        <input type="text" name="rehabilitation_reintegrate"
                            class="custom-input bg-white my-1 me-1" style="height:100px;">
                    </div>
                    @if($errors->has('rehabilitation_reintegrate'))
                    <span class="text-danger">{{ $errors->first('rehabilitation_reintegrate') }}</span>
                    @endif
                    <div class="">
                        <label>4. To placed out child for adoption.</label>
                        <input type="text" name="rehabilitation_placed"
                            class="custom-input bg-white my-1 me-1" style="height:100px;">
                    </div>
                    @if($errors->has('rehabilitation_placed'))
                    <span class="text-danger">{{ $errors->first('rehabilitation_placed') }}</span>
                    @endif

                    <div class="">
                        <label>5. To refer child to foster care placement.</label>
                        <input type="text" name="rehabilitation_refer"
                            class="custom-input bg-white my-1 me-1" style="height:100px;">
                    </div>
                    @if($errors->has('rehabilitation_refer'))
                    <span class="text-danger">{{ $errors->first('rehabilitation_refer') }}</span>
                    @endif
                    <div class="">
                        <label>6. To transfer child to other institution that can provide the necessary services needed by the child.</label>
                        <input type="text" name="rehabilitation_transfer"
                            class="custom-input bg-white my-1 me-1" style="height:100px;">
                    </div>
                    @if($errors->has('rehabilitation_transfer'))
                    <span class="text-danger">{{ $errors->first('rehabilitation_transfer') }}</span>
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