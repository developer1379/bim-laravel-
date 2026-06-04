@extends('layouts.site', [
    'headPartial' => 'includes.head_links1',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer1',
    'scriptsPartial' => 'includes.body_links1',
])

@push('head')
<link rel="stylesheet" href="{{ asset('css/main-site.css') }}">








@endpush

@section('content')
<!-- Portal Style Hero Section Start -->
    

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
                                @for ($i = 1; $i <= 18; $i++)
                                    @php
                                        $ext = ($i >= 14) ? 'png' : 'jpg';
                                    @endphp
                                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                                        <img src="{{ asset('images/bit_slider/bit-' . $i . '.' . $ext) }}" alt="BIT Campus Slide {{ $i }}">
                                    </div>
                                @endfor
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
                            <!-- Vertical Swiper for Notices (Replaces Marquee) -->
                            <div class="css-marquee" style="height: 100%; width: 100%;">
                                <ul class="notice-list" style="margin: 0; padding: 0; list-style: none;">
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
                                    <!-- Duplicated slides for seamless loop -->
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
                            </div>
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



                



                <!-- top placement Start -->
                <section>
                    <div class="container my-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-center mb-5 pb-2">
                            <h2 class="section-header-title">Top <span style="color:#cc1616;">Placements</span></h2>
                            <p class="text-muted" style="font-size: 1.05rem;">Meet our stars shining bright in the corporate world</p>
                        </div>

                        <div class="swiper mySwiper pb-5">
                            <div class="swiper-wrapper">
                                @for ($i = 1; $i <= 15; $i++)
                                <div class="swiper-slide px-2 py-3">
                                    <div class="d-flex justify-content-center" style="height: 300px;">
                                        <img class="img-fluid img-responsive" style="border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06);" src="{{ asset('images/bit_placement_img/' . $i . '.jpeg') }}" alt="Top Placement {{ $i }}">
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <!-- Swiper Pagination -->
                            <div class="swiper-pagination mt-4"></div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="{{ url('top-placement') }}" target="_blank" class="achievement-btn" style="padding: 12px 35px; font-size: 1.1rem; border-radius: 50px;">
                                <i class="bi bi-award-fill me-2"></i> View All Placements
                            </a>
                        </div>
                    </div>
                </section>
                <!-- top placement Ends -->


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
                        <img src="{{ asset('images/bit_achiv/1.jpeg') }}" alt="Achievement Milestone 1" loading="lazy" />
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
                        <img src="{{ asset('images/bit_achiv/2.jpeg') }}" alt="Achievement Milestone 2" loading="lazy" />
                    </div>
                    <div class="achievement-content">
                        <h3 class="achievement-title">Best Emerging Engineering & Technology Institute Award</h3>
                        <a href="{{ url('bim_achi') }}" target="_blank" class="achievement-btn">
                            Read Story <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="achievement-img-wrapper">
                        <img src="{{ asset('images/bit_achiv/3.jpeg') }}" alt="Achievement Milestone 3" loading="lazy" />
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
                        <img src="{{ asset('images/bit_achiv/4.jpeg') }}" alt="Achievement Milestone 4" loading="lazy" />
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

<!-- Social Media Feed Section Start -->
<section class="social-media-feed-section py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5 pb-2">
            <h2 class="section-header-title" data-aos="fade-up">Social <span style="color:#cc1616;">Connect</span></h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="100" style="font-size: 1.05rem;">Stay updated with our latest happenings across all social platforms</p>
        </div>

        <!-- Social Media Grid -->
        <div class="row g-4 justify-content-center">
            <!-- Facebook Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="social-feed-card facebook-card">
                    <div class="social-card-header">
                        <div class="profile-info">
                            <img src="{{ asset('images/bit.png') }}" alt="BIT Logo" class="profile-img">
                            <div>
                                <h5 class="profile-name">Buddha Institute of Technology <i class="bi bi-patch-check-fill verified-badge"></i></h5>
                                <span class="post-time">2 hours ago · <i class="bi bi-globe"></i></span>
                            </div>
                        </div>
                        <a href="https://facebook.com" target="_blank" class="social-platform-icon"><i class="bi bi-facebook"></i></a>
                    </div>
                    <div class="social-card-body">
                        <p class="post-text">Excited to announce that the Placement Drive 2026 has commenced! Major MNCs like Deloitte, Capgemini, and others are conducting campus drives this week. Best wishes to all our final year students! 🎓🚀 #BITGorakhpur #Placements2026 #Success</p>
                        <div class="post-image-wrapper">
                            <img src="{{ asset('images/top_placement_bIM/1.jpeg') }}" alt="Placement Drive" class="post-image">
                        </div>
                    </div>
                    <div class="social-card-footer">
                        <div class="interactions">
                            <span><i class="bi-hand-thumbs-up-fill text-primary"></i> 142 Likes</span>
                            <span>24 Comments</span>
                        </div>
                        <hr class="my-2">
                        <a href="https://facebook.com" target="_blank" class="view-post-btn"><i class="bi bi-box-arrow-up-right me-1"></i> View on Facebook</a>
                    </div>
                </div>
            </div>

            <!-- Instagram Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="social-feed-card instagram-card">
                    <div class="social-card-header">
                        <div class="profile-info">
                            <img src="{{ asset('images/bit.png') }}" alt="BIT Logo" class="profile-img">
                            <div>
                                <h5 class="profile-name">bit_gorakhpur <i class="bi bi-patch-check-fill verified-badge"></i></h5>
                                <span class="post-time">5 hours ago</span>
                            </div>
                        </div>
                        <a href="https://instagram.com" target="_blank" class="social-platform-icon"><i class="bi bi-instagram"></i></a>
                    </div>
                    <div class="social-card-body">
                        <p class="post-text">Glimpses of the Annual Tech Symposium "TechGenesis 2026" held at our state-of-the-art campus! Our innovative students showcased incredible projects in Robotics, AI, and IoT. 🤖💡✨ #TechGenesis #Innovation #EngineeringLife</p>
                        <div class="post-image-wrapper">
                            <img src="{{ asset('images/bim_achi/2.jpeg') }}" alt="Tech Event" class="post-image">
                        </div>
                    </div>
                    <div class="social-card-footer">
                        <div class="interactions">
                            <span><i class="bi-heart-fill text-danger"></i> 384 Likes</span>
                            <span>18 Comments</span>
                        </div>
                        <hr class="my-2">
                        <a href="https://instagram.com" target="_blank" class="view-post-btn"><i class="bi bi-box-arrow-up-right me-1"></i> View on Instagram</a>
                    </div>
                </div>
            </div>

            <!-- LinkedIn Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="social-feed-card linkedin-card">
                    <div class="social-card-header">
                        <div class="profile-info">
                            <img src="{{ asset('images/bit.png') }}" alt="BIT Logo" class="profile-img">
                            <div>
                                <h5 class="profile-name">Buddha Institute of Technology <i class="bi bi-patch-check-fill verified-badge"></i></h5>
                                <span class="post-time">1 day ago · <i class="bi bi-globe"></i></span>
                            </div>
                        </div>
                        <a href="https://linkedin.com" target="_blank" class="social-platform-icon"><i class="bi bi-linkedin"></i></a>
                    </div>
                    <div class="social-card-body">
                        <p class="post-text">We are proud to share that Buddha Institute of Technology (BIT) has been recognized as the "Best Emerging Engineering Institute" for excellence in technical education. Thank you to our dedicated faculty, hard-working students, and alumni network! 🌟💼</p>
                        <div class="post-image-wrapper">
                            <img src="{{ asset('images/bim_achi/1.jpeg') }}" alt="Award Ceremony" class="post-image">
                        </div>
                    </div>
                    <div class="social-card-footer">
                        <div class="interactions">
                            <span><i class="bi-hand-thumbs-up-fill text-primary"></i> 512 Likes</span>
                            <span>42 Comments</span>
                        </div>
                        <hr class="my-2">
                        <a href="https://linkedin.com" target="_blank" class="view-post-btn"><i class="bi bi-box-arrow-up-right me-1"></i> View on LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Follow Us Badges -->
        <div class="follow-us-bar mt-5 text-center p-4 rounded-4" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); border: 1px solid rgba(0,0,0,0.05);" data-aos="fade-up">
            <h5 class="mb-3 fw-bold">Follow Our Official Handles</h5>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="https://facebook.com" target="_blank" class="btn btn-facebook d-inline-flex align-items-center gap-2 px-4 py-2 border-0 text-white" style="background-color: #1877f2; border-radius: 50px; font-weight: 600; font-size: 0.95rem; transition: transform 0.2s;"><i class="bi bi-facebook"></i> Facebook</a>
                <a href="https://instagram.com" target="_blank" class="btn btn-instagram d-inline-flex align-items-center gap-2 px-4 py-2 border-0 text-white" style="background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); border-radius: 50px; font-weight: 600; font-size: 0.95rem; transition: transform 0.2s;"><i class="bi bi-instagram"></i> Instagram</a>
                <a href="https://linkedin.com" target="_blank" class="btn btn-linkedin d-inline-flex align-items-center gap-2 px-4 py-2 border-0 text-white" style="background-color: #0a66c2; border-radius: 50px; font-weight: 600; font-size: 0.95rem; transition: transform 0.2s;"><i class="bi bi-linkedin"></i> LinkedIn</a>
                <a href="https://youtube.com" target="_blank" class="btn btn-youtube d-inline-flex align-items-center gap-2 px-4 py-2 border-0 text-white" style="background-color: #ff0000; border-radius: 50px; font-weight: 600; font-size: 0.95rem; transition: transform 0.2s;"><i class="bi bi-youtube"></i> YouTube</a>
                <a href="https://x.com" target="_blank" class="btn btn-x d-inline-flex align-items-center gap-2 px-4 py-2 border-0 text-white" style="background-color: #000000; border-radius: 50px; font-weight: 600; font-size: 0.95rem; transition: transform 0.2s;"><i class="bi bi-twitter-x"></i> Twitter / X</a>
            </div>
        </div>
    </div>
</section>

    <!--ends--

    </div>
    
    

    <!-- Initialize Swiper -->
    <script>

        // Pause on hover
        var noticeContainer = document.querySelector('.noticeSwiper');
        if(noticeContainer) {
            noticeContainer.addEventListener('mouseenter', function() {
                noticeSwiper.autoplay.stop();
            });
            noticeContainer.addEventListener('mouseleave', function() {
                noticeSwiper.autoplay.start();
            });
        }

        // Initialize Swiper Copy
        var swiperCopy = new Swiper(".mySwiperCopy", {
            loop: true,
            autoplay: {
                delay: 2000,
            },
            spaceBetween: 30,
            pagination: {
                el: ".mySwiperCopy .swiper-pagination",
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
            slidesPerView: "auto",
            spaceBetween: 30,
            grabCursor: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".mySwiper .swiper-pagination",
                clickable: true,
            }
        });
    </script>
    <script src="{{ asset('Includes/script.js') }}"></script>
@endsection
