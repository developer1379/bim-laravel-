@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1390px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('images/sliders/1_sld.jpeg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('images/sliders/2_sld.jpeg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/3_sld.JPG') }}" alt="slider3" title="slider3" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container cse-container" style="max-width: 95%;">
        <div class="row">
            <div class="col-lg-4 depart-padd">
                <div class="mb-30">
                    <nav>
                        <div class="nav nav-tabs text-uppercase  d-flex bd-highlight" id="nav-tab" role="tablist">
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'it')" id="defaultOpen">Information Technology</button>
                        </div>
                    </nav>

                    <div id="it" class="tabcontent">
                        <div class="tab-content p-0">
                            <div class="tab-pane p-0  fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!--<h3>Events</h3>-->
                                <div class="block-hdnews p-2" style="background-color: #f3f3f3;">

                                    <div class="list-wrpaaer" style="height: 200px; position: relative; overflow: hidden;">
                                        <ul class="colrs">
                                            <li>
                                                <a href="{{ url('it') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('faculties_it') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('head_it') }}">Head Desk</a>
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
                    <h4 class="college-head">Department of Information Technology</h4>
                    <hr>
                    <div class="er-txt">
                        <h5>Faculty </h5>
                    </div>
                    
                    <div class="faculty">
                    <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/img.jpg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Manish Kumar Gupta</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>Head of Department & Assi. Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech, M.Tech, PhD(Pursuing)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Data Science
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 5 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail: manish277@bit.ac.in</strong>
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 03/07/2018
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div> 
                        
                    </div>
                    <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/img.jpg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Pallavi Dixit</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong> Assi. Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech (UPTU), M.Tech (MUIT)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Information Technology
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 5 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail: email.com</strong>
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 00/00/0000
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div> 
                    </div>
                    <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/img.jpg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Pallavi Dixit</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong> Assi. Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech (UPTU), M.Tech (MUIT)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Information Technology
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 5 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail: email.com</strong>
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 00/00/0000
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

@include('includes.footer')
