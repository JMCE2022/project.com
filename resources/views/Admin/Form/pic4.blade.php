@extends('layouts.app')

@section('content')


<div class=" m-4">
    
    @include('layouts._message')

    <div class="container-fluid pt-4 px-4 text-dark">
        <div class="container bg-white rounded">
            <div class="row pt-4">
            <div class="col-md-4">


                    <div class="clickable-box">
                        @include('layouts.formpage')
                    </div>


                </div>
                <div>
                </div>
                <div class="col-12 ">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-form table-hover text-dark">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="13">DEPARTMENT OF SOCIAL WELFARE AND
                                        DEVELOPMENT
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="13">PERTINENT INFORMATION FOR CENTERS</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Field Office:</th>
                                    <th class="text-start" colspan="12">DSWD FO XI</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Facility:</th>
                                    <th class="text-start" colspan="12">Reception and Study Center for Children</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="13"> Period Covered: </th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="13"> </th>
                                </tr>


                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-start" colspan="13">ANALYSIS OF DATA:</td>

                                </tr>

                                <tr>

                                    <td class="text-center" colspan="13"></td>
                                </tr>
                                <tr>
                                    <td class="text-start" colspan="13">RECOMMENDATIONS:</td>

                                </tr>
                                <tr>

                                    <td class="text-center" colspan="13"></td>
                                </tr>


                            </tbody>
                        </table>


                        <button id="exportButton" class="btn btn-success ">Export to Excel</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection