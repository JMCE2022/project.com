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
                                    <th class="text-center" colspan="17">DEPARTMENT OF SOCIAL WELFARE AND
                                        DEVELOPMENT
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="17">PERTINENT INFORMATION FOR CENTERS</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Field Office:</th>
                                    <th class="text-start" colspan="16">DSWD FO XI</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="1">Facility:</th>
                                    <th class="text-start" colspan="16">Reception and Study Center for Children</th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="17"> Period Covered: </th>
                                </tr>
                                <tr>

                                    <th class="text-start" colspan="17"> </th>
                                </tr>
                                <tr>

                                    <th class="text-center" colspan="1">Client Days of Care</th>
                                    <th class="text-center" colspan="1">Bed Capacity</th>
                                    <th class="text-center" colspan="1">Client Bed Days Available</th>
                                    <th class="text-center" colspan="3">Total Number of Clients Served</th>
                                    <th class="text-center" colspan="1">Total Number of Discharged Clients </th>
                                    <th class="text-center" colspan="1">Total Discharge Days</th>
                                    <th class="text-center" colspan="1">Total Number of Rehabilitated Clients</th>
                                    <th class="text-center" colspan="1">Total Rehab Days</th>
                                    <th class="text-center" colspan="1">Total Admission</th>
                                    <th class="text-center" colspan="1">Occupancy Rate</th>
                                    <th class="text-center" colspan="1">Client - Social Worker Ratio</th>
                                    <th class="text-center" colspan="1">Client - House Parent Ratio</th>
                                    <th class="text-center" colspan="3">Calculations</th>
                                </tr>
                                <tr>

                                    <th class="text-center" colspan="1"></th>
                                    <th class="text-center" colspan="13"></th>
                                    <th class="text-center" colspan="3">Average Length of Stay</th>
                                </tr>
                                <tr>

                                    <th class="text-center" colspan="3"></th>
                                    <th class="text-center" colspan="1">M</th>
                                    <th class="text-center" colspan="1">F</th>
                                    <th class="text-center" colspan="1">Total</th>

                                    <th class="text-center" colspan="8"></th>
                                    <th class="text-center" colspan="1">Discharge Based</th>
                                    <th class="text-center" colspan="1">Rehabilation Based</th>
                                    <th class="text-center" colspan="1">Admission Based</th>
                                </tr>

                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center" colspan="1">Sum total of daily census for the period
                                        covered (Daily Head Count Sheet)</td>
                                    <td class="text-center" colspan="1">Based on maximum capacity in compliance to
                                        standards
                                        (Must be manually supplied)</td>
                                    <td class="text-center" colspan="1">Sum of total of bed days calculation for the
                                        period covered multiplied by Bed Capacity (Must be manually supplied )
                                        (ex: 90 days from Jan-Mar multiplied by 120 bed capacity) (=90*120=the
                                        answer)</td>
                                    <td class="text-center" colspan="3">With sex dissagreggation
                                        (Must be manually supplied)</td>
                                    <td class="text-center" colspan="1">(Must be manually supplied)</td>
                                    <td class="text-center" colspan="1">Sum total of length of stay of all
                                        discharged clients </td>
                                    <td class="text-center" colspan="1">(Must be manually supplied)</td>
                                    <td class="text-center" colspan="1">(Must be manually supplied)</td>
                                    <td class="text-center" colspan="1">(Must be manually supplied)</td>
                                    <td class="text-center" colspan="1">Percentage of Client days of Care divided by
                                        Bed Days Available =[(1)/(3)]*100%</td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1">Total Discharge Days divided by Total
                                        Discharges
                                        =[(8)/(7)]</td>
                                    <td class="text-center" colspan="1">Total Rehab Days divided by Total
                                        Rehabilitated =[(10)/(9)]</td>
                                    <td class="text-center" colspan="1">Total Client Days of Care divided by Total
                                        Admissions =[(1)/(11)]</td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1">1</td>
                                    <td class="text-center" colspan="1">2</td>
                                    <td class="text-center" colspan="1">3</td>
                                    <td class="text-center" colspan="1">4</td>
                                    <td class="text-center" colspan="1">5</td>
                                    <td class="text-center" colspan="1">6</td>
                                    <td class="text-center" colspan="1">7</td>
                                    <td class="text-center" colspan="1">8</td>
                                    <td class="text-center" colspan="1">9</td>
                                    <td class="text-center" colspan="1">10</td>
                                    <td class="text-center" colspan="1">11</td>
                                    <td class="text-center" colspan="1">12</td>
                                    <td class="text-center" colspan="1">13</td>
                                    <td class="text-center" colspan="1">14</td>
                                    <td class="text-center" colspan="1">15</td>
                                    <td class="text-center" colspan="1">16</td>
                                    <td class="text-center" colspan="1">17</td>


                                </tr>
                                <tr>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
                                    <td class="text-center" colspan="1"></td>
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