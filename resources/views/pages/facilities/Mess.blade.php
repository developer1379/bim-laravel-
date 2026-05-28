<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mess - BIM</title>
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
                                    <h2 class="text-center text-uppercase text-danger">Mess</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class=" fw-bold">
                                    Institute is equipped with a fully functional mess to serve hygienic food to the students. It is run by the Management under the guidance of the Administrative Officer. Vegetarian food is served in the hostel. Mess charges are collected on an annual basis at the time of admission.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/mess1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess1" />
                                        <img src="{{ asset('images/mess2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/mess3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess3" />
                                        <img src="{{ asset('images/mess4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess4" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/mess2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess2" />
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