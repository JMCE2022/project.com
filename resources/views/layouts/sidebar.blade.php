<!-- Sidebar Start -->
<div class="sidebar  pe-4 pb-3">
    <nav class="sidebar navbar  navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{asset('images/Login/Logo.png')}}" width="180px" alt="logo"></h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 80px; height: 80px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h3 class="mb-0 text-dark">{{Auth::user()->firstname}}</h3>
                <span class="text-white">{{Auth::user()->user_type}}</span>
            </div>
        </div>
        <div class="navbar-nav  w-100 ">
            <nav class="nav">
                <ul class="ul">
                    @if(Auth::user()->user_type == 'Admin')
                    <li class="li"><a class="a" href="#"><i class="fas fa-tachometer-alt"></i> &nbsp; Dashboard</a></li>
                    <li class="li"><a class="a" href="#"><i class="fas fa-search"></i> &nbsp; Search</a></li>
                    <li class="li"><a class="a" href="#"><i class="fas fa-user-plus"></i> &nbsp; Add Children</a></li>
                    <li class="li"><a class="a" href="#"><i class="fas fa-file-import"></i> &nbsp; Form Pic/Reports</a>
                    </li>
                    @elseif(Auth::user()->user_type == 'Staff')
                    <li class="li"><a class="a" href="#"><i class="fas fa-tachometer-alt"></i> &nbsp; Dashboard</a></li>
                    <li class="li"><a class="a" href="#"><i class="fas fa-search"></i> &nbsp; Search</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Sidebar End -->