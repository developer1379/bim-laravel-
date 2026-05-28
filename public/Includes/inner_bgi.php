
<?php
// Check if the connection is not secure
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    // Construct the HTTPS URL
    $redirect_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    // Send 301 Moved Permanently header for SEO
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect_url);
    
    // Stop further script execution
    exit();
}
?>


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
        padding: 15px 10px;
        font-size: 14px;
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }

    .navbar a:hover,
    .navbar .active {
        background: #cc1616;
        color: #fff;
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
                        <a href="/bim/Contact_Us.php"><i class="bx bxs-phone-call fs-3" style="margin-left:4px;"></i> </a>
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
                    <a href="/bim/../bgi.php">
                        <img src="/bim/../images/bgi_logo.png" class="img-fluid w-logo" style="max-width:100% !important;" />
                    </a>
                </center>
            </div>
            <div class="col-md-10 text-center w-head fw-bolder">
                <h2 class="w-tsh text-danger fw-bold">

                  BUDDHA GROUP OF INSTITUTIONS

                </h2>

                 <h5 class="w-tsh text-danger fw-bold">

                      

                </h5>
                <!--<h2 class="w-tsh text-danger fw-bold">
                    बुद्धा इंस्टिट्यूट ऑफ़ मैनेजमेंट, गीडा, गोरखपुर
                </h2>-->
                <h6 class="text-dark">
                    CL-1, SECTOR-7, GIDA, GORAKHPUR 
                    <br><br>  <!--<span class="bg-warning px-2 text-dark">College Code - 1212
                    </span>-->
                </h6>
            </div>
            <div class="col-md-1 px-1">
                <center>
                    <a href="/bim/../bgi.php" target="_blank">
                        <img src="/bim/../images/bgi_logo.png" class="img-fluid w-logo" />
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
                        src="/bim/../images/bgi_logo.png"
                        class="img-fluid w-logo"
                        style="max-width: 50px" />
                </a>

                
            </div>
            <div class="col-8 text-start">
                <h6 class="text-danger fw-bold m-0 text-center">BUDDHA GROUP OF INSTITUTIONS</h6>
               <!-- <h6 class="text-warning fw-bold m-0 text-center">
                  
                     CL-1, SECTOR-7, GIDA, GORAKHPUR 
                    
                </h6>-->

                    <h6 class="text-dark">
                    CL-1, SECTOR-7, GIDA, GORAKHPUR 
                    <br><br>  <!--<span class="bg-warning px-2 text-dark">College Code - 1212
                    </span>-->
                </h6>
                <!--<h6 class="text-dark fw-bold m-0 text-center">
                   Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul
                    Kalam Technical University, Lucknow, Uttar Pradesh
                    <span class="bg-warning text-dark"><br><br>Code-1212 </span>
                </h6>-->
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
                <li><a class="nav-link scrollto" href="/bim/../bgi.php"><i class="bx bxs-home fs-3"></i></a></li>

                 <li><a href="/bim/../bgi_parichay.php">Parichay </a></li>
                  <li><a href="/bim/../bgi_message.php">Management </a></li>

                   <li><a href="/bim/../bgi.php">Colleges </a></li>
                   <li><a href="https://youtu.be/JgfesOatD3o?si=5gEnlamiAwUIq2yV.php" target="_blank">Campus </a></li>
                    <li><a href="https://buddhainnovation.in/" target="_blank">Buddha Innovation Council </a></li>





                <!-- ABOUT US -->
               

           
                <!--  Achievement -->

               <!-- <li><a href="/bim/../index.php">Achievement </a></li>-->

              
  
  <!-- FDP / FAR -->
              

               <!-- FACILITIES -->

               
               
                <!-- R&D -->
                


   
                

              
               

               
                <!-- ACADEMICS -->
               


                <!-- EXAMINATION -->
              
              
              


       <!-- Personality Development -->
            


               
               
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
        <div class="md-4 col-lg-4 col-sm-4 navbar">
    <!--<ul style="padding: 5px 5px;  margin: 2px 20px;">
   
   <li class="dropdown"><img id="Repeater_scroll_Image1_2" src="/bim/../Images/new.gif" style="height:7px;width:22px;" />

        &nbsp;
         <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank" style="display: inline !important;">
            <span>Admission in 2026-2027 </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li> <a href="#" target="_blank">Courses Offered </a> </li>
                <li><a href="#" target="_blank">Brochure</a></li>
                <li><a href="#" target="_blank"> Admission Process</a> </li>
                <li><a href="#" target="_blank">Admission Form</a></li>
                <li><a href="#" target="_blank">Contact Us</a></li>
                <li><a href="#" target="_blank"> College Video </a></li>

            </ul>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Upcomming Event</a>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Awards</a>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Student Activities</a> 

 <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Achievement</a>

        </li>
    
    </ul>-->
</div>
<div class="md-4 col-lg-4 col-sm-4"></div>
</div>
    <!--marquee id="m5" behavior="ALTERNATE" scrollamount="3" scrolldelay="0" scrollspeed="300" onmouseout="this.start();" onmouseover="this.stop();" style="border-width: 0px; border-style: solid; width: 100%;" class="p-0 m-0">
   
    <img id="Repeater_scroll_Image1_2" src="/bim/../Images/new.gif" style="height:7px;width:22px;" />

        &nbsp;
         <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Admission in 2026-2027</a>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Upcomming Event</a>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Awards</a>

<a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Student Activities</a> 

 <a id="Repeater_scroll_HyperLink1_0" class="w-txt-14 text-white me-5 text-decoration-none" href="#" target="_blank">
            Achievement</a>
        
    
    </marquee>-->

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