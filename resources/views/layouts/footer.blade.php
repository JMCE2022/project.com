<div class="container-fluid  pt-4 px-4">
    @if(in_array(Request::segment(3), ['Addchildrens', 'Addinfofamilies','Addsiblings','Addguardians']))
    <ul class="nav nav-pills footer-pills">
        @if(Request::segment(3) == 'Addchildrens' )
        <li class="nav-item">
            <a class=" btn btn-outline-primary active m-2" href="{{url('Admin/Listchildrens/Addchildrens')}}">Child Information</a>
        </li>
        @else
        <li class="nav-item">
            <a class=" btn btn-outline-primary m-2" href="{{url('Admin/Listchildrens/Addchildrens')}}">Child Information</a>
        </li>
        @endif

        @if(Request::segment(3) == 'Addinfofamilies' )
        <li class="nav-item">
            <a class="btn btn-outline-primary active m-2" href="{{url('Admin/Listchildrens/Addinfofamilies')}}">Family
                Compositions</a>
        </li>
        @else
        <li class="nav-item">
            <a class="btn btn-outline-primary m-2" href="{{url('Admin/Listchildrens/Addinfofamilies')}}">Family
                Compositions</a>
        </li>

        @endif
        @if(Request::segment(3) == 'Addsiblings' )
        <li class="nav-item">
            <a class="btn btn-outline-primary active m-2" href="{{url('Admin/Listchildrens/Addsiblings')}}">Siblings</a>
        </li>
        @else
        <li class="nav-item">
            <a class="btn btn-outline-primary m-2" href="{{url('Admin/Listchildrens/Addsiblings')}}">Siblings</a>
        </li>
        @endif
        @if(Request::segment(3) == 'Addguardians' )
        <li class="nav-item">
            <a class="btn btn-outline-primary active m-2" href="{{url('Admin/Listchildrens/Addguardians')}}">Guardians</a>
        </li>
        @else
        <li class="nav-item">
            <a class="btn btn-outline-primary m-2" href="{{url('Admin/Listchildrens/Addguardians')}}">Guardians</a>
        </li>
        @endif
    </ul>
    @endif
    <!--Background-->
    @if(in_array(Request::segment(3), ['Addfinders', 'Adddevelopments','Addhabits']))
    <ul class="nav nav-pills footer-pills">
        @if(Request::segment(3) == 'Addfinders' )
        <li class="nav-item">
            <a class=" btn btn-outline-primary active m-2" href="{{url('Admin/Listchildrens/Addfinders')}}">Finders</a>
        </li>
        @else
        <li class="nav-item">
            <a class=" btn btn-outline-primary m-2" href="{{url('Admin/Listchildrens/Addfinders')}}">Finders</a>
        </li>
        @endif

        @if(Request::segment(3) == 'Adddevelopments' )
        <li class="nav-item">
            <a class="btn btn-outline-primary active m-2" href="{{url('Admin/Listchildrens/Adddevelopments')}}">Developmental History</a>
        </li>
        @else
        <li class="nav-item">
            <a class="btn btn-outline-primary m-2" href="{{url('Admin/Listchildrens/Adddevelopments')}}">Developmental History</a>
        </li>

        @endif
        @if(Request::segment(3) == 'Addhabits' )
        <li class="nav-item">
            <a class="btn btn-outline-primary active m-2" href="{{url('Admin/Listchildrens/Addhabits')}}">Habits</a>
        </li>
        @else
        <li class="nav-item">
            <a class="btn btn-outline-primary m-2" href="{{url('Admin/Listchildrens/Addhabits')}}">Habits</a>
        </li>
        @endif
    </ul>
    @endif
    <div class="bg-white rounded-top p-4  ">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                &copy; <a href="#">DSWD-RSCC</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Developed By: <a href="https://www.messenger.com/t/5072999872738575">TRIO</a>
                <br>OJT Students : <a href="https://www.facebook.com/USePofficial" target="_blank">University of
                    Southeastern Philippines</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer End -->