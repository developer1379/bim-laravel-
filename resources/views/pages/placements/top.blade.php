<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buddha Institute of Technology</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://www.>.com/w3css/4/w3.css">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('images/logo.png') }}' />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/amazingslider-1.css') }}">

</head>
<body onload="document.getElementById('defaultOpen').click();">
    <header class="head">
        <!-- Start of news -->
        <div class="news">
            <div class="container" style="max-width: 99%;">
                <div class="row">
                    <div class="col-md-12" style="height: 25px;">
                        <marquee id="m5" behavior="ALTERNATE" scrollamount="3" scrolldelay="0" scrollspeed="300" onmouseout="this.start();" onmouseover="this.stop();" style="border-width: 0px; border-style: none; width: 100%;">

                            <a target="_blank" style="color:Red;font-size:15px;font-weight:bold;">Admission Open For Session -2022-2023</a>

                            &nbsp;|&nbsp;

                            <a style="color:Red;font-size:15px;font-weight:bold;">M.Tech | B.Tech | B.Pharma | D.Pharma | Diploma | BBA | BCA | B.COM | B.Sc | Paramedical | ITI</a>

                            &nbsp;|&nbsp;

                            <a style="color:Red;font-size:15px;font-weight:bold;">Call For Admission Enquiry - 9554559900 | 9839621881 | 9554322226</a>




                        </marquee>
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
                                    Buddha Institute of Technology, Gida, Gorakhpur
                                </h2>
                                <h5>
                                    बुद्धा इंस्टिट्यूट ऑफ़ टेक्नोलॉजी, गीडा, गोरखपुर
                                </h5>
                                <p>
                                    Approved by AICTE New Delhi and affiliated to Dr. A.P.J. Abdul Kalam Technical University Lucknow
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 p-0" style="text-align:right;">
                        <div class="aktu-logo">
                            <a href="{{ url('index') }}">
                                <img class="logo aktu_logo" src="{{ asset('images/aktu_logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Middle Section -->
        <!-- Start Navbar -->
        <div class="mid_navbar">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="menu-area">
                        <nav class=" navbar-expand-lg navbar-light ">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse menu navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item hom marg">
                                            <a href="{{ url('index') }}"> <i class="fa fa-home fnt-sz" aria-hidden="true"></i>
                                            </a>
                                        </li>


                                        <li class="nav-item marg">
                                            <a class="nav-link active" aria-current="page" href="{{ url('index') }}">Home</a>
                                        </li>

                                        <li class="nav-item dropdown marg">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                About BIT
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ url('mission') }}">Vision & Mission</a></li>

                                                <li><a class="dropdown-item" href="{{ url('chairman') }}">Message from Chairman</a></li>
                                             
                                                <li><a class="dropdown-item" href="{{ url('secretary') }}">Message from Secretary</a></li>
   <li><a class="dropdown-item" href="{{ url('advisor') }}">Message from Advisor</a></li>
                                                <li><a class="dropdown-item" href="{{ url('director') }}">Message from Director</a></li>

                                                <li><a class="dropdown-item" href="{{ url('gallery') }}">Gallery</a></li>
                                                <li><a class="dropdown-item" href="{{ asset('events&news/academic.pdf') }}" target="_blank">Academic Calender</a></li>

                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown marg">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Admission
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{ url('admissionform') }}">Admission Form</a></li>
                                                <li><a class="dropdown-item" href="{{ url('btech') }}">Admission In B.Tech</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming') }}">Admission In M.Tech</a></li>
                                                <li><a class="dropdown-item" href="http://www.bpc.ac.in/admissions/admission-in-diploma.aspx" target="_blank">Admission In Diploma</a></li>
                                                <li><a class="dropdown-item" href="http://www.bip.ac.in/admissions/admission-in-d.pharm.aspx">Admission In D.Pharma</a></li>
                                                <li><a class="dropdown-item" href="http://www.bip.ac.in/admissions/admissions-in-b-pharm.aspx" target="_blank">Admission In B.Pharma</a></li>

                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown marg">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Courses
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{ url('btech_course') }}">B.Tech </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming') }}">M.Tech </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming') }}">BCA </a></li>

                                                <li><a class="dropdown-item" href="http://www.bpc.ac.in/" target="_blank">Diploma</a></li>
                                                <li><a class="dropdown-item" href="http://www.bpc.ac.in/" target="_blank">ITI</a></li>

                                                <li><a class="dropdown-item" href="http://www.bip.ac.in/" target="_blank">D.Pharma</a></li>
                                                <li><a class="dropdown-item" href="http://www.bip.ac.in/" target="_blank">B.Pharma</a></li>

                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown marg">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Research
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{ url('research') }}">Research Cell</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming') }}">Incubation Cell</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming') }}">Patent</a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming') }}">Paper Presentation</a></li>

                                                <li><a class="dropdown-item" href="{{ url('coming') }}">Paper Publication</a></li>

                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown marg">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Departments
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{ url('cse') }}">Computer Science & Engineering</a></li>

                                                <li><a class="dropdown-item" href="{{ url('civil') }}">Civil Engineering </a></li>
                                                <li><a class="dropdown-item" href="{{ url('ec') }}">Electronics & Communication Engineering </a></li>

                                                <li><a class="dropdown-item" href="{{ url('me') }}">Mechanical Engineering </a></li>
                                                <li><a class="dropdown-item" href="{{ url('coming') }}">Applied Sciences & Humanities</a></li>
                                            </ul>
                                        </li>


                                        <li class="nav-item marg"><a class="nav-link" href="{{ url('coming') }}">Societies & Clubs</a></li>
                                        </li>


                                        </li>
                                        <li class="nav-item dropdown marg">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Facilities
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{ url('hostl') }}">Hostel</a></li>
                                                <li><a class="dropdown-item" href="{{ url('canteen') }}">Cafeteria</a></li>
                                                <li><a class="dropdown-item" href="{{ url('trans') }}">Transport</a></li>

                                            </ul>
                                        </li>

                                        <li class="nav-item  marg"><a class="nav-link" href="{{ url('tpc') }}">Traning & Placement</a></li>

                                        <li class="nav-item  marg">
                                            <a class="nav-link" href="http://moodle-server/"><img style="height:30px" src="{{ asset('images/moodle.png') }}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
