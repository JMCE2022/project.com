@if(Auth::user()->user_type == 'Admin')
@if(in_array(Request::segment(3), ['Addchildrens', 'Addinfofamilies','Addsiblings','Addguardians']))
@if(Request::segment(3) == 'Addchildrens' )
<a class="text-center bg-info  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addchildrens')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Child Information</span>
</a>
@else
<a class="text-center rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addchildrens')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Child Information</span>
</a>
@endif
@if(Request::segment(3) == 'Addinfofamilies' )
<a class="text-center bg-info  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addinfofamilies')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Family
        Compositions</span>
</a>
@else
<a class="text-center rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addinfofamilies')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Family
        Compositions</span>
</a>
@endif
@if(Request::segment(3) == 'Addsiblings' )
<a class="text-center rounded  bg-info border-bottom border-info" href="{{url('Admin/Listchildrens/Addsiblings')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Siblings</span>
</a>
@else
<a class="text-center rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addsiblings')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Siblings</span>
</a>
@endif
@if(Request::segment(3) == 'Addguardians' )
<a class="text-center  bg-info  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addguardians')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Guardians</span>
</a>
@else
<a class="text-center  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addguardians')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Guardians</span>
</a>
@endif
@endif
@elseif(Auth::user()->user_type == 'Staff')
@if(in_array(Request::segment(3), ['Addchildrens', 'Addinfofamilies','Addsiblings','Addguardians']))
@if(Request::segment(3) == 'Addchildrens' )
<a class="text-center bg-info  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addchildrens')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Child Information</span>
</a>
@else
<a class="text-center rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addchildrens')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Child Information</span>
</a>
@endif
@if(Request::segment(3) == 'Addinfofamilies' )
<a class="text-center bg-info  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addinfofamilies')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Family
        Compositions</span>
</a>
@else
<a class="text-center rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addinfofamilies')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Family
        Compositions</span>
</a>
@endif
@if(Request::segment(3) == 'Addsiblings' )
<a class="text-center rounded  bg-info border-bottom border-info" href="{{url('Admin/Listchildrens/Addsiblings')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Siblings</span>
</a>
@else
<a class="text-center rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addsiblings')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Siblings</span>
</a>
@endif
@if(Request::segment(3) == 'Addguardians' )
<a class="text-center  bg-info  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addguardians')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Guardians</span>
</a>
@else
<a class="text-center  rounded border-bottom border-info" href="{{url('Admin/Listchildrens/Addguardians')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Guardians</span>
</a>
@endif
@endif
@endif




