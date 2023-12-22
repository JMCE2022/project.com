@extends('layouts.app')

@section('content')

<div class="m-4">

    <div class="col-sm-12 col-xl-12">
        @include('layouts._message')
        <div class="bg-white rounded h-100 p-4">
            <h6 class="mb-4 text-dark text-center">Children's List</h6>
            <div class="d-flex align-items-center justify-content-between">
                <form action="" class="d-flex">
                    @csrf
                    <input type="search" id="search" class="form-control bg-transparent" name="search"
                        placeholder="Search Here" value="{{ request('search') }}">
                    <button class="btn btn-success m-1" type="submit">Search</button>
                    <button type="button" class="btn btn-success m-1" onclick="clearSearch()">Clear</button>
                </form>
                <div>
                    @if(Auth::user()->user_type == 'Admin')
                    <a class="text-dark text-center me-2 rounded border-bottom border-success"
                        href="{{ url('Admin/Listchildrens/Addchildrens') }}"> <i class="fas fa-user-plus"
                            style="color: #198754;"></i> Add Children</a>
                    <a class="text-dark me-2 rounded border-bottom border-danger"
                        href="{{url('Admin/Listarchivechildren')}}"><i class="fas fa-file-archive fa-1x"
                            style="color: #dc3545;"></i> File Archived</a>
                    @elseif(Auth::user()->user_type == 'Staff')
                    <a class="text-dark text-center me-2 rounded border-bottom border-success"
                        href="{{ url('Staff/Listchildrens/Addchildrens') }}"> <i class="fas fa-user-plus"
                            style="color: #198754;"></i> Add Children</a>
                    <a class="text-dark me-2 rounded border-bottom border-danger"
                        href="{{url('Staff/Listarchivechildren')}}"><i class="fas fa-file-archive fa-1x"
                            style="color: #dc3545;"></i> File Archived</a>
                    @endif
                </div>



            </div>

            <div class="table-responsive">
                <table id="myTable" class="table table-hover text-dark">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Case #</th>
                            <th class="text-center" scope="col">Full Name</th>
                            <th class="text-center" scope="col">Age</th>
                            <th class="text-center" scope="col">Sex</th>
                            <th class="text-center" scope="col">Created By</th>
                            <th class="text-center" scope="col">Date of Admission</th>
                            <th class="text-center" scope="col">Edit</th>
                            <th class="text-center" scope="col">Archive</th>
                            <th class="text-center" scope="col">Preview</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getRecord as $children)
                        <tr>
                            <td class="text-center">{{ $children->id }}</td>
                            <td class="text-center">{{ $children->full_name }}</td>
                            <td class="text-center">{{ $children->age }}</td>
                            <td class="text-center">{{ $children->sex }}</td>
                            <td class="text-center">{{ $children->created_by }}</td>
                            <td class="text-center">{{ $children->created_at }}</td>
                            @if(Auth::user()->user_type == 'Admin')
                            <td class="text-center"><a href="{{ url('Admin/Listchildrens/Edit/'.$children->id) }}"> <i
                                        class="fas fa-edit" style="color: #198754;"></i></a>
                            </td>
                            <td class="text-center">

                                <a href="{{ url('Admin/Listchildrens/Archived/'.$children->id) }}"><i
                                        class="fas fa-archive" style="color: #dc3545;"></i></a>

                            </td>
                            <td class="text-center">

                                <a href="{{ url('Admin/Listchildrens/Preview/'.$children->id) }}"><i class="fas fa-eye"
                                        style="color: #000000;"></i></a>

                            </td>
                            @elseif(Auth::user()->user_type == 'Staff')
                            <td class="text-center"><a href="{{ url('Staff/Listchildrens/Edit/'.$children->id) }}"> <i
                                        class="fas fa-edit" style="color: #198754;"></i></a>
                            </td>
                            <td class="text-center">

                                <a href="{{ url('Staff/Listchildrens/Archived/'.$children->id) }}"><i
                                        class="fas fa-archive" style="color: #dc3545;"></i></a>

                            </td>
                            <td class="text-center">

                                <a href="{{ url('Staff/Listchildrens/Preview/'.$children->id) }}"><i class="fas fa-eye"
                                        style="color: #000000;"></i></a>

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