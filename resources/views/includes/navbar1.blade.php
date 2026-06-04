<!-- Topbar Start -->
<div class="topbar d-none d-md-block modern-topbar">
    <nav class="navbar navbar-expand-lg py-1">
        <div class="container-fluid">
            <div class="logo">
                <a href="#"
                    class="fs-5 fw-bolder px-0 text-white bg-transparent text-decoration-none text-uppercase">Buddha
                    Group of Institution</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 120px">
                <ul>
                    <li class="dropdown dropdown-lg" data-for="1">
                        <a href="#"><span>Human Resources</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                            <li><a href="#">Recruitment</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="0">
                        <a href="#"><span>Teaching Pedagogy</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                            <li><a href="#">Pedagogy</a></li>
                            <li><a href="#">09 Points Success Program</a></li>
                            <li><a href="#">Mentor Mentee Register</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="3">
                        <a href="#"><span>FDP/FAR</span> <i class="bi bi-chevron-down"></i> </a>
                        <ul>
                            <li><a href="#">Faculty National Conference </a></li>
                            <li><a href="#">FAR Workshop </a></li>
                            <li><a href="#">Teaching Pedagogy Session</a></li>
                            <li><a href="#">OBE Workshop</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="2">
                        <a href="#"><span>Library</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                            <li><a href="#">Catalog </a></li>
                            <li><a href="#">DELNET </a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-lg" data-for="4">
                        <a href="#"><span>Student Activities</span><i class="bi bi-chevron-down"></i> </a>
                        <ul>
                            <li><a href="#">Deeksharambh </a></li>
                            <li><a href="#">Parents Orientation Program </a></li>
                            <li><a href="#">Graduation Day </a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-lg" data-for="5">
                        <a href="#"><i class="bx bxs-phone-call fs-3" style="margin-left:4px;"></i> </a>
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
<section class="middle modern-middle-section shadow-sm">
    <div class="container py-2 d-none d-md-block">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <center>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/bit.png') }}" class="img-fluid w-logo"
                            style="max-height: 100px; width: auto;" />
                    </a>
                </center>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                <h3 class="modern-brand-title mb-1">
                    BUDDHA INSTITUTE OF TECHNOLOGY, GIDA, GORAKHPUR
                </h3>
                <p class="modern-brand-sub mb-0">
                    Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul
                    Kalam Technical University, Lucknow, Uttar Pradesh
                    <span class="bg-warning px-2 text-dark">College Code - 525</span>
                </p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <center>
                    <a href="https://aktu.ac.in/" target="_blank">
                        <img src="{{ asset('../images/aktu.png') }}" class="img-fluid w-logo"
                            style="max-height: 80px; width: auto;" />
                    </a>
                </center>
            </div>
        </div>
    </div>

    <!-- Mobile View -->
    <div class="container-fluid py-2 d-block d-md-none shadow-sm"
        style="background-color: #ffffff; position: sticky; top: 0; z-index: 10000; min-height: 65px;">
        <div class="row align-items-center px-1 h-100">
            <div class="col-10 pe-0">
                <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('images/bit.png') }}" class="img-fluid" style="max-height: 42px; width: auto;" />
                    <div class="ms-2 d-flex flex-column text-start justify-content-center">
                        <span class="text-danger fw-bold lh-sm mobile-brand-title"
                            style="font-size: 13px; text-transform: uppercase;">Buddha Institute of Technology</span>
                        <span class="text-muted lh-sm mt-1 mobile-brand-sub"
                            style="font-size: 10px; font-weight: 600; letter-spacing: 0.5px;">GIDA, GKP |
                            CODE-525</span>
                    </div>
                </a>
            </div>
            <div class="col-2 d-flex justify-content-end align-items-center ps-0">
                <button id="mobileMenuBtn" onclick="toggleMobileNav()"
                    style="background: #cc1616; border: none; border-radius: 8px; width: 42px; height: 42px; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 2px 8px rgba(204,22,22,0.3);">
                    <i id="mobileMenuIcon" class="bi bi-list" style="font-size: 1.5rem; color: #fff;"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Middle Section Ends -->
<!-- Header -->
<header id="header" class="d-flex align-items-center py-2">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="padding:0px 0px !important">
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ url('/') }}"><i class="bx bxs-home fs-3"></i></a></li>

                <!-- ABOUT US -->
                <li class="dropdown">
                    <a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../AboutUs') }}">Parichay</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Director</a></li>
                        <li><a href="#">Organization Chart</a></li>
                        <li><a href="#">Administrative Team</a></li>
                        <li><a href="#">Committee</a></li>
                        <li><a href="{{ url('../board-of-governors') }}">BOG: Board of Governance</a></li>
                        <li><a href="#">IQAC</a></li>
                        <li><a href="#">Vision & Mission </a></li>
                        <li><a href="#">Affiliation Letter </a></li>
                        <li><a href="#">College Video</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Mandatory Disclosure</a></li>
                    </ul>
                </li>

                <!-- department-->
                <li class="dropdown">
                    <a href="#">Department <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown">
                            <a href="#"><span>Applied Sciences and Humanities</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">ASH -1</a></li>
                                <li><a href="#">ASH-2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Computer Science Engineering & Allied</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">AIML</a></li>
                                <li><a href="{{ url('/cse') }}">CSE</a></li>
                                <li><a href="#">CSIT</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/ec') }}">ECE & VLSI</a></li>
                        <li><a href="{{ url('/civil') }}">Civil Engineering</a></li>
                        <li><a href="{{ url('/me') }}">Mechanical Engineering</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Computer Applications</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url('/bca') }}">BCA</a></li>
                                <li><a href="{{ url('/mca') }}">MCA</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Business Administration</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ url('/bba') }}">BBA</a></li>
                                <li><a href="{{ url('/mba') }}">MBA</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- PLACEMENT -->
                <li class="dropdown">
                    <a href="#"><span>Placement</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('../placement-cell') }}"> Placement cell</a></li>
                        <li><a href="#">Top Placement</a></li>
                        <li><a href="#"> Proud Alumni</a></li>
                        <li><a href="#">Placement Drive</a></li>
                        <li><a href="#">MOU's</a></li>
                        <li><a href="#">Our Recruiters</a></li>
                    </ul>
                </li>

                <!--  Achievement -->
                <li><a href="#">Achievement </a></li>

                <!-- Research -->
                <li class="dropdown">
                    <a href="#"><span>Research</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Professional Membership</a></li>
                        <li><a href="#">College Journal</a></li>
                        <li><a href="#">Institutes Innovation Cell (IIC)</a></li>
                        <li><a href="#">Research Achievements</a></li>
                        <li><a href="#">Grants</a></li>
                    </ul>
                </li>

                <!-- ACTIVITIES -->
                <li class="dropdown">
                    <a href="#"><span>Activities</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Buddha Sharad Mahotsav </a></li>
                        <li><a href="#">Buddha Spring Festival </a></li>
                        <li><a href="#">Extracurricular </a></li>
                        <li><a href="#">Sports </a></li>
                        <li><a href="#">Community Development (PUNYA) </a></li>
                        <li><a href="#">Women Empowerment Cells (WEC) </a></li>
                    </ul>
                </li>

                <!-- FACILITIES -->
                <li class="dropdown">
                    <a href="#"><span>Facilities</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Hostel</a></li>
                        <li><a href="#">Mess</a></li>
                        <li><a href="#">BUS</a></li>
                        <li><a href="#">Buddha Bazar</a></li>
                        <li><a href="#">Temple Event</a></li>
                        <li><a href="#">ATM</a></li>
                    </ul>
                </li>

                <!-- SKILL DEV -->
                <li class="dropdown">
                    <a href="#"><span>Skill Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Achievements</a></li>
                        <li><a href="#">Leadcon</a></li>
                        <li><a href="#">CCC Certification</a></li>
                        <li><a href="#">Aptitudes & Reasoning</a></li>
                    </ul>
                </li>

                <!-- ACADEMICS -->
                <li class="dropdown">
                    <a href="#"><span>Academics</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Academic Calendar </a></li>
                        <li><a href="#">Evaluation Scheme </a></li>
                        <li><a href="#">Syllabus</a></li>
                        <li><a href="#">Issue of Certificate for Passout Students</a></li>
                    </ul>
                </li>

                <!-- Student Awards -->
                <li class="dropdown">
                    <a href="#"><span>Student Awards</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Academic Award</a></li>
                        <li><a href="#">Star Award</a></li>
                        <li><a href="#">Change of Guard Ceremony</a></li>
                    </ul>
                </li>

                <!-- Personality Development -->
                <li class="dropdown">
                    <a href="#"><span>Personality Development</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Communication SKILL ENHANCEMENT PROGRAM</a></li>
                        <li><a href="#">English Speaking</a></li>
                    </ul>
                </li>

                <!-- Infrastructure -->
                <li class="dropdown">
                    <a href="#"><span>Infrastructure</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Computer Labs </a></li>
                        <li><a href="#">Smart Class Rooms </a></li>
                        <li><a href="#">Seminar Hall</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="#">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Scripts -->
<script>
    (function () {
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

        on("click", ".mobile-nav-toggle", function () {
            select("#navbar").classList.toggle("navbar-mobile");
            this.classList.toggle("bi-list");
            this.classList.toggle("bi-x");
        });

        on(
            "click",
            ".navbar .dropdown > a, .navbar .dropdown .dropdown > a",
            function (e) {
                if (select("#navbar").classList.contains("navbar-mobile")) {
                    e.preventDefault();
                    const submenu = this.nextElementSibling;
                    const parentLi = this.parentElement;

                    if (submenu && submenu.classList.contains("dropdown-active")) {
                        submenu.classList.remove("dropdown-active");
                    } else {
                        const siblings =
                            parentLi.parentElement.querySelectorAll(".dropdown-active");
                        siblings.forEach((el) => {
                            el.classList.remove("dropdown-active");
                        });

                        if (submenu) {
                            submenu.classList.add("dropdown-active");
                            const submenuRect = submenu.getBoundingClientRect();
                            const windowWidth = window.innerWidth;

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

        on(
            "mouseenter",
            ".navbar .dropdown",
            function () {
                const submenu = this.querySelector("ul");
                if (submenu) {
                    const rect = submenu.getBoundingClientRect();
                    const windowWidth = window.innerWidth;

                    if (rect.right > windowWidth) {
                        submenu.classList.add("dropdown-menu-left");
                    } else {
                        submenu.classList.remove("dropdown-menu-left");
                    }
                }
            },
            true
        );
    })();

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
    document.addEventListener('DOMContentLoaded', function () {
        var realLinks = document.querySelectorAll('#mobileNavOverlay a.mob-link');
        realLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                document.getElementById('mobileNavOverlay').classList.remove('open');
                document.getElementById('mobileMenuIcon').className = 'bi bi-list';
                document.body.style.overflow = '';
            });
        });

        var dropTriggers = document.querySelectorAll('#mobileNavOverlay .mob-drop-trigger');
        dropTriggers.forEach(function (trigger) {
            trigger.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
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

<style>
    /* Enforce single line desktop view ONLY for top-level list items */
    #navbar>ul {
        display: flex !important;
        flex-wrap: nowrap !important;
        justify-content: space-between;
        width: 100%;
    }

    #navbar>ul>li:first-child {
        margin-right: 40px;
    }

    /* Ensure nested dropdown items display vertically and not as flex rows */
    #navbar .dropdown ul {
        display: block !important;
    }

    #navbar .dropdown ul li {
        display: block !important;
    }

    #navbar a {
        white-space: nowrap !important;
    }

    @media (max-width: 1400px) {
        #navbar a {
            font-size: 11px !important;
            padding: 10px 4px !important;
        }
    }

    @media (max-width: 1200px) {
        #navbar a {
            font-size: 10px !important;
            padding: 8px 2px !important;
        }
    }

    #mobileNavOverlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
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

    #mobileNavOverlay.open {
        transform: translateX(0);
    }

    .mob-nav-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 255, 255, 0.03);
        position: sticky;
        top: 0;
        z-index: 2;
    }

    .mob-nav-header .brand {
        color: #ef4444;
        font-weight: 700;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .mob-nav-close {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 8px;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: #fff;
        font-size: 1.3rem;
    }

    .mob-nav-links {
        padding: 12px 0 30px;
        flex: 1;
    }

    .mob-nav-links a.mob-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 24px;
        color: #e2e8f0;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.2s;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .mob-nav-links a.mob-link:hover,
    .mob-nav-links a.mob-link:active {
        color: #ef4444;
        background: rgba(239, 68, 68, 0.06);
        padding-left: 30px;
    }

    .mob-nav-links .mob-drop-trigger {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 24px;
        color: #e2e8f0;
        font-size: 15px;
        font-weight: 500;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-decoration: none;
    }

    .mob-drop-trigger:hover {
        color: #ef4444;
        background: rgba(239, 68, 68, 0.06);
    }

    .mob-chevron {
        transition: transform 0.3s;
        font-size: 13px;
        color: #94a3b8;
    }

    .mob-submenu {
        display: none;
        background: rgba(0, 0, 0, 0.3);
        border-left: 2px solid #ef4444;
        margin: 0;
        padding: 0;
    }

    .mob-submenu a {
        display: block;
        padding: 11px 24px 11px 32px;
        color: #94a3b8;
        text-decoration: none;
        font-size: 13.5px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        transition: all 0.2s;
    }

    .mob-submenu a:hover {
        color: #ef4444;
        padding-left: 38px;
    }

    @media (min-width: 992px) {
        #mobileNavOverlay {
            display: none !important;
        }
    }
</style>

<div id="mobileNavOverlay">
    <div class="mob-nav-header">
        <span class="brand"><i class="bi bi-mortarboard-fill me-2"></i>Buddha Institute</span>
        <div class="mob-nav-close" onclick="toggleMobileNav()"><i class="bi bi-x-lg"></i></div>
    </div>

    <div class="mob-nav-links">
        <a class="mob-link" href="{{ url('/') }}"><span><i class="bi bi-house-fill me-2" style="color:#ef4444;"></i>
                Home</span></a>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-info-circle me-2" style="color:#ef4444;"></i> About
                Us</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../AboutUs') }}">Parichay</a>
            <a href="#">Management</a>
            <a href="#">Director</a>
            <a href="#">Organization Chart</a>
            <a href="#">Administrative Team</a>
            <a href="#">Committee</a>
            <a href="{{ url('../board-of-governors') }}">BOG: Board of Governance</a>
            <a href="#">IQAC</a>
            <a href="#">Vision & Mission</a>
            <a href="#">Affiliation Letter</a>
            <a href="#">College Video</a>
            <a href="#">Gallery</a>
            <a href="#">Mandatory Disclosure</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-building me-2" style="color:#ef4444;"></i>
                Department</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Dept. of Computer Application</a>
            <a href="#">BBA</a>
            <a href="#">MBA</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-briefcase me-2" style="color:#ef4444;"></i>
                Placement</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="{{ url('../placement-cell') }}">Placement Cell</a>
            <a href="#">Top Placement</a>
            <a href="#">Proud Alumni</a>
            <a href="#">Placement Drive</a>
            <a href="#">MOU's</a>
            <a href="#">Our Recruiters</a>
        </div>

        <a class="mob-link" href="#"><span><i class="bi bi-trophy me-2" style="color:#ef4444;"></i>
                Achievement</span></a>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-flask me-2" style="color:#ef4444;"></i>
                Research</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Professional Membership</a>
            <a href="#">College Journal</a>
            <a href="#">Institutes Innovation Cell (IIC)</a>
            <a href="#">Research Achievements</a>
            <a href="#">Grants</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-calendar-event me-2" style="color:#ef4444;"></i>
                Activities</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Buddha Sharad Mahotsav</a>
            <a href="#">Buddha Spring Festival</a>
            <a href="#">Extracurricular</a>
            <a href="#">Sports</a>
            <a href="#">Community Development (PUNYA)</a>
            <a href="#">Women Empowerment Cells (WEC)</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-calendar-event me-2" style="color:#ef4444;"></i>
                Facilities</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Hostel</a>
            <a href="#">Mess</a>
            <a href="#">BUS</a>
            <a href="#">Buddha Bazar</a>
            <a href="#">Temple Event</a>
            <a href="#">ATM</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-laptop me-2" style="color:#ef4444;"></i> Skill
                Development</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Achievements</a>
            <a href="#">Leadcon</a>
            <a href="#">CCC Certification</a>
            <a href="#">Aptitudes & Reasoning</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-book me-2" style="color:#ef4444;"></i>
                Academics</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Academic Calendar</a>
            <a href="#">Evaluation Scheme</a>
            <a href="#" target="_blank">Syllabus</a>
            <a href="#">Issue of Certificate for Passout Students</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-award me-2" style="color:#ef4444;"></i> Student
                Awards</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Academic Award</a>
            <a href="#">Star Award</a>
            <a href="#">Change of Guard Ceremony</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-person-check me-2" style="color:#ef4444;"></i>
                Personality Dev.</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Communication Skill Enhancement Program</a>
            <a href="#">English Speaking</a>
        </div>

        <a class="mob-drop-trigger" href="#"><span><i class="bi bi-building me-2" style="color:#ef4444;"></i>
                Infrastructure</span><i class="bi bi-chevron-right mob-chevron"></i></a>
        <div class="mob-submenu">
            <a href="#">Computer Labs</a>
            <a href="#">Smart Class Rooms</a>
            <a href="#">Seminar Hall</a>
        </div>

        <a class="mob-link" href="#"
            style="color:#ef4444; font-weight:700; border-top: 1px solid rgba(239,68,68,0.2); margin-top: 8px;">
            <span><i class="bi bi-telephone-fill me-2"></i> Contact Us</span>
        </a>
    </div>
</div>