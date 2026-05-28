@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1590px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                   <li><img src="{{ asset('images/sliders/civil.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('images/sliders/civil2.jpeg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/civil3.JPG') }}" alt="slider3" title="slider3" />
                    </li>
                     <li><img src="{{ asset('images/sliders/civil4.JPG') }}" alt="slider3" title="slider3" />
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
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Civil Engineering</button>
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
                                                <a href="{{ url('civil') }}">About</a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('head_civil') }}">Head Desk</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('faculties_civil') }}">Faculty</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('lab_civil') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/civil/civil_gallery') }}">Gallery</a>
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
                    <h4 class="college-head">Department of Civil Engineering</h4>
                    <hr>
                   
                    <div class="faculty">
                    <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/civil/vijay.png') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Mr. Vijay Kumar Srivastava</strong></p>
                          
                            </div>

                            <div class="col-md-9 faculty-detail">
                            <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong> Assistant Professor & Head
                                    
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.Tech | M.Tech
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>concrete Technology, Design of concrete/Structure
                                        </h3>
                                       
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong>9 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong> vksrivastva156@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 16/08/2012
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
