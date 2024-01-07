@extends('layouts.app')

@section('content')

<div class="m-4">

    <div class="col-sm-12 col-xl-12">
        @include('layouts._message')
        <div class="bg-white rounded h-100 p-4">
            <h6 class="mb-4 text-dark text-center">List of Discharged</h6>
            <div class="d-flex align-items-center justify-content-between">
                <form action="" class="d-flex">
                    @csrf
                    <input type="search" id="search" class="form-control bg-transparent" name="search"
                        placeholder="Search Here" value="{{ request('search') }}">
                    <button class="btn btn-success m-1" type="submit">Search</button>
                    <button type="button" class="btn btn-success m-1" onclick="clearSearch()">Clear</button>
                </form>
                @php
                $counter = 1;
                @endphp
                @if(Auth::user()->user_type == 'Admin')
                <a class="text-dark rounded border-bottom border-danger" href="{{url('Admin/Listchildrens')}}"><i
                        class="fas fa-sign-out-alt " style="color: #dc3545;"></i> Back</a>
                @elseif(Auth::user()->user_type == 'Staff')
                <a class="text-dark rounded border-bottom border-danger" href="{{url('Staff/Listchildrens')}}"><i
                        class="fas fa-sign-out-alt " style="color: #dc3545;"></i> Back</a>
                @endif


            </div>

            <div class="table-responsive">
                <table class="table table-hover text-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Case #</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Date of Admission</th>
                         <th scope="col">Discharge Date</th> <!--   Add this column -->
                            <th scope="col">Restore</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getRecord as $children)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $children->id }}</td>
                            <td>{{ $children->firstname }} {{ $children->lastname }}</td>
                            <td>{{ $children->age }}</td>
                            <td>{{ $children->sex }}</td>
                            <td>{{ $children->created_by }}</td>
                            <td>{{ $children->created_at }}</td>
                            <td>{{ $children->discharge_date }}</td> <!--Display discharge date -->
                            @if(Auth::user()->user_type == 'Admin' || Auth::user()->user_type == 'Staff')
                            <td class="text-center">
                                <a href="{{ url(Auth::user()->user_type.'/Listchildrens/Archive/'.$children->id) }}"><i
                                        class="fas fa-trash-restore" style="color: #198754;"></i></a>
                            </td>
                            @endif
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
