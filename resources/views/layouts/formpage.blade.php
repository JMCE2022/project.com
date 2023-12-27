
@if(Auth::user()->user_type == 'Admin')
@if(Request::segment(3)== 'pic1')
                            <a class="text-center bg-info rounded border-bottom border-info"
                                href="{{url('Admin/Form/pic1')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC1</span>
                            </a>
                            @else
                            <a class="text-center  rounded border-bottom border-info"
                                href="{{url('Admin/Form/pic1')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC1</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic2')
                            <a class="text-center bg-warning rounded border-bottom border-warning"
                                href="{{url('Admin/Form/pic2')}}">
                                <span class="font-weight-bold text-dark text-dark fs-6 me-1">PIC2</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-warning"
                                href="{{url('Admin/Form/pic2')}}">
                                <span class="font-weight-bold text-dark text-dark fs-6 me-1">PIC2</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic3A')
                            <a class="text-center bg-success rounded border-bottom border-success"
                                href="{{url('Admin/Form/pic3A')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3A</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-success"
                                href="{{url('Admin/Form/pic3A')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3A</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic3B')
                            <a class="text-center bg-success rounded border-bottom border-success"
                                href="{{url('Admin/Form/pic3A')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3B</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-success"
                                href="{{url('Admin/Form/pic3B')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3B</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic4')
                            <a class="text-center bg-danger rounded border-bottom border-danger"
                                href="{{url('Admin/Form/pic4')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC4</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-danger"
                                href="{{url('Admin/Form/pic4')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC4</span>
                            </a>
                            @endif

@elseif(Auth::user()->user_type == 'Staff')
@if(Request::segment(3)== 'pic1')
                            <a class="text-center bg-info rounded border-bottom border-info"
                                href="{{url('Staff/Form/pic1')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC1</span>
                            </a>
                            @else
                            <a class="text-center  rounded border-bottom border-info"
                                href="{{url('Staff/Form/pic1')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC1</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic2')
                            <a class="text-center bg-warning rounded border-bottom border-warning"
                                href="{{url('Staff/Form/pic2')}}">
                                <span class="font-weight-bold text-dark text-dark fs-6 me-1">PIC2</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-warning"
                                href="{{url('Staff/Form/pic2')}}">
                                <span class="font-weight-bold text-dark text-dark fs-6 me-1">PIC2</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic3A')
                            <a class="text-center bg-success rounded border-bottom border-success"
                                href="{{url('Staff/Form/pic3A')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3A</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-success"
                                href="{{url('Staff/Form/pic3A')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3A</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic3B')
                            <a class="text-center bg-success rounded border-bottom border-success"
                                href="{{url('Staff/Form/pic3A')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3B</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-success"
                                href="{{url('Staff/Form/pic3B')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC3B</span>
                            </a>
                            @endif
                            @if(Request::segment(3)== 'pic4')
                            <a class="text-center bg-danger rounded border-bottom border-danger"
                                href="{{url('Staff/Form/pic4')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC4</span>
                            </a>
                            @else
                            <a class="text-center rounded border-bottom border-danger"
                                href="{{url('Staff/Form/pic4')}}">
                                <span class="font-weight-bold text-dark text-center fs-6 me-1">PIC4</span>
                            </a>
                            @endif

@endif


