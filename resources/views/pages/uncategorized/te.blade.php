<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hostel - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar1')

    <!-- About Us Section Start -->
    <div class="container">




        <section id="about" class="about pt-3 ">
            <div class=" container  p-0 ">
                <div class="row shadow">


                    <div class="col-lg-12">
                        <div class="w_content">

                            <div class="border border-1 p-3 w-content">
                                <div class="section-title">
                                    <h2 class=" text-danger text-center text-uppercase">Temple Event</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class=" fw-bold">The campus of Buddha Institute of Management at GIDA, CL-1 Sector 7, Gorakhpur, is home to a serene and spiritually uplifting Lord Shiva Temple at Buddha Institute of Management. Dedicated to Lord Shiva, the temple serves as a peaceful place of worship and meditation for students, faculty, staff, and visitors. Surrounded by the calm academic environment of the campus, the temple reflects the institute’s commitment to cultural values, spirituality, and holistic development alongside education.<br>The temple is especially vibrant during Hindu festivals such as Maha Shivaratri and the holy month of Shravan, when devotees gather to offer prayers and seek blessings. Beyond its religious importance, the temple also acts as a center for inner peace and positive energy, providing a tranquil retreat within the bustling educational campus.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/templ1.jpeg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel1" />
                                        <img src="{{ asset('images/templ2.jpeg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/templ3.jpeg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel3" />
                                        <img src="{{ asset('images/templ4.jpeg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel4" />
                                    </div>
                                     <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/templ5.jpeg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel2" />
                                        <img src="{{ asset('images/templ6.jpeg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel2" />
                                    </div>

                                   
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>