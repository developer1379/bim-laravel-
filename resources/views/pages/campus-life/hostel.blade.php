<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hostel - BIM</title>
    <link href="{{ asset('../../Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('../../Images/logo.png') }}">
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
                                    <h2 class=" text-danger text-center text-uppercase">HOSTEL</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class=" fw-bold">Living in student accommodation can be an exciting and rewarding experience. Stay at our hostel during the academic period helps the students to forge meaningful friendships and helps to learn how to live independently in a community based environment. There are also opportunities for personal growth and development as the students start adjusting to a new way of living and experience cultural diversity. The Institute provides separate hostels for boys and girls. Hostels are provided with mess, communication and recreation facilities. The girls’ hostel is located in the campus itself. Hostel has a well equipped Gym with modern exercising gadgets to provide for the betterment of physical fitness of the students.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('../../images/hostel1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel1" />
                                        <img src="{{ asset('../../images/hostel2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('../../images/hostel3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel3" />
                                        <img src="{{ asset('../../images/hostel4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel4" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('../../images/hostel2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hostel2" />
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