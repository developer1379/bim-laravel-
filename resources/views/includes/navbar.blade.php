<style>
    body { margin: 0; padding: 0; overflow-x: hidden; width: 100%; min-height: 100vh; background: #f8f9fa; }
    
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
        
        #header { background: #111827; display: none !important; } .navbar-mobile #header { display: block !important; }
        
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
                    href="#"
                    target="_blank"
                    class="fs-5 fw-bolder px-0 text-white bg-transparent text-decoration-none text-uppercase">Buddha Group of Institution</a>
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
                    <li class="dropdown dropdown-lg" data-for="0">
                        <a href="#"><span>Student Welfare</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="1">
                        <a href="#"><span>Human Resources</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="2">
                        <a href="#"><span>IIC</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="3">
                        <a href="#"><span>COE</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="4">
                        <a href="{{ url('../IQAC-meeting') }}" target="_blank"><span>IQAC</span>
                        </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="{{ asset('') }}"><span>Startup & Entrepreneurship</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="{{ url('journal/index') }}"><span>BIM JOURNAL</span> </a>
                        <ul></ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="{{ url('../mou') }}"><span>MOU</span> </a>
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
            <div class="col-md-1 px-1">
                <center>
                    <a href="{{ url('../index') }}">
                        <img src="{{ asset('../Images/logo.png') }}" class="img-fluid w-logo" style="max-height: 80px; width: auto;" />
                    </a>
                </center>
            </div>
            <div class="col-md-10 text-center w-head fw-bolder">
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
            <div class="col-md-1 px-1">
                <center>
                    <a href="https://aktu.ac.in/" target="_blank">
                        <img src="{{ asset('../Images/aktu.png') }}" class="img-fluid w-logo" style="max-height: 80px; width: auto;" />
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
            <!-- toggle button overlays here -->
        </div>
    </div>
</section>
<!-- Middle Section Ends -->
<!-- Header -->
<header id="header" class="d-flex align-items-center py-2" style="padding:0px 0px 0px 5px !important">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="padding:0px 0px !important">
        <div class="logo">
            <a href="https://www.bimgkp.ac.in/index.php" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" class="text-decoration-none text-light fs-3 fw-bold" title="Buddha Group of Institutions">BGI</a>
        </div>
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ url('Index') }}">Home</a></li>

                <!-- ABOUT US -->
                <li class="dropdown">
                    <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../AboutUs') }}">Overview</a></li>
                        <li><a href="{{ url('../vision-mission') }}">Vision & Mission</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Messages</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url('../Chairman') }}">Chairman</a></li>
                                <li><a href="{{ url('../Secretary') }}">Secretary</a></li>
                                <!--<li><a href="{{ url('../CTO') }}">Chief Technology Officer</a></li>-->
                                <li><a href="{{ url('Director') }}">Director</a></li>
                            </ul>
                        </li>
                       <!-- <li><a href="{{ url('../Administration') }}">Administration</a></li>-->
                        <li><a href="{{ url('../board-of-governors') }}">BOG: Board of Governance</a></li>
                        <li><a href="{{ url('../college-committee') }}">College Committee</a></li>
                        <li><a href="{{ url('../Mandatory-Disclosures') }}">Mandatory Disclosure</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Affiliation</span><i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url('Affiliation') }}">AICTE</a></li>
                                <li><a href="{{ url('../AffiliationAKTU') }}">AKTU</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('../SOP') }}" target="_blank">SOP: Standard Operating Plan</a></li>
                        <li><a href="{{ url('../OrganizationalStructure') }}">Organizational Structure</a></li>
                        <li><a href="{{ url('../LocationCampus') }}">Location & Campus</a></li>
                        <li><a href="{{ url('../IQAC-meeting') }}" target="_blank">IQAC</a></li>
                        <li><a href="{{ url('../logo') }}" target="_blank">BIM Logo</a></li>
                        <li><a href="{{ url('../gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('../ServiceRules') }}" target="_blank">Service Rules</a></li>
                    </ul>
                </li>

                <!-- ACADEMICS -->
                <li class="dropdown">
                    <a href="#"><span>Academics</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../Programmes') }}">Programmes</a></li>
                        <li class="dropdown">
                            <a href="#">Departments<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('departments/mba/mba_v_m') }}">MBA</a></li>
                                <li><a href="{{ url('departments/mca/ca_v_m') }}">MCA</a></li>
                                <li><a href="{{ url('departments/bba/bba_v_m') }}"">BBA</a></li>
                                <li><a href="{{ url('departments/bca/bca_v_m') }}">BCA</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Admission <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('departments/mba/mba_v_m') }}">Admissions in MBA</a></li>
                                <li><a href="{{ url('departments/mca/ca_v_m') }}">Admission in MCA</a></li>
                                <li><a href="{{ url('departments/bba/bba_v_m') }}">Admission in BBA</a></li>
                                <li><a href="{{ url('departments/bca/bca_v_m') }}">Admission in BCA</a></li>
                            </ul>
                        </li>
                        <li><a href="https://aktu.ac.in/bachelors-ordinance.html" target="_blank">Ordinances</a></li>
                        <li><a href="https://aktu.ac.in/syllabus.html" target="_blank">Syllabus</a></li>
                        <li><a href="{{ url('../fee') }}" target="_blank">Fee Structure</a></li>
                        <li><a href="{{ url('../College-Academic-calander-14-10-24') }}" target="_blank">College Calendar</a></li>
                        <li><a href="{{ url('../University-Academic-Calander-2024-25') }}" target="_blank">University Calendar</a></li>
                        <li><a href="{{ url('../ELearning') }}">E-Learning</a></li>
                        <li><a href="{{ url('MoU') }}">MoU</a></li>
                    </ul>
                </li>

                <!-- R&D -->
                <li class="dropdown">
                    <a href="#"><span>Research & Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../ResearchProjects') }}">Research Projects</a></li>
                        <li class="dropdown">
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
                        </li>
                    </ul>
                </li>

                <!-- FACILITIES -->
                <li class="dropdown">
                    <a href="#"><span>Facilities</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown">
                            <a href="#">Infrastructure <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('../Library') }}">Library</a></li>
                                <li><a href="{{ url('../Sports') }}">Sports</a></li>
                                <li><a href="{{ url('Hostel') }}">Hostel</a></li>
                                <li><a href="{{ url('../Mess') }}">Mess</a></li>
                                <li><a href="{{ url('../Workshop') }}">Workshop</a></li>
                                <li><a href="#">Classrooms</a></li>
                                <li><a href="{{ url('../LabApplied') }}">Applied Science Lab Complex</a></li>
                                <li><a href="{{ url('../LabCE') }}">Civil Lab Complex</a></li>
                                <li><a href="{{ url('../LabCSE') }}">Computer Lab Complex</a></li>
                                <li><a href="{{ url('../LabEE') }}">Electrical Lab Complex</a></li>
                                <li><a href="{{ url('../LabECE') }}">ELECTRONICS & COMMUNICATION Lab Complex</a></li>
                                <li><a href="{{ url('../LabME') }}">Mechanical Lab Complex</a></li>
                                <li><a href="{{ url('../ConferenceHall') }}">Conference Hall</a></li>
                                <li><a href="{{ url('../SeminarHall') }}">Seminar Hall</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Other Facilities <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('../Canteen') }}">Cafeteria</a></li>
                                <li><a href="{{ url('../Guest_House') }}">Guest House</a></li>
                                <li><a href="{{ url('BankATM') }}">Bank ATM</a></li>
                                <li><a href="{{ url('../Transportation') }}">Transportation</a></li>
                                <li><a href="{{ url('../Security') }}">Security</a></li>
                                <li><a href="{{ url('../BIMStage') }}">BIM STAGE</a></li>
                                <li><a href="{{ url('Euphony') }}">Euphony (BIM MUSICAL BAND)</a></li>
                                <li><a href="{{ url('../TvRoom') }}">T.V. Room</a></li>
                                <li><a href="{{ url('../GYM') }}">GYM</a></li>
                                <li><a href="{{ url('../BuddhaBazaar') }}">Buddha Bazaar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- SKILL DEV -->
                <li class="dropdown">
                    <a href="#"><span>Skill Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../SkillEnhancement') }}">Buddha Skill Enhancement Programme</a></li>
                        <li><a href="{{ url('../EnglishChaupal') }}">English Chaupal</a></li>
                        <li><a href="#">Gyandeep Summer Training</a></li>
                        <li><a href="{{ url('../GateClasses') }}">Gate-Classes</a></li>
                        <li><a href="#">Tech-Edge</a></li>
                        <li><a href="#">Career Counselling</a></li>
                        <li><a href="#">GATE Result</a></li>
                    </ul>
                </li>

                <!-- PLACEMENT -->
                <li class="dropdown">
                    <a href="#"><span>Placement</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../placement-cell') }}">Overview</a></li>
                        <li><a href="{{ url('../Placement-policy') }}" target="_blank">Placement Policy</a></li>
                        <li><a href="#">Recruiters</a></li>
                        <li><a href="{{ url('../View_PlacedStudentManagement') }}">Placement Statistics</a></li>
                        <li><a href="#">Alumni Meet</a></li>
                        <li><a href="{{ asset('../pdf/SampleCV.doc') }}" target="_blank">Resume Template</a></li>
                    </ul>
                </li>

                <!-- EXAMINATION -->
                <li class="dropdown">
                    <a href="#"><span>Examination</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('examination') }}" target="_blank">Examination Committee</a></li>
                        <li><a href="{{ url('../index') }}">Examination Notices</a></li>
                        <li><a href="https://nad.digitallocker.gov.in/students" target="_blank">DigiLocker NAD</a></li>
                        <li><a href="https://erp.aktu.ac.in/" target="_blank">Degree/Migration</a></li>
                    </ul>
                </li>

                <!-- CAREERS -->
                <li class="dropdown">
                    <a href="#"><span>Careers</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../index') }}">Faculty Positions</a></li>
                        <li><a href="{{ url('../index') }}">Non-Teaching Positions</a></li>
                    </ul>
                </li>


                <li class="dropdown"><a href="#"><span>What's New</span> <i class="bi bi-chevron-down"></i></a>
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
                </li>

                <li><a class="nav-link scrollto" href="{{ url('Contact_Us') }}"><i class="bx bxs-phone-call fs-3"></i></a></li>
            </ul>
            </li>
            </ul>
        </nav>
    </div>
</header>

<div class=" container-fluid bg-dark pt-2">
    <marquee id="m5" behavior="ALTERNATE" scrollamount="3" scrolldelay="0" scrollspeed="300" onmouseout="this.start();" onmouseover="this.stop();" style="border-width: 0px; border-style: solid; width: 100%;" class="p-0 m-0">
   
    <img id="Repeater_scroll_Image1_2" src="{{ asset('../Images/new.gif') }}" style="height:7px;width:22px;" />

        &nbsp;
         <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="{{ asset('../PDF/2025BIMDO18.pdf') }}" target="_blank">
            DATA OF ADMISSION OF VACANT SEAT 2025-26</a>
<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="{{ asset('../PDF/EOA_Report_2025_26.pdf') }}" target="_blank">
            EOA 2025-26</a>
<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="{{ asset('../PDF/AKTU_Affiliation_Letter_25_26.pdf') }}" target="_blank">
            AKTU Affiliation Letter 2025-26</a>
        
    
    </marquee>

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

<script src="{{ asset('../Includes/script.js') }}"></script>
<!-- End Header -->
