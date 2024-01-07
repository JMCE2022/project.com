@extends('layouts.app')

@section('content')

<div class="m-4">

    <div class="col-sm-12 col-xl-12">
        @include('layouts._message')
        <div class="bg-white rounded h-100 p-4">
            <h6 class="mb-4 text-dark text-center">List of Users</h6>
            <div class="d-flex align-items-center justify-content-between">
                <form action="" class="d-flex">
                    @csrf
                    <input type="search" id="search" class="form-control bg-transparent" name="search"
                        placeholder="Search Here" value="{{ request('search') }}">
                    <button class="btn btn-success m-1" type="submit">Search</button>
                    <button type="button" class="btn btn-success m-1" onclick="clearSearch()">Clear</button>
                </form>
                <div>
                    <a class="text-dark text-center me-2 rounded border-bottom border-success"
                        href="{{ url('Admin/Listusers/Addusers') }}"> <i class="fas fa-user-plus"
                            style="color: #198754;"></i> Add Users</a>
                    <a class="text-dark me-2 rounded border-bottom border-danger" href="{{url('Admin/Listarchive')}}"><i
                            class="fas fa-file-archive fa-1x" style="color: #dc3545;"></i> File Archived</a>
                </div>
            </div>
            @php
            $counter = 1;
            @endphp

            <div class="table-responsive">
                <table class="table table-hover text-dark">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">First Name</th>
                            <th class="text-center" scope="col">Last Name</th>
                            <th class="text-center" scope="col">Role</th>
                            <th class="text-center" scope="col">Username</th>
                            <th class="text-center" scope="col">Created Date</th>
                            <th class="text-center" scope="col">Edit</th>
                            <th class="text-center" scope="col">Archive</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getRecord as $user)
                        <tr>
                            <td class="text-center">{{ $counter++ }}</td>
                            <td class="text-center">{{ $user->firstname }}</td>
                            <td class="text-center">{{ $user->lastname }}</td>
                            <td class="text-center">{{ $user->user_type }}</td>
                            <td class="text-center">{{ $user->username }}</td>
                            <td class="text-center">{{ $user->created_at }}</td>
                            <td class="text-center"><a href="{{ url('Admin/Listusers/Edit/'.$user->id) }}"> <i
                                        class="fas fa-edit" style="color: #198754;"></i></a>
                            </td>
                            <td class="text-center">

                                <a href="{{ url('Admin/Listusers/Archived/'.$user->id) }}"><i class="fas fa-archive"
                                        style="color: #dc3545;"></i></a>

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