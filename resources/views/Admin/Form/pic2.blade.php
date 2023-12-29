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
                                    <th class="text-center" colspan="14">DEPARTMENT OF SOCIAL WELFARE AND
                                        DEVELOPMENT
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="14">PERTINENT INFORMATION FOR CENTERS</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Field Office:</th>
                                    <th class="text-start" colspan="13">DSWD FO XI</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Facility:</th>
                                    <th class="text-start" colspan="13">Reception and Study Center for Children</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="14"> Period Covered: </th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="14">DATA FOR CLIENT DAYS OF CARE</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="14"></th>
                                </tr>

                                <tr>

                                    <th class="text-center" rowspan="2" colspan="1">Day (in a month)</th>
                                    <th class="text-center" colspan="12">Month</th>
                                    <th class="text-center" rowspan="2" colspan="1">Grand Total</th>
                                </tr>
                                <tr>

                                    <th class="text-center" colspan="1">January</th>
                                    <th class="text-center" colspan="1">February</th>
                                    <th class="text-center" colspan="1">March</th>
                                    <th class="text-center" colspan="1">April</th>

                                    <th class="text-center" colspan="1">May</th>
                                    <th class="text-center" colspan="1">June</th>
                                    <th class="text-center" colspan="1">July</th>
                                    <th class="text-center" colspan="1">August</th>
                                    <th class="text-center" colspan="1">September</th>
                                    <th class="text-center" colspan="1">October</th>
                                    <th class="text-center" colspan="1">November</th>
                                    <th class="text-center" colspan="1">December</th>
                                </tr>

                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center" colspan="1">(1)</td>
                                    <td class="text-center" colspan="1">(2)</td>
                                    <td class="text-center" colspan="1">(3)</td>
                                    <td class="text-center" colspan="1">(4)</td>
                                    <td class="text-center" colspan="1">(5)</td>
                                    <td class="text-center" colspan="1">(6)</td>
                                    <td class="text-center" colspan="1">(7)</td>
                                    <td class="text-center" colspan="1">(8)</td>
                                    <td class="text-center" colspan="1">(9)</td>
                                    <td class="text-center" colspan="1">(10)</td>
                                    <td class="text-center" colspan="1">(11)</td>
                                    <td class="text-center" colspan="1">(12)</td>
                                    <td class="text-center" colspan="1">(13)</td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">2</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">3</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">4</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">5</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">6</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">7</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">8</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">9</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">10</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">11</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">12</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">13</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">14</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">15</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">16</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">17</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">18</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">19</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">20</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">21</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">22</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">23</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">24</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">25</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">26</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">27</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">28</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">29</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">30</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">31</td>
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
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>



                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">Total</td>
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