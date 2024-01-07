@extends('layouts.app')

@section('content')
<!-- Dashboard -->
<div class="container-fluid pt-4 px-4">

    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="row g-4">
                <div class="col-sm-3 col-xl-3">
                    <div class="bg-white text-center rounded border-start border-info p-4">
                        <div>
                            <span class="fs-5 text-dark">MALE <i class="fas fa-male fa-1x" style="color: #000000;"></i>
                            </span>
                        </div>
                        <span class="fs-5 text-dark">{{ $maleCount }}</span>
                    </div>
                </div>
                <div class="col-sm-3 col-xl-3">
                    <div class="bg-white text-center  rounded border-start border-warning p-4">
                        <div>
                            <span class="fs-5 text-dark">FEMALE <i class="fas fa-female fa-1x"
                                    style="color: #000000;"></i></span>
                        </div>
                        <span class="fs-5 text-dark">{{ $femaleCount }}</span>
                    </div>

                </div>
                <div class="col-sm-3 col-xl-3">
                    <div class="bg-white text-center rounded border-start border-success p-4">
                        <div>
                            <span class="fs-5 text-dark">DISCHARGED <i class="fas fa-running fa-1x"
                                    style="color: #000000;"></i></span>
                        </div>
                        <span class="fs-5 text-dark">{{ $dischargedCount }}</span>
                    </div>
                </div>
                <div class="col-sm-3 col-xl-3">
                    <div class="bg-white text-center rounded border-start border-danger p-4">
                        <div>
                            <span class="fs-5 text-dark">CLIENT SERVED <i class="fas fa-hands-helping fa-1x"
                                    style="color: #000000;"></i> </span>
                        </div>
                        <span class="fs-5 text-dark">{{ $childrenCount }}</span>
                    </div>
                </div>

                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-white rounded h-100 p-4">
                                <h6 class="mb-4 text-dark">Male Age Range</h6>
                                <canvas id="Male-chart" width="400" height="400"
                                   ></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-white rounded h-100 p-4">
                            <h6 class="mb-4 text-dark">Female Age Range</h6>
                                <canvas id="Female-chart" width="400" height="400"
                                   ></canvas>
                                
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-white rounded h-100 p-4">
                            <h6 class="mb-4 text-dark">Discharged</h6>
                                <canvas id="Discharged-chart" width="400" height="400"
                                   ></canvas>
                                
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-white rounded h-100 p-4">
                            <h6 class="mb-4 text-dark">Client Served</h6>
                                <canvas id="Client-chart" width="400" height="400"
                                   ></canvas>
                                
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@include('layouts.scriptchart')

@endsection