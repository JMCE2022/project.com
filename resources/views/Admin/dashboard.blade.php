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
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Single Line Chart</h6>
                                <canvas id="line-chart"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Multiple Line Chart</h6>
                                <canvas id="salse-revenue"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Single Bar Chart</h6>
                                <canvas id="bar-chart"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Multiple Bar Chart</h6>
                                <canvas id="worldwide-sales"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Pie Chart</h6>
                                <canvas id="pie-chart" width="400" height="400"
                                   ></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Doughnut Chart</h6>
                                <canvas id="doughnut-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx5 = $("#pie-chart").get(0).getContext("2d");

            var ageLabels = {!! json_encode($ageLabels) !!};
            var ageCounts = {!! json_encode($ageCounts) !!};

            var myChart5 = new Chart(ctx5, {
                type: "pie",
                data: {
                    labels: ageLabels,
                    datasets: [{
                        backgroundColor: [
                            "rgba(235, 22, 22, 1)",
                            "rgba(39, 226, 245, 0.8)",
                            "rgba(39, 245, 84, 0.8)",
                            "rgba(247, 255, 0, 0.8)",
                            "rgba(255, 141, 0, 0.8)",
                          
                            "rgba(255, 0, 189, 0.8)"
                        ],
                        data: ageCounts
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>
@endsection