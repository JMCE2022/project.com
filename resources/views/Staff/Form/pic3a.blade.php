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
                <div class="col-md-3">


                    <div class="clickable-box">
                        @include('layouts.formpage')
                    </div>


                </div>
                <div>
                </div>
                <div class="col-12 ">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-hover text-dark">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="11">DEPARTMENT OF SOCIAL WELFARE AND
                                        DEVELOPMENT
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="11">PERTINENT INFORMATION FOR CENTERS</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Field Office:</th>
                                    <th class="text-start" colspan="10">DSWD FO XI</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Facility:</th>
                                    <th class="text-start" colspan="10">Reception and Study Center for Children</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="11"> Period Covered: </th>
                                </tr>
                                <tr>

                                    <th class="text-center" colspan="11">DATA FOR AVERAGE LENGTH OF STAY</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="11"></th>
                                </tr>

                                <tr>

                                    <th class="text-center" colspan="2">List of Clients Served</th>
                                    <th class="text-center" colspan="1">Age Last of Birthday</th>
                                    <th class="text-center" colspan="1">Sex</th>
                                    <th class="text-center" colspan="1">Date of Admission</th>
                                    <th class="text-center" colspan="1">Date of Discharge</th>
                                    <th class="text-center" colspan="1">Total Discharge Days</th>
                                    <th class="text-center" colspan="1">Date of rehabilitation</th>
                                    <th class="text-center" colspan="1">Total Rehabilitation</th>
                                    <th class="text-center" colspan="1">Type of Rehabilitation</th>
                                    <th class="text-center" colspan="1">Case Category</th>

                                </tr>

                            </thead>
                            <tbody>


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