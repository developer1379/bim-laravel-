



<!-- Topbar Start -->
<div
    class="topbar d-none d-md-block"
    style="
        background: linear-gradient(
          120deg,
          rgba(28, 28, 28, 1) 0%,
          rgba(28, 28, 28, 1) 27%,
          rgba(183, 0, 0, 1) 27%,
          rgba(183, 0, 0, 1) 100%
        );
      ">
    <nav class="navbar navbar-expand-lg py-1" style="padding:0px 0px 0px 5px !important">
        <div class="container-fluid" style="padding:0px 0px !important">
            <div class="logo">
                <!--<a
                    href="#"
                    target="_blank"
                    class="fs-5 fw-bolder px-0 text-white bg-transparent text-decoration-none text-uppercase">Buddha Group of Institution</a>-->
            </div>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarNav"
                style="padding-left: 120px">
               <!-- <ul> 
                     <li class="dropdown dropdown-lg" data-for="5">
                         <a href="#"><span>BGI</span> <i class="bi bi-chevron-down"></i></a>
                         <ul>
                                <li><a href="#">Parichay</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Colleges</a></li>
                                <li><a href="#">Campus</a></li>
                                <li class="dropdown"><a href="#">BIC <i class="bi bi-chevron-down"></i> </a>
                                    <ul>
                                            <li><a href="#"> Startups</a></li>
                                            <li><a href="#"> Achievements</a></li>
                                            
                               
                                                                                              
                                  </ul>
                              </li>


                         </ul>
                    </li>
                     <li class="dropdown dropdown-lg" data-for="1">
                        <a href="#"><span>Human Resources</span> </a>
                        <ul></ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="0">
                        <a href="#"><span>Teaching Padagoy</span> </a>
                        <ul></ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="3">
                        <a href="#"><span>FDP/FAR</span> </a>
                        <ul></ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="2">
                        <a href="#"><span>Library</span> </a>
                        <ul></ul>
                    </li>
                   
                    <li class="dropdown dropdown-lg" data-for="4">
                        <a href="#" target="_blank"><span>Student Activities</span>
                        </a>
                        <ul></ul>
                    </li>
                   
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="{{ url('Contact_Us') }}"><i class="bx bxs-phone-call fs-3" style="margin-left:4px;"></i> </a>
                        <ul></ul>
                    </li>
                    

                </ul>-->
            </div>
        </div>
    </nav>
</div>

<!-- Topbar Ends -->
<!-- Middle Section Start -->
<!-- Desktop and Tablet View -->
<section class="middle" style="background-color: #ffffff">
    <div class="container py-4 d-none d-md-block">
        <div class="row">
            <div class="col-md-1 px-1">
                <center>
                    <a href="{{ url('index') }}">
                        <img src="{{ asset('images/logo-ba.png') }}" class="img-fluid w-logo" style="max-width:165% !important;" />
                    </a>
                </center>
            </div>
            <div class="col-md-10 text-center w-head fw-bolder">
                <h2 class="w-tsh text-danger fw-bold">

                       DEPARTMENT OF BUSINESS ADMINISTRATION  

                </h2>

                 <h5 class="w-tsh text-danger fw-bold">

                       BUDDHA INSTITUTE OF MANAGEMENT, GIDA, GORAKHPUR   

                </h5>
                <!--<h2 class="w-tsh text-danger fw-bold">
                    बुद्धा इंस्टिट्यूट ऑफ़ मैनेजमेंट, गीडा, गोरखपुर
                </h2>-->
                <h6 class="text-dark">
                    Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul
                    Kalam Technical University, Lucknow, Uttar Pradesh
                    <br><br>  <span class="bg-warning px-2 text-dark">College Code - 1212
                    </span>
                </h6>
            </div>
            <div class="col-md-1 px-1">
                <center>
                    <a href="https://aktu.ac.in/" target="_blank">
                        <img src="{{ asset('images/aktu.png') }}" class="img-fluid w-logo" />
                    </a>
                </center>
            </div>
        </div>
    </div>

    <!-- Mobile View -->
    <div
        class="container py-2 d-block d-md-none text-center"
        style="background-color: #ffffff">
        <div class="row align-items-center">
            <div class="col-3">
                <a href="{{ url('index') }}">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        class="img-fluid w-logo"
                        style="max-width: 50px" />
                </a>

                
            </div>
            <div class="col-8 text-start">
                <h6 class="text-danger fw-bold m-0 text-center">DEPARTMENT OF BUSINESS ADMINISTRATION</h6>
                <h6 class="text-warning fw-bold m-0 text-center">
                  
                     BUDDHA INSTITUTE OF MANAGEMENT, GIDA, GORAKHPUR 
                    
                </h6>
                <h6 class="text-dark fw-bold m-0 text-center">
                   Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul
                    Kalam Technical University, Lucknow, Uttar Pradesh
                    <span class="bg-warning text-dark"><br><br>Code-1212 </span>
                </h6>
            </div>
        </div>
    </div>
