<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RSCC - {{Request::segment(2)}}</title>
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
</head>
<style>
    /* Your regular styles go here */

    /* Styles for print */
    @media print {
        body {
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            padding: 20px;

        }


        .footer {
            position: fixed;
            bottom: 0;
            padding: 10px;
            background-color: #f1f1f1;
        }
    }
</style>
@if(Auth::user()->user_type == 'Admin')
<body class="bg-white" onclick="window.location='{{ url('Admin/Listchildrens') }}'" style="cursor: pointer;">
@elseif(Auth::user()->user_type == 'Staff')
<body class="bg-white" onclick="window.location='{{ url('Staff/Listchildrens') }}'" style="cursor: pointer;">
@endif

    <div class="container d-flex justify-content-center">
        <div class="row">
            <!-- First A4 Box -->
            <div class="col-12  ">
                <div class="col-12">
                    @if (!empty($getRecord))
                    <div class="a4-box bg-white">
                        <!--Header Content-->
                        <div class="header bg-white">
                            <div class="row">
                                <div class="col-4 col-md-4">

                                </div>
                                <div class="col-4 col-md-4 text-center">
                                    <img src="{{asset('images/Admin/Logo2.png')}}" width="180px" alt="logo">
                                </div>
                                <div class="col-4 col-md-4 ">
                                </div>
                            </div>
                        </div>
                        <h6 class="text-dark text-center">RECEPTION AND STUDY CENTER FOR CHILDREN</h6>
                        <h6 class="text-dark text-center">Friendship Rd. SPMC Compound., Bajada, Davao City</h6>
                        <!--Start-Body Content-->
                        <!--Start-Date and Case Number-->
                        <div class="row">
                            <div class="col-4 col-md-4"></div>
                            <div class="col-4 col-md-4"></div>
                            <div class="col-4 col-md-4 ">
                                <span class="d-flex justify-content-between">
                                    <span class="text-bold">Date of Admission:</span>
                                    <span class="text-dark text-decoration-underline">{{
                                        $getRecord->created_at->format('Y/m/d') }}</span>
                                </span>

                                <span class="d-flex justify-content-between">
                                    <span class="text-bold">Case Number:</span>
                                    <span class="text-dark text-decoration-underline">{{ $getRecord->id }}</span>
                                </span>
                            </div>
                        </div>
                        <!--End-Date and Case Number-->
                        <h6 class="text-dark text-center">GENERAL INTAKE SHEET</h6>
                        <h6 class="text-dark text-start mb-2 mt-4">I. IDENTIFYING INFORMATION</h6>
                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="text-bold text-dark">Name of Child: <span
                                        class="text-dark text-decoration-underline">{{ $getRecord->firstname}} {{ $getRecord->lastname}}</span></span>
                            </div>

                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Sex: <span
                                        class="text-dark text-decoration-underline">{{ $getRecord->sex }}</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="text-bold text-dark">Age: <span
                                        class="text-dark text-decoration-underline">{{ $getRecord->age }}</span></span>
                            </div>

                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Religion: <span
                                        class="text-dark text-decoration-underline">{{ $getRecord->religion
                                        }}</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="text-bold text-dark">Date of Birth: <span
                                        class="text-dark text-decoration-underline">{{ $getRecord->date_of_birth
                                        }}</span></span>
                            </div>

                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Place of Birth: <span
                                        class="text-dark text-decoration-underline">{{ $getRecord->place_of_birth
                                        }}</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <span class="text-bold text-dark">Educational Attainment: <span
                                        class="text-dark text-decoration-underline"></span>{{
                                    $getRecord->educational_attainment }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="text-bold text-dark">City/Provincial Address: <span
                                        class="text-dark text-decoration-underline"></span>{{ $getRecord->city }}, {{
                                    $getRecord->province }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="text-bold text-dark">Present Health Condition: <span
                                        class="text-dark text-decoration-underline"></span>{{
                                    $getRecord->present_health_condition }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="text-bold text-dark">Physical Characteristic or Apperance: <span
                                        class="text-dark text-decoration-underline"></span>{{
                                    $getRecord->physical_characteristic }}</span>
                            </div>
                        </div>
                        <h6 class="text-dark text-start mb-2 mt-4">II. PROBLEM PRESENTED</h6>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="text-bold text-dark">Initial Assessment (Initial Impression of worker about
                                    the problem, strength and weaknesses resources): </span>
                            </div>
                            <div class="col-12 col-md-12">
                                <span class="text-dark text-decoration-underline">{{ $getRecord->initial_assessment
                                    }}</span>
                            </div>
                        </div>


                        @if($getRecord->infofamily)
                        <h6 class="text-dark text-start mb-2 mt-4">III. INFORMATION OF THE FAMILY</h6>

                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="text-bold text-dark">Name of Father: <span
                                        class="text-dark text-decoration-underline">{{

                                        $getRecord->infofamily->infofamily_name_of_father }}</span></span>
                            </div>

                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Age: <span
                                        class="text-dark text-decoration-underline">{{
                                        $getRecord->infofamily->infofamily_age_of_father }}</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="text-bold text-dark">Name of Mother: <span
                                        class="text-dark text-decoration-underline">{{
                                        $getRecord->infofamily->infofamily_name_of_mother }}</span></span>
                            </div>

                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Age: <span
                                        class="text-dark text-decoration-underline">{{$getRecord->infofamily->infofamily_age_of_mother
                                        }}</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="text-bold text-dark">Address: <span
                                        class="text-dark text-decoration-underline"></span>{{
                                    $getRecord->infofamily->infofamily_address }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="text-bold text-dark">Occupation: <span
                                        class="text-dark text-decoration-underline"></span>{{$getRecord->infofamily->infofamily_occupation}}</span>
                            </div>
                        </div>

                        @endif
                        @if(count($siblings) > 0)
                        <h6 class="text-dark text-start mb-2 mt-4">Siblings:</h6>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Birthdate</th>
                                    <th scope="col">Educational Attainment</th>
                                    <th scope="col">Relationship</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siblings as $sibling)
                                <tr>
                                    <td>{{ $sibling->sibling_fullname }}</td>
                                    <td>{{ $sibling->sibling_age }}</td>
                                    <td>{{ $sibling->sibling_sex }}</td>
                                    <td>{{ $sibling->sibling_date_of_birth }}</td>
                                    <td>{{ $sibling->sibling_educational_attainment }}</td>
                                    <td>{{ $sibling->sibling_relationship }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif



                        @if($getRecord->gurdian)
                        <span>In case of guardian or relatiives responsible to the child:</span>

                        <div class="row">
                            <div class="col-7 col-md-7">
                                <span class="text-bold text-dark">Name: <span
                                        class="text-dark text-decoration-underline">{{
                                        $getRecord->guardian->guardian_name}}</span></span>
                            </div>

                            <div class="col-5 col-md-5 d-flex justify-content-between ">
                                <span class="text-bold text-dark">Age: <span
                                        class="text-dark text-decoration-underline">
                                        {{ $getRecord->guardian->guardian_age}}</span></span>
                                <span class="text-bold text-dark">Sex: <span
                                        class="text-dark text-decoration-underline">
                                        {{ $getRecord->guardian->guardian_sex}}</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span class="text-bold text-dark">Occupation:</span>
                            </div>
                            <span class="text-dark text-decoration-underline">{{
                                $getRecord->guardian->guardian_occupation}}</span>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span>Circumstances of guardian (state whether by court or otherwise):</span>
                            </div>
                            <span class="text-dark text-decoration-underline">{{
                                $getRecord->guardian->guardian_circumstances_of_guardian}}</span>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <span>Economic Situation of the family:</span>
                            </div>
                            <span class="text-dark text-decoration-underline">{{
                                $getRecord->guardian->guardian_economic_situation_of_the_family}}</span>
                        </div>

                        @endif
                        @if($getRecord->development)
                        <h6 class="text-dark text-start mb-2 mt-4">IV. DEVELOPMENTAL HISTORY</h6>

                        <h6 class="text-dark text-start mb-2 mt-4 text-decoration-underline">Birth History:</h6>
                        <div class="row">
                            <div class="col-4 col-md-4">

                                <span class="text-bold text-dark">Full Term: <span
                                        class="text-dark text-decoration-underline font-weight-bold text-center">
                                        @if ($getRecord->development->development_birth_history === 'Full Term')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif
                                    </span></span>
                            </div>

                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Premature: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Premature')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Borne at home: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Borne at home')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Hospital: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Hospital')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Normal Delivery: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Normal Delivery')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Caesarean: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Caesarean')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Forceps: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Forceps')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Delivery by Physician: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Delivery by
                                        Physician')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Midwife: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Midwife')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">"Hilot": <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->development->development_birth_history === 'Hilot')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Birth Weight: <span
                                        class="text-dark text-decoration-underline">
                                        {{$getRecord->development->development_birth_weight}}
                                    </span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Height: <span
                                        class="text-dark text-decoration-underline">
                                        {{$getRecord->development->development_birth_height}}</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Describe Abnormalities at Birth (if any):</span>

                            </div>
                            <span class="text-dark text-decoration-underline">
                                {{$getRecord->development->development_describe_abnormalities}}
                            </span>
                        </div>
                        @endif
                        @if($getRecord->habit)
                        <h6 class="text-dark text-start mb-2 mt-4 text-decoration-underline">Habits:</h6>

                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Bedwetting: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_bedwetting === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Thumb Sucking: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_thumb_sucking === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Nail biting: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_nail_biting === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Others:</span>
                            </div>
                            <span class="text-dark text-decoration-underline">
                                {{$getRecord->habit->habit_others}}
                            </span>

                        </div>
                        <span class="text-dark text-decoration-underline">Disease diring childhood:</span>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Measles: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_measles === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">chickenpox: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_chickenpox === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">mumps: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_mumps === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Allergy: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_allergy === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4">
                                <span class="text-bold text-dark">Convulsions: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_convulsions === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>
                            </div>
                            <div class="col-4 col-md-4 ">
                                <span class="text-bold text-dark">Primary Complex: <span
                                        class="text-dark text-decoration-underline">
                                        @if ($getRecord->habit->habit_primary_complex === 'Yes')
                                        <i class="fas fa-check" style="color: #000000;"></i>
                                        @else
                                        <i class="fas fa-times" style="color: #000000;"></i>
                                        @endif</span></span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-12">
                                <span class="text-bold text-dark">Others (Specify):</span>
                            </div>
                            <span class="text-dark text-decoration-underline">
                                {{$getRecord->habit->habit_other_specify}}
                            </span>

                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="col-4 col-md-12">
                                    <span class="text-bold text-dark">Motor Development (Describe, when, include
                                        problems, if any):</span>
                                </div>
                                <span class="text-dark text-decoration-underline">
                                    {{$getRecord->habit->habit_motor_development}}
                                </span>

                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col-4 col-md-12">
                                        <span class="text-bold text-dark">Toilet Traning (describe, when, include
                                            problems, if any):</span>
                                    </div>
                                    <span class="text-dark text-decoration-underline">
                                        {{$getRecord->habit->habit_toilet_training}}
                                    </span>

                                </div>
                                @endif
                                @if($getRecord->rehabilitation)
                                <h6 class="text-dark text-start mb-2 mt-4">V. REHABILITATION GOALS/OBJECTIVE</h6>

                                <span class="text-bold text-dark">PLS. CHECK AND SPECIFY: </span>


                                <div class="row">
                                    <div class="col-8 col-md-12">
                                        <span class="text-bold text-dark">1. To restore/develop social functioning of
                                            the child.</span>

                                        <span class="text-dark text-decoration-underline">

                                            @if(!empty($getRecord->rehabilitation->rehabilitation_restore_develop))
                                            <!-- Table is not empty, display the content -->
                                            <i class="fas fa-check" style="color: #000000;"></i>
                                            <div>
                                                {{ $getRecord->rehabilitation->rehabilitation_restore_develop }}
                                            </div>

                                            <!-- Table is empty, show a message or handle accordingly -->
                                            @endif
                                        </span>
                                    </div>
                                    <span class="text-dark text-decoration-underline"></span>
                                </div>
                                <div class="row">
                                    <div class="col-8 col-md-12">
                                        <span class="text-bold text-dark">2. To improve the nutritional and health
                                            status of the child. </span>


                                        <span class="text-dark text-decoration-underline">
                                            @if(!empty($getRecord->rehabilitation->rehabilitation_improve))
                                            <!-- Table is not empty, display the content -->
                                            <i class="fas fa-check" style="color: #000000;"></i>
                                            <div>
                                                {{ $getRecord->rehabilitation->rehabilitation_improve }}
                                            </div>

                                            <!-- Table is empty, show a message or handle accordingly -->
                                            @endif
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="col-8 col-md-12">
                                            <span class="text-bold text-dark">3. To reintegrate child to parents and/ or
                                                relatives.</span>
                                            <span class="text-dark text-decoration-underline">
                                                @if(!empty($getRecord->rehabilitation->rehabilitation_reintegrate))
                                                <!-- Table is not empty, display the content -->
                                                <i class="fas fa-check" style="color: #000000;"></i>
                                                <div>
                                                    {{ $getRecord->rehabilitation->rehabilitation_reintegrate }}
                                                </div>

                                                <!-- Table is empty, show a message or handle accordingly -->
                                                @endif
                                            </span>
                                        </div>
                                        <div class="row">
                                            <div class="col-8 col-md-12">
                                                <span class="text-bold text-dark">4. To placed out child for adoption.
                                                </span>


                                                <span class="text-dark text-decoration-underline">
                                                    @if(!empty($getRecord->rehabilitation->rehabilitation_placed))
                                                    <!-- Table is not empty, display the content -->
                                                    <i class="fas fa-check" style="color: #000000;"></i>
                                                    <div>
                                                        {{ $getRecord->rehabilitation->rehabilitation_placed }}
                                                    </div>

                                                    <!-- Table is empty, show a message or handle accordingly -->
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="row">
                                                <div class="col-8 col-md-12">
                                                    <span class="text-bold text-dark">5.To refer child to foster care
                                                        placement.
                                                    </span>


                                                    <span class="text-dark text-decoration-underline">
                                                        @if(!empty($getRecord->rehabilitation->rehabilitation_refer))
                                                        <!-- Table is not empty, display the content -->
                                                        <i class="fas fa-check" style="color: #000000;"></i>
                                                        <div>
                                                            {{ $getRecord->rehabilitation->rehabilitation_refer }}
                                                        </div>

                                                        <!-- Table is empty, show a message or handle accordingly -->
                                                        @endif
                                                    </span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-8 col-md-12">
                                                        <span class="text-bold text-dark">6. To transfer child to other
                                                            institution that
                                                            can provide the necessary services needed by the child.
                                                        </span>


                                                        <span class="text-dark text-decoration-underline">
                                                            @if(!empty($getRecord->rehabilitation->rehabilitation_transfer))
                                                            <!-- Table is not empty, display the content -->
                                                            <i class="fas fa-check" style="color: #000000;"></i>
                                                            <div>
                                                                {{ $getRecord->rehabilitation->rehabilitation_transfer
                                                                }}
                                                            </div>

                                                            <!-- Table is empty, show a message or handle accordingly -->
                                                            @endif
                                                        </span>
                                                    </div>
                                                    @endif
                                                    @if($getRecord->recommendation)
                                                    <h6 class="text-dark text-start mb-2 mt-4">VI. RECOMMENDATION</h6>
                                                    <span class="text-dark text-decoration-underline">
                                                        {{ $getRecord->recommendation->recommendation_recommendation }}
                                                    </span>
                                                    <h6 class="text-dark text-start mb-2 mt-4">VII. PLAN OF ACTION</h6>
                                                    <span class="text-dark text-decoration-underline">
                                                        {{ $getRecord->recommendation->recommendation_plan_of_action }}
                                                    </span>
                                                    <h6 class="text-dark text-start mb-2 mt-4">VIII. ACTION TAKEN/DATE
                                                    </h6>
                                                    <span class="text-dark text-decoration-underline">
                                                        {{ $getRecord->recommendation->recommendation_action_taken }}
                                                    </span>
                                                    @endif

                                                    <p class="text-dark mt-5">Prepared by;</p>
                                                    <span class="text-dark text-uppercase"> {{Auth::user()->firstname}}
                                                        {{Auth::user()->lastname}}</span>
                                                    <p class="text-dark text-decoration-underline">Social Worker</p>

                                                    <p class="text-dark">Noted by;</p>
                                                    <p class="text-dark text-decoration-underline">Center Head</p>




                                                    <!--End-Body Content-->


                                                    <!--Start-Footer-->
                                                   
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>







                                <!-- JavaScript Libraries -->
                                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                                <script src="{{asset('lib/chart/chart.min.js')}}"></script>
                                <script src="{{asset('lib/easing/easing.min.js')}}"></script>
                                <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
                                <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
                                <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
                                <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
                                <script
                                    src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

                                <!-- Template Javascript -->
                                <script src="{{asset('js/main.js')}}"></script>


</body>

</html>