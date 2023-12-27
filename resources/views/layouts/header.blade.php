<nav class="header navbar navbar-expand  navbar-dark sticky-top px-4 py-0 border-bottom border-info">

    <a href="#" class="sidebar-toggler flex-shrink-0 bg-white ">
        <i class="fa fa-bars" style="color:black;"></i>
    </a>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-primary"><img src="{{asset('images/Admin/Logo2.png')}}" width="180px" alt="logo"></h3>
        </div>
        <div class="col-md-6">
            <img src="{{asset('images/Admin/bagongpilipinas.png')}}" width="180px" height="60px" alt="logo">
        </div>
    </div>
    <div class=" ms-auto row text-center align-items-center ">
       
        <div class="col fs-6">
            <h4 class="text-dark">RECEPTION AND STUDY CENTER FOR CHILDREN (RSCC)</h4>
        </div>
    </div>

    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">


            <div class="nav-item dropdown">


            </div>
            <div class="nav-item dropdown ">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2"
                        src="{{ asset('public/accountprofile/' . Auth::user()->profile_pic) }}" alt=""
                        style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex text-dark text-capitalize">{{Auth::user()->firstname}}
                        {{Auth::user()->lastname}}</span>
                </a>
                <div class="drop dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                    <nav class="nav-right">
                        <ul class="ul-right">
                            @if(Auth::user()->user_type == 'Admin')
                            <li class="li-right"><a class="a-right" href="{{url('/Admin/Myprofile/Myaccount')}}"
                                    class="dropdown-item text-dark">My Profile</a></li>
                            @elseif(Auth::user()->user_type == 'Staff')
                            <li class="li-right"><a class="a-right" href="{{url('/Staff/Myprofile/Myaccount')}}"
                                    class="dropdown-item text-dark">My Profile</a></li>
                            @endif
                           
                            <li class="li-right"><a class="a-right" href="{{route('logoutButton')}}"
                                    class="dropdown-item text-dark">Log Out</a></li>
                    </nav>
                    </ul>
                </div>
            </div>
        </div>
</nav>
<!-- Navbar End -->