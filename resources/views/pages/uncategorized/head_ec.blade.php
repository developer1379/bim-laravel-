@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('images/sliders/ec.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('images/sliders/ec2.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/ec3.JPG') }}" alt="slider3" title="slider3" />
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
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Electronics And Communication Engineering</button>
                        </div>
                    </nav>

                    <div id="cse" class="tabcontent">
                        <div class="tab-content p-0">
                            <div class="tab-pane p-0  fade  show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <!--<h3>Events</h3>-->
                                <div class="block-hdnews p-2" style="background-color: #f3f3f3;">
                                <div class="list-wrpaaer" style="height: 200px; position: relative; overflow: hidden;">
                                <ul class="colrs">
                                            <li>
                                                <a href="{{ url('ec') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/ec/ec_mission') }}">Vision and Mission </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('head_ec') }}">Head Desk</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('faculties_ec') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('lab_ec') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/ec/ec_gallery') }}">Gallery</a>
                                            </li>
         <li>
                                                <a href="{{ url('coming') }}" >Time Table</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('coming') }}">Achievements</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('coming') }}">Research & Consultancy</a>
                                            </li>
                                                                                        <li>
                                                <a href="{{ url('coming') }}">Curriculum</a>
                                            </li>
                                   

                                            <li>
                                                <a href="{{ url('coming') }}">Publications</a>
                                            </li>
                                            
                                   
                                            <li>
                                                <a href="{{ url('coming') }}">Organization Structure</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('coming') }}">Notices</a>
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
                    <h4 class="college-head">Head of Electronics & Communication Engineering</h4>
                    <hr>
                   
                    <div class="faculty">
                     <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/ec/anil.png') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Mr. Anil Kumar Chaudhary</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>  Assistant Professor & Head
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.Tech | M.Tech | Ph.D(P)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Comunication Engineering, Microwave
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 8 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong> akchaudhary206@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>26/07/2013
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div> 
                </div>
            </div>

        </div>
    </div>
</section>

@include('includes.footer')
