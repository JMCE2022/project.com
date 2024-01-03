<script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx5 = $("#Male-chart").get(0).getContext("2d");

            var ageLabels = {!! json_encode($ageLabels) !!};
            var ageCounts = {!! json_encode($ageCounts) !!};

            var myChart5 = new Chart(ctx5, {
                type: "pie",
                data: {
                    labels: ageLabels,
                    datasets: [{
                        backgroundColor: [
                            "rgba(78, 115, 223, 1)",
                            "rgba(54, 185, 204, 1)",
                            "rgba(28, 200, 138, 1)",
                            "rgba(246, 194, 62, 1)",
                            "rgba(90, 92, 105, 1)",
                            "rgba(231, 74, 59, 1)"
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx5 = $("#Female-chart").get(0).getContext("2d");

            var ageLabelsFemale = {!! json_encode($ageLabelsFemale) !!};
            var ageCountsFemale = {!! json_encode($ageCountsFemale) !!};

            var myChart5 = new Chart(ctx5, {
                type: "pie",
                data: {
                    labels: ageLabelsFemale,
                    datasets: [{
                        backgroundColor: [
                            "rgba(78, 115, 223, 1)",
                            "rgba(54, 185, 204, 1)",
                            "rgba(28, 200, 138, 1)",
                            "rgba(246, 194, 62, 1)",
                            "rgba(90, 92, 105, 1)",
                            "rgba(231, 74, 59, 1)"
                        ],
                        data: ageCountsFemale
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx5 = $("#Discharged-chart").get(0).getContext("2d");

            var dischargeLabels = {!! json_encode($dischargeLabels) !!};
            var dischargeCounts = {!! json_encode($dischargeCounts) !!};

            var myChart5 = new Chart(ctx5, {
                type: "pie",
                data: {
                    labels: dischargeLabels,
                    datasets: [{
                        backgroundColor: [
                            "rgba(78, 115, 223, 1)",
                            "rgba(54, 185, 204, 1)",
                            "rgba(28, 200, 138, 1)",
                            "rgba(246, 194, 62, 1)",
                            "rgba(90, 92, 105, 1)",
                            "rgba(231, 74, 59, 1)"
                        ],
                        data: dischargeCounts
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx5 = $("#Client-chart").get(0).getContext("2d");

            var clientLabels = {!! json_encode($clientLabels) !!};
            var clientCounts = {!! json_encode($clientCounts) !!};

            var myChart5 = new Chart(ctx5, {
                type: "pie",
                data: {
                    labels: clientLabels,
                    datasets: [{
                        backgroundColor: [
                            "rgba(78, 115, 223, 1)",
                            "rgba(54, 185, 204, 1)",
                            "rgba(28, 200, 138, 1)",
                            "rgba(246, 194, 62, 1)",
                            "rgba(90, 92, 105, 1)",
                            "rgba(231, 74, 59, 1)"
                        ],
                        data: clientCounts
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
    </script>