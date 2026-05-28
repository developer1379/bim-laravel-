<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATM - BIM</title>
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
                                    <h2 class=" text-danger text-center text-uppercase">ATM</h2>
                                </div>
                                <div class="row">
                                        <img src="{{ asset('images/atm.jpg') }}" class="w-100 shadow-1-strong rounded mb-4 img-fluid" alt="ATM" />
                                    
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