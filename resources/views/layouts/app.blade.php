<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RECEPTION AND STUDY CENTER FOR CHILDREN (RSCC)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<style>
    .header {
        background-color: #3f67bc;
    }

    .sidebar {
        background-color: #cc3e3d;
    }

    .container-fluid {
        background-color: #eeeeee;
    }

    .drop {
        background-color: #3f67bc;
    }

    /*sidebar-Menu*/
    .nav .ul {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 260px;
        top: 0;
        left: 0;

    }

    .nav .ul .li {
        list-style: none;
    }

    .nav .ul .li .a {
        display: block;
        font-family: montserrat;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 20px;
        color: #fff;
        position: relative;
        padding: 25px 0 25px 25px;
    }

    .nav .ul .li .a:before {
        content: ' ';
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        background: #e3e9f7;
        border-radius: 40px 0 0 40px;
        z-index: -1;
        transition: all 300ms ease-in-out;
    }

    .nav .ul .li .a:hover {
        color: #2b2626;
    }

    .nav .ul .li .a:hover:before {
        width: 95%;
    }

    /*nav-rightside*/
    .nav-right .ul-right {
        margin: 0;
        padding: 0;
        height: 100%;
        top: 0;
        left: 0;

    }

    .nav-right .ul-right .li-right {
        list-style: none;
    }

    .nav-right .ul-right .li-right .a-right {
        display: block;
        font-family: montserrat;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 12px;
        color: #fff;
        position: relative;
        padding: 25px 0 25px 25px;
    }

    .nav-right .ul-right .li-right .a-right:before {
        content: ' ';
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        background: #e3e9f7;
        border-radius: 0 40px 40px 0;
        z-index: -1;
        transition: all 300ms ease-in-out;
    }

    .nav-right .ul-right .li-right .a-right:hover {
        color: #2b2626;
    }

    .nav-right .ul-right .li-right .a-right:hover:before {
        width: 100%;
    }
</style>

<body>
    <div class="container-fluid position-relative d-flex p-0 ">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        @include('layouts.sidebar')


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('layouts.header')




           @yield('content')
            @include('layouts.footer')
        </div>

    </div>






    <!-- Sales Chart End -->










    <!-- Footer Start -->

    <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>