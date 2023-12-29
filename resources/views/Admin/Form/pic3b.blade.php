@extends('layouts.app')

@section('content')


<div class=" m-4">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="text-dark">Add Children</h2>
    </div>
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
                                    <th class="text-center" colspan="16">DEPARTMENT OF SOCIAL WELFARE AND
                                        DEVELOPMENT
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="16">PERTINENT INFORMATION FOR CENTERS</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Field Office:</th>
                                    <th class="text-start" colspan="15">DSWD FO XI</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Facility:</th>
                                    <th class="text-start" colspan="15">Reception and Study Center for Children</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="16"> Period Covered: </th>
                                </tr>
                                <tr>

                                    <th class="text-center" colspan="16">DATA FOR CASE CATEGORIES OF CLIENTS</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="16"></th>
                                </tr>

                                <tr>

                                    <th class="text-center" colspan="1">Indicator/Case Category </th>
                                    <th class="text-center" colspan="3">Q1</th>
                                    <th class="text-center" colspan="3">Q2</th>
                                    <th class="text-center" colspan="3">Q3</th>
                                    <th class="text-center" colspan="3">Q4</th>
                                    <th class="text-center" colspan="3">Annual</th>


                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" colspan="1">No. of clients served in the facility</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>

                                <tr>
                                    <td class="text-center" colspan="1">1. Sexually-abused</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">a. Rape</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">b. incest</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">c. Acts of Lasciviousness</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">2. Sexually Exploited</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">a. Victims of Prostitution</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">b. Victims of Pornography</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">c. Victims of Cyber Pornography</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">d. Victims of Pedophilia</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">e. Victims of Sexual Haarrasment</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">3. Physically Abused/Maltreated</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">4. ORPHANED</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5. Victims of Trafficking</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">6. Abandoned and Founding</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">7. Neglected</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">8. SURRENDERED</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">9. CICL</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10. Psychologically/Emotionally Abused</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">11. Children Involved in Armed Conflict (CIAC)
                                    </td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">12. Children Situated in Armed Conflict (CSAC)
                                    </td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">13. Other Clients: Dependents</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">0 to less than 1</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1 to below 5</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5 to below 10</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10 to below 14</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14 to below 18</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18 to below 25</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25 to below 60</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>




                                </tr>



                            </tbody>
                        </table>


                        <button id="exportButton">Export to Excel</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection