
@if(Request::segment(2)== 'listChildrens')

                <a href="{{url('Admin/Listchildrens/Addchildrens')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-info rounded " >
                            <span class="font-weight-bold text-white text-center fs-6">Children's</span>
                        </div>
                    </a>
                </div>
                @else
                <a href="{{url('Admin/Listchildrens/Addchildrens')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-info">
                            <span class="font-weight-bold text-dark text-center fs-6">Children's</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(Request::segment(3)== 'Addfinders')
                <div class="col-md-1">
                    <a href="{{url('Admin/Listchildrens/Addfinders')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-warning rounded " >
                            <span class="font-weight-bold text-white text-center fs-6">Finder's
                                </span>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-md-1">
                    <a href="{{url('Admin/Listchildrens/Addfinders')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-warning" >
                            <span class="font-weight-bold text-dark text-center fs-6">Finder's</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(Request::segment(3)== 'Addrehabilitations')
                <div class="col-md-1">
                    <a href="{{url('Admin/Listchildrens/Addrehabilitations')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-success rounded " >
                            <span class="font-weight-bold text-white text-center fs-6">Parents</span>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-md-1">
                    <a href="{{url('Admin/Listchildrens/Addrehabilitations')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-success" >
                            <span class="font-weight-bold text-dark text-center fs-6">Parents</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(Request::segment(3)== 'Addrecommendations')
                <div class="col-md-1">
                    <a href="{{url('Admin/Listchildrens/Addrecommendations')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-danger rounded " >
                            <span class="font-weight-bold text-white text-center fs-6">Guardians</span>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-md-1">
                    <a href="{{url('Admin/Listchildrens/Addrecommendations')}}" class="text-decoration-none">
                        <div class="clickable-box shadow p-3 mb-5 bg-white rounded border-bottom border-danger" >
                            <span class="font-weight-bold text-dark text-center fs-6">Guardians</span>
                        </div>
                    </a>
                </div>
                @endif
