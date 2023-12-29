@if(Auth::user()->user_type == 'Admin')
@if(in_array(Request::segment(3), ['Addchildrens', 'Addinfofamilies','Addsiblings','Addguardians']))
<a href="{{url('Admin/Listchildrens/Addchildrens')}}" class="text-decoration-none">
    <div class="clickable-box shadow p-3 mb-5 bg-info rounded " style="height: 120px;">
        <span class="font-weight-bold text-white text-center fs-6">I. Identification Information</span>
    </div>
</a>
</div>
@else
<a href="{{url('Admin/Listchildrens/Addchildrens')}}" class="text-decoration-none">
    <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-info" style="height: 120px;">
        <span class="font-weight-bold text-dark text-center fs-6">I. Identification Information</span>
    </div>
</a>
</div>
@endif
@if(in_array(Request::segment(3), ['Addfinders', 'Adddevelopments','Addhabits']))
<div class="col-md-3">
    <a href="{{url('Admin/Listchildrens/Addfinders')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-warning rounded " style="height: 120px;">
            <span class="font-weight-bold text-white text-center fs-6">II & III, IV. Background Info. and Problem
                Presented</span>
        </div>
    </a>
</div>
@else
<div class="col-md-3">
    <a href="{{url('Admin/Listchildrens/Addfinders')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-warning" style="height: 120px;">
            <span class="font-weight-bold text-dark text-center fs-6">II & III, IV. Background Info. and Problem
                Presented</span>
        </div>
    </a>
</div>
@endif
@if(Request::segment(3)== 'Addrehabilitations')
<div class="col-md-3">
    <a href="{{url('Admin/Listchildrens/Addrehabilitations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-success rounded " style="height: 120px;">
            <span class="font-weight-bold text-white text-center fs-6">V. Rehabilitation Goal / Objective</span>
        </div>
    </a>
</div>
@else
<div class="col-md-3">
    <a href="{{url('Admin/Listchildrens/Addrehabilitations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-success" style="height: 120px;">
            <span class="font-weight-bold text-dark text-center fs-6">V. Rehabilitation Goal / Objective</span>
        </div>
    </a>
</div>
@endif
@if(Request::segment(3)== 'Addrecommendations')
<div class="col-md-3">
    <a href="{{url('Admin/Listchildrens/Addrecommendations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-danger rounded " style="height: 120px;">
            <span class="font-weight-bold text-white text-center fs-6">VI, VII & VIII. Recommendation/Plan of Action/
                Action Taken</span>
        </div>
    </a>
</div>
@else
<div class="col-md-3">
    <a href="{{url('Admin/Listchildrens/Addrecommendations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-danger" style="height: 120px;">
            <span class="font-weight-bold text-dark text-center fs-6">VI, VII & VIII. Recommendation/Plan of Action/
                Action Taken</span>
        </div>
    </a>
</div>
@endif
@elseif(Auth::user()->user_type == 'Staff')
@if(in_array(Request::segment(3), ['Addchildrens', 'Addinfofamilies','Addsiblings','Addguardians']))
<a href="{{url('Staff/Listchildrens/Addchildrens')}}" class="text-decoration-none">
    <div class="clickable-box shadow p-3 mb-5 bg-info rounded " style="height: 120px;">
        <span class="font-weight-bold text-white text-center fs-6">I. Identification Information</span>
    </div>
</a>
</div>
@else
<a href="{{url('Staff/Listchildrens/Addchildrens')}}" class="text-decoration-none">
    <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-info" style="height: 120px;">
        <span class="font-weight-bold text-dark text-center fs-6">I. Identification Information</span>
    </div>
</a>
</div>
@endif
@if(in_array(Request::segment(3), ['Addfinders', 'Adddevelopments','Addhabits']))
<div class="col-md-3">
    <a href="{{url('Staff/Listchildrens/Addfinders')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-warning rounded " style="height: 120px;">
            <span class="font-weight-bold text-white text-center fs-6">II & III, IV. Background Info. and Problem
                Presented</span>
        </div>
    </a>
</div>
@else
<div class="col-md-3">
    <a href="{{url('Staff/Listchildrens/Addfinders')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-warning" style="height: 120px;">
            <span class="font-weight-bold text-dark text-center fs-6">II & III, IV. Background Info. and Problem
                Presented</span>
        </div>
    </a>
</div>
@endif
@if(Request::segment(3)== 'Addrehabilitations')
<div class="col-md-3">
    <a href="{{url('Staff/Listchildrens/Addrehabilitations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-success rounded " style="height: 120px;">
            <span class="font-weight-bold text-white text-center fs-6">V. Rehabilitation Goal / Objective</span>
        </div>
    </a>
</div>
@else
<div class="col-md-3">
    <a href="{{url('Staff/Listchildrens/Addrehabilitations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-success" style="height: 120px;">
            <span class="font-weight-bold text-dark text-center fs-6">V. Rehabilitation Goal / Objective</span>
        </div>
    </a>
</div>
@endif
@if(Request::segment(3)== 'Addrecommendations')
<div class="col-md-3">
    <a href="{{url('Staff/Listchildrens/Addrecommendations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-danger rounded " style="height: 120px;">
            <span class="font-weight-bold text-white text-center fs-6">VI, VII & VIII. Recommendation/Plan of Action/
                Action Taken</span>
        </div>
    </a>
</div>
@else
<div class="col-md-3">
    <a href="{{url('Staff/Listchildrens/Addrecommendations')}}" class="text-decoration-none">
        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-danger" style="height: 120px;">
            <span class="font-weight-bold text-dark text-center fs-6">VI, VII & VIII. Recommendation/Plan of Action/
                Action Taken</span>
        </div>
    </a>
</div>
@endif
@endif