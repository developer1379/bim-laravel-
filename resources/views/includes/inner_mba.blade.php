<x-department-navbar>
    <x-slot name="logo">{{ asset('../images/mba_logo.jpg') }}</x-slot>
    <x-slot name="logoStyle">max-width:165% !important;</x-slot>
    <x-slot name="title">Master of Business Administration (MBA)</x-slot>
    <x-slot name="subtitle">BUDDHA INSTITUTE OF MANAGEMENT, GIDA, GORAKHPUR</x-slot>

    <li><a class="nav-link scrollto" href="{{ url('mba') }}"><i class="bx bxs-home fs-3"></i></a></li>

                <!-- ABOUT US -->
                <li class="dropdown">
                    <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/mba/mba_hod') }}">HOD  </a></li>
                        <li><a href="{{ url('departments/mba/mba_admin_team') }}">Administration team</a></li>
                        <li><a href="{{ url('departments/mba/mba_commeties') }}">Committees</a></li>
                        <li><a href="{{ url('departments/mba/mba_faculty') }}">Faculty</a></li>
                        <li><a href="{{ url('departments/mba/mba_student_list') }}">Students </a></li>
                        <li><a href="{{ url('departments/mba/mba_labs') }}">Labs</a></li>
                        <li><a href="{{ url('departments/mba/mba_v_m') }}">Vision Mission</a></li>
                        <li><a href="{{ url('departments/mba/mba_peopospo') }}">PEO, PO, PSO</a></li>
                        <li><a href="{{ url('departments/mba/mba_video') }}">Department Video</a></li>
                        <li><a href="{{ url('departments/mba/mba_gallery') }}">Gallery  </a></li>
                        <li><a href="{{ url('departments/mba/mba_ss') }}">Student Speak   </a></li>
                        <li><a href="{{ url('departments/mba/mba_emg') }}">E-Magazine  </a></li>
                        
                        
                      
                   </ul>
                </li>

            <!-- PLACEMENT -->
                <li class="dropdown">
                    <a href="#"><span>Academics</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/mba/mba_acc') }}"> Academic Calendar</a></li>
                        <li><a href="{{ url('departments/mba/mba_lesson') }}">Lesson Plan</a></li>
                        <li><a href="{{ url('departments/mba/mba_bs') }}">Buddha Series </a></li>
                        <li><a href="{{ url('departments/mba/mba_es') }}" target="_blank">Evaluation Scheme</a></li>                        
                        <li><a href="{{ url('departments/mba/mba_agl') }}" target="_blank">Academic Guest Lecture</a></li>
                        <li><a href="{{ url('departments/mba/mba_topers') }}" target="_blank">Toppers </a></li>
                       
                    </ul>
                </li>

                <!--  Achievement -->

               <!-- <li><a href="{{ url('/') }}">Achievement </a></li>-->

                <!-- Department socity -->
                <li class="dropdown">
                    <a href="#"><span>Department Society (Pinnacle)</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('departments/mba/mba_ob') }}">Office Bearer</a></li>
                        <li><a href="{{ url('departments/mba/mba_so_events') }}">Events</a></li>
                        <li><a href="#">Orientation Program </a></li>
                        <li><a href="#">Bon Voyage </a></li>
                      
                       
                    </ul>
                </li>
  
  <!-- FDP / FAR -->
                <li class="dropdown">
                    <a href="#"><span>FDP / FAR </span><i class="bi bi-chevron-down"></i></a>
                   <ul>
                        <li><a href="{{ url('departments/mba/mba_fb') }}">Faculty Publications </a></li>
                        <li><a href="#">Research Grant  </a></li>
                        <li><a href="#">NPTEL/MOOCs </a></li>
                        <li><a href="#">Project Guided </a></li>
                        
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
                                
                                            <li><a href="{{ url('departments/mba/mba_top_placement') }}">Top Placement </a></li>
                                            <li><a href="{{ url('departments/mba/mba_recruter') }}">Our Recruiters </a></li>
                                            <li><a href="{{ url('departments/mba/mba_proud_alumuni') }}">Proud Alumni</a></li>
                                            <li><a href="{{ url('departments/mba/mba_iv') }}">Industrial Visit</a></li>
                                            
                                            <li><a href="{{ url('departments/mba/mba_conclave') }}">Conclave </a></li>
                                            <li><a href="{{ url('departments/mba/mba_gl') }}">Guest Lecture</a></li>
                                            <li><a href="{{ url('departments/mba/mba_placement_workshop_programs') }}">Placement Awareness Workshop</a></li>
                                            <li><a href="{{ url('departments/mba/mba_placement_drive') }}">Placement Drive</a></li>
                                            <li><a href="{{ url('departments/mba/mba_Placement_Tips_Seminar') }}">Placement Tips Seminar</a></li>
                                            <li><a href="{{ url('departments/mba/mba_psc') }}">Placement Success Classes </a></li>
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
                        <li><a href="{{ url('departments/mba/mba_techwizard') }}">Tech Wizard</a></li>
                        <li><a href="{{ url('departments/mba/mba_sd_club') }}">SD Club </a></li>
                        <li><a href="{{ url('departments/mba/mba_ocp') }}">Out campus Participation </a></li>
                        <li><a href="{{ url('departments/mba/mba_moocs') }}">MOOCs Course</a></li>
                        <li><a href="{{ url('departments/mba/mba_workshop') }}">Workshop</a></li>
                        <li><a href="{{ url('departments/mba/mba_sd_com') }}">SD Competitions  </a></li>
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
                            <li><a href="#">Innovation Startup Workshop</a></li>
                            <li><a href="#">Paper Presentation</a></li>
                            <li><a href="#">Paper Publications</a></li>
                            <li><a href="{{ url('departments/mba/mba_tech') }}">Tech Yuva</a></li>
                            <li><a href="{{ url('departments/mba/mba_nc') }}">National Conference</a></li>
                            <li><a href="#">Project Competition</a></li>
                            <li><a href="#">Research Grant </a></li>
                            <li><a href="#">Patents </a></li>
                        
                        
                    </ul>
                </li>

                <li><a href="{{ url('/') }}" target="_blank">BIM</a></li>


               
               
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
