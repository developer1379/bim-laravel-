


<style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        width: 100%;
        min-height: 100vh;
        background: #eee;
    }

    #header {
        background: linear-gradient(120deg,
                rgba(28, 28, 28, 1) 0%,
                rgba(28, 28, 28, 1) 13%,
                rgba(183, 0, 0, 1) 13%,
                rgba(183, 0, 0, 1) 100%);
        z-index: 999;
        transition: all 0.5s;
    }

    #header.fixed-top {
        position: fixed;
        top: 0;
        width: 100%;
        background: linear-gradient(120deg,
                rgba(28, 28, 28, 0.95) 0%,
                rgba(28, 28, 28, 0.95) 13%,
                rgba(183, 0, 0, 0.95) 13%,
                rgba(183, 0, 0, 0.95) 100%);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    }

    .navbar {
        padding: 0;
    }

    .navbar ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        text-transform: uppercase;
    }

    .navbar a {
        display: flex;
        align-items: center;
        padding: 15px 5px;
        font-size: 12px;
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }

    .navbar a:hover,
    .navbar .active {
        background: #cc1616;
        color: #fff;
    }
.anc a:hover {
    background-color: #000 !important;
}
    .navbar .dropdown ul {
        display: block;
        position: absolute;
        top: calc(100% + 30px);
        left: 0;
        padding: 10px 0;
        background: #fff;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s;
        box-shadow: 0 0 30px rgba(127, 137, 161, 0.25);
        z-index: 999;
    }

    .navbar .dropdown:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
    }

    .navbar .dropdown ul li {
        position: relative;
        min-width: 200px;
    }

    .navbar .dropdown ul a {
        color: #191919;
        padding: 8px 16px;
    }

    .navbar .dropdown ul a:hover {
        background: #cc1616;
        color: #fff;
    }

    .navbar .dropdown ul .dropdown ul {
        top: 0;
        left: 100%;
        margin-left: 0;
    }

    /* For right-aligned submenus (when there's not enough space on the right) */
    .dropdown-menu-left {
        left: auto !important;
        right: 100% !important;
    }

    @media (max-width: 991px) {
        .navbar .dropdown ul .dropdown ul {
            position: static;
            left: 0;
            top: 0;
            box-shadow: none;
            margin-left: 15px;
        }

.md-4.col-lg-4.col-sm-4.navbar.anc ul {
    display: flex;
}
    }

    .navbar .dropdown ul .dropdown:hover>ul {
        display: block;
        opacity: 1;
        visibility: visible;
    }

    .mobile-nav-toggle {
        position: absolute;
        right: 20px;
        top: 50%;
        /* Centered by default */
        transform: translateY(-50%);
        z-index: 10001;
        font-size: 2rem;
        background: transparent;
        border: none;
        color: #cc1616;
    }

    @media (max-width: 991px) {
        .mobile-nav-toggle {
            display: block;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10001;
            background: transparent;
            border: none;
        }

        .mobile-nav-toggle.bi-x {
            margin-top: 30px !important;
            color: red;
        }

        .navbar ul {
            display: none;
        }

        .navbar-mobile {
            position: fixed;
            background: rgba(0, 0, 0, 0.9);
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 20px 0;
            width: 100%;
        }

        .navbar-mobile ul {
            display: block;
            background: #fff;
            padding: 10px 20px;
            overflow-y: auto;
            width: 100%;
            text-align: center;
        }

        .navbar-mobile a {
            color: #191919;
            padding: 10px 20px;
            width: 100%;
            text-align: center;
            display: block;
        }

        .navbar-mobile .dropdown ul {
            position: static;
            display: none;
            background: #fff;
            box-shadow: none;
            margin-left: 10px;
            width: 100%;
        }

        .navbar-mobile .dropdown .dropdown-active {
            display: block;
            opacity: 1;
            visibility: visible;
            position: relative;
            top: 0;
            left: 0;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .navbar-mobile .dropdown ul {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
    }


    /* Ensure all nav links use flex in all screen sizes */
    .navbar a {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center;
    }

    .navbar a i {
        margin-left: 1px;
    }

    @media (max-width: 991px) {
        .navbar ul li a {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center;
        }

        .navbar ul li a i {
            margin-left: auto;
        }
    }
</style>


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
                <a
                    href="/bim/../bgi.php" class="fs-5 fw-bolder px-0 text-white bg-transparent text-decoration-none text-uppercase" target="_blank">Buddha Group of Institution</a>
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
                <ul> 
                     <!--<li class="dropdown dropdown-lg" data-for="5">
                         <a href="#"><span>BGI</span> <i class="bi bi-chevron-down"></i></a>
                         <ul>
                                <li><a href="#">Parichay</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Colleges</a></li>
                                <li><a href="#">Campus</a></li>
                                 <li><a href="#">Buddha Innovation Council</a></li>
                                <li class="dropdown"><a href="#">BIC <i class="bi bi-chevron-down"></i> </a>
                                    <ul>
                                            <li><a href="#"> Startups</a></li>
                                            <li><a href="#"> Achievements</a></li>
                                            
                               
                                                                                              
                                  </ul>
                              </li>


                         </ul>
                    </li>-->

                     <li class="dropdown dropdown-lg" data-for="1">
                        <a href="#"><span>Human Resources</span><i class="bi bi-chevron-down"></i> </a>
                          <ul>
                            <li><a href="/bim/../recruitment.php">Recruitment</a></li>

                         </ul>
                    </li>


                     <li class="dropdown dropdown-lg" data-for="0">
                        <a href="#"><span>Teaching Pedagogy</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                                <li><a href="/bim/../pedagogy.php">Pedagogy</a></li>
                                <li><a href="https://youtu.be/opp-_k02cTo?si=UlW2vdJj6kEq1Oph" target="_blank"  >09 Points Success Program</a></li>
                                <li><a href="/bim/../mmr.php">Mentor Mentee Register</a></li>

                        </ul>
                    </li>

                     <li class="dropdown dropdown-lg" data-for="3">
                        <a href="#"><span>FDP/FAR</span> <i class="bi bi-chevron-down"></i> </a>
                        <ul>
                                 <li><a href="/bim/../fnc.php">Faculty National Conference </a></li>
                                <li><a href="/bim/../far.php">FAR Workshop </a></li>
                                <li><a href="#">Teaching Pedagogy Session</a></li>
                                <li><a href="/bim/obe.php">OBE Workshop</a></li>

                        </ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="2">
                        <a href="#"><span>Library</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                            <li><a href="/bim/../lib_cata.php">Catalog </a></li>
                                <li><a href="https://discovery.delnet.in/"  target="_blank">DELNET </a></li>
                        </ul>
                    </li>
                   
                    <li class="dropdown dropdown-lg" data-for="4">
                        <a href="#"  ><span>Student Activities</span><i class="bi bi-chevron-down"></i>         </a>
                        <ul>
                            <li><a href="/bim/../deeksharambh.php">Deeksharambh </a></li>
                            <li><a href="/bim/../pop.php">Parents Orientation Program  </a></li>
                            <li><a href="/bim/../graduation_day.php">Graduation Day </a></li>
                             
                        </ul>
                    </li>
                    <!--<li class="dropdown dropdown-lg" data-for="5">
                        <a href="#"><span>BGI</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="#"><span>Notices</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="#"><span>Activeties</span> </a>
                        <ul></ul>
                    </li>-->
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="/bim/Contact_Us.php"><i class="bx bxs-phone-call fs-3" style="margin-left:4px;"></i> </a>
                        <ul></ul>
                    </li>
                    

                </ul>
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
            <div class="col-md-4 col-sm-4 col-xs-4">
                <center>
                    <a href="/bim/../index.php">
                        <img src="/bim/../images/logo.png" class="img-fluid w-logo" />
                    </a>
                </center>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                <h2 class="w-tsh text-danger fw-bold">
                    BUDDHA INSTITUTE OF MANAGEMENT, GIDA, GORAKHPUR
                </h2>
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
            <div class="col-md-2 col-sm-2 col-xs-2">
                <center>
                    <a href="https://aktu.ac.in/"  >
                        <img src="/bim/../images/aktu.png" class="img-fluid w-logo" />
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
                <a href="/bim/../index.php">
                    <img
                        src="/bim/../images/logo.png"
                        class="img-fluid w-logo"
                        style="max-width: 50px" />
                </a>
            </div>
            <div class="col-8 text-start">
                <h6 class="text-danger fw-bold m-0 text-center">
                    BUDDHA INSTITUTE OF MANAGEMENT GIDA, GORAKHPUR,
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
            <a href="https://www.bimgkp.ac.in/index.php"   data-bs-toggle="tooltip" data-bs-placement="top" class="text-decoration-none text-light fs-3 fw-bold" title="Buddha Group of Institutions">BGI</a>
        </div>-->
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/bim/../index.php"><i class="bx bxs-home fs-3"></i></a></li>

                <!-- ABOUT US -->
                <li class="dropdown">
                    <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/../AboutUs.php">Parichay</a></li>
                        <!--<li><a href="#">Campus</a></li>-->
                        <li><a href="/bim/../message.php"  >Management</a></li>
                        <li><a href="/bim/../director.php"  >Director</a></li>
                        <li><a href="/bim/../organization-chart.php">Organization Chart</a></li>
                        <li><a href="/bim/../admin-team.php"  >Administrative Team</a></li>
                        <li><a href="/bim/../committee.php"  >Committee</a></li>
                        <li><a href="/bim/../board-of-governors.php"  >BOG: Board of Governance</a></li>
                        <li><a href="/bim/../IQAC-meeting.php"  >IQAC</a></li>
                        <li><a href="/bim/../vision-mission.php"  >Vision & Mission  </a></li>
                        <li><a href="/bim/../AffiliationAKTU.php"  >Affiliation Letter  </a></li>
                        <!--<li><a href="#"  >NBA Accredition  </a></li>-->
                        <li><a href="/bim/../college_video.php">College Video</a></li>
                        <li><a href="/bim/../gallery.php">Gallery</a></li>
                        <li><a href="/bim/../Mandatory-Disclosures.php">Mandatory Disclosure</a></li>

                        
                       <!-- <li class="dropdown">
                            <a href="#"><span>Administrative Team</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Chairman</a></li>
                                <li><a href="#">Secretary</a></li>
                              
                                <li><a href="#">Director</a></li>
                            </ul>
                        </li>-->
                     
                      
                      <!--  <li><a href="/bim/../college-committee.php">Committee</a></li>
                        <li><a href="/bim/../Mandatory-Disclosures.php">Mandatory Disclosure</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Affiliation Latter</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">AICTE</a></li>
                                <li><a href="#">AKTU</a></li>

                            </ul>
                        </li>
                        <li><a href="#"  >SOP: Standard Operating Plan</a></li>
                      
                        <li><a href="#">Organizational Structure</a></li>
                        <li><a href="#">NBA Accreditation</a></li>
                      
                      
                        <li><a href="#"  >Service Rules</a></li> -->
                   </ul>
                </li>

                <!-- department-->


              <li class="dropdown">
                            <a href="#">Department <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/bim/../bca.php" target="_blank">DEPARTMENT OF COMPUTER APPLICATION </a></li>
                                <!--<li><a href="/bim/../mca.php"  >MCA</a></li>-->
                                <li><a href="/bim/../bba.php" target="_blank" >BBA</a></li>
                                <li><a href="/bim/../mba.php" target="_blank" >MBA</a></li>
                                <!--<li><a href="/bim/../Security.php">Security</a></li>
                                <li><a href="/bim/../BIMStage.php">BIM STAGE</a></li>
                                <li><a href="/bim/Euphony.php">Euphony (BIM MUSICAL BAND)</a></li>
                                <li><a href="/bim/../TvRoom.php">T.V. Room</a></li>
                                <li><a href="/bim/../GYM.php">GYM</a></li>
                                <li><a href="/bim/../BuddhaBazaar.php">Buddha Bazaar</a></li>-->
                            </ul>
                        </li>


                <!--end-->

            <!-- PLACEMENT -->
                <li class="dropdown">
                    <a href="#"><span>Placement</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/../placement-cell.php"  > Placement cell</a></li>
                        <li><a href="/bim/../top-placement.php"  >Top Placement</a></li>
                        
                        <li><a href="/bim/../proud-alumni.php"  > Proud Alumni</a></li>
                        <!--<li><a href="#">Higher Education</a></li>-->
                        <li><a href="/bim/../plac_drive.php">Placement Drive</a></li>
                        <li><a href="/bim/../MOU_link.php"  >MOU's</a></li>
                         <!--<li><a href="#"  >Alumni Meet</a></li>-->
                          <li><a href="/bim/../our_partner.php"  >Our Recruiters</a></li>
                    </ul>
                </li>

                <!--  Achievement -->

                <li><a href="/bim/../bim_achi.php"  >Achievement </a></li>

                <!-- Reserch -->
                <li class="dropdown">
                    <a href="#"><span>Research</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Professional Membership</a></li>
                        <li><a href="/bim/../college_journal.php"  >College Journal</a></li>
                        <li><a href="/bim/../bim_iic.php">Institutes Innovation Cell (IIC)</a></li>
                        <!--<li><a href="#">IEEE Conference</a></li>-->
                        <li><a href="#">Research Achieveements</a></li>
                        <li><a href="#">Grants</a></li>
                       
                    </ul>
                </li>
  
  <!-- ACTIVITIES -->
                <li class="dropdown">
                    <a href="#"><span>Activities</span><i class="bi bi-chevron-down"></i></a>
                   <ul>
                        <li><a href="/bim/../bsm.php"  >Buddha Sharad Mahotsav </a></li>
                        <li><a href="/bim/../bsf.php"  >Buddha Spring Festival </a></li>
                        <li><a href="/bim/../pages/campus-life/extracuricular.php"  >Extracuricular </a></li>
                        <li><a href="/bim/../pages/campus-life/sport.php"  >Sports </a></li>
                        <li><a href="/bim/../comuities.php"  >Community Development (PUNYA) </a></li>
                        <li><a href="/bim/../wec.php"  >Women Empowerment Cells (WEC) </a></li>
                        <!--<li class="dropdown"><a href="#">Extracuricular <i class="bi bi-chevron-down"></i> </a>

                            <ul>
                                <li><a href="#">DECA</a></li>
                                <li><a href="#">Clubs</a></li>
                                <li><a href="#">Dyuti</a></li>
                                <li><a href="#">Dandiya Night  </a></li>
                                <li><a href="#">Annual Faction  </a></li>
                                <li><a href="#">DJ Night </a></li>
                                <li><a href="#">Events  </a></li>
                                 <li><a href="#">Achievements </a></li>
                               
                                                                                              
                            </ul>


                        </li>
                        <li class="dropdown"><a href="#">Sports <i class="bi bi-chevron-down"></i></a>

                            <ul>
                                <li><a href="#">Sports Committee</a></li>
                                <li><a href="#">Spardha</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Achievements  </a></li>
                                <li><a href="#">Clubs </a></li>
                                <li><a href="#">Sports Facilities </a></li>
                                <li><a href="#">Staff Annual Sports </a></li>
                               
                                                                                              
                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="#">Comuities Development <i class="bi bi-chevron-down"></i> </a>

                              <ul>
                                <li><a href="#">NSS</a></li>
                                <li><a href="#">Activities</a></li>
                                <li><a href="#">Tech Genesis</a></li>
                                <li><a href="#">Buddha Samanya Gyan Prati Yogita  </a></li>
                                <li><a href="#">Buddha Career Conclave</a></li>
                                <li><a href="#">Topper of the toppers</a></li>
                                <li><a href="#">Tree Plantation </a></li>
                                <li><a href="#">Blood Donation </a></li>
                                <li><a href="#">Medical Camps </a></li>
                                <li><a href="#">Village Activities</a></li>
                                
                                                              
                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="#">WEC<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Women empowerment cell </a></li>
                                <li><a href="#">Activities</a></li>
                                
                            </ul>
                        </li>-->
                       <!-- <li class="dropdown">
                            <a href="#">Admission <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/bim/../mba.php?mba-vision-mission">Admissions in MBA</a></li>
                                <li><a href="/bim/../mca.php?mca-vision-mission">Admission in MCA</a></li>
                                <li><a href="/bim/../bba.php?bba-vision-mission">Admission in BBA</a></li>
                                <li><a href="/bim/../bca.php?bca-vision-mission">Admission in BCA</a></li>
                            </ul>
                        </li>-->
                       <!-- <li><a href="https://aktubrand.vercel.app/blog/aktu-digital-evaluation-update-202526-what-colleges-and-teachers-must-know"  >Evaluation Scheme </a></li>
                        <li><a href="https://aktu.ac.in/syllabus.html"  >Syllabus</a></li>
                        <li><a href="#"  >Issue of Certificate for Passout Students</a></li>
                        <li><a href="/bim/../College-Academic-calander-14-10-24.php"  >College Calendar</a></li>
                        <li><a href="/bim/../University-Academic-Calander-2024-25.php"  >University Calendar</a></li>
                        <li><a href="/bim/../ELearning.php">E-Learning</a></li>
                        <li><a href="/bim/MoU.php">MoU</a></li>-->
                    </ul>
                </li>


               <!-- FACILITIES -->

                <li class="dropdown">
                    <a href="#"><span>Facilities</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                         <li><a href="/bim/../pages/campus-life/hostel.php"  >Hostel</a></li>
                       <!-- <li class="dropdown">

                            <a href="#">Hostel <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">New Hostel Orientation Program</a></li>
                                <li><a href="#">EDA</a></li>
                            </ul>
                          </li>-->

                            <li><a href="/bim/../Mess.php"  >Mess</a></li>
                            <li><a href="/bim/../Transportation.php"  >BUS</a></li>
                            <li><a href="/bim/../BuddhaBazaar.php"  >Buddha Bazar</a></li>
                            <li><a href="/bim/../te.php"  >Temple Event</a></li>
                            <li><a href="/bim/../bankatm.php"  >ATM</a></li>
                            <!--<li><a href="/bim/../LabCSE.php">Computer Lab Complex</a></li>
                            <li><a href="/bim/../LabEE.php">Electrical Lab Complex</a></li>
                            <li><a href="/bim/../LabECE.php">ELECTRONICS & COMMUNICATION Lab Complex</a></li>
                            <li><a href="/bim/../LabME.php">Mechanical Lab Complex</a></li>
                            <li><a href="/bim/../ConferenceHall.php">Conference Hall</a></li>
                            <li><a href="/bim/../SeminarHall.php">Seminar Hall</a></li>-->

                        </ul>
                        </li>
                       
                    
               
                <!-- R&D -->
                

                

              
               

                <!-- SKILL DEV -->
                <li class="dropdown">
                    <a href="#"><span>Skill Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/../Achiv.php"  >Achivements</a></li>
                        <li><a href="/bim/../ledcon.php"  >Leadcon</a></li>
                        <li><a href="/bim/../cs.php"  >CCC Certification</a></li>
                        <li><a href="/bim/../ar.php"  >Aptitudes & Reasoning</a></li>
                        <!--<li><a href="/bim/../SkillEnhancement.php">Buddha Skill Enhancement Programme</a></li>
                        <li><a href="/bim/../EnglishChaupal.php">English Chaupal</a></li>
                        <li><a href="#">Gyandeep Summer Training</a></li>
                        <li><a href="/bim/../GateClasses.php">Gate-Classes</a></li>
                        <li><a href="#">Tech-Edge</a></li>
                        <li><a href="#">Career Counselling</a></li>
                        <li><a href="#">GATE Result</a></li>-->
                    </ul>
                </li>

               
                <!-- ACADEMICS -->
                <li class="dropdown">
                    <a href="#"><span>Academics</span><i class="bi bi-chevron-down"></i></a>
                   <ul>
                        <li><a href="/bim/../acc.php"  >Academic Calendar </a></li>
                        <!--<li class="dropdown">
                            <a href="#">Departments<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/bim/../mba.php?mba-vision-mission">MBA</a></li>
                                <li><a href="/bim/../mca.php?mca-vision-mission">MCA</a></li>
                                <li><a href="/bim/../bba.php?bba-vision-mission"">BBA</a></li>
                                <li><a href="/bim/../bca.php?mca-vision-mission">BCA</a></li>
                            </ul>
                        </li>-->
                       <!-- <li class="dropdown">
                            <a href="#">Admission <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/bim/../mba.php?mba-vision-mission">Admissions in MBA</a></li>
                                <li><a href="/bim/../mca.php?mca-vision-mission">Admission in MCA</a></li>
                                <li><a href="/bim/../bba.php?bba-vision-mission">Admission in BBA</a></li>
                                <li><a href="/bim/../bca.php?bca-vision-mission">Admission in BCA</a></li>
                            </ul>
                        </li>-->

                        <li><a href="/bim/../eva-s.php"  >Evaluation Scheme </a></li>
                        <li><a href="https://aktu.ac.in/syllabus.html" target="_blank" >Syllabus</a></li>
                        <li><a href="#"  >Issue of Certificate for Passout Students</a></li>
                        <!--<li><a href="/bim/../College-Academic-calander-14-10-24.php"  >College Calendar</a></li>
                        <li><a href="/bim/../University-Academic-Calander-2024-25.php"  >University Calendar</a></li>
                        <li><a href="/bim/../ELearning.php">E-Learning</a></li>
                        <li><a href="/bim/MoU.php">MoU</a></li>-->
                    </ul>
                </li>



                <!-- EXAMINATION -->
               <!-- <li class="dropdown">
                    <a href="#"><span>Examination</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/examination.php"  >Examination Committee</a></li>
                        <li><a href="/bim/../index.php">Examination Notices</a></li>
                        <li><a href="https://nad.digitallocker.gov.in/students"  >DigiLocker NAD</a></li>
                        <li><a href="https://erp.aktu.ac.in/"  >Degree/Migration</a></li>
                    </ul>
                </li>-->

                <!-- CAREERS -->
               <!-- <li class="dropdown">
                    <a href="#"><span>Careers</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/../index.php">Faculty Positions</a></li>
                        <li><a href="/bim/../index.php">Non-Teaching Positions</a></li>
                    </ul>
                </li>-->

                  <!-- CAREERS -->
               <!-- <li class="dropdown">
                    <a href="#"><span>Department</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/../index.php">Faculty Positions</a></li>
                        <li><a href="/bim/../index.php">Non-Teaching Positions</a></li>
                    </ul>
                </li>-->

                <!-- Admission-->

                <!-- <li class="dropdown">
                    <a href="#"><span>Admission</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Courses Offered</a></li>
                        <li><a href="#">Brochure</a></li>
                        <li><a href="#">Admission Process</a></li>
                        <li><a href="#">Admission Form</a></li>
                        <li><a href="#">College Video </a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </li> -->

                 <li class="dropdown">
                    <a href="#"><span>Student Awards</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/../aca-aw.php"  >Academic Award</a></li>
                        <li><a href="/bim/star-aw.php"  >Star Award</a></li>
                        <li><a href="/bim/../cgc.php"  >Change of Guard Cereony</a></li>
                    </ul>
                </li>


       <!-- Personality Development -->
                <li class="dropdown">
                    <a href="#"><span>Personality Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/bim/../csep.php">Communication SKILL ENHANCEMENT PROGRAM</a></li>
                        <li><a href="/bim/../bim_es.php">English Speaking</a></li>
                        <!--<li class="dropdown">
                            <a href="#">Research<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/bim/../ResearchCell.php">Research Cell</a></li>
                                <li><a href="#">Patent</a></li>
                                <li><a href="/bim/../AwardandAchievement.php">Awards & Achievements</a></li>
                                <li><a href="/bim/../PaperPublication.php">Paper Publication</a></li>
                                <li><a href="/bim/../NationalConference.php">National Conference</a></li>
                                <li><a href="/bim/../NationalJournal.php">National Journal Of Engineering & Technology</a></li>
                                <li><a href="/bim/../NationalSeminar.php">National Seminar</a></li>
                                <li><a href="/bim/../Techyuva.php">Techyuva Model Competition</a></li>
                                <li><a href="/bim/../ViewPublication.php">Paper Presentation</a></li>
                                <li><a href="#">Buddha Invention Center</a></li>
                                <li><a href="/bim/../IncubationCell.php">Incubation Cell</a></li>
                                <li><a href="/bim/../Museum.php">Buddha Museum</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </li>


               <li class="dropdown">
                    <a href="#"><span>Infrastructure</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="/bim/../computer_lab.php"  >Computer Labs </a></li>
                        <!--<li><a href="#">Academic Labs</a></li>-->
                        <li><a href="/bim/../smart_class.php"  >Smart Class Rooms </a></li>
                        <li><a href="/bim/../seminar_hall.php"  >Seminar Hall</a></li>
                    </ul>
                </li>

                <!--<li class="dropdown">
                    <a href="#"><span>Teaching Pedagogy</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="/bim/../index.php">Achievement </a></li>
                        <li><a href="/bim/../index.php">Buddha Series</a></li>
                        <li><a href="/bim/../index.php">Success Program </a></li>
                        <li><a href="/bim/../index.php">Mentor Mentee Register</a></li>
                    </ul>
                </li>-->
         
                

                <!--<li class="dropdown"><a href="#"><span>What's New</span> <i class="bi bi-chevron-down"></i></a>
                    <ul class="w-ddl-end">
                        <li><a href="/bim/../NewsDetails.php">News <i class="bx bx-news me-2"></i></a></li>
                        <li><a href="/bim/../NoticeDetails.php">Notice <i class="bx bx-star  me-2"></i></a></li>
                        <li><a href="/bim/../videos.php">Videos Gallery <i class="bx bi-camera-reels-fill  me-2"></i></a></li>
                        <li><a href="/bim/../gallery.php">Photo Gallery <i class="bx bx-image  me-2"></i></a></li>
                        <li><a href="/bim/../ImportantLinks.php">Important Links <i class="bx bx-link-alt  me-2"></i></a></li>
                        <li><a href="/bim/../mediaCoverage.php">Media Coverage <i class="bx bi bi-globe  me-2"></i></a></li>
                        <li><a href="/bim/../Events.php">Events <i class="bx bx-calendar-event  me-2"></i></a></li>

                        <li><a href="/bim/../Grivance.php">Grievance Form <i class="bx bx-box    me-2"></i></a></li>
                        <li><a href="/bim/../AntiRagging.php">Anti Ragging <i class="bx bxs-flag-checkered  me-2"></i></a></li>

                        <hr />


                    </ul>
                </li>-->

                
            </ul>
            </li>
            </ul>
        </nav>
    </div>
</header>

<div class=" container-fluid bg-dark pt-2">
    <div class="row">
        <div class="md-4 col-lg-4 col-sm-4"></div>
        <div class="md-4 col-lg-4 col-sm-4 navbar anc">
    <ul style="padding: 5px 5px;  margin: 2px 20px;">
   
   <li class="dropdown"><img id="Repeater_scroll_Image1_2" src="/bim/../Images/new.gif" style="height:7px;width:22px;" />

        &nbsp;
         <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#"   style=" display: inline !important;, font-weight: 700;  color: #e52f2f !important;  font-size: 17px;">
            <span>Admission in 2026-2027 </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li> <a href="/bim/../courses_offered.php">Courses Offered </a> </li>
                <li><a href="/bim/../bgi_brochure.php">Brochure</a></li>
                <li><a href="/bim/../ap.php" > Admission Process</a> </li>
                <!--<li><a href="#"  >Admission Form</a></li>-->
                <li><a href="/bim/../contact.php">Contact Us</a></li>
                <li><a href="https://www.youtube.com/watch?si=5gEnlamiAwUIq2yV&v=JgfesOatD3o&feature=youtu.be" target="_blank"> College Video </a></li>

            </ul>

<!--<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#"  >
            Upcomming Event</a>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#"  >
            Awards</a>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#"  >
            Student Activities</a> 

 <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#"  >
            Achievement</a>-->

        </li>
    
    </ul>
</div>
<div class="md-4 col-lg-4 col-sm-4"></div>
</div>

</div>
<!-- Scripts -->
<script>
    (function() {
        "use strict";

        const select = (el, all = false) =>
            all ? [...document.querySelectorAll(el)] : document.querySelector(el);

        const on = (type, el, listener, all = false) => {
            let selectEl = select(el, all);
            if (selectEl) {
                if (all)
                    selectEl.forEach((e) => e.addEventListener(type, listener));
                else selectEl.addEventListener(type, listener);
            }
        };

        const onscroll = (el, listener) =>
            el.addEventListener("scroll", listener);

        let header = select("#header");
        let headerOffset = header.offsetTop;

        const headerFixed = () => {
            if (window.scrollY >= headerOffset) header.classList.add("fixed-top");
            else header.classList.remove("fixed-top");
        };

        window.addEventListener("load", headerFixed);
        onscroll(document, headerFixed);

        on("click", ".mobile-nav-toggle", function() {
            select("#navbar").classList.toggle("navbar-mobile");
            this.classList.toggle("bi-list");
            this.classList.toggle("bi-x");
        });

        // Modified event listener to toggle the dropdown on mobile
        on(
            "click",
            ".navbar .dropdown > a, .navbar .dropdown .dropdown > a",
            function(e) {
                if (select("#navbar").classList.contains("navbar-mobile")) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    const parentLi = this.parentElement;

                    // If the submenu is already open, close it
                    if (submenu && submenu.classList.contains("dropdown-active")) {
                        submenu.classList.remove("dropdown-active");
                    } else {
                        // Close all other submenus first
                        const siblings =
                            parentLi.parentElement.querySelectorAll(".dropdown-active");
                        siblings.forEach((el) => {
                            el.classList.remove("dropdown-active");
                        });

                        // Open the clicked submenu
                        if (submenu) {
                            submenu.classList.add("dropdown-active");

                            // Detect space and flip if needed
                            const submenuRect = submenu.getBoundingClientRect();
                            const windowWidth = window.innerWidth;

                            // Check if the submenu goes beyond the right edge of the window
                            if (submenuRect.right > windowWidth) {
                                submenu.classList.add("dropdown-menu-left");
                            } else {
                                submenu.classList.remove("dropdown-menu-left");
                            }
                        }
                    }
                }
            },
            true
        );

        // Optional: Handle hover on desktop to adjust submenu positioning
        on(
            "mouseenter",
            ".navbar .dropdown",
            function() {
                const submenu = this.querySelector("ul");
                if (submenu) {
                    const rect = submenu.getBoundingClientRect();
                    const windowWidth = window.innerWidth;

                    // Ensure submenu opens to the left if there's no space on the right
                    if (rect.right > windowWidth) {
                        submenu.classList.add("dropdown-menu-left");
                    } else {
                        submenu.classList.remove("dropdown-menu-left");
                    }
                }
            },
            true
        );
        window.addEventListener("scroll", function() {
            var mobileNavToggle = document.querySelector(".mobile-nav-toggle");

            if (window.scrollY > 0) {
                mobileNavToggle.style.marginTop = "8px"; // Change margin-top when scrolling
            } else {
                mobileNavToggle.style.marginTop = "70px"; // Default margin when at the top
            }
        });

    })();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="/bim/../Includes/script.js"></script>
<!-- End Header -->