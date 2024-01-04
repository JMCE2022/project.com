<!-- Sidebar Start -->
<div class="sidebar  pe-4 pb-3 ">
    <nav class="sidebar navbar  navbar-dark ">
        <a class="navbar-brand mx-4">
       
        <img class=" rounded my-3 d-flex align-items-center justify-content-around " src="{{ asset('public/accountprofile/' . Auth::user()->profile_pic) }}"
                    style="width: 200px; height:200px;">
                    <div class=" text-center">
                <h4 class="ext-white text-capitalize">Hi, {{Auth::user()->firstname}}!</h4>
                <span class="text-white">{{Auth::user()->user_type}}</span>
            </div>
            
        </a>
       
        <div class="navbar-nav  w-100 ">
            <nav class="nav">
                <ul class="ul">
                    @if(Auth::user()->user_type == 'Admin')
                    <li class="li">
                        @if(Request::segment(2)== 'Dashboard')
                        <a class="custom-active text-white text-center" href="{{url('Admin/Dashboard')}}"><i
                                class="fas fa-tachometer-alt "></i>&nbsp; Dashboard</a>
                        @else
                        <a class="" href="{{url('Admin/Dashboard')}}"><i class="fas fa-tachometer-alt "></i>&nbsp;
                            Dashboard</a>
                        @endif

                        @if(in_array(Request::segment(2), ['Listusers', 'Listarchive']))
                        <a class=" custom-active text-white " href="{{url('Admin/Listusers')}}"><i
                                class="fas fa-users"></i> &nbsp; List of User</a>
                        @else
                        <a class="  " href="{{url('Admin/Listusers')}}"><i class="fas fa-users"></i> &nbsp; List of
                            User</a>
                        @endif

                        @if(in_array(Request::segment(2), ['Listchildrens', 'Listarchivechildren']))

                        <a class=" custom-active text-white " href="{{url('Admin/Listchildrens')}}"><i
                                class="fas fa-child"></i> &nbsp; List of Children</a>
                        @else
                        <a class="  " href="{{url('Admin/Listchildrens')}}"><i class="fas fa-child" ></i> &nbsp; List of
                            Children</a>
                        @endif


                        @if(Request::segment(2)== 'Form')
                        <a class="custom-active text-white" href="{{url('Admin/Form/pic1')}}"><i
                                class="fas fa-file-import"></i> &nbsp; Forms/Reports</a>
                        @else
                        <a class="" href="{{url('Admin/Form/pic1')}}"><i class="fas fa-file-import"></i> &nbsp;
                            Forms/Reports</a>
                        @endif

                    </li>
                    @elseif(Auth::user()->user_type == 'Staff')
                    <li class="li">
                        @if(Request::segment(2)== 'Dashboard')
                        <a class="custom-active text-white" href="{{url('Staff/Dashboard')}}"><i
                                class="fas fa-tachometer-alt "></i>&nbsp; Dashboard</a>
                        @else
                        <a class="" href="{{url('Staff/Dashboard')}}"><i class="fas fa-tachometer-alt "></i>&nbsp;
                            Dashboard</a>
                        @endif


                        @if(in_array(Request::segment(2), ['Listchildrens', 'Listarchivechildren']))

                        <a class=" custom-active text-white " href="{{url('Staff/Listchildrens')}}"><i
                                class="fas fa-child" ></i> &nbsp; List of Children</a>
                        @else
                        <a class="  " href="{{url('Staff/Listchildrens')}}"><i class="fas fa-child" ></i> &nbsp; List of
                            Children</a>
                        @endif


                        @if(Request::segment(2)== 'Form')
                        <a class="custom-active text-white" href="{{url('Staff/Form/pic1')}}"><i
                                class="fas fa-file-import"></i> &nbsp; Forms/Reports</a>
                        @else
                        <a class="" href="{{url('Staff/Form/pic1')}}"><i class="fas fa-file-import"></i> &nbsp;
                            Forms/Reports</a>
                        @endif

                    </li>
                    @endif

                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Sidebar End -->