<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buddha Bazaar - BIM</title>
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
                                    <h2 class=" text-danger text-center text-uppercase">Buddha Bazaar</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class="">Institute takes care of all the small things that are needed by the students during the course of attending classes / labs in the campus. In view of this Daily Needs shop i.e. Buddha Bazaar has been opened for all the students where students can get required stationery (pen, pencil, white papers etc). The shop has the facility of photocopying also.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/bUDDHA-bAZAR-2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="BUDDHA BAZAR2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/bUDDHA-bAZAR-1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="BUDDHA BAZAR1" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/bUDDHA-bAZAR-2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="BUDDHA BAZAR2" />
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