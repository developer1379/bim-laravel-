


<style>
    body { margin: 0; padding: 0; overflow-x: hidden; width: 100%; min-height: 100vh; background: #f8f9fa; color: #222; }
    section, .container, .container-fluid { color: #222; }

    #header {
        position: relative; z-index: 9999 !important;
        background: linear-gradient(135deg, rgba(17,24,39,0.95) 0%, rgba(31,41,55,0.95) 40%, rgba(179,18,18,0.95) 40%, rgba(204,22,22,0.95) 100%); backdrop-filter: blur(10px);
        z-index: 999;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    #header.fixed-top {
        position: fixed; top: 0; width: 100%;
        background: linear-gradient(135deg, rgba(17, 24, 39, 0.98) 0%, rgba(31, 41, 55, 0.98) 40%, rgba(179, 18, 18, 0.98) 40%, rgba(204, 22, 22, 0.98) 100%);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);
    }
    .navbar { padding: 0; }
    .navbar ul { margin: 0; padding: 0; list-style: none; display: flex; flex-wrap: wrap; text-transform: uppercase; }
    .navbar a {
        display: flex; align-items: center; justify-content: space-between;
        padding: 16px 10px; font-size: 13px; font-weight: 600; letter-spacing: 0.5px;
        color: rgba(255, 255, 255, 0.9); text-decoration: none; transition: all 0.3s ease;
    }
    .navbar a i { margin-left: 4px; font-size: 12px; }
    .navbar a:hover, .navbar .active { color: #ffffff; background: rgba(255,255,255,0.1); border-radius: 6px; }

    /* Dropdown CSS */
    .navbar .dropdown ul {
        display: block; position: absolute; top: calc(100% + 15px); left: 0; padding: 12px 0;
        background: #ffffff; opacity: 0; visibility: hidden;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border-radius: 8px; z-index: 999;
        transform: translateY(15px); min-width: 220px; border: 1px solid rgba(0,0,0,0.05);
    }
    .navbar .dropdown:hover>ul { opacity: 1; top: 100%; visibility: visible; transform: translateY(0); }
    .navbar .dropdown ul li { position: relative; }
    .navbar .dropdown ul a {
        color: #4b5563; padding: 10px 20px; font-size: 13px; font-weight: 500; text-transform: none; transition: all 0.2s ease;
    }
    .navbar .dropdown ul a:hover {
        background: rgba(204, 22, 22, 0.04); color: #cc1616; padding-left: 26px;
    }
    .navbar .dropdown ul .dropdown ul { top: 0; left: 100%; margin-left: 5px; transform: translateX(15px); }
    .navbar .dropdown ul .dropdown:hover>ul { transform: translateX(0); }

    .dropdown-menu-left { left: auto !important; right: 100% !important; }

    /* Mobile Nav Toggle */
    .mobile-nav-toggle {
        position: absolute; right: 20px; top: 50%; transform: translateY(-50%);
        z-index: 10001; font-size: 2rem; background: transparent; border: none; color: #ffffff; transition: 0.3s;
    }

    @media (max-width: 1200px) {
        .navbar a { padding: 12px 6px; font-size: 12px; }
    }

    /* Mobile Styles */
    @media (max-width: 991px) {
        .mobile-nav-toggle { display: block; position: fixed; top: 12px; right: 15px; color: #cc1616; z-index: 10001; background: #fff; border-radius: 6px; padding: 2px 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); border: 1px solid #f0f0f0; }
        .mobile-nav-toggle.bi-x { color: #ffffff; margin-top: 5px !important;}

        #header { background: #111827; }
        /* On mobile, hide header by default unless navbar-mobile is active */
        @media (max-width: 991px) {
            #header { display: none !important; }
        }
        body.nav-open #header { display: flex !important; }

        .navbar ul { display: none; }
        .navbar-mobile {
            position: fixed; background: rgba(17, 24, 39, 0.98); backdrop-filter: blur(15px);
            top: 0; right: 0; left: 0; bottom: 0; z-index: 9999;
            display: flex; flex-direction: column; padding: 70px 20px 30px 20px;
            overflow-y: auto; transition: 0.3s; width: 100%;
        }
        .navbar-mobile ul { display: block; background: transparent; padding: 0; text-align: left; }
        .navbar-mobile a {
            color: #e5e7eb; padding: 16px 20px; font-size: 15px; font-weight: 500;
            border-bottom: 1px solid rgba(255,255,255,0.06); border-radius: 0;
        }
        .navbar-mobile a:hover { background: rgba(255,255,255,0.05); color: #ef4444; }

        .navbar-mobile .dropdown ul {
            position: static; display: none; background: rgba(0,0,0,0.25);
            box-shadow: none; margin: 0; padding-left: 15px; border: none; width: 100%;
        }
        .navbar-mobile .dropdown ul a { padding: 12px 20px; font-size: 14px; border-bottom: none; }
        .navbar-mobile .dropdown .dropdown-active { display: block; opacity: 1; visibility: visible; }
    }

    @media (max-width: 375px) {
        .mobile-brand-title { font-size: 11px !important; }
        .mobile-brand-sub { font-size: 9px !important; }
        .mobile-nav-toggle { top: 10px; right: 10px; padding: 2px 6px; font-size: 1.5rem; }
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
                    href="{{ url('../bgi') }}" class="fs-5 fw-bolder px-0 text-white bg-transparent text-decoration-none text-uppercase" target="_blank">Buddha Group of Institution</a>
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
                            <li><a href="{{ url('../recruitment') }}">Recruitment</a></li>

                         </ul>
                    </li>


                     <li class="dropdown dropdown-lg" data-for="0">
                        <a href="#"><span>Teaching Pedagogy</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                                <li><a href="{{ url('../pedagogy') }}">Pedagogy</a></li>
                                <li><a href="https://youtu.be/opp-_k02cTo?si=UlW2vdJj6kEq1Oph" target="_blank"  >09 Points Success Program</a></li>
                                <li><a href="{{ url('../mmr') }}">Mentor Mentee Register</a></li>

                        </ul>
                    </li>

                     <li class="dropdown dropdown-lg" data-for="3">
                        <a href="#"><span>FDP/FAR</span> <i class="bi bi-chevron-down"></i> </a>
                        <ul>
                                 <li><a href="{{ url('../fnc') }}">Faculty National Conference </a></li>
                                <li><a href="{{ url('../far') }}">FAR Workshop </a></li>
                                <li><a href="#">Teaching Pedagogy Session</a></li>
                                <li><a href="{{ url('obe') }}">OBE Workshop</a></li>

                        </ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="2">
                        <a href="#"><span>Library</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                            <li><a href="{{ url('../lib_cata') }}">Catalog </a></li>
                                <li><a href="https://discovery.delnet.in/"  target="_blank">DELNET </a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="4">
                        <a href="#"  ><span>Student Activities</span><i class="bi bi-chevron-down"></i>         </a>
                        <ul>
                            <li><a href="{{ url('../deeksharambh') }}">Deeksharambh </a></li>
                            <li><a href="{{ url('../pop') }}">Parents Orientation Program  </a></li>
                            <li><a href="{{ url('../graduation_day') }}">Graduation Day </a></li>

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
                        <a href="{{ url('Contact_Us') }}"><i class="bx bxs-phone-call fs-3" style="margin-left:4px;"></i> </a>
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
<section class="middle shadow-sm" style="background-color: #ffffff; border-bottom: 1px solid rgba(0,0,0,0.05);">
    <div class="container py-2 d-none d-md-block">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <center>
                    <a href="{{ url('../index') }}">
                        <img src="{{ asset('../images/logo.png') }}" class="img-fluid w-logo" style="max-height: 80px; width: auto;" />
                    </a>
                </center>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                <h3 class="w-tsh text-danger fw-bold mb-1" style="font-size: 1.6rem; letter-spacing: 0.5px;">
                    BUDDHA INSTITUTE OF MANAGEMENT, GIDA, GORAKHPUR
                </h2>
                <!--<h3 class="w-tsh text-danger fw-bold mb-1" style="font-size: 1.6rem; letter-spacing: 0.5px;">
                    बुद्धा इंस्टिट्यूट ऑफ़ मैनेजमेंट, गीडा, गोरखपुर
                </h2>-->
                <p class="text-muted mb-0" style="font-size: 0.9rem; font-weight: 500;">
                    Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul
                    Kalam Technical University, Lucknow, Uttar Pradesh
                    <span class="bg-warning px-2 text-dark">College Code - 1212
                    </span>
                </p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <center>
                    <a href="https://aktu.ac.in/"  >
                        <img src="{{ asset('../images/aktu.png') }}" class="img-fluid w-logo" style="max-height: 80px; width: auto;" />
                    </a>
                </center>
            </div>
        </div>
    </div>

    <!-- Mobile View -->
    <div class="container-fluid py-2 d-block d-md-none shadow-sm" style="background-color: #ffffff; position: sticky; top: 0; z-index: 10000; min-height: 65px;">
        <div class="row align-items-center px-1 h-100">
            <div class="col-10 pe-0">
                <a href="{{ url('../index') }}" class="d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('../images/logo.png') }}" class="img-fluid" style="max-height: 42px; width: auto;" />
                    <div class="ms-2 d-flex flex-column text-start justify-content-center">
                        <span class="text-danger fw-bold lh-sm mobile-brand-title" style="font-size: 13px; text-transform: uppercase;">Buddha Institute of Management</span>
                        <span class="text-muted lh-sm mt-1 mobile-brand-sub" style="font-size: 10px; font-weight: 600; letter-spacing: 0.5px;">GIDA, GKP | CODE-1212</span>
                    </div>
                </a>
            </div>
            <!-- Hamburger button in mobile header bar -->
            <div class="col-2 d-flex justify-content-end align-items-center ps-0">
                <button id="mobileMenuBtn" onclick="toggleMobileNav()" style="background: #cc1616; border: none; border-radius: 8px; width: 42px; height: 42px; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 2px 8px rgba(204,22,22,0.3);">
                    <i id="mobileMenuIcon" class="bi bi-list" style="font-size: 1.5rem; color: #fff;"></i>
                </button>
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
                <li><a class="nav-link scrollto" href="{{ url('../index') }}"><i class="bx bxs-home fs-3"></i></a></li>

                <!-- ABOUT US -->
                <li class="dropdown">
                    <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../AboutUs') }}">Parichay</a></li>
                        <!--<li><a href="#">Campus</a></li>-->
                        <li><a href="{{ url('../message') }}"  >Management</a></li>
                        <li><a href="{{ url('../director') }}"  >Director</a></li>
                        <li><a href="{{ url('../organization-chart') }}">Organization Chart</a></li>
                        <li><a href="{{ url('../admin-team') }}"  >Administrative Team</a></li>
                        <li><a href="{{ url('../committee') }}"  >Committee</a></li>
                        <li><a href="{{ url('../board-of-governors') }}"  >BOG: Board of Governance</a></li>
                        <li><a href="{{ url('../IQAC-meeting') }}"  >IQAC</a></li>
                        <li><a href="{{ url('../vision-mission') }}"  >Vision & Mission  </a></li>
                        <li><a href="{{ url('../AffiliationAKTU') }}"  >Affiliation Letter  </a></li>
                        <!--<li><a href="#"  >NBA Accredition  </a></li>-->
                        <li><a href="{{ url('../college_video') }}">College Video</a></li>
                        <li><a href="{{ url('../gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('../Mandatory-Disclosures') }}">Mandatory Disclosure</a></li>


                       <!-- <li class="dropdown">
                            <a href="#"><span>Administrative Team</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Chairman</a></li>
                                <li><a href="#">Secretary</a></li>

                                <li><a href="#">Director</a></li>
                            </ul>
                        </li>-->


                      <!--  <li><a href="{{ url('../college-committee') }}">Committee</a></li>
                        <li><a href="{{ url('../Mandatory-Disclosures') }}">Mandatory Disclosure</a></li>
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
                                <li><a href="{{ url('departments/bca/bca') }}" target="_blank">DEPARTMENT OF COMPUTER APPLICATION </a></li>
                                <!--<li><a href="{{ url('departments/mca/mca') }}"  >MCA</a></li>-->
                                <li><a href="{{ url('departments/bba/bba') }}" target="_blank" >BBA</a></li>
                                <li><a href="{{ url('departments/mba/mba') }}" target="_blank" >MBA</a></li>
                                <!--<li><a href="{{ url('../Security') }}">Security</a></li>
                                <li><a href="{{ url('../BIMStage') }}">BIM STAGE</a></li>
                                <li><a href="{{ url('Euphony') }}">Euphony (BIM MUSICAL BAND)</a></li>
                                <li><a href="{{ url('../TvRoom') }}">T.V. Room</a></li>
                                <li><a href="{{ url('../GYM') }}">GYM</a></li>
                                <li><a href="{{ url('../BuddhaBazaar') }}">Buddha Bazaar</a></li>-->
                            </ul>
                        </li>


                <!--end-->

            <!-- PLACEMENT -->
                <li class="dropdown">
                    <a href="#"><span>Placement</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../placement-cell') }}"  > Placement cell</a></li>
                        <li><a href="{{ url('../top-placement') }}"  >Top Placement</a></li>

                        <li><a href="{{ url('../proud-alumni') }}"  > Proud Alumni</a></li>
                        <!--<li><a href="#">Higher Education</a></li>-->
                        <li><a href="{{ url('../plac_drive') }}">Placement Drive</a></li>
                        <li><a href="{{ url('../MOU_link') }}"  >MOU's</a></li>
                         <!--<li><a href="#"  >Alumni Meet</a></li>-->
                          <li><a href="{{ url('../our_partner') }}"  >Our Recruiters</a></li>
                    </ul>
                </li>

                <!--  Achievement -->

                <li><a href="{{ url('../bim_achi') }}"  >Achievement </a></li>

                <!-- Reserch -->
                <li class="dropdown">
                    <a href="#"><span>Research</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Professional Membership</a></li>
                        <li><a href="{{ url('../college_journal') }}"  >College Journal</a></li>
                        <li><a href="{{ url('../bim_iic') }}">Institutes Innovation Cell (IIC)</a></li>
                        <!--<li><a href="#">IEEE Conference</a></li>-->
                        <li><a href="#">Research Achieveements</a></li>
                        <li><a href="#">Grants</a></li>

                    </ul>
                </li>

  <!-- ACTIVITIES -->
                <li class="dropdown">
                    <a href="#"><span>Activities</span><i class="bi bi-chevron-down"></i></a>
                   <ul>
                        <li><a href="{{ url('../bsm') }}"  >Buddha Sharad Mahotsav </a></li>
                        <li><a href="{{ url('../bsf') }}"  >Buddha Spring Festival </a></li>
                        <li><a href="{{ url('campus-life/extracuricular') }}"  >Extracuricular </a></li>
                        <li><a href="{{ url('campus-life/sport') }}"  >Sports </a></li>
                        <li><a href="{{ url('../comuities') }}"  >Community Development (PUNYA) </a></li>
                        <li><a href="{{ url('../wec') }}"  >Women Empowerment Cells (WEC) </a></li>
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
                                <li><a href="{{ url('departments/mba/mba_v_m') }}">Admissions in MBA</a></li>
                                <li><a href="{{ url('departments/mca/ca_v_m') }}">Admission in MCA</a></li>
                                <li><a href="{{ url('departments/bba/bba_v_m') }}">Admission in BBA</a></li>
                                <li><a href="{{ url('departments/bca/bca_v_m') }}">Admission in BCA</a></li>
                            </ul>
                        </li>-->
                       <!-- <li><a href="https://aktubrand.vercel.app/blog/aktu-digital-evaluation-update-202526-what-colleges-and-teachers-must-know"  >Evaluation Scheme </a></li>
                        <li><a href="https://aktu.ac.in/syllabus.html"  >Syllabus</a></li>
                        <li><a href="#"  >Issue of Certificate for Passout Students</a></li>
                        <li><a href="{{ url('../College-Academic-calander-14-10-24') }}"  >College Calendar</a></li>
                        <li><a href="{{ url('../University-Academic-Calander-2024-25') }}"  >University Calendar</a></li>
                        <li><a href="{{ url('../ELearning') }}">E-Learning</a></li>
                        <li><a href="{{ url('MoU') }}">MoU</a></li>-->
                    </ul>
                </li>


               <!-- FACILITIES -->

                <li class="dropdown">
                    <a href="#"><span>Facilities</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                         <li><a href="{{ url('campus-life/hostel') }}"  >Hostel</a></li>
                       <!-- <li class="dropdown">

                            <a href="#">Hostel <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">New Hostel Orientation Program</a></li>
                                <li><a href="#">EDA</a></li>
                            </ul>
                          </li>-->

                            <li><a href="{{ url('../Mess') }}"  >Mess</a></li>
                            <li><a href="{{ url('../Transportation') }}"  >BUS</a></li>
                            <li><a href="{{ url('../BuddhaBazaar') }}"  >Buddha Bazar</a></li>
                            <li><a href="{{ url('../te') }}"  >Temple Event</a></li>
                            <li><a href="{{ url('../bankatm') }}"  >ATM</a></li>
                            <!--<li><a href="{{ url('../LabCSE') }}">Computer Lab Complex</a></li>
                            <li><a href="{{ url('../LabEE') }}">Electrical Lab Complex</a></li>
                            <li><a href="{{ url('../LabECE') }}">ELECTRONICS & COMMUNICATION Lab Complex</a></li>
                            <li><a href="{{ url('../LabME') }}">Mechanical Lab Complex</a></li>
                            <li><a href="{{ url('../ConferenceHall') }}">Conference Hall</a></li>
                            <li><a href="{{ url('../SeminarHall') }}">Seminar Hall</a></li>-->

                        </ul>
                        </li>



                <!-- R&D -->







                <!-- SKILL DEV -->
                <li class="dropdown">
                    <a href="#"><span>Skill Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../Achiv') }}"  >Achivements</a></li>
                        <li><a href="{{ url('../ledcon') }}"  >Leadcon</a></li>
                        <li><a href="{{ url('../cs') }}"  >CCC Certification</a></li>
                        <li><a href="{{ url('../ar') }}"  >Aptitudes & Reasoning</a></li>
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
                <li class="dropdown">
                    <a href="#"><span>Academics</span><i class="bi bi-chevron-down"></i></a>
                   <ul>
                        <li><a href="{{ url('../acc') }}"  >Academic Calendar </a></li>
                        <!--<li class="dropdown">
                            <a href="#">Departments<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('departments/mba/mba_v_m') }}">MBA</a></li>
                                <li><a href="{{ url('departments/mca/ca_v_m') }}">MCA</a></li>
                                <li><a href="{{ url('departments/bba/bba_v_m') }}"">BBA</a></li>
                                <li><a href="{{ url('departments/bca/bca_v_m') }}">BCA</a></li>
                            </ul>
                        </li>-->
                       <!-- <li class="dropdown">
                            <a href="#">Admission <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('departments/mba/mba_v_m') }}">Admissions in MBA</a></li>
                                <li><a href="{{ url('departments/mca/ca_v_m') }}">Admission in MCA</a></li>
                                <li><a href="{{ url('departments/bba/bba_v_m') }}">Admission in BBA</a></li>
                                <li><a href="{{ url('departments/bca/bca_v_m') }}">Admission in BCA</a></li>
                            </ul>
                        </li>-->

                        <li><a href="{{ url('../eva-s') }}"  >Evaluation Scheme </a></li>
                        <li><a href="https://aktu.ac.in/syllabus.html" target="_blank" >Syllabus</a></li>
                        <li><a href="#"  >Issue of Certificate for Passout Students</a></li>
                        <!--<li><a href="{{ url('../College-Academic-calander-14-10-24') }}"  >College Calendar</a></li>
                        <li><a href="{{ url('../University-Academic-Calander-2024-25') }}"  >University Calendar</a></li>
                        <li><a href="{{ url('../ELearning') }}">E-Learning</a></li>
                        <li><a href="{{ url('MoU') }}">MoU</a></li>-->
                    </ul>
                </li>



                <!-- EXAMINATION -->
               <!-- <li class="dropdown">
                    <a href="#"><span>Examination</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('examination') }}"  >Examination Committee</a></li>
                        <li><a href="{{ url('../index') }}">Examination Notices</a></li>
                        <li><a href="https://nad.digitallocker.gov.in/students"  >DigiLocker NAD</a></li>
                        <li><a href="https://erp.aktu.ac.in/"  >Degree/Migration</a></li>
                    </ul>
                </li>-->

                <!-- CAREERS -->
               <!-- <li class="dropdown">
                    <a href="#"><span>Careers</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../index') }}">Faculty Positions</a></li>
                        <li><a href="{{ url('../index') }}">Non-Teaching Positions</a></li>
                    </ul>
                </li>-->

                  <!-- CAREERS -->
               <!-- <li class="dropdown">
                    <a href="#"><span>Department</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../index') }}">Faculty Positions</a></li>
                        <li><a href="{{ url('../index') }}">Non-Teaching Positions</a></li>
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
                        <li><a href="{{ url('../aca-aw') }}"  >Academic Award</a></li>
                        <li><a href="{{ url('star-aw') }}"  >Star Award</a></li>
                        <li><a href="{{ url('../cgc') }}"  >Change of Guard Cereony</a></li>
                    </ul>
                </li>


       <!-- Personality Development -->
                <li class="dropdown">
                    <a href="#"><span>Personality Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../csep') }}">Communication SKILL ENHANCEMENT PROGRAM</a></li>
                        <li><a href="{{ url('../bim_es') }}">English Speaking</a></li>
                        <!--<li class="dropdown">
                            <a href="#">Research<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('../ResearchCell') }}">Research Cell</a></li>
                                <li><a href="#">Patent</a></li>
                                <li><a href="{{ url('../AwardandAchievement') }}">Awards & Achievements</a></li>
                                <li><a href="{{ url('../PaperPublication') }}">Paper Publication</a></li>
                                <li><a href="{{ url('../NationalConference') }}">National Conference</a></li>
                                <li><a href="{{ url('../NationalJournal') }}">National Journal Of Engineering & Technology</a></li>
                                <li><a href="{{ url('../NationalSeminar') }}">National Seminar</a></li>
                                <li><a href="{{ url('../Techyuva') }}">Techyuva Model Competition</a></li>
                                <li><a href="{{ url('../ViewPublication') }}">Paper Presentation</a></li>
                                <li><a href="#">Buddha Invention Center</a></li>
                                <li><a href="{{ url('../IncubationCell') }}">Incubation Cell</a></li>
                                <li><a href="{{ url('../Museum') }}">Buddha Museum</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </li>


               <li class="dropdown">
                    <a href="#"><span>Infrastructure</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="{{ url('../computer_lab') }}"  >Computer Labs </a></li>
                        <!--<li><a href="#">Academic Labs</a></li>-->
                        <li><a href="{{ url('../smart_class') }}"  >Smart Class Rooms </a></li>
                        <li><a href="{{ url('../seminar_hall') }}"  >Seminar Hall</a></li>
                    </ul>
                </li>

                <!--<li class="dropdown">
                    <a href="#"><span>Teaching Pedagogy</span><i class="bi bi-chevron-down"></i></a>
                     <ul>
                        <li><a href="{{ url('../index') }}">Achievement </a></li>
                        <li><a href="{{ url('../index') }}">Buddha Series</a></li>
                        <li><a href="{{ url('../index') }}">Success Program </a></li>
                        <li><a href="{{ url('../index') }}">Mentor Mentee Register</a></li>
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
            </ul>
        </nav>
    </div>
</header>

<div class=" container-fluid bg-dark pt-2">
    <div class="row">
        <div class="md-4 col-lg-4 col-sm-4"></div>
        <div class="md-4 col-lg-4 col-sm-4 navbar anc">
    <ul style="padding: 5px 5px;  margin: 2px 20px;">

   <li class="dropdown"><img id="Repeater_scroll_Image1_2" src="{{ asset('../Images/new.gif') }}" style="height:7px;width:22px;" />

        &nbsp;
         <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#"   style=" display: inline !important;, font-weight: 700;  color: #e52f2f !important;  font-size: 17px;">
            <span>Admission in 2026-2027 </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li> <a href="{{ url('../courses_offered') }}">Courses Offered </a> </li>
                <li><a href="{{ url('../bgi_brochure') }}">Brochure</a></li>
                <li><a href="{{ url('../ap') }}" > Admission Process</a> </li>
                <!--<li><a href="#"  >Admission Form</a></li>-->
                <li><a href="{{ url('../contact') }}">Contact Us</a></li>
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
            // no-op — scroll handled elsewhere
        });

    })();

    // ===== Mobile Navigation Toggle =====
    function toggleMobileNav() {
        var overlay = document.getElementById('mobileNavOverlay');
        var icon = document.getElementById('mobileMenuIcon');
        var isOpen = overlay.classList.contains('open');
        if (isOpen) {
            overlay.classList.remove('open');
            icon.className = 'bi bi-list';
            document.body.style.overflow = '';
        } else {
            overlay.classList.add('open');
            icon.className = 'bi bi-x';
            document.body.style.overflow = 'hidden';
        }
    }
    // Close mobile nav only when actual nav links (not dropdown triggers) are clicked
    document.addEventListener('DOMContentLoaded', function() {

        // Only close the overlay for real navigation links (NOT dropdown toggles)
        var realLinks = document.querySelectorAll('#mobileNavOverlay a.mob-link');
        realLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                document.getElementById('mobileNavOverlay').classList.remove('open');
                document.getElementById('mobileMenuIcon').className = 'bi bi-list';
                document.body.style.overflow = '';
            });
        });

        // Dropdown accordion toggles — expand/collapse only, do NOT close the sidebar
        var dropTriggers = document.querySelectorAll('#mobileNavOverlay .mob-drop-trigger');
        dropTriggers.forEach(function(trigger) {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // prevent any parent listener from closing the nav
                var sub = this.nextElementSibling;
                if (sub) {
                    var isOpen = sub.style.display === 'block';
                    sub.style.display = isOpen ? 'none' : 'block';
                    var chevron = this.querySelector('.mob-chevron');
                    if (chevron) chevron.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(90deg)';
                }
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('../Includes/script.js') }}"></script>
<style>
    #mobileNavOverlay {
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(10, 12, 20, 0.97);
        backdrop-filter: blur(16px);
        z-index: 99999;
        transform: translateX(100%);
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        overflow-y: auto;
        padding: 0;
        display: flex;
        flex-direction: column;
    }
    #mobileNavOverlay.open { transform: translateX(0); }

    .mob-nav-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 20px;
        border-bottom: 1px solid rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.03);
        position: sticky;
        top: 0;
        z-index: 2;
    }
    .mob-nav-header .brand { color: #ef4444; font-weight: 700; font-size: 1rem; text-transform: uppercase; letter-spacing: 0.5px; }
    .mob-nav-close {
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 8px;
        width: 38px; height: 38px;
        display: flex; align-items: center; justify-content: center;
        cursor: pointer; color: #fff; font-size: 1.3rem;
    }
    .mob-nav-links { padding: 12px 0 30px; flex: 1; }
    .mob-nav-links a.mob-link {
        display: flex; align-items: center; justify-content: space-between;
        padding: 14px 24px;
        color: #e2e8f0;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        transition: all 0.2s;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .mob-nav-links a.mob-link:hover, .mob-nav-links a.mob-link:active { color: #ef4444; background: rgba(239,68,68,0.06); padding-left: 30px; }
    .mob-nav-links .mob-drop-trigger {
        display: flex; align-items: center; justify-content: space-between;
        padding: 14px 24px;
        color: #e2e8f0;
        font-size: 15px; font-weight: 500;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        cursor: pointer;
        text-transform: uppercase; letter-spacing: 0.5px;
        text-decoration: none;
    }
    .mob-drop-trigger:hover { color: #ef4444; background: rgba(239,68,68,0.06); }
    .mob-chevron { transition: transform 0.3s; font-size: 13px; color: #94a3b8; }
    .mob-submenu { display: none; background: rgba(0,0,0,0.3); border-left: 2px solid #ef4444; margin: 0; padding: 0; }
    .mob-submenu a {
        display: block; padding: 11px 24px 11px 32px;
        color: #94a3b8; text-decoration: none; font-size: 13.5px;
        border-bottom: 1px solid rgba(255,255,255,0.04);
        transition: all 0.2s;
    }
    .mob-submenu a:hover { color: #ef4444; padding-left: 38px; }

    @media (min-width: 992px) { #mobileNavOverlay { display: none !important; } }
</style>

<div id="mobileNavOverlay">
    <div class="mob-nav-header">
        <span class="brand"><i class="bi bi-mortarboard-fill me-2"></i>Buddha Institute</span>
        <div class="mob-nav-close" onclick="toggleMobileNav()"><i class="bi bi-x-lg"></i></div>
    </div>

    <div class="mob-nav-links">
        <a class="mob-link" href="{{ url('../index') }}"><span><i class="bi bi-house-fill me-2" style="color:#ef4444;"></i> Home</span></a>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-info-circle me-2" style="color:#ef4444;"></i> About Us</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../AboutUs') }}">Parichay</a>
            <a href="{{ url('../message') }}">Management</a>
            <a href="{{ url('../director') }}">Director</a>
            <a href="{{ url('../organization-chart') }}">Organization Chart</a>
            <a href="{{ url('../admin-team') }}">Administrative Team</a>
            <a href="{{ url('../committee') }}">Committee</a>
            <a href="{{ url('../board-of-governors') }}">BOG: Board of Governance</a>
            <a href="{{ url('../IQAC-meeting') }}">IQAC</a>
            <a href="{{ url('../vision-mission') }}">Vision & Mission</a>
            <a href="{{ url('../AffiliationAKTU') }}">Affiliation Letter</a>
            <a href="{{ url('../college_video') }}">College Video</a>
            <a href="{{ url('../gallery') }}">Gallery</a>
            <a href="{{ url('../Mandatory-Disclosures') }}">Mandatory Disclosure</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-building me-2" style="color:#ef4444;"></i> Department</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('departments/bca/bca') }}">Dept. of Computer Application</a>
            <a href="{{ url('departments/bba/bba') }}">BBA</a>
            <a href="{{ url('departments/mba/mba') }}">MBA</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-briefcase me-2" style="color:#ef4444;"></i> Placement</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../placement-cell') }}">Placement Cell</a>
            <a href="{{ url('../top-placement') }}">Top Placement</a>
            <a href="{{ url('../proud-alumni') }}">Proud Alumni</a>
            <a href="{{ url('../plac_drive') }}">Placement Drive</a>
            <a href="{{ url('../MOU_link') }}">MOU's</a>
            <a href="{{ url('../our_partner') }}">Our Recruiters</a>
        </div>

        <a class="mob-link" href="{{ url('../bim_achi') }}"><span><i class="bi bi-trophy me-2" style="color:#ef4444;"></i> Achievement</span></a>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-flask me-2" style="color:#ef4444;"></i> Research</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Professional Membership</a>
            <a href="{{ url('../college_journal') }}">College Journal</a>
            <a href="{{ url('../bim_iic') }}">Institutes Innovation Cell (IIC)</a>
            <a href="#">Research Achievements</a>
            <a href="#">Grants</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-calendar-event me-2" style="color:#ef4444;"></i> Activities</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../bsm') }}">Buddha Sharad Mahotsav</a>
            <a href="{{ url('../bsf') }}">Buddha Spring Festival</a>
            <a href="{{ url('campus-life/extracuricular') }}">Extracurricular</a>
            <a href="{{ url('campus-life/sport') }}">Sports</a>
            <a href="{{ url('../comuities') }}">Community Development (PUNYA)</a>
            <a href="{{ url('../wec') }}">Women Empowerment Cells (WEC)</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-tools me-2" style="color:#ef4444;"></i> Facilities</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('campus-life/hostel') }}">Hostel</a>
            <a href="{{ url('../Mess') }}">Mess</a>
            <a href="{{ url('../Transportation') }}">BUS</a>
            <a href="{{ url('../BuddhaBazaar') }}">Buddha Bazar</a>
            <a href="{{ url('../te') }}">Temple Event</a>
            <a href="{{ url('../bankatm') }}">ATM</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-laptop me-2" style="color:#ef4444;"></i> Skill Development</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../Achiv') }}">Achievements</a>
            <a href="{{ url('../ledcon') }}">Leadcon</a>
            <a href="{{ url('../cs') }}">CCC Certification</a>
            <a href="{{ url('../ar') }}">Aptitudes & Reasoning</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-book me-2" style="color:#ef4444;"></i> Academics</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../acc') }}">Academic Calendar</a>
            <a href="{{ url('../eva-s') }}">Evaluation Scheme</a>
            <a href="https://aktu.ac.in/syllabus.html" target="_blank">Syllabus</a>
            <a href="#">Issue of Certificate for Passout Students</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-award me-2" style="color:#ef4444;"></i> Student Awards</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../aca-aw') }}">Academic Award</a>
            <a href="{{ url('star-aw') }}">Star Award</a>
            <a href="{{ url('../cgc') }}">Change of Guard Ceremony</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-person-check me-2" style="color:#ef4444;"></i> Personality Dev.</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../csep') }}">Communication Skill Enhancement Program</a>
            <a href="{{ url('../bim_es') }}">English Speaking</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-building me-2" style="color:#ef4444;"></i> Infrastructure</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../computer_lab') }}">Computer Labs</a>
            <a href="{{ url('../smart_class') }}">Smart Class Rooms</a>
            <a href="{{ url('../seminar_hall') }}">Seminar Hall</a>
        </div>

        <a class="mob-link" href="{{ url('Contact_Us') }}" style="color:#ef4444; font-weight:700; border-top: 1px solid rgba(239,68,68,0.2); margin-top: 8px;">
            <span><i class="bi bi-telephone-fill me-2"></i> Contact Us</span>
        </a>
    </div>
</div>