</section>
<!-- Middle Section Ends -->
<!-- Header -->
<header id="header" class="d-flex align-items-center py-2" style="padding:0px 0px 0px 5px !important">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="padding:0px 0px !important">
        <!--div class="logo">
            <a href="https://www.bimgkp.ac.in/index.php" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" class="text-decoration-none text-light fs-3 fw-bold" title="Buddha Group of Institutions">BGI</a>
        </div>-->
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ url('Index') }}"><i class="bx bxs-home fs-3"></i></a></li>

                <!-- ABOUT US -->
                <li class="dropdown">
                    <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/bba/bba_hod') }}">HOD  </a></li>
                        <li><a href="{{ url('departments/bba/bba_Admin_team') }}">Administration team</a></li>
                        <li><a href="{{ url('departments/bba/bba_commeties') }}">Committees</a></li>
                        <li><a href="{{ url('departments/bba/bba_faculty') }}">Faculty</a></li>
                        <li><a href="{{ url('departments/bba/bba_students') }}">Students </a></li>
                        <li><a href="{{ url('departments/bba/bba_labs') }}">Labs</a></li>
                        <li><a href="{{ url('departments/bba/bba_v_m') }}">Vision Mission</a></li>
                        <li><a href="{{ url('departments/bba/bba_peopopso') }}">PEO, PO, PSO</a></li>
                        <li><a href="{{ url('departments/bba/bba_video') }}">Department Video</a></li>
                        <li><a href="{{ url('departments/bba/bba_gallery') }}">Gallery  </a></li>
                        <li><a href="{{ url('departments/bba/bba_ss') }}">Student Speak   </a></li>
                        <li><a href="{{ url('departments/bba/bba_e-mag') }}">E-Magazine  </a></li>
                        
                        
                      
                   </ul>
                </li>

            <!-- PLACEMENT -->
                <li class="dropdown">
                    <a href="#"><span>Academics</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/bba/bba_acc') }}"> Academic Calendar</a></li>
                        <li><a href="{{ url('departments/bba/bba_lesson') }}">Lesson Plan</a></li>
                        <li><a href="{{ url('departments/bba/bba_bs') }}">Buddha Series </a></li>
                        <li><a href="{{ url('departments/bba/bba_es') }}">Evaluation Scheme</a></li>                        
                        <li><a href="{{ url('departments/bba/bba_agl') }}">Academic Guest Lecture</a></li>
                        <li><a href="{{ url('departments/bba/bba_topers') }}">Toppers </a></li>
                       
                    </ul>
                </li>

                <!--  Achievement -->

               <!-- <li><a href="{{ url('index') }}">Achievement </a></li>-->

                <!-- Department socity -->
                <li class="dropdown">
                    <a href="#"><span>Department Society (Fusion)</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/bba/bba_ob') }}">Office Bearer</a></li>
                        <li><a href="{{ url('departments/bba/bba_so_enents') }}">Events</a></li>
                        <li><a href="{{ url('departments/bba/bba_orp') }}">Orientation Program </a></li>
                        <li><a href="{{ url('bba_bv') }}">Bon Voyage </a></li>
                      
                       
                    </ul>
                </li>
  
  <!-- FDP / FAR -->
                <li class="dropdown">
                    <a href="#"><span>FDP / FAR </span><i class="bi bi-chevron-down"></i></a>
                   <ul>
                        <li><a href="{{ url('departments/bba/bba_fb') }}">Faculty Publications </a></li>
                        <li><a href="#">Research Grant  </a></li>
                        <li><a href="#">NPTEL/MOOCs </a></li>
                        <li><a href="#">Project Guided </a></li>
                        
                       <!-- <li class="dropdown">
                            <a href="#">Admission <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('mba?mba-vision-mission') }}">Admissions in MBA</a></li>
                                <li><a href="{{ url('mca?mca-vision-mission') }}">Admission in MCA</a></li>
                                <li><a href="{{ url('bba?bba-vision-mission') }}">Admission in BBA</a></li>
                                <li><a href="{{ url('bca?bca-vision-mission') }}">Admission in BCA</a></li>
                            </ul>
                        </li>-->
                       <!-- <li><a href="https://aktubrand.vercel.app/blog/aktu-digital-evaluation-update-202526-what-colleges-and-teachers-must-know" target="_blank">Evaluation Scheme </a></li>
                        <li><a href="https://aktu.ac.in/syllabus.html" target="_blank">Syllabus</a></li>
                        <li><a href="#" target="_blank">Issue of Certificate for Passout Students</a></li>
                        <li><a href="{{ url('College-Academic-calander-14-10-24') }}" target="_blank">College Calendar</a></li>
                        <li><a href="{{ url('University-Academic-Calander-2024-25') }}" target="_blank">University Calendar</a></li>
                        <li><a href="{{ url('ELearning') }}">E-Learning</a></li>
                        <li><a href="{{ url('MoU') }}">MoU</a></li>-->
                    </ul>
                </li>


               <!-- FACILITIES -->

               
               
                <!-- R&D -->
                


   <li class="dropdown">
                    <a href="#"><span> Placement</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                                
                                            <li><a href="#">Top Placement </a></li>
                                            <li><a href="#">Our Recruiters </a></li>
                                            <li><a href="#">Proud Alumni</a></li>
                                            <li><a href="#">Industrial Visit</a></li>
                                            <li><a href="#">MOU’s </a></li>
                                            <li><a href="#">BEAM </a></li>
                                            <li><a href="#">Guest Lecture</a></li>
                                            <li><a href="#">Placement Awareness Workshop</a></li>
                                            <li><a href="#">Placement Drive</a></li>
                                            <li><a href="#">Placement Tips Seminar</a></li>
                                            <li><a href="#">Placement Success Classes </a></li>
                                            <li><a href="#">Alumni Association</a></li>
                                            <li><a href="#">Lecture by Alumni</a></li>
                                            <li><a href="#">Alumni Speaks</a></li>
                                            
                                            

                        </ul>
                </li>
                       
                

              
               

                <!-- SKILL DEV -->
                <li class="dropdown">
                    <a href="#"><span>Skill Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Tech Edge </a></li>
                        <li><a href="#">Gyandeep</a></li>
                        <li><a href="#">Tech Wizard</a></li>
                        <li><a href="{{ url('departments/bba/bba_sdcl') }}">SD Club </a></li>
                        <li><a href="#">Out campus Participation </a></li>
                        <li><a href="{{ url('departments/bba/bba_mooc') }}">MOOCs Course</a></li>
                        <li><a href="{{ url('departments/bba/bba_works') }}">Workshop</a></li>
                        <li><a href="#">SD Competitions  </a></li>
                        <!--<li><a href="{{ url('SkillEnhancement') }}">Buddha Skill Enhancement Programme</a></li>
                        <li><a href="{{ url('EnglishChaupal') }}">English Chaupal</a></li>
                        <li><a href="#">Gyandeep Summer Training</a></li>
                        <li><a href="{{ url('GateClasses') }}">Gate-Classes</a></li>
                        <li><a href="#">Tech-Edge</a></li>
                        <li><a href="#">Career Counselling</a></li>
                        <li><a href="#">GATE Result</a></li>-->
                    </ul>
                </li>

               
                <!-- ACADEMICS -->
               


                <!-- EXAMINATION -->
              
              
              


       <!-- Personality Development -->
                <li class="dropdown">
                    <a href="#"><span>Research </span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                            <li><a href="#">Project Orientation Program</a></li>
                            <li><a href="#">Innovation Startup Workshop</a></li>
                            <li><a href="#">Paper Presentation</a></li>
                            <li><a href="#">Paper Publications</a></li>
                            <li><a href="#">Tech Yuva</a></li>
                            <li><a href="#">National Conference</a></li>
                            <li><a href="#">Project Competition</a></li>
                            <li><a href="#">Research Grant </a></li>
                            <li><a href="#">Patents </a></li>
                        
                        
                    </ul>
                </li>


               
               
                <!--<li class="dropdown">
                    <a href="#"><span>Teaching Pedagogy</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="{{ url('index') }}">Achievement </a></li>
                        <li><a href="{{ url('index') }}">Buddha Series</a></li>
                        <li><a href="{{ url('index') }}">Success Program </a></li>
                        <li><a href="{{ url('index') }}">Mentor Mentee Register</a></li>
                    </ul>
                </li>-->
         
                  

                <!--<li class="dropdown"><a href="#"><span>What's New</span> <i class="bi bi-chevron-down"></i></a>
                    <ul class="w-ddl-end">
                        <li><a href="{{ url('NewsDetails') }}">News <i class="bx bx-news me-2"></i></a></li>
                        <li><a href="{{ url('NoticeDetails') }}">Notice <i class="bx bx-star  me-2"></i></a></li>
                        <li><a href="{{ url('videos') }}">Videos Gallery <i class="bx bi-camera-reels-fill  me-2"></i></a></li>
                        <li><a href="{{ url('gallery') }}">Photo Gallery <i class="bx bx-image  me-2"></i></a></li>
                        <li><a href="{{ url('ImportantLinks') }}">Important Links <i class="bx bx-link-alt  me-2"></i></a></li>
                        <li><a href="{{ url('mediaCoverage') }}">Media Coverage <i class="bx bi bi-globe  me-2"></i></a></li>
                        <li><a href="{{ url('Events') }}">Events <i class="bx bx-calendar-event  me-2"></i></a></li>

                        <li><a href="{{ url('Grivance') }}">Grievance Form <i class="bx bx-box    me-2"></i></a></li>
                        <li><a href="{{ url('AntiRagging') }}">Anti Ragging <i class="bx bxs-flag-checkered  me-2"></i></a></li>

                        <hr />


                    </ul>
                </li>-->

                
            </ul>
            </li>
            </ul>
        </nav>
    </div>
</header>


<!-- Scripts -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('Includes/script.js') }}"></script>
<!-- End Header -->