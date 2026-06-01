@extends('layouts.site', [
    'headPartial' => 'partials.site.head',
    'headerPartial' => 'partials.site.header',
    'footerPartial' => 'partials.site.footer',
    'scriptsPartial' => 'partials.site.scripts',
])

@section('content')
<!DOCTYPE html>

    <header class="head">
        <!-- Start of news -->
        <div class="news">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="menu-area">
                        <nav class=" navbar-expand-lg" style='background-color:#892e22; color:#dfdfdf;'>
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse menu navbar-collapse" id="navbarSupportedContent">

                                    <ul class="navbar-nav ">

                                        <li class="nav-item ">
                                            <a class="nav-link " href="{{ url('bgi') }}">
                                                Startup & Entrepreneur
                                            </a>

                                        </li>


                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Skill Development
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Gyandeep</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Techwizard</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Professional
                                                        Membership</a></li>

                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Registration
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Induction Program
                                                    </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Parent Orientation
                                                        Program</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Convocation</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Document Release
                                                        Form</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Achievements

                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">College Achievements
                                                    </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Faculty Achievements
                                                    </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Student
                                                        Achievements</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Alumni
                                                        Achievements</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Infrastructure

                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Academic Block
                                                    </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Seminar Hall </a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Computer Lab</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Board Room</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Examination

                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">DigiLocker NAD
                                                    </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Degree | Migration
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Placement
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Cell</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Our Recruiters</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Records
                                                    </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Highlights
                                                    </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement
                                                        Brochure</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Booklet
                                                        2022-23</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item inde"><a class="nav-link"
                                                href="https://www.bimgkp.ac.in/events/index.php">Buddha Events</a></li>


                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
        <!-- End of News  -->
        <!-- Middle Section -->
        <div class="middle-head">
            <div class="container" style="max-width: 99%;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12 p-0">
                        <div class="col-logo">
                            <a href="{{ url('index') }}">
                                <img class="logo" src="{{ asset('images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12 text-center ">
                        <div class="col-name">
                            <div class="eng">
                                <h2>
                                    Buddha Institute of Management, Gida, Gorakhpur
                                </h2>
                                <!-- <h5>
                                    बुद्धा इंस्टिट्यूट ऑफ़ टेक्नोलॉजी, गीडा, गोरखपुर
                                </h5> -->
                                <p>
                                    Approved by AICTE New Delhi and affiliated to Dr. A.P.J. Abdul Kalam Technical
                                    University Lucknow
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 p-0" style="text-align:right;">
                        <div class="aktu-logo">
                            <a href="{{ url('index') }}">
                                <img class="logo aktu_logo" src="{{ asset('images/aktu.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Middle Section -->
        <!-- Start Navbar -->
        <div class="mid_navbar">
            <div class="menu-area">
                <nav class=" navbar-expand-lg navbar-light sticky-top">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse menu navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        About Us
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('affiliation') }}">Affiliation</a></li>
                                        <li><a class="dropdown-item" href="{{ url('vision-mission') }}">Mission & Vision</a></li>
                                        <li><a class="dropdown-item" href="{{ url('message') }}">Message</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">MOU's</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">PEO's</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Grants</a></li>
                                        <li><a class="dropdown-item" href="{{ url('gallery') }}">Gallery</a></li>
                                        <li><a class="dropdown-item" target="_blank" href="{{ asset('images/logo.png') }}">BIM Logo</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Videos</a></li>
                                        <li><a class="dropdown-item" target="_blank" href="{{ asset('PDF/Mandatory Disclosures.pdf') }}">Mandatory disclosure</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">Admission</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('courses') }}">Courses</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Scholarships </a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Fees structure </a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Admission form</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Documents needed</a></li>
                                        <li><a class="dropdown-item" href="{{ url('contact') }}">Contact Us</a></li>
                                    </ul>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        HR
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Organization Structure
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ url('director') }}">Director </a></li>

                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">BIP Administration</a></li>


                                        <li><a class="dropdown-item" href="{{ url('board-of-governors') }}">Board of
                                                Governors</a></li>

                                        <li><a class="dropdown-item" href="{{ url('college-committee') }}">College Committee</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">IQAC Meeting</a></li>

                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Recruitment Notice
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Staff Grievance Cell
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Academics
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" target="_blank"
                                                href="{{ asset('PDF/University Academic Calander 2024-25.pdf') }}">University
                                                Calendar</a></li>
                                        <li><a class="dropdown-item" target="_blank"
                                                href="{{ asset('PDF/College Academic calander 14-10-24.pdf') }}">College Calendar</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Toppers Award</a></li>

                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Honors Award</a></li>

                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Attendance  Award</a></li>



                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Departments
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('bba/header') }}">BBA</a></li>
                                        <li><a class="dropdown-item" href="{{ url('mba/header') }}">MBA</a></li>
                                        <li><a class="dropdown-item" href="{{ url('bca/header') }}">BCA</a></li>
                                        <li><a class="dropdown-item" href="{{ url('mca/header') }}">MCA</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{ url('bgi') }}">
                                        Startup & Entrepreneur
                                    </a>

                                </li>




                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Placement
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('placement-cell') }}">Placement Cell</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Our Recruiters</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Records
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Highlights
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Brochure</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Placement Booklet
                                                2022-23</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Skill Development
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Gyandeep</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Techwizard</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Professional Membership</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Research
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Research Cell</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Techyuva</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">Buddha Journal of
                                                Pharmacy</a></li>
                                        <li><a class="dropdown-item" href="{{ url('coming_soon') }}">National Conference</a></li>
                                    </ul>
                                </li>







                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </header>
@endsection
