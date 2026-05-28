<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - BBA</title>
    <link href="{{ asset('../../../Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('../../../images/logo.png') }}">
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
</head>

<body>
     <!-- Popup structure -->
     <!--<div id="popup">
        <span id="popupClose">&times;</span>
        <img src="{{ asset('../../../Images/bim_admission1.jpeg') }}" alt="Popup Image">
    </div>

    <script>
        // Show popup on page load
        window.onload = function() {
            document.getElementById('popup').style.display = 'flex';
        };

        // Close popup
        document.getElementById('popupClose').onclick = function() {
            document.getElementById('popup').style.display = 'none';
        };
    </script>-->
    @include('includes.inner_bba')
    <div class="container-fluid px-3">
        <div class="row">
           <!-- Carousel Start -->
    <div class="carousel-wrapper" style="position: relative; height: 100vh; width: 100vw; overflow: hidden;">
        <!-- Carousel Start -->
        <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="{{ asset('../../../images/bba_events/pic1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 1">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('../../../images/bba_events/pic2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 2">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('../../../images/bba_events/pic3.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 3">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('../../../images/bba_events/pic4.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 4">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('../../../images/bba_events/pic5.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 5">
                </div>
                <!--<div class="carousel-item h-100">
                    <img src="{{ asset('../../../images/6.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 6">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('../../../images/7.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 7">
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('../../../images/8.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Image 8">
                </div>-->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- News Section Overlaid -->
        <!--<div class="news-section p-2" style="
    position: absolute;
    top: 20px;
    right: 20px;
    width: 250px;
    background: rgba(255, 255, 255, 0.2); /* More translucent */
    border-radius: 8px;
    z-index: 10;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);">
            <h5 class="heading text-light py-1 text-center" style="margin-bottom: 10px; background-color:#cc1616; border-radius: 4px;">Latest Events</h5>
            <div style="height: 300px; overflow: hidden;">
                <marquee behavior="scroll" direction="up" scrollamount="3" style="height: 100%; width: 100%;" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="news-list" style="list-style: none; padding: 0; margin: 0; font-size: 14px;">
                    <li><a href='{{ asset('../../../PDF/academice_calen_even_2024_25.pdf') }}' target='_blank'>Academic Calender Even Sem 2024-25 </a></li>
                        
                       
                    </ul>
                </marquee>
            </div>
        </div>-->
    </div>
    <!-- Carousel Ends -->

  <!-- Block section -->

       <div class="container"> <br/></div>
    
  <section style="background-color: #fefefe;">
        <div class="container">
         <!-- <h1 class="text-center py-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Social Media</h1>-->
            <div class="row g-3 pb-4 mt-3">
                <!-- Facebook Card -->
                <div class="col-md-4 col-12 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.facebook.com/bihmgkp/" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#304443;"> Upcoming Events </div>
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <marquee behavior="scroll" direction="up" scrollamount="3" style="height: 100%; width: 100%;" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="news-list" style="list-style: none; padding: 0; margin: 0; font-size: 14px;">
                    <li><a href='{{ asset('../../../PDF/academice_calen_even_2024_25.pdf') }}' target='_blank'>Academic Calender Even Sem 2024-25 </a></li>
                        <!--<li><a href='https://example.com/news2' target='_blank'><img src="{{ asset('../../../Images/new.gif') }}" style="width: 22px" /> PHP 8.3 is now available!</a></li>-->
                       
                    </ul>
                </marquee>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- YouTube Card with Embedded Video -->
                <div class="col-md-4 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-start shadow" style="height: 300px; width:100%;">
                        <div class="btn text-light py-2" style="margin-top: -20px; background-color:#bf1111;">Latest Events</div>
                        <div class="card-body d-flex align-items-center justify-content-center" style="overflow:hidden;">
                            <!-- Embedded YouTube Video with Autoplay -->
                            <marquee behavior="scroll" direction="up" scrollamount="3" style="height: 100%; width: 100%;" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="news-list" style="list-style: none; padding: 0; margin: 0; font-size: 14px;">
                    <li><a href='{{ asset('../../../PDF/academice_calen_even_2024_25.pdf') }}' target='_blank'>Academic Calender Even Sem 2024-25 </a></li>
                        <!--<li><a href='https://example.com/news2' target='_blank'><img src="{{ asset('../../../Images/new.gif') }}" style="width: 22px" /> PHP 8.3 is now available!</a></li>-->
                       
                    </ul>
                </marquee>
                        </div>
                    </div>
                </div>

                <!-- Instagram Card -->
                <div class="col-md-4 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.instagram.com/bihm_gkp/?utm_source=ig_embed&utm_campaign=invalid&ig_rid=670c3c40-c5ad-4bb7-93b3-023a4ef9fe57" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#3bb509;"> Notices </div>

                            <div class="card-body d-flex align-items-center justify-content-center">
                                <marquee behavior="scroll" direction="up" scrollamount="3" style="height: 100%; width: 100%;" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="news-list" style="list-style: none; padding: 0; margin: 0; font-size: 14px;">
                    <li><a href='{{ asset('../../../PDF/academice_calen_even_2024_25.pdf') }}' target='_blank'>Academic Calender Even Sem 2024-25 </a></li>
                        <!--<li><a href='https://example.com/news2' target='_blank'><img src="{{ asset('../../../Images/new.gif') }}" style="width: 22px" /> PHP 8.3 is now available!</a></li>-->
                       
                    </ul>
                </marquee>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!--<div class="col-md-3 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.instagram.com/bihm_gkp/?utm_source=ig_embed&utm_campaign=invalid&ig_rid=670c3c40-c5ad-4bb7-93b3-023a4ef9fe57" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#e75546;"> Social Media </div>

                            <div class="card-body d-flex align-items-center justify-content-center">
                              <marquee behavior="scroll" direction="up" scrollamount="3" style="height: 100%; width: 100%;" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="news-list" style="list-style: none; padding: 0; margin: 0; font-size: 14px;">
                    <li><a href='{{ asset('../../../PDF/academice_calen_even_2024_25.pdf') }}' target='_blank'>Academic Calender Even Sem 2024-25 </a></li>
                     
                       
                    </ul>
                </marquee>
                            </div>
                        </div>
                    </a>
                </div>-->

            </div>


        </div>
    </section>


  

  <!-- End Block section -->

  <!-- // Admission 2026-2027 -->
  
   <div class="container pt-3">
      <!--  <h1 class="text-center mt-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Admission 2026 - 2027</h1>-->
        <div class="row pt-3">




           <!-- new layout--->

          <!-- <div class="col-lg-4 md-4"> <img></div> 
            <div class="col-lg-8 md-8"> 

                <ul>
                  <li><a>Courses Offered </a> </li>
                  <li><a>Brochure</a></li>
                  <li><a>Admission Process</a></li>
                  <li><a>Admission Form</a></li>
                  <li><a>Contact Us / Get In touch</a></li>
                  <li><a>College Video</a> </li>
                 

                </ul>

          </div> -->
            

           <!--end-->

            <!--<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center py-4" data-aos="fade-up" data-aos-delay="400" style="border-left: 4px solid red; padding-left: 15px;">
                <div class="row w-100 align-items-center justify-content-center">
                    <div class="col-md-4 col-lg-4 col-12 text-center">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('../../../Images/Chairman2.jpg') }}" class="w-100" data-aos="fade-up" data-aos-delay="600" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-12 d-flex flex-column justify-content-center">
                        <div class="text-center mt-4 mt-md-0">
                            <h5 data-aos="fade-up" data-aos-delay="350" class="fw-bold" data-aos="fade-up" data-aos-delay="350">Dr. R. A. Agrawal</h5>
                            <p class="mb-0 fw-bold" data-aos="fade-up" data-aos-delay="400">Chairman</p>
                            <p data-aos="fade-up" data-aos-delay="450">People Educational Society</p>
                            <p data-aos="fade-up" data-aos-delay="500">Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life...</p>
                            <p data-aos="fade-up" data-aos-delay="600"><a href="{{ url('message') }}" style="color: red;" class="text-decoration-none fw-bold">Read More...</a></p>
                        </div>
                    </div>
                </div>
            </div>-->

            <!--<div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center py-4" data-aos="fade-up" data-aos-delay="400" style="border-left: 4px solid red; padding-left: 15px;">
                <div class="row w-100 align-items-center justify-content-center">
                    <div class="col-md-4 col-lg-4 col-12 text-center">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('../../../Images/Secretary3.jpg') }}" class="w-100" data-aos="fade-up" data-aos-delay="600" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-12 d-flex flex-column justify-content-center">
                        <div class="text-center mt-4 mt-md-0">
                            <h5 class="fw-bold" data-aos="fade-up" data-aos-delay="350">Dr. Rajat Agrawal</h5>
                            <p data-aos="fade-up" data-aos-delay="400" class="mb-0 fw-bold">Secretary</p>
                            <p data-aos="fade-up" data-aos-delay="450">People Educational Society</p>
                            <p data-aos="fade-up" data-aos-delay="500">There are no limits to what one can accomplish, except the limits one places on one’s own thinking. Having clear vision backed by definite plans gives....</p>
                            <p data-aos="fade-up" data-aos-delay="600"><a href="{{ url('message') }}" style="color: red;" class="text-decoration-none fw-bold">Read More...</a></p>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
    </div>

    



   <!-- End -->

    <!-- founder and CEO Start -->
    <!--<div class="container pt-3">
        <h1 class="text-center mt-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">VISION OF FOUNDER & CEO</h1>
        <div class="row pt-3">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center py-4" data-aos="fade-up" data-aos-delay="400" style="border-left: 4px solid red; padding-left: 15px;">
                <div class="row w-100 align-items-center justify-content-center">
                    <div class="col-md-4 col-lg-4 col-12 text-center">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('../../../Images/Chairman2.jpg') }}" class="w-100" data-aos="fade-up" data-aos-delay="600" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-12 d-flex flex-column justify-content-center">
                        <div class="text-center mt-4 mt-md-0">
                            <h5 data-aos="fade-up" data-aos-delay="350" class="fw-bold" data-aos="fade-up" data-aos-delay="350">Dr. R. A. Agrawal</h5>
                            <p class="mb-0 fw-bold" data-aos="fade-up" data-aos-delay="400">Chairman</p>
                            <p data-aos="fade-up" data-aos-delay="450">People Educational Society</p>
                            <p data-aos="fade-up" data-aos-delay="500">Education is not just about going to school and getting a degree. It's about widening your knowledge and absorbing the truth about life...</p>
                            <p data-aos="fade-up" data-aos-delay="600"><a href="{{ url('message') }}" style="color: red;" class="text-decoration-none fw-bold">Read More...</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center py-4" data-aos="fade-up" data-aos-delay="400" style="border-left: 4px solid red; padding-left: 15px;">
                <div class="row w-100 align-items-center justify-content-center">
                    <div class="col-md-4 col-lg-4 col-12 text-center">
                        <div class="mx-2">
                            <div class="border border-danger" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('../../../Images/Secretary3.jpg') }}" class="w-100" data-aos="fade-up" data-aos-delay="600" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8 col-12 d-flex flex-column justify-content-center">
                        <div class="text-center mt-4 mt-md-0">
                            <h5 class="fw-bold" data-aos="fade-up" data-aos-delay="350">Dr. Rajat Agrawal</h5>
                            <p data-aos="fade-up" data-aos-delay="400" class="mb-0 fw-bold">Secretary</p>
                            <p data-aos="fade-up" data-aos-delay="450">People Educational Society</p>
                            <p data-aos="fade-up" data-aos-delay="500">There are no limits to what one can accomplish, except the limits one places on one’s own thinking. Having clear vision backed by definite plans gives....</p>
                            <p data-aos="fade-up" data-aos-delay="600"><a href="{{ url('message') }}" style="color: red;" class="text-decoration-none fw-bold">Read More...</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>-->
    <!-- Founder and CEO Ends -->
    <!-- Campus Start -->
    <!--<div class="container py-4">
        <h1 class="text-center mt-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">
            About Campus
        </h1>
        <div class="row mt-4 d-flex align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h3 class="fw-bold px-md-3" data-aos="fade-up" data-aos-delay="300">
                    BIM : YOUR GATEWAY TO THE PROFESSIONAL WORLD !!
                </h3>
                <p style="text-align: justify;" class="py-3 px-md-3" data-aos="fade-up" data-aos-delay="400">
                    Buddha Institute of Management is approved by A.I.C.T.E. and affiliated to A.K.T.U. The programs of the institute are recognized all over India and abroad. It boasts of a strong Academic- Industrial interaction with high quality of research and consultancy and has close collaborative links with industries in the field of Automobile, Aerospace, Defence, Textile, Machine Tools, Software Development, Civil industry, Manufacturing Sector etc.
                </p>
                <p data-aos="fade-up" data-aos-delay="500">
                    The academic building is a highly modern huge building with 5 floors hosting various labs, workshop, lecture theatres, tutorial rooms, offices etc… The main focus of the society is “knowledge based society needs youth for its innovations and also give a lead to the world.” Therefore, it was felt that an academic, technical and professional institute of global standards needs to be established at Gorakhpur.
                </p>
                <p data-aos="fade-up" data-aos-delay="600">
                    BIT has established advanced ROBOTICS LAB accredited by AICRA & 3D Printing Lab which can meet the requirement of students who are willing to create innovative products.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center">
                <img src="{{ asset('../../../Images/campus.png') }}" class="w-100" data-aos="fade-up" data-aos-delay="600" />
            </div>
        </div>
    </div>-->

    <!-- Campus Ends -->

    <!-- Professional World Start -->

    <!-- <div class="container">
        Placement Start 
        <div class="row pb-4">
            <h1 class="text-center py-3" style="text-transform: uppercase;">
                Placements
            </h1>

            <div class="swiper mySwiperCopy">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide">
                        <div class="card text-start shadow d-flex justify-content-center">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width:200px; height:200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Saumya Jaiswal</h4>
                                <p class="text-center mb-1">Wipro (2022)</p>
                                <p class="text-center">Package (3.5 lac)</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-start shadow d-flex justify-content-center">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width:200px; height:200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Saumya Jaiswal</h4>
                                <p class="text-center mb-1">Wipro (2022)</p>
                                <p class="text-center">Package (3.5 lac)</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-start shadow d-flex justify-content-center">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width:200px; height:200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Saumya Jaiswal</h4>
                                <p class="text-center mb-1">Wipro (2022)</p>
                                <p class="text-center">Package (3.5 lac)</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-start shadow d-flex justify-content-center">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width:200px; height:200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Saumya Jaiswal</h4>
                                <p class="text-center mb-1">Wipro (2022)</p>
                                <p class="text-center">Package (3.5 lac)</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-start shadow d-flex justify-content-center">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width:200px; height:200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Saumya Jaiswal</h4>
                                <p class="text-center mb-1">Wipro (2022)</p>
                                <p class="text-center">Package (3.5 lac)</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-start shadow d-flex justify-content-center">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width:200px; height:200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center">
                                <h4 class="card-title">Saumya Jaiswal</h4>
                                <p class="text-center mb-1">Wipro (2022)</p>
                                <p class="text-center">Package (3.5 lac)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!-- Placement Ends -->
    <!-- BIT Data Start -->

   <!-- <section class="bit-data py-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 py-2 pb-md-0">
                    <h3 id="students" class="auto-increment text-center">0</h3>
                    <h5 class="text-center">Students</h5>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2 pb-md-0">
                    <h3 id="campus" class="auto-increment text-center">0</h3>
                    <h5 class="text-center">Acre campus</h5>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2 pb-md-0">
                    <h3 id="alumni" class="auto-increment text-center">0</h3>
                    <h5 class="text-center">Alumni</h5>
                </div>
                <div class="col-lg-3 col-md-3 col-12 py-2 pb-md-0">
                    <h3 id="recruiters" class="auto-increment text-center">0</h3>
                    <h5 class="text-center">Recruiter Partner</h5>
                </div>
            </div>
        </div>
    </section>-->
    <!-- BIT Data Ends -->
    <!-- Testimonials Start -->
   <!-- <section class="mb-4">
        <div class="container">
            <h1 class="text-center mt-3" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">TESTIMONIALS</h1>
            <div class="row py-4">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 mb-md-0">
                    <div class="card shadow border-0 pt-2 px-3" data-aos="fade-up" data-aos-delay="300">
                        <p class="mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC...</p>
                        <div class="d-flex align-items-center">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" style="width: 60px; height: 60px; object-fit: cover;" class="rounded-circle img-fluid" alt="">
                            <div class="p-3">
                                <p class="fw-bold mb-0">Anku Singh</p>
                                <p>Information Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 mb-md-0">
                    <div class="card shadow border-0 pt-2 px-3" data-aos="fade-up" data-aos-delay="400">
                        <p class="mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC...</p>
                        <div class="d-flex align-items-center">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" style="width: 60px; height: 60px; object-fit: cover;" class="rounded-circle img-fluid" alt="">
                            <div class="p-3">
                                <p class="fw-bold mb-0">Raj Singh</p>
                                <p>Information Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4 mb-md-0">
                    <div class="card shadow border-0 pt-2 px-3" data-aos="fade-up" data-aos-delay="500">
                        <p class="mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC...</p>
                        <div class="d-flex align-items-center">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" style="width: 60px; height: 60px; object-fit: cover;" class="rounded-circle img-fluid" alt="">
                            <div class="p-3">
                                <p class="fw-bold mb-0">Virat Singh</p>
                                <p>Information Technology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Testimonials Ends -->
    <!-- Campus Events Start -->
   <!-- <section>
        <div class="container">
            <h1 class="text-center mt-3 py-3" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">CHECKOUT OUR CAMPUS EVENTS</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                    <img src="{{ asset('../../../Images/campus.png') }}" class="img-fluid rounded" alt="" data-aos="fade-up" data-aos-delay="300">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                    <img src="{{ asset('../../../Images/campus.png') }}" class="img-fluid rounded" alt="" data-aos="fade-up" data-aos-delay="400">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                    <img src="{{ asset('../../../Images/campus.png') }}" class="img-fluid rounded" alt="" data-aos="fade-up" data-aos-delay="300">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                    <img src="{{ asset('../../../Images/campus.png') }}" class="img-fluid rounded" alt="" data-aos="fade-up" data-aos-delay="400">
                </div>
            </div>
        </div>
    </section>
    Campus Events Ends -->

    <!-- News And Event Start -->
   <!-- <section class="container">
        <h1 class="text-center mt-3" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">News And Notice</h1>
        <div class="row py-4">
             Left Tab Section (News and Events) 
            <div class="col-md-6 col-12 px-md-4" data-aos="fade-up" data-aos-delay="300">
                <nav>
                    <div class="nav nav-tabs text-uppercase d-flex bd-highlight" id="nav-tab" role="tablist">
                        <button class="nav-link flex-fill col active" onclick="openTabLeft(event, 'news')" id="defaultOpenLeft">News</button>
                        <button class="nav-link flex-fill col" onclick="openTabLeft(event, 'events')">Latest Events</button>
                    </div>
                </nav>

              News Tab Content 
                <div id="news" class="tabcontent-left" style="background-color: #f3f3f3; height: 230px; overflow: hidden; border:1px solid #b4b4b4;">
                    <marquee behavior="sliding" direction="up" scrollamount="2" onmouseout="this.start();" onmouseover="this.stop();">
                        <ul class="slid" style="list-style-type: none; padding: 0; margin: 0;">
                            <li style="background: linear-gradient(to bottom, white, whitesmoke); padding: 10px; margin-bottom: 5px; border-radius: 5px;">
                                <h6>International Conference</h6>
                                <a class="text-decoration-none" href="{{ asset('events&news/22.pdf') }}" class="text-decoration-none" target="_blank">
                                    <p>International Conference held on 21-22 April 2022</p>
                                </a>
                            </li>
                            <li style="background: linear-gradient(to bottom, white, whitesmoke); padding: 10px; margin-bottom: 5px; border-radius: 5px;">
                                <h6>IITB-AICTE</h6>
                                <a class="text-decoration-none" href="{{ asset('events&news/IITB-AICTE_Mapathon_poster.pdf') }}" download>
                                    <p>Invitation to participate in IITB-AICTE Mapathon</p>
                                </a>
                            </li>
                            <li style="background: linear-gradient(to bottom, white, whitesmoke); padding: 10px; margin-bottom: 5px; border-radius: 5px;">
                                <h6>AICTE-PG Scholarship</h6>
                                <a class="text-decoration-none" href="{{ asset('events&news/Notification for PG schoalrsip.pdf') }}" download>
                                    <p>Extension of last date of submission of PG Scholarship</p>
                                </a>
                            </li>
                            <li style="background: linear-gradient(to bottom, white, whitesmoke); padding: 10px; margin-bottom: 5px; border-radius: 5px;">
                                <h6>IIT Kanpur</h6>
                                <a class="text-decoration-none" href="{{ asset('events&news/brochure.pdf') }}" download>
                                    <p>Surge-2022 Internship Program</p>
                                </a>
                            </li>
                            <li style="background: linear-gradient(to bottom, white, whitesmoke); padding: 10px; margin-bottom: 5px; border-radius: 5px;">
                                <h6>Mechlin Technologies</h6>
                                <a class="text-decoration-none" href="{{ asset('events&news/mechlin_hiring.pdf') }}">
                                    <p>Hiring opportunity for B.Tech</p>
                                </a>
                            </li>
                        </ul>
                    </marquee>
                </div>

                 Events Tab Content 
                <div id="events" class="tabcontent-left" style="display:none; background-color: #f3f3f3; height: 230px; overflow: hidden; border:1px solid #b4b4b4;">
                    <marquee behavior="sliding" direction="up" scrollamount="2" onmouseout="this.start();" onmouseover="this.stop();">
                        <ul class="slid" style="list-style-type: none; padding: 0; margin: 0;">
                            <li style="background: linear-gradient(to bottom, white, whitesmoke); padding: 10px; margin-bottom: 5px; border-radius: 5px;">
                                <h6>IIT Kanpur</h6>
                                <a href="{{ asset('events&news/brochure.pdf') }}" download>
                                    <p>Surge-2022 Internship Program</p>
                                </a>
                            </li>
                            Additional items...
                        </ul>
                    </marquee>
                </div>
            </div>

            <script>
                function openTabLeft(evt, tabName) {
                    var i, tabcontent, tablinks;

                    // Hide all tab contents for the left section
                    tabcontent = document.getElementsByClassName("tabcontent-left");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Remove active class from all tabs for the left section
                    tablinks = document.querySelectorAll("#nav-tab button");
                    tablinks.forEach(link => link.classList.remove("active"));

                    // Show the current tab and add "active" class to the clicked button
                    document.getElementById(tabName).style.display = "block";
                    evt.currentTarget.classList.add("active");
                }

                // Automatically open the "News" tab by default on the left
                document.getElementById("defaultOpenLeft").click();
            </script>
             Right Tab Section (Student, Admission, Other) 
            <div class="col-md-6 col-12 mt-md-0 mt-4 px-md-4" data-aos="fade-up" data-aos-delay="400">
                <nav>
                    <div class="nav nav-tabs text-uppercase d-flex bd-highlight" id="nav-tab-right" role="tablist">
                        <button class="nav-link flex-fill col active" onclick="openTabRight(event, 'student')" id="defaultOpenRight">Student</button>
                        <button class="nav-link flex-fill col" onclick="openTabRight(event, 'admission')">Admission</button>
                        <button class="nav-link flex-fill col" onclick="openTabRight(event, 'other')">Other</button>
                    </div>
                </nav>

              Student Tab Content 
                <div id="student" class="tabcontent-right" style="background-color: #f3f3f3; height: 230px; padding: 15px; border: 1px solid #b4b4b4;">
                    <p>Student information goes here.</p>
                </div>

                Admission Tab Content 
                <div id="admission" class="tabcontent-right" style="display: none; background-color: #f3f3f3; height: 230px; padding: 15px; border: 1px solid #b4b4b4;">
                    <p>Admission details go here.</p>
                </div>

                 Other Tab Content 
                <div id="other" class="tabcontent-right" style="display: none; background-color: #f3f3f3; height: 230px; padding: 15px; border: 1px solid #b4b4b4;">
                    <p>Other information goes here.</p>
                </div>
            </div>

            <script>
                function openTabRight(evt, tabName) {
                    var i, tabcontent, tablinks;

                    // Hide all tab contents for the right section
                    tabcontent = document.getElementsByClassName("tabcontent-right");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Remove active class from all tabs for the right section
                    tablinks = document.querySelectorAll("#nav-tab-right button");
                    tablinks.forEach(link => link.classList.remove("active"));

                    // Show the selected tab and add "active" class to the clicked button
                    document.getElementById(tabName).style.display = "block";
                    evt.currentTarget.classList.add("active");
                }

                // Automatically open the "Student" tab by default on the right
                document.getElementById("defaultOpenRight").click();
            </script>
        </div>

    </section>-->
    <!-- News and event ends -->
    <!-- Student Talks Start -->

    <!--  <div class="row pt-5 pb-5">
            <h1 class="text-center pb-4" style="text-transform: uppercase;">Student Talks</h1>
            <div class="col-md-6 col-12 mb-md-0 mb-5">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-md-4 sm-12 d-flex justify-content-center align-items-center"><img class="card-img-top img-fluid mx-auto" style="width: 100%; height: 100%; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" /></div>
                        <div class="col-md-8 sm-12 py-4">
                            <div class="px-3">
                                <h2>Piyush Maurya</h2>
                                <h4>Vidvandya</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum magni aperiam fugit quod obcaecati incidunt suscipit debitis deserunt soluta maiores!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-md-4 sm-12 d-flex justify-content-center align-items-center"><img class="card-img-top img-fluid mx-auto" style="width: 100%; height: 100%; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" /></div>
                        <div class="col-md-8 sm-12 py-4">
                            <div class="px-3">
                                <h2>Piyush Maurya</h2>
                                <h4>Vidvandya</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum magni aperiam fugit quod obcaecati incidunt suscipit debitis deserunt soluta maiores!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       Student Talks Ends 
    </div>-->
    <!--  <section class="toppers" style="background-color: #FCF3EE;">
        <div class="container">
          OUR Toppers Start 
            <div class="row pt-5">
                <h1 class="text-center pb-4" style="text-transform: uppercase;">
                    Our Toppers
                </h1>
                <div class="swiper mySwiperCopy">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide">
                            <div class="card text-start shadow d-flex justify-content-center">
                                <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                                <div class="card-body text-center">
                                    <h4 class="card-title">Saumya Jaiswal</h4>
                                    <p class="text-center mb-1">Percenteage (Semester)</p>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card text-start shadow d-flex justify-content-center">
                                <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                                <div class="card-body text-center">
                                    <h4 class="card-title">Saumya Jaiswal</h4>
                                    <p class="text-center mb-1">Percenteage (Semester)</p>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card text-start shadow d-flex justify-content-center">
                                <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                                <div class="card-body text-center">
                                    <h4 class="card-title">Saumya Jaiswal</h4>
                                    <p class="text-center mb-1">Percenteage (Semester)</p>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card text-start shadow d-flex justify-content-center">
                                <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                                <div class="card-body text-center">
                                    <h4 class="card-title">Saumya Jaiswal</h4>
                                    <p class="text-center mb-1">Percenteage (Semester)</p>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card text-start shadow d-flex justify-content-center">
                                <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                                <div class="card-body text-center">
                                    <h4 class="card-title">Saumya Jaiswal</h4>
                                    <p class="text-center mb-1">Percenteage (Semester)</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
           OUR Toppers Ends 
        </div>
    </section>-->
    <!-- Our Recruiters Start -->
    <!--  <section style="background-color:#F5FAFF;">
        <div class="container-fluid">
            <div class="row px-md-4 py-5">
                <h1 class="text-center pb-4" style="text-transform: uppercase;">Our Recruiters</h1>
                <div class="col-md-5 col-12 mb-4 mb-md-0">
                    <h1>Distinguished Alumni</h1>
                    <p>We enable students to gain depth in their chosen field of study.We enable students to gain depth in their chosen field of study.</p>
                    <input type="submit" value="Get Admission" class="btn text-light" style="background-color: #e43d12; border-radius: 20px;">
                </div>
                <div class="col-md-7 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-md-0 mb-4">
                            <div class="card text-start shadow d-flex justify-content-center" style="background-color:#9BC3FF;">
                                <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                                <div class="card-body text-center">
                                    <h5 class="card-title text-start px-2">Title Or Message</h5>
                                    <h5 class="px-2 text-start mb-1">Company Name</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card text-start shadow d-flex justify-content-center" style="background-color: #FFD7DC;">
                                <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                                <div class="card-body text-center">
                                    <h5 class="card-title text-start px-2">Title Or Message</h5>
                                    <h5 class="px-2 text-start mb-1">Company Name</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Our Recruiters Ends -->

    <!-- Placement Start -->
    <!--<div class="container mb-5">
        <h1 class="text-center py-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Top Placements</h1>

        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card small-card shadow border-0 mb-3 mb-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 150px; height: 150px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center" style="color: #002147;">
                                <h4 class="mb-1">Harsh Srivastava</h4>
                                <p class="mb-1 fw-semibold">B. Tech</p>
                                <p class="mb-1">Vipro (2022)</p>
                                <p class="mb-2">Package: (3.5 lakh)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card small-card shadow border-0 mb-3 mb-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 150px; height: 150px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center" style="color: #002147;">
                                <h4 class="mb-1">Ansh Singh</h4>
                                <p class="mb-1 fw-semibold">B. Tech</p>
                                <p class="mb-1">Vipro (2022)</p>
                                <p class="mb-2">Package: (3.5 lakh)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card small-card shadow border-0 mb-3 mb-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                            <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 150px; height: 150px; object-fit: cover;" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="Error 404 - Image Not Found" />
                            <div class="card-body text-center" style="color: #002147;">
                                <h4 class="mb-1">Nikhil Yadav</h4>
                                <p class="mb-1 fw-semibold">B. Tech</p>
                                <p class="mb-1">Vipro (2022)</p>
                                <p class="mb-2">Package: (3.5 lakh)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Placement Ends -->
    <!-- gallery starts here -->
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


    <!--<div class="container gallery-container">
        <h2 class="gallery-title">GALLERY</h2>

        <div class="gallery">
            <img src="{{ asset('../../../Images/campus.png') }}" class="img-large" alt="Gallery Image 1" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('../../../Images/sports11.jpg') }}" alt="Gallery Image 2" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('../../../Images/sports10.jpg') }}" alt="Gallery Image 3" data-aos="fade-up" data-aos-delay="500">
            <img src="{{ asset('../../../Images/staraward.jpg') }}" alt="Gallery Image 4" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('../../../Images/staraward2.jpg') }}" alt="Gallery Image 5" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('../../../Images/15.jpeg') }}" alt="Gallery Image 5" data-aos="fade-up" data-aos-delay="500">
        </div>

     <a href="{{ url('gallery') }}" style="text"><button class="show-more-btn">Show More</button></a>
    </div>-->



    <!-- gallery ends here -->
    <!-- Our Colleges Start -->
   <!-- <Section class="container">
        <h1 class="text-center pb-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Our Colleges</h1>
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="300">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Institute Of Technology</h5>
                        <p class="card-text mb-0">B.Tech, M.Tech</p>
                        <p>AKTU Code-525</p>
                        <a href="http://bit.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="400">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Institute Of <br>Pharmacy</h5>
                        <p class="card-text mb-0">B.Pharm, D.Pharm</p>
                        <p>AKTU Code-932</p>
                        <a href="https://bit.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="500">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Institute Of Management</h5>
                        <p class="card-text mb-0">MBA, BBA, MCA, BCA</p>
                        <p>AKTU Code-1212</p>
                        <a href="https://bimgkp.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="600">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Institute Of Hotel Management</h5>
                        <p class="card-text mb-0">BHMCT</p>
                        <p>AKTU Code-1197</p>
                        <a href="https://bihm.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="300">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Polytechnic College</h5>
                        <p class="card-text mb-0">Polytechnic</p>
                        <p>AKTU Code-525</p>
                        <a href="https://bpc.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="400">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Degree College</h5>
                        <p class="card-text mb-0">B.Sc., B.Com, BBA, BCA</p>
                        <p>DDU Code-</p>
                        <a href="https://bdc.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="500">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Law College</h5>
                        <p class="card-text mb-0">LLB, BA LLB</p>
                        <p>AKTU Code-869</p>
                        <a href="https://blcgkp.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="600">
                    <img class="card-img-top img-fluid" style="height:200px; width:100%; object-fit: cover;" src="https://assets.collegedunia.com/public/college_data/images/appImage/1500115666cvr.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <h5 class="card-title">Buddha Paramedical College</h5>
                        <p class="card-text mb-0"></p>
                        <p>College Code-1397</p>
                        <a href="https://bpmc.ac.in" target="_blank" class="btn rounded-pill px-4 py-2 text-light" style="background-color: #d21404;">Go Now</a>
                    </div>
                </div>
            </div>
        </div>
    </Section>-->
    <!-- Our Colleges Ends -->
    <!-- Social Engagement Start -->

    <!--<section style="background-color: #fefefe;">
        <div class="container">
            <h1 class="text-center py-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Social Media</h1>
            <div class="row g-3 pb-4 mt-3">
              
                <div class="col-md-4 col-12 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.facebook.com/bihmgkp/" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#1877F2;">Facebook</div>
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <p class="text-center">Follow us on Facebook for the latest updates.</p>
                            </div>
                        </div>
                    </a>
                </div>

              
                <div class="col-md-4 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-start shadow" style="height: 300px; width:100%;">
                        <div class="btn text-light py-2" style="margin-top: -20px; background-color:#FF0000;">YouTube</div>
                        <div class="card-body d-flex align-items-center justify-content-center" style="overflow:hidden;">
                          
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/S0SgWdR8kSs?autoplay=1&mute=1"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

              
                <div class="col-md-4 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.instagram.com/bihm_gkp/?utm_source=ig_embed&utm_campaign=invalid&ig_rid=670c3c40-c5ad-4bb7-93b3-023a4ef9fe57" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#E4405F;">Instagram</div>

                            <div class="card-body d-flex align-items-center justify-content-center">
                                <p class="text-center">Check out our latest posts on Instagram.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </section>-->
    <!-- Social Engagement Ends -->

  
    <!-- top placement Start -->
    <section style="background-color: #fefefe;">
   <div class="container my-4" data-aos="fade-up" data-aos-delay="300">
      <h1 class="text-center py-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Top Placements</h1>
       
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center" style="height: 100px;">
                        <img class="img-fluid" src="{{ asset('../../../images/user_1.jpg') }}" alt="Error 404 - Image Not Found">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex justify-content-center" style="height: 100px;">
                        <img class="img-fluid" src="{{ asset('../../../images/user_1.jpg') }}" alt="Error 404 - Image Not Found">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center" style="height: 100px;">
                        <img class="img-fluid" src="{{ asset('../../../images/user_1.jpg') }}" alt="Error 404 - Image Not Found">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex justify-content-center" style="height: 100px;">
                        <img class="img-fluid" src="{{ asset('../../../images/user_1.jpg') }}" alt="Error 404 - Image Not Found">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center" style="height: 100px;">
                        <img class="img-fluid" src="{{ asset('../../../images/user_1.jpg') }}" alt="Error 404 - Image Not Found">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center" style="height: 100px;">
                        <img class="img-fluid" src="{{ asset('../../../images/user_1.jpg') }}" alt="Error 404 - Image Not Found">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recruiters Logo Ends -->



     <!-- Award Start -->
   
