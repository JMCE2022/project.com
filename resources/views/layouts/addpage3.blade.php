
@if(Auth::user()->user_type == 'Admin')
@if(in_array(Request::segment(3), ['Addfinders', 'Adddevelopments','Addhabits']))
@if(Request::segment(3)== 'Addfinders')
<a class="text-center bg-warning bg-warning  rounded border-bottom border-warning" href="{{url('Admin/Listchildrens/Addfinders')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Finders</span>
</a>
@else
<a class="text-center rounded border-bottom border-warning" href="{{url('Admin/Listchildrens/Addfinders')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Finders</span>
</a>
@endif
@if(Request::segment(3)== 'Adddevelopments')
<a class="text-center rounded bg-warning  border-bottom border-warning" href="{{url('Admin/Listchildrens/Adddevelopments')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Developmental History</span>
</a>
@else
<a class="text-center rounded border-bottom border-warning" href="{{url('Admin/Listchildrens/Adddevelopments')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Developmental History</span>
</a>
@endif
@if(Request::segment(3)== 'Addhabits')
<a class="text-center rounded bg-warning border-bottom border-warning" href="{{url('Admin/Listchildrens/Addhabits')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Habits</span>
</a>
@else
<a class="text-center rounded border-bottom border-warning" href="{{url('Admin/Listchildrens/Addhabits')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Habits</span>
</a>
@endif
@endif
@elseif(Auth::user()->user_type == 'Staff')
@if(in_array(Request::segment(3), ['Addfinders', 'Adddevelopments','Addhabits']))
@if(Request::segment(3)== 'Addfinders')
<a class="text-center bg-warning bg-warning  rounded border-bottom border-warning" href="{{url('Staff/Listchildrens/Addfinders')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Finders</span>
</a>
@else
<a class="text-center rounded border-bottom border-warning" href="{{url('Staff/Listchildrens/Addfinders')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Finders</span>
</a>
@endif
@if(Request::segment(3)== 'Adddevelopments')
<a class="text-center rounded bg-warning  border-bottom border-warning" href="{{url('Staff/Listchildrens/Adddevelopments')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Developmental History</span>
</a>
@else
<a class="text-center rounded border-bottom border-warning" href="{{url('Staff/Listchildrens/Adddevelopments')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Developmental History</span>
</a>
@endif
@if(Request::segment(3)== 'Addhabits')
<a class="text-center rounded bg-warning border-bottom border-warning" href="{{url('Staff/Listchildrens/Addhabits')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-white text-center fs-6 me-1">Habits</span>
</a>
@else
<a class="text-center rounded border-bottom border-warning" href="{{url('Staff/Listchildrens/Addhabits')}}"
    style="width:200px; display: inline-block;">
    <span class="font-weight-bold text-dark text-center fs-6 me-1">Habits</span>
</a>
@endif
@endif
@endif

