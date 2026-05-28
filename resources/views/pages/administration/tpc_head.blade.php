@extends('layouts.site')

@section('content')
<section>
    <div class="container cse-container" style="max-width: 95%;">
        <div class="row">
            <div class="col-lg-4 depart-padd">
                <div class="mb-30">
                    <nav>
                        <div class="nav nav-tabs text-uppercase  d-flex bd-highlight" id="nav-tab" role="tablist">
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Traning & Placement</button>
                        </div>
                    </nav>

                    <div id="cse" class="tabcontent">
                        <div class="tab-content p-0">
                            <div class="tab-pane p-0  fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!--<h3>Events</h3>-->
                                <div class="block-hdnews p-2" style="background-color: #f3f3f3;">

                                <div class="list-wrpaaer" style="height: 247px; position: relative; overflow: hidden;">
                                        <ul class="colrs">
                                        <li>
                                                <a href="{{ url('tpc_head') }}">Traning & Placement Head</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Company Registered</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('placement') }}">Placements</a>
                                            </li>
                            
                                        </ul>
                                    </div>
                                    <!-- list-wrpaaer -->
                                    <div class=" clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 bords pt-20 depart-marg">
                <div class="int-container">
                    <h4 class="college-head">Head of Traning & Placement</h4>
                    <hr>
                   
                    <div class="faculty">
                        <div class="row faculties">
                        <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/Ashvani.png') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Mr. Ashvani Kumar Chaturvedi</strong></p>
                            </div> 

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong> Assistant Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech(CSE), MBA
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> C/C++, Java, Web Technology
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 25 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>tp@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 01/07/2012
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div> 
                        


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