</section>

<!-- achivement-->
 <section style="background-color: #fefefe;">
        <div class="container">
            <h1 class="text-center py-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Achievements </h1>
            <div class="row g-3 pb-4 mt-3">
                <!-- Facebook Card -->
                <div class="col-md-4 col-12 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.facebook.com/bihmgkp/" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            
                            <div class="card-body d-flex align-items-center justify-content-center">
                               
                            </div>
                        </div>
                    </a>
                </div>

                <!-- YouTube Card with Embedded Video -->
                <div class="col-md-4 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-start shadow" style="height: 300px; width:100%;">
                       
                        <div class="card-body d-flex align-items-center justify-content-center" style="overflow:hidden;">
                            <!-- Embedded YouTube Video with Autoplay -->
                           
                        </div>
                    </div>
                </div>

                <!-- Instagram Card -->
                <div class="col-md-4 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.instagram.com/bihm_gkp/?utm_source=ig_embed&utm_campaign=invalid&ig_rid=670c3c40-c5ad-4bb7-93b3-023a4ef9fe57" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                           

                            <div class="card-body d-flex align-items-center justify-content-center">
                              
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </section>

<!--end-->

    <!-- Award Logo Ends -->

    <!-- Social Engagement Start -->

    <section style="background-color: #fefefe;">
        <div class="container">
            <h1 class="text-center py-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Social Media</h1>
            <div class="row g-3 pb-4 mt-3">
                <div class="col-md-1"></div>
                <!-- Facebook Card -->
                <div class="col-md-2 col-12 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.facebook.com/bihmgkp/" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#1877F2;">Facebook</div>
                            <div class="card-body d-flex align-items-center justify-content-center">
                                <p class="text-center">Follow us on Facebook for the latest updates.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- YouTube Card with Embedded Video -->
                <div class="col-md-2 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-start shadow" style="height: 300px; width:100%;">
                        <div class="btn text-light py-2" style="margin-top: -20px; background-color:#FF0000;">YouTube</div>
                        <div class="card-body d-flex align-items-center justify-content-center" style="overflow:hidden;">
                            <!-- Embedded YouTube Video with Autoplay -->
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/S0SgWdR8kSs?autoplay=1&mute=1"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                    clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <!-- Instagram Card -->
                <div class="col-md-2 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.instagram.com/bihm_gkp/?utm_source=ig_embed&utm_campaign=invalid&ig_rid=670c3c40-c5ad-4bb7-93b3-023a4ef9fe57" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#d300c5;">Instagram</div>

                            <div class="card-body d-flex align-items-center justify-content-center">
                                <p class="text-center">Check out our latest posts on Instagram.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.instagram.com/bihm_gkp/?utm_source=ig_embed&utm_campaign=invalid&ig_rid=670c3c40-c5ad-4bb7-93b3-023a4ef9fe57" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#060606;">Twitter</div>

                            <div class="card-body d-flex align-items-center justify-content-center">
                                <p class="text-center">Check out our latest posts on Instagram.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-12 mt-5 mt-md-0 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.instagram.com/bihm_gkp/?utm_source=ig_embed&utm_campaign=invalid&ig_rid=670c3c40-c5ad-4bb7-93b3-023a4ef9fe57" target="_blank" style="text-decoration: none; color: inherit; width: 100%;">
                        <div class="card text-start shadow" style="height: 300px; width:100%;">
                            <div class="btn text-light py-2" style="margin-top: -20px; background-color:#0a8abb;"> Linkedin</div>

                            <div class="card-body d-flex align-items-center justify-content-center">
                                <p class="text-center">Check out our latest posts on Instagram.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-1"></div>
            </div>


        </div>
    </section>
    <!-- Social Engagement Ends -->


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
    <script src="{{ asset('../../../Includes/script.js') }}"></script>

</body>

</html>