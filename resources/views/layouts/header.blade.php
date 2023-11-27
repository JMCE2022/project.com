<nav class="header navbar navbar-expand  navbar-dark sticky-top px-4 py-0">

    <a href="#" class="sidebar-toggler flex-shrink-0 bg-white">
        <i class="fa fa-bars" style="color:black;"></i>
    </a>
    <div class=" ms-auto row text-center align-items-center ">
        <div class="col  ">
            <img src="{{asset('images/Login/Logo.png')}}" width="150px" alt="Your Image Alt Text">
        </div>
        <div class="col fs-6">
            <h6>RECEPTION AND STUDY CENTER FOR CHILDREN (RSCC)</h6>
        </div>
    </div>

    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">


            <div class="nav-item dropdown">


            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex text-white">{{Auth::user()->firstname}}
                        {{Auth::user()->lastname}}</span>
                </a>
                <div class="drop dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
                    <nav class="nav-right">
                        <ul class="ul-right">
                           <li class="li-right"><a class="a-right" href="#" class="dropdown-item text-dark">My Profile</a></li>
                           <li class="li-right"><a class="a-right" href="#" class="dropdown-item text-dark">Settings</a></li>
                           <li class="li-right"><a class="a-right" href="{{route('logoutButton')}}" class="dropdown-item text-dark">Log Out</a></li>
                    </nav>
                    </ul>
                </div>
            </div>
        </div>
</nav>
<!-- Navbar End -->