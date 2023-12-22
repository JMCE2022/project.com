@extends('layouts.app')

@section('content')

<div class="m-4">
    
    <div class="col-sm-12 col-xl-12">
    @include('layouts._message')
        <div class="bg-white rounded h-100 p-4">
            <h6 class="mb-4 text-dark text-center">List of Archived</h6>
            <div class="d-flex align-items-center justify-content-between">
            <form action="" class="d-flex">
                    @csrf
                    <input type="search" id="search" class="form-control bg-transparent" name="search"
                        placeholder="Search Here" value="{{ request('search') }}">
                    <button class="btn btn-success m-1" type="submit">Search</button>
                    <button type="button" class="btn btn-success m-1" onclick="clearSearch()">Clear</button>
                </form>
                <a class="text-dark rounded border-bottom border-danger" href="{{url('Admin/Listchildrens')}}"><i class="fas fa-sign-out-alt " style="color: #dc3545;"></i> Back</a>
                
              
                
            </div>
          
            <div class="table-responsive">
                <table class="table table-hover text-dark">
                    <thead>
                        <tr>
                            <th scope="col">Case #</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Date of Admission</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getRecord as $children)
                        <tr>
                            <td>{{ $children->id }}</td>
                            <td>{{ $children->full_name }}</td>
                            <td>{{ $children->age }}</td>
                            <td>{{ $children->sex }}</td>
                            <td>{{ $children->created_by }}</td>
                            <td>{{ $children->created_at }}</td>
                            <td class="text-center">

                                <a href="{{ url('Admin/Listchildrens/Archive/'.$children->id) }}"><i
                                        class="fas fa-trash-restore" style="color: #198754;"></i></a>

                            </td>
                            <td class="text-center">
                                @include('layouts.deletePermanentChildrens')
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$getRecord->onEachSide(1)->links()}}
                
            </div>
        </div>
    </div>
</div>

@endsection
