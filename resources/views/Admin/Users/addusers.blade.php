@extends('layouts.app')

@section('content')

<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Users</h2>
    </div>
    <div class="col-sm-12 col-xl-12">
        <div class="bg-white rounded h-100 p-4 text-dark">
            <form method="post" action="">
                @csrf
                <div class="mb-3">
                    <label class="form-label ">First Name</label>
                    <input type="text" name="firstname" class="form-control bg-transparent" placeholder="ex. Juan"
                        requried>
                </div>
                <div class="mb-3">
                    <label class="form-label ">Last Name</label>
                    <input type="text" name="lastname" class="form-control bg-transparent" placeholder="ex. Dela Cruz"
                        required>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select bg-transparent" name="user_type" required
                        aria-label="Floating label select example">
                        <option disabled selected>Open this select menu</option>
                        <option value="Staff">Staff</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <label for="floatingSelect">Role of this Account</label>
                </div>
                <div class="mb-3">
                    <label class="form-label ">Username</label>
                    <input type="text" class="form-control bg-transparent" name="username" placeholder="ex. Juan2023"
                        required>
                </div>
                @if($errors->has('username'))
            <span class="text-danger">{{ $errors->first('username') }}</span>
            @endif

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control bg-transparent" name="password" placeholder="*******"
                        required>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class=" btn btn-outline-primary  m-2" href="{{url('Admin/Listusers')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection