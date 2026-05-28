@include('pages.placements.top')
<section class="sliders">
    <div class="slid">
        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1592px;margin:0px auto 0px;">
            <div class="amazingslider" id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="{{ asset('images/sliders/cse/lab2.jpg') }}" alt="slider1" title="slider1" />
                    </li>
                    <li><img src="{{ asset('images/sliders/cse/lab4.jpg') }}" alt="slider2" title="slider2" />
                    </li>
                    <li><img src="{{ asset('images/sliders/cse/lab5') }}" alt="slider3" title="slider3" />
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
                            <button class="nav-link active tablinks flex-fill bd-highlight col" onclick="openCity(event, 'cse')" id="defaultOpen">Computer Science & Engineering</button>
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
                                                <a href="{{ url('cse') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/cse/cse_mission') }}">Vision and Mission </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('head_cse') }}">Head Desk</a>
                                            </li>
                                             <li>
                                                <a href="{{ url('faculties_cse') }}">Faculty</a>
                                            </li>
                                             <li>
                                                <a href="{{ url('lab_cse') }}">Laboratories</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('departments/cse/cs_gallery') }}">Gallery</a>
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
                    <h4 class="college-head">Department of Computer Science Engineering</h4>
                    <hr>
                    <div class="er-txt">
                        <h5>Faculty </h5>
                    </div>
                    <div class="faculty">
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/hod.jpg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong> Dr. Anshu Kumar Dwivedi</strong></p>
                          
                            </div>

                            <div class="col-md-9 faculty-detail">
                            <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong> Associate Professor & Head
                                    
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.Tech(CSE) | M.Tech(CSE)| Ph.D(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Wireless Sensor Network, AI, Fuzzy Logic, Compiler Design, Theory of Computation
                                        </h3>
                                       
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong>8 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong> anshu460@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 24/08/2021
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/2.jpeg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Dr. Amit Kumar  Pathak</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>  Associate Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.Tech(CSE) | M.Tech(CSE) | Ph.D(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Computer Network, Block Chain, Cryptography, Data Structure using C, Computer Grafics, Computer Network
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 13 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail: amit465@bit.ac.in</strong>
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>01/10/2021
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div> 
                         <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/sudhir.png') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Dr. Sudhir Agrawal</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>  Professor & Dean
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.E(EE) | M.Tech(CSE) | Ph.D(EE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>Computational Intelligence & Cryptography
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 31 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>sagrawal22@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>01/10/2011
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div> 
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/manish.png') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Mr.Manish Gupta</strong></p>
                          
                            </div>

                            <div class="col-md-9 faculty-detail">
                            <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong> Associate Professor & Head
                                    
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.Tech(CSE) | M.Tech(CSE) 
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Big Data, Data Science
                                        </h3>
                                       
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong>11 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong> manish277@bit.ac.in
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
                       
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/img.jpg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong> Mr. Sumit Jaiswal</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>Assistant Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.Tech(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>Programmimg
                                        </h3>
                                       
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 10 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong> sumit414@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>01/10/2020
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/sachi.png') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong> Mr. Sachidanand Chaturvedi</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>Assistant Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech(IT) | M.Tech(P)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Software Engineering, Web technology,Web designing, Software Testing  
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 13 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>schaturvedi26@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>26/07/2011 
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/pallavi1.jpeg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Miss. Pallavi Dixit</strong></p>
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
                                            <strong>Qualification:</strong> B.Tech(CSE) | M.Tech(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Python, CSS, Data Mining, Database
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 7 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>pallavi348@bit.ac.in
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 17/01/2019
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div>  
                       <!-- <div class="row faculties">
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
                                            <strong>Qualification:</strong> B.Tech(CSE), M.Tech(CSE), MBA, BE
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
                        </div> -->
                          

                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/Alok.jpg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong> Alok Kumar Srivastava</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>Assistant Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong>B.Tech(CSE) | M.Tech(CSE) 
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>DBMS, Data Structure,Python
                                        </h3>
                                       
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 5 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong> alokkumar302@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>26/07/2018
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/ranjeet.png') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong> Ranjeet Singh</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>Assistant Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech(IT) | M.Tech(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Internet Of Things & Machine Learning
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 5 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>ranjeetsingh370@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 07/07/2015
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/shrwan.jpeg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Shrawan Kumar Pandey</strong></p>
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
                                            <strong>Qualification:</strong> B.E(CSE) | M.Tech(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>Mathematican Computation, Digital Logic, Data Science
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 15 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>shrawan458@bit.ac.in
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong> 25/07/2016
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div>  
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/abhinan.jpeg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Mr. Abhinandan Tripathi</strong></p>
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
                                            <strong>Qualification:</strong> B.Tech(CSE) | M.Tech(CSE) | Ph.D(P)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong> Compiler Design, Theory of Computation, Data Structure & Algoriithem, Digital Image Processing,Cryptography & Netwirk Secqrity
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 10 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>abhinandan282@bit.ac.in
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
                       <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/3.jpeg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Miss Kanak Tripathi</strong></p>
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
                                            <strong>Qualification:</strong> B.Tech(CSE) | M.Tech(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>Data Structure, Design Analysis & Algorithm, C++, OOPS, Website Designing
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> Fresher
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail:</strong>kanak485@bit.ac.in
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
                       
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/Abhishek.jpg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Mr. Abhishek Sahi</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>  Assistant Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech(CSE) | M.Tech(CSE)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>Computer Network, Block Chain, Crptography & Network Security                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 5 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail: </strong>abhishekshahi224@bit.ac.in
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>01/10/2021
                                        </h3>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="row faculties">
                            <div class="col-md-3 faculty-img">
                                <img src="{{ asset('images/faculties/cse/Chaynika.jpeg') }}" class="img-fluid" alt="">
                                <p class="text-center"><strong>Chaynika Srivastava</strong></p>
                            </div>

                            <div class="col-md-9 faculty-detail">
                                <ul>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Designation:</strong>  Assistant Professor
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong>Qualification:</strong> B.Tech(IT) | M.Tech(IT)
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Area of Interest:</strong>CO, TA & FL, AI, Computr Networks
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Experiences:</strong> 8 years
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> E-mail: chayanika483@bit.ac.in</strong>
                                        </h3>
                                    </li>
                                    <li class="mission" style="font-family: auto;font-size: 16px;color: #6c6c6f !important;">
                                        <h3 style="font-family: auto;font-size: 20px;color: #6c6c6f !important;">
                                            <strong> Date of Joining:</strong>29/11/2021
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
