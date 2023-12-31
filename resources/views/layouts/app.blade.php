<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RSCC - {{Request::segment(2)}} - {{Request::segment(3)}}</title>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0 ">
       

        <!-- sidebar-menu Start -->
        @include('layouts.sidebar')
        <!-- sidebar-menu Start -->



        <div class="content">

            <!-- header Start -->
            @include('layouts.header')
            <!-- header end -->


            <!-- Dashboard Start -->
            @yield('content')

            <!-- Dashboard end -->
            
        </div>

    </div>
    
    </div>

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
    <script>
        // Clear Search
        function clearSearch() {
            document.getElementById('search').value = '';
            document.querySelector('form').submit();
        }
    </script>
    <script>
        function con        Delete(userId) {
            var myModal = new bootstrap.Modal(document.getElementById('deleteModal_        userId), {});
        myModal.show();
        }
    </script>
    <script>
    document.getElementById('selectOption').addEventListener('change', function() {
        console.log(this.value);
    });
</script>
    <script>
    function confirmDelete(childrenId) {
        var myModal = new bootstrap.Modal(document.getElementById('deleteModal_' + childrenId), {});
        myModal.show();
    }
</script>
    <script type="text/javascript">
        document.getElementById('exportButton').addEventListener('click', function () {
            // Get table data
            var table = document.getElementById('myTable');
            var sheet = XLSX.utils.table_to_sheet(table);
            // Create a workbook with a single sheet
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, sheet, 'Sheet1');

            // Save the workbook as an Excel file
            XLSX.writeFile(wb, 'table_data.xlsx');
        });
    </script>
    <script>

$(document).ready(function() {

    $('#region-dropdown').on('change', function() {
            var region_id = this.value;
             $("#province-dropdown").html('');
            $.ajax({
                url:"{{url('/Admin/get-provinces-by-region')}}",
                type: "POST",
                data: {
                    region_id: region_id,
                     _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#province-dropdown').html('<option value="">Select Province</option>'); 
                    $.each(result.provinces,function(key,value){
                    $("#province-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                    $('#city-dropdown').html('<option value="">Select Province First</option>'); 
                }
            });
        
        
    });    

    $('#province-dropdown').on('change', function() {
            var province_id = this.value;
             $("#city-dropdown").html('');
            $.ajax({
                url:"{{url('/Admin/get-cities-by-province')}}",
                type: "POST",
                data: {
                    province_id: province_id,
                     _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#city-dropdown').html('<option value="">Select City/Municipality</option>'); 
                    $.each(result.cities,function(key,value){
                    $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });

                }
            });
        
        
    });
});
</script>
<script>

$(document).ready(function() {

    $('#staff-region-dropdown').on('change', function() {
            var region_id = this.value;
             $("#staff-province-dropdown").html('');
            $.ajax({
                url:"{{url('/Staff/get-provinces-by-region')}}",
                type: "POST",
                data: {
                    region_id: region_id,
                     _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#staff-province-dropdown').html('<option value="">Select Province</option>'); 
                    $.each(result.provinces,function(key,value){
                    $("#staff-province-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                    $('#staff-city-dropdown').html('<option value="">Select Province First</option>'); 
                }
            });
        
        
    });    

    $('#staff-province-dropdown').on('change', function() {
            var province_id = this.value;
             $("#staff-city-dropdown").html('');
            $.ajax({
                url:"{{url('/Staff/get-cities-by-province')}}",
                type: "POST",
                data: {
                    province_id: province_id,
                     _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#staff-city-dropdown').html('<option value="">Select City/Municipality</option>'); 
                    $.each(result.cities,function(key,value){
                    $("#staff-city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });

                }
            });
        
        
    });
});
</script>



<script>
    function updateHiddenInput(type) {
        var selectedDropdown = document.getElementById(type + '-dropdown');
        var hiddenInput = document.getElementById('sample-column-' + type + '-input');
        
        // Update the hidden input value with the selected option's text
        hiddenInput.value = selectedDropdown.options[selectedDropdown.selectedIndex].text;
    }
</script>






    
</body>

</html>