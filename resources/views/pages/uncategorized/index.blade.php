<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @include('includes.head_links1')
    <style>
        /* Popup Start */
        #popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            display: none;
            /* Hidden by default */
        }

        /* Popup image */
        #popup img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            box-shadow: 0 0 15px #fff
        }

        /* Close button */
        #popupClose {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Popup Ends */
        .news-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .news-list li {
            padding: 5px 10px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        .news-list li a {
            text-decoration: none;
            color: #cc1616;
        }

        @media (max-width: 768px) {
            .news-section {
                height: auto !important;
            }

            .news-list {
                font-size: 12px;
            }
        }
    </style>

    <style>
        /* Modern Cards Styles */
        .modern-event-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            background: #fff;
            height: 340px;
            display: flex;
            flex-direction: column;
        }

        .modern-event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .card-header-gradient-1 {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        }

        .card-header-gradient-2 {
            background: linear-gradient(135deg, #cc1616, #8b0000);
        }

        .card-header-gradient-3 {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }

        .modern-event-header {
            padding: 15px 20px;
            color: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
        }

        .modern-event-header i {
            font-size: 1.3rem;
            margin-right: 10px;
        }

        .modern-event-body {
            padding: 0;
            overflow-y: auto;
            flex-grow: 1;
            /* Hide scrollbar for IE, Edge and Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .modern-event-body::-webkit-scrollbar {
            display: none;
        }

        .modern-news-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .modern-news-list li {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }

        .modern-news-list li:last-child {
            border-bottom: none;
        }

        .modern-news-list li:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
        }

        .modern-news-list li a {
            display: flex;
            padding: 15px 20px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            align-items: center;
            line-height: 1.4;
            font-weight: 500;
        }

        .modern-news-list li a i {
            color: #cc1616;
            margin-right: 12px;
            font-size: 12px;
            transition: 0.2s ease;
        }

        .modern-news-list li:hover a i {
            transform: translateX(3px);
        }
    </style>

    <style>
        /* Image Cards Styles */
        .image-card-modern {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .image-card-modern:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .image-card-img-wrapper {
            width: 100%;
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .image-card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .image-card-modern:hover .image-card-img-wrapper img {
            transform: scale(1.1);
        }

        .image-card-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 12px;
            border-radius: 20px;
            color: #fff;
            font-size: 0.8rem;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        .badge-upcoming {
            background: linear-gradient(135deg, #0f2027, #203a43);
        }

        .badge-latest {
            background: linear-gradient(135deg, #cc1616, #8b0000);
        }

        .badge-notice {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }

        .image-card-body {
            padding: 25px 20px;
            text-align: left;
        }

        .image-card-date {
            color: #cc1616;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .image-card-date i {
            margin-right: 6px;
        }

        .image-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 15px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .image-card-link {
            display: inline-flex;
            align-items: center;
            font-size: 0.95rem;
            font-weight: 600;
            color: #444;
            text-decoration: none;
            transition: color 0.3s;
        }

        .image-card-link i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .image-card-link:hover {
            color: #cc1616;
        }

        .image-card-link:hover i {
            transform: translateX(5px);
        }
    </style>

    <style>
        /* Placement Card Styles (Compact) */
        .swiper-slide {
            height: auto;
            /* Force Swiper slides to equal height */
        }

        .placement-card {
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            overflow: hidden;
            width: 250px;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .placement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .placement-img-wrapper {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .placement-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            /* Important so heads don't get cut off */
            transition: transform 0.4s ease;
        }

        .placement-card:hover .placement-img-wrapper img {
            transform: scale(1.05);
        }

        .placement-name {
            font-size: 1.05rem;
            font-weight: 700;
            color: #cc1616;
            margin-bottom: 2px;
        }

        .placement-course {
            font-size: 0.75rem;
            color: #777;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .placement-company {
            font-size: 0.85rem;
            font-weight: 600;
            color: #333;
        }

        .placement-package {
            background: #e8f5e9;
            color: #2e7d32;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.8rem;
        }

        /* Achievement Cards */
        .achievement-card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            transition: all 0.4s ease;
            position: relative;
        }

        .achievement-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .achievement-card img {
            transition: transform 0.6s ease;
        }

        .achievement-card:hover img {
            transform: scale(1.08);
        }

        .achievement-btn {
            background: transparent;
            color: #cc1616;
            border: 2px solid #cc1616;
            border-radius: 30px;
            padding: 8px 25px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .achievement-btn i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .achievement-btn:hover {
            background: #cc1616;
            color: #fff;
        }

        .achievement-btn:hover i {
            transform: translateX(4px);
        }
    </style>
</head>

<body>

    @include('includes.navbar1')
    <!-- Portal Style Hero Section Start -->
    <style>
        .portal-hero-section {
            background-color: #f8f9fa;
            padding: 2rem 0;
            font-family: 'Inter', 'Segoe UI', sans-serif;
        }

        /* Carousel / Left Side Styling */
        .portal-carousel-wrapper {
            position: relative;
            width: 100%;
            height: 550px;
            /* Fixed height to match notice board */
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .portal-carousel-wrapper .carousel-item img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }

        /* Custom Slide Buttons */
        .custom-slide-btn {
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.4);
            /* Semi-transparent dark background */
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            border: 2px solid rgba(255, 255, 255, 0.6);
            opacity: 0.8;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .custom-slide-btn:hover {
            background-color: #cc1616;
            /* Brand red on hover */
            border-color: #cc1616;
            opacity: 1;
            transform: translateY(-50%) scale(1.05);
            /* Slight pop effect */
        }

        .carousel-control-prev.custom-slide-btn {
            left: 20px;
        }

        .carousel-control-next.custom-slide-btn {
            right: 20px;
        }

        /* Notice Board / Right Side Styling */
        .notice-board-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 550px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .notice-header {
            background: linear-gradient(135deg, #cc1616, #8b0000);
            color: #fff;
            padding: 1rem 1.5rem;
            font-weight: 700;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            letter-spacing: 0.5px;
        }

        .notice-header i {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .notice-body {
            flex-grow: 1;
            padding: 0;
            overflow: hidden;
            background-color: #fafafa;
        }

        .notice-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .notice-list li {
            border-bottom: 1px dashed #e0e0e0;
            padding: 15px 20px;
            transition: background-color 0.2s;
        }

        .notice-list li:hover {
            background-color: #fff;
        }

        .notice-list a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            font-size: 0.9rem;
            display: block;
            line-height: 1.4;
        }

        .notice-list a:hover {
            color: #cc1616;
        }

        .notice-date {
            font-size: 0.75rem;
            color: #888;
            display: block;
            margin-top: 5px;
        }

        .badge-new {
            background-color: #ffc107;
            color: #000;
            font-size: 0.65rem;
            padding: 2px 6px;
            border-radius: 4px;
            margin-left: 5px;
            vertical-align: middle;
            animation: blinker 1.5s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0.5;
            }
        }

        @media (max-width: 991px) {
            .portal-carousel-wrapper {
                height: 400px;
                margin-bottom: 1rem;
            }

            .portal-carousel-wrapper .carousel-item img {
                height: 400px;
            }

            .notice-board-card {
                height: 400px;
            }

            .custom-slide-btn {
                width: 40px;
                height: 40px;
            }

            /* Smaller arrows on mobile */
        }
    </style>

    <section class="portal-hero-section">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">

                <!-- Left Side: Main Slider (70% width on desktop) -->
                <div class="col-lg-8 col-xl-9">
                    <div class="portal-carousel-wrapper">

                        <!-- Bootstrap Carousel -->
                        <div id="heroPortalCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                            data-bs-interval="4500" style="height: 100%;">
                            <div class="carousel-inner" style="height: 100%;">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/1.jpg') }}" alt="Campus 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/2.jpg') }}" alt="Campus 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/3.jpg') }}" alt="Campus 3">
                                </div>
                            </div>

                            <!-- Navigation Arrows (Slide Buttons) -->
                            <button class="carousel-control-prev custom-slide-btn position-absolute" type="button"
                                data-bs-target="#heroPortalCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"
                                    style="width: 20px; height: 20px;"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next custom-slide-btn position-absolute" type="button"
                                data-bs-target="#heroPortalCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"
                                    style="width: 20px; height: 20px;"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Right Side: Notice Board (30% width on desktop) -->
                <div class="col-lg-4 col-xl-3">
                    <div class="notice-board-card" data-aos="fade-left" data-aos-duration="1000">
                        <div class="notice-header">
                            <i class="bi bi-bell-fill"></i> Latest Updates
                        </div>

                        <div class="notice-body">
                            <!-- Upward Scrolling Marquee for Notices -->
                            <marquee behavior="scroll" direction="up" scrollamount="3"
                                style="height: 100%; width: 100%;" onmouseover="this.stop();"
                                onmouseout="this.start();">
                                <ul class="notice-list">
                                    <li>
                                        <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank">
                                            Academic Calendar Even Sem 2024-25 <span class="badge-new">NEW</span>
                                        </a>
                                        <span class="notice-date"><i class="bi bi-calendar-event"></i> Updated
                                            recently</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Admission Open for Session 2024-25. Apply Now! <span
                                                class="badge-new">HOT</span>
                                        </a>
                                        <span class="notice-date"><i class="bi bi-calendar-event"></i> Important
                                            Notice</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Schedule for Upcoming Placement Drive (Capgemini & Deloitte)
                                        </a>
                                        <span class="notice-date"><i class="bi bi-calendar-event"></i> Placement
                                            Cell</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Guidelines for Even Semester Examinations.
                                        </a>
                                        <span class="notice-date"><i class="bi bi-calendar-event"></i> Controller of
                                            Exams</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Annual Sports Meet Registration Details.
                                        </a>
                                        <span class="notice-date"><i class="bi bi-calendar-event"></i> Sports
                                            Committee</span>
                                    </li>
                                </ul>
                            </marquee>
                        </div>

                        <div class="bg-light p-2 text-center border-top">
                            <a href="#" class="text-danger fw-bold text-decoration-none"
                                style="font-size: 0.85rem;">View All Notices <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Portal Style Hero Section Ends -->

    <div class="container-fluid px-3">
        <!-- Block section -->

        <div class="container"> <br /></div>
<!-- Announcements Section Start -->
<style>
    .announcements-section {
        background-color: #fcfcfc;
        padding: 3rem 0;
        font-family: 'Inter', 'Segoe UI', sans-serif;
    }

    /* Modern App-Like Card Styling */
    .info-widget-card {
        background: #ffffff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
        overflow: hidden;
        height: 320px;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-widget-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    }

    /* Flush Gradient Headers */
    .widget-header {
        padding: 1rem 1.25rem;
        color: #ffffff;
        font-weight: 700;
        font-size: 1.05rem;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .header-upcoming { background: linear-gradient(135deg, #1e293b, #334155); } /* Slate */
    .header-latest { background: linear-gradient(135deg, #cc1616, #991b1b); } /* Crimson */
    .header-notices { background: linear-gradient(135deg, #059669, #047857); } /* Emerald */

    /* Seamless Scrolling Area */
    .widget-body {
        flex-grow: 1;
        background-color: #ffffff;
        position: relative;
        overflow: hidden; /* Hides content outside the box */
        padding: 0;
    }

    /* CSS Animation for smooth scrolling */
    .scrolling-wrapper {
        position: absolute;
        width: 100%;
        margin: 0;
        padding: 0;
        list-style: none;
        animation: scrollVertical 15s linear infinite;
    }

    .widget-body:hover .scrolling-wrapper {
        animation-play-state: paused; /* Pauses on hover for reading */
    }

    @keyframes scrollVertical {
        0% { transform: translateY(100%); }
        100% { transform: translateY(-100%); }
    }

    /* List Item Styling */
    .scrolling-wrapper li {
        padding: 12px 20px;
        border-bottom: 1px dashed #f0f0f0;
        transition: background-color 0.2s;
    }

    .scrolling-wrapper li:hover {
        background-color: #f8f9fa;
    }

    .scrolling-wrapper a {
        text-decoration: none;
        color: #334155;
        font-size: 0.9rem;
        font-weight: 500;
        line-height: 1.5;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .scrolling-wrapper a:hover {
        color: #cc1616;
    }

    .scrolling-wrapper a i {
        color: #cc1616;
        font-size: 1.1rem;
        margin-top: 2px;
    }
</style>

<section class="announcements-section">
    <div class="container">
        <div class="row g-4">

            <!-- Upcoming Events Widget -->
            <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="100">
                <div class="info-widget-card">
                    <div class="widget-header header-upcoming">
                        <i class="bi bi-calendar-check"></i> Upcoming Events
                    </div>
                    <div class="widget-body">
                        <ul class="scrolling-wrapper">
                            <li>
                                <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    Academic Calendar Even Sem 2024-25
                                </a>
                            </li>
                            <!-- Add more list items here -->
                            <li>
                                <a href="#">
                                    <i class="bi bi-calendar-event"></i>
                                    Annual Tech Symposium Registration
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Latest Events Widget -->
            <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="200">
                <div class="info-widget-card">
                    <div class="widget-header header-latest">
                        <i class="bi bi-lightning-charge"></i> Latest Events
                    </div>
                    <div class="widget-body">
                        <ul class="scrolling-wrapper" style="animation-duration: 18s;"> <!-- Slightly different speed for visual variety -->
                            <li>
                                <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    Academic Calendar Even Sem 2024-25
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-camera-video"></i>
                                    Watch: 1st Convocation Ceremony Highlights
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Notices Widget -->
            <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="info-widget-card">
                    <div class="widget-header header-notices">
                        <i class="bi bi-megaphone"></i> Notices
                    </div>
                    <div class="widget-body">
                        <ul class="scrolling-wrapper" style="animation-duration: 20s;">
                            <li>
                                <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    Academic Calendar Even Sem 2024-25
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-info-circle"></i>
                                    Important Guidelines for Even Semester Exams
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Announcements Section End -->
        <!-- End Block section -->

        <!-- // Admission 2026-2027 -->

        <div class="container pt-3">
            <!--  <h1 class="text-center mt-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Admission 2026 - 2027</h1>-->
            <div class="row pt-3">



                <style>
                    body {
                        background-color: #ffffff;
                    }

                    .gallery-container {
                        max-width: 1100px;
                        margin: 50px auto;
                        text-align: center;
                    }

                    .gallery-title {
                        font-weight: bold;
                        text-transform: uppercase;
                        margin-bottom: 20px;
                    }

                    .gallery img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        border-radius: 10px;
                    }

                    .gallery {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        grid-template-rows: auto;
                        gap: 10px;
                    }

                    .gallery .img-large {
                        grid-column: span 2;
                        grid-row: span 2;
                    }

                    .show-more-btn {
                        background-color: #d21404;
                        color: white;
                        border: none;
                        padding: 10px 20px;
                        font-size: 16px;
                        font-weight: bold;
                        border-radius: 20px;
                        margin-top: 20px;
                    }

                    .show-more-btn:hover {
                        background-color: darkred;
                    }
                </style>



                <!-- top placement Start -->
                <section>
                    <div class="container my-5" data-aos="fade-up" data-aos-delay="300">
                        <h1 class="text-center py-4 fw-bold" style="text-transform: uppercase; color: #222;"
                            data-aos="fade-up" data-aos-delay="300">Top <span
                                style="color:#cc1616;">Placements</span></h1>

                        <div class="swiper mySwiper pb-5">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide px-2 py-2">
                                    <div class="placement-card text-start">
                                        <div class="placement-img-wrapper">
                                            <img src="{{ asset('images/top_placement_bIM/1.jpeg') }}"
                                                alt="Harshita Srivastava">
                                        </div>
                                        <div class="p-3 d-flex flex-column" style="flex-grow: 1;">
                                            <h4 class="placement-name">Harshita Srivastava</h4>
                                            <p class="placement-course">MBA (2024-26)</p>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <span class="placement-company"><i class="bi bi-building"></i>
                                                    Deloitte</span>
                                                <span class="placement-package">18 LPA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="swiper-slide px-2 py-2">
                                    <div class="placement-card text-start">
                                        <div class="placement-img-wrapper">
                                            <img src="{{ asset('images/top_placement_bIM/2.jpeg') }}"
                                                alt="Aditya Kumar Singh">
                                        </div>
                                        <div class="p-3 d-flex flex-column" style="flex-grow: 1;">
                                            <h4 class="placement-name">Aditya Kumar Singh</h4>
                                            <p class="placement-course">MBA (Batch 2025)</p>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <span class="placement-company"><i class="bi bi-building"></i> India
                                                    Compressor</span>
                                                <span class="placement-package">8 LPA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide px-2 py-2">
                                    <div class="placement-card text-start">
                                        <div class="placement-img-wrapper">
                                            <img src="{{ asset('images/top_placement_bIM/3.jpeg') }}"
                                                alt="Sneha Pandey">
                                        </div>
                                        <div class="p-3 d-flex flex-column" style="flex-grow: 1;">
                                            <h4 class="placement-name">Sneha Pandey</h4>
                                            <p class="placement-course">MBA (Batch 2025)</p>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <span class="placement-company"><i class="bi bi-building"></i> Welspun
                                                    gcc</span>
                                                <span class="placement-package">6 LPA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 4 -->
                                <div class="swiper-slide px-2 py-2">
                                    <div class="placement-card text-start">
                                        <div class="placement-img-wrapper">
                                            <img src="{{ asset('images/top_placement_bIM/4.jpeg') }}"
                                                alt="Priya Bhatt">
                                        </div>
                                        <div class="p-3 d-flex flex-column" style="flex-grow: 1;">
                                            <h4 class="placement-name">Priya Bhatt</h4>
                                            <p class="placement-course">MBA (Batch 2026)</p>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <span class="placement-company"><i class="bi bi-building"></i>
                                                    Capgemini</span>
                                                <span class="placement-package">5.5 LPA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 5 -->
                                <div class="swiper-slide px-2 py-2">
                                    <div class="placement-card text-start">
                                        <div class="placement-img-wrapper">
                                            <img src="{{ asset('images/top_placement_bIM/5.jpg') }}"
                                                alt="Amit Kumar Dubey">
                                        </div>
                                        <div class="p-3 d-flex flex-column" style="flex-grow: 1;">
                                            <h4 class="placement-name">Amit Kumar Dubey</h4>
                                            <p class="placement-course">MBA (Batch 2026)</p>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <span class="placement-company"><i class="bi bi-building"></i> Nikham
                                                    Innov.</span>
                                                <span class="placement-package">5.5 LPA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide 6 -->
                                <div class="swiper-slide px-2 py-2">
                                    <div class="placement-card text-start">
                                        <div class="placement-img-wrapper">
                                            <img src="{{ asset('images/top_placement_bIM/6.jpeg') }}"
                                                alt="Atrish Shukla">
                                        </div>
                                        <div class="p-3 d-flex flex-column" style="flex-grow: 1;">
                                            <h4 class="placement-name">Atrish Shukla</h4>
                                            <p class="placement-course">MBA (Batch 2026)</p>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <span class="placement-company"><i class="bi bi-building"></i> Seeds
                                                    Fincap</span>
                                                <span class="placement-package">4.49 LPA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ url('top-placement') }}" target="_blank"
                                class="btn btn-danger btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm"
                                style="transition: 0.3s;"><i class="bi bi-award"></i> View All Placements</a>
                        </div>
                    </div>
                </section>
                <!-- top placement Ends -->
<style>
    .achievements-section {
        background-color: #ffffff;
        padding: 5rem 0;
        font-family: 'Inter', 'Segoe UI', sans-serif;
    }

    .section-header-title {
        font-size: 2.2rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #222;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
    }

    .achievement-card {
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .achievement-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        border-color: rgba(204, 22, 22, 0.15);
    }

    .achievement-img-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 16px 16px 0 0;
        height: 220px;
    }

    .achievement-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .achievement-card:hover .achievement-img-wrapper img {
        transform: scale(1.08);
    }

    /* Subtle gradient overlay to make images look richer */
    .achievement-img-wrapper::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30%;
        background: linear-gradient(to top, rgba(0,0,0,0.4), transparent);
        opacity: 0.6;
    }

    .achievement-content {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        text-align: center;
    }

    .achievement-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.75rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .achievement-btn {
        background: transparent;
        color: #cc1616;
        border: 2px solid #cc1616;
        border-radius: 30px;
        padding: 8px 24px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-top: auto; /* Pushes button to bottom if titles vary in length */
    }

    .achievement-btn i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .achievement-btn:hover {
        background: #cc1616;
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(204, 22, 22, 0.2);
    }

    .achievement-btn:hover i {
        transform: translateX(5px);
    }
</style>

<section class="achievements-section">
    <div class="container">

        <div class="text-center mb-5 pb-2">
            <h2 class="section-header-title" data-aos="fade-up" data-aos-delay="100">
                Our <span style="color:#cc1616;">Achievements</span>
            </h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="200" style="font-size: 1.05rem;">
                Celebrating milestones, awards, and the continuous pursuit of excellence.
            </p>
        </div>

        <div class="row g-4 align-items-stretch">

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="achievement-img-wrapper">
                        <img src="{{ asset('images/bim_achi/1.jpeg') }}" alt="Achievement Milestone 1" loading="lazy" />
                    </div>
                    <div class="achievement-content">
                        <h3 class="achievement-title">Recognized for Excellence in Education 2023</h3>
                        <a href="{{ url('bim_achi') }}" target="_blank" class="achievement-btn">
                            Read Story <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="achievement-img-wrapper">
                        <img src="{{ asset('images/bim_achi/2.jpeg') }}" alt="Achievement Milestone 2" loading="lazy" />
                    </div>
                    <div class="achievement-content">
                        <h3 class="achievement-title">Best Emerging Management Institute Award</h3>
                        <a href="{{ url('bim_achi') }}" target="_blank" class="achievement-btn">
                            Read Story <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="achievement-img-wrapper">
                        <img src="{{ asset('images/bim_achi/1.jpeg') }}" alt="Achievement Milestone 3" loading="lazy" />
                    </div>
                    <div class="achievement-content">
                        <h3 class="achievement-title">Top Placement Record in the Region</h3>
                        <a href="{{ url('bim_achi') }}" target="_blank" class="achievement-btn">
                            Read Story <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="achievement-img-wrapper">
                        <img src="{{ asset('images/bim_achi/2.jpeg') }}" alt="Achievement Milestone 4" loading="lazy" />
                    </div>
                    <div class="achievement-content">
                        <h3 class="achievement-title">National Level Sports Championship Winners</h3>
                        <a href="{{ url('bim_achi') }}" target="_blank" class="achievement-btn">
                            Read Story <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


                <!-- total count-->

            </div>
        </div>
    </div>
<style>
    .stats-institutional-section {
        background-color: #f8f9fa; /* Matches the Top Placements background */
        padding: 5rem 0;
        font-family: 'Inter', 'Segoe UI', sans-serif;
    }

    /* Section Header Matching the Theme */
    .stats-header-title {
        font-size: 2.2rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #222;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
    }

    /* Clean White Cards */
    .stat-clean-card {
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.04);
        border-radius: 16px;
        padding: 2.5rem 1.5rem;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    /* Subtle red top border accent */
    .stat-clean-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: #cc1616;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .stat-clean-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(204, 22, 22, 0.08);
        border-color: rgba(204, 22, 22, 0.1);
    }

    .stat-clean-card:hover::before {
        transform: scaleX(1);
    }

    /* Soft Icon Wrappers */
    .stat-icon-wrap {
        width: 75px;
        height: 75px;
        background: rgba(204, 22, 22, 0.08); /* Very soft red background */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .stat-icon-wrap i {
        font-size: 2rem;
        color: #cc1616;
        transition: color 0.3s ease;
    }

    .stat-clean-card:hover .stat-icon-wrap {
        background: #cc1616;
        transform: scale(1.1);
    }

    .stat-clean-card:hover .stat-icon-wrap i {
        color: #ffffff;
    }

    /* Typography */
    .stat-number {
        font-size: 2.8rem;
        font-weight: 800;
        color: #1e293b; /* Dark slate */
        line-height: 1;
        margin-bottom: 0.5rem;
        letter-spacing: -1px;
    }

    .stat-number .stat-suffix {
        font-size: 1.8rem;
        color: #cc1616;
        font-weight: 700;
        vertical-align: top;
    }

    .stat-label {
        font-size: 0.95rem;
        color: #64748b; /* Muted slate */
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin: 0;
    }

    @media (max-width: 768px) {
        .stat-clean-card { padding: 2rem 1rem; }
        .stat-number { font-size: 2.4rem; }
        .stat-icon-wrap { width: 60px; height: 60px; margin-bottom: 1rem; }
        .stat-icon-wrap i { font-size: 1.5rem; }
    }
</style>

<section class="stats-institutional-section" data-aos="fade-up" data-aos-duration="800">
    <div class="container">

        <div class="text-center mb-5 pb-2">
            <h2 class="stats-header-title">
                Buddha Institute <span style="color: #cc1616;">At A Glance</span>
            </h2>
            <p class="text-muted" style="font-size: 1.05rem;">A legacy of excellence by the numbers</p>
        </div>

        <div class="row g-4 align-items-stretch">

            <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-clean-card">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-number">
                        <span id="students" class="auto-increment">8000</span><span class="stat-suffix">+</span>
                    </div>
                    <p class="stat-label">Students</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-clean-card">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="stat-number">
                        <span id="campus" class="auto-increment">25</span><span class="stat-suffix">+</span>
                    </div>
                    <p class="stat-label">Acre Campus</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-clean-card">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <div class="stat-number">
                        <span id="alumni" class="auto-increment">5000</span><span class="stat-suffix">+</span>
                    </div>
                    <p class="stat-label">Alumni</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-clean-card">
                    <div class="stat-icon-wrap">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <div class="stat-number">
                        <span id="recruiters" class="auto-increment">200</span><span class="stat-suffix">+</span>
                    </div>
                    <p class="stat-label">Recruiter Partners</p>
                </div>
            </div>

        </div>
    </div>
</section>

    <!--ends--

    </div>
    @include('includes.footer1')
    @include('includes.body_links1')

    <!-- Initialize Swiper -->
    <script>
        // Initialize Swiper Copy
        var swiperCopy = new Swiper(".mySwiperCopy", {
            loop: true,
            autoplay: {
                delay: 2000,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                Delay: 3000,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    </script>
    <script src="{{ asset('Includes/script.js') }}"></script>

</body>

</html>
