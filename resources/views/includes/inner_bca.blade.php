<x-department-navbar>
    <x-slot name="logo">{{ asset('../images/logo-ca.png') }}</x-slot>
    <x-slot name="logoStyle">max-width:165% !important;</x-slot>
    <x-slot name="title">DEPARTMENT OF COMPUTER APPLICATION</x-slot>
    <x-slot name="subtitle">BUDDHA INSTITUTE OF MANAGEMENT, GIDA, GORAKHPUR</x-slot>

    <li><a class="nav-link scrollto" href="{{ url('/') }}"><i class="bx bxs-home fs-3"></i></a></li>

                <!-- ABOUT US -->
                <li class="dropdown">
                    <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/mca/ca_hod') }}">HOD  </a></li>
                        <li><a href="{{ url('departments/mca/ca_admin_team') }}" target="_blank">Administration team</a></li>
                        <li><a href="{{ url('departments/mca/ca_commit') }}">Committees</a></li>
                        <li><a href="{{ url('departments/mca/ca_faculty') }}">Faculty</a></li>
                        <li><a href="{{ url('departments/mca/ca_student') }}">Students </a></li>
                        <li><a href="{{ url('departments/mca/ca_labs') }}">Labs</a></li>
                        <li><a href="{{ url('departments/mca/ca_v_m') }}">Vision Mission</a></li>
                        <li><a href="{{ url('departments/mca/ca_peopopso') }}">PEO, PO, PSO</a></li>
                        <li><a href="{{ url('departments/mca/ca_dpt_video') }}">Department Video</a></li>
                        <li><a href="{{ url('departments/mca/ca_gallery') }}">Gallery  </a></li>
                        <li><a href="{{ url('departments/mca/ca_ss') }}">Student Speak   </a></li>
                        <li><a href="{{ url('departments/mca/ca_emg') }}">E-Magazine  </a></li>
                        
                        
                      
                   </ul>
                </li>

            <!-- PLACEMENT -->
                <li class="dropdown">
                    <a href="#"><span>Academics</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/mca/ca_acc') }}"> Academic Calendar</a></li>
                        <li><a href="{{ url('departments/mca/ca_lp') }}">Lesson Plan</a></li>
                        <li><a href="{{ url('departments/mca/ca_bs') }}">Buddha Series </a></li>
                        <li><a href="{{ url('departments/mca/ca_es') }}">Evaluation Scheme</a></li>                        
                        <li><a href="{{ url('departments/mca/ca_agl') }}">Academic Guest Lecture</a></li>
                        <li><a href="{{ url('departments/mca/ca_toppers') }}">Toppers </a></li>
                       
                    </ul>
                </li>

                <!--  Achievement -->

               <!-- <li><a href="{{ url('/') }}">Achievement </a></li>-->

                <!-- Department socity -->
                <li class="dropdown">
                    <a href="#"><span>Department Society (Codex)</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/mca/ca_ob') }}">Office Bearer</a></li>
                        <li><a href="{{ url('departments/mca/ca_events') }}">Events</a></li>
                        <li><a href="{{ url('departments/mca/ca_op') }}">Orientation Program </a></li>
                        <li><a href="{{ url('ca_bv') }}">Bon Voyage </a></li>
                      
                       
                    </ul>
                </li>
  
  <!-- FDP / FAR -->
                <li class="dropdown">
                    <a href="#"><span>FDP / FAR </span><i class="bi bi-chevron-down"></i></a>
                   <ul>
                        <li><a href="#">Faculty Publications </a></li>
                        <li><a href="#">Research Grant  </a></li>
                        <li><a href="#">NPTEL/MOOCs </a></li>
                        <li><a href="{{ url('departments/mca/ca_pgu') }}">Project Guided </a></li>
                        
                       <!-- <li class="dropdown">
                            <a href="#">Admission <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ asset('../mba.php?mba-vision-mission') }}">Admissions in MBA</a></li>
                                <li><a href="{{ asset('../mca.php?mca-vision-mission') }}">Admission in MCA</a></li>
                                <li><a href="{{ asset('../bba.php?bba-vision-mission') }}">Admission in BBA</a></li>
                                <li><a href="{{ asset('../bca.php?bca-vision-mission') }}">Admission in BCA</a></li>
                            </ul>
                        </li>-->
                       <!-- <li><a href="https://aktubrand.vercel.app/blog/aktu-digital-evaluation-update-202526-what-colleges-and-teachers-must-know" target="_blank">Evaluation Scheme </a></li>
                        <li><a href="https://aktu.ac.in/syllabus.html" target="_blank">Syllabus</a></li>
                        <li><a href="#" target="_blank">Issue of Certificate for Passout Students</a></li>
                        <li><a href="{{ url('../College-Academic-calander-14-10-24') }}" target="_blank">College Calendar</a></li>
                        <li><a href="{{ url('../University-Academic-Calander-2024-25') }}" target="_blank">University Calendar</a></li>
                        <li><a href="{{ url('../ELearning') }}">E-Learning</a></li>
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
                                            <li><a href="{{ url('departments/mca/ca_industrial') }}">Industrial Visit</a></li>
                                            <li><a href="#">conclave </a></li>
                                            <li><a href="{{ url('departments/mca/ca_gl') }}">Guest Lecture</a></li>
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
                        <li><a href="{{ url('departments/mca/ca_techedge') }}">Tech Edge </a></li>
                        <li><a href="{{ url('departments/mca/ca_gyndeep') }}">Gyandeep</a></li>
                        <li><a href="{{ url('ca_techwi') }}">Tech Wizard</a></li>
                        <li><a href="{{ url('ca_sdclub') }}">SD Club </a></li>
                        <li><a href="{{ url('ca_ocp') }}">Out campus Participation </a></li>
                        <li><a href="{{ url('ca_moocs') }}">MOOCs Course</a></li>
                        <li><a href="{{ url('departments/mca/ca_workshop') }}">Workshop</a></li>
                        <li><a href="{{ url('departments/mca/ca_sdcomp') }}">SD Competitions  </a></li>
                        <!--<li><a href="{{ url('../SkillEnhancement') }}">Buddha Skill Enhancement Programme</a></li>
                        <li><a href="{{ url('../EnglishChaupal') }}">English Chaupal</a></li>
                        <li><a href="#">Gyandeep Summer Training</a></li>
                        <li><a href="{{ url('../GateClasses') }}">Gate-Classes</a></li>
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
                            <li><a href="{{ url('departments/mca/ca_isw') }}">Innovation Startup Workshop</a></li>
                            <li><a href="{{ url('departments/mca/ca_pp') }}">Paper Presentation</a></li>
                            <li><a href="#">Paper Publications</a></li>
                            <li><a href="{{ url('departments/mca/ca_tu') }}">Tech Yuva</a></li>
                            <li><a href="{{ url('departments/mca/ca_nc') }}">National Conference</a></li>
                            <li><a href="#">Project Competition</a></li>
                            <li><a href="#">Research Grant </a></li>
                            <li><a href="#">Patents </a></li>
                        
                        
                    </ul>
                </li>


               
               
                <!--<li class="dropdown">
                    <a href="#"><span>Teaching Pedagogy</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="{{ url('/') }}">Achievement </a></li>
                        <li><a href="{{ url('/') }}">Buddha Series</a></li>
                        <li><a href="{{ url('/') }}">Success Program </a></li>
                        <li><a href="{{ url('/') }}">Mentor Mentee Register</a></li>
                    </ul>
                </li>-->
         
                  

                <!--<li class="dropdown"><a href="#"><span>What's New</span> <i class="bi bi-chevron-down"></i></a>
                    <ul class="w-ddl-end">
                        <li><a href="{{ url('../NewsDetails') }}">News <i class="bx bx-news me-2"></i></a></li>
                        <li><a href="{{ url('../NoticeDetails') }}">Notice <i class="bx bx-star  me-2"></i></a></li>
                        <li><a href="{{ url('../videos') }}">Videos Gallery <i class="bx bi-camera-reels-fill  me-2"></i></a></li>
                        <li><a href="{{ url('../gallery') }}">Photo Gallery <i class="bx bx-image  me-2"></i></a></li>
                        <li><a href="{{ url('../ImportantLinks') }}">Important Links <i class="bx bx-link-alt  me-2"></i></a></li>
                        <li><a href="{{ url('../mediaCoverage') }}">Media Coverage <i class="bx bi bi-globe  me-2"></i></a></li>
                        <li><a href="{{ url('../Events') }}">Events <i class="bx bx-calendar-event  me-2"></i></a></li>

                        <li><a href="{{ url('../Grivance') }}">Grievance Form <i class="bx bx-box    me-2"></i></a></li>
                        <li><a href="{{ url('../AntiRagging') }}">Anti Ragging <i class="bx bxs-flag-checkered  me-2"></i></a></li>

                        <hr />


                    </ul>
                </li>-->

                
            </ul>
            </li>
</x-department-navbar>
