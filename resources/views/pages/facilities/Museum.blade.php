<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MUSEUM CELL - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar')

    <!-- About Us Section Start -->
    <div class="container">





        <section id="about" class="about pt-3 ">
            <div class=" container p-0 ">
                <div class="row shadow my-3">


                    <div class="col-lg-12">
                        <div class="w_content">

                            <div class="p-3 w-content">
                                <div class="section-title">
                                    <h2 class=" text-danger">BIM MUSEUM CELL</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p style="text-align: justify;"><span style="font-size: 18px;">It’s a gallery to display the award winning models made by the students from all the branches. These models have won accolades and awards at various Technical festivals at IITs, AKTU and other exhibitions.</span></p>



                                    <h3 class=" border border-1 px-3 py-2 mt-4">BIM MUSEUM Gallery</h3>

                                    <div class="row g-3">
                                        <div class="col-12 col-md-4">
                                            <a onclick="return hs.expand(this)" href="{{ asset('Images/PROJECT WORKSHOP.JPG') }}">
                                                <img src="{{ asset('Images/PROJECT WORKSHOP.JPG') }}" class="img-fluid w-100">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a onclick="return hs.expand(this)" href="{{ asset('Images/INVENTION CENTRE.JPG') }}">
                                                <img src="{{ asset('Images/INVENTION CENTRE.JPG') }}" class="img-fluid w-100">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a onclick="return hs.expand(this)" href="{{ asset('Images/RESEARCH.JPG') }}">
                                                <img src="{{ asset('Images/RESEARCH.JPG') }}" class="img-fluid w-100">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a onclick="return hs.expand(this)" href="{{ asset('Images/AUTOMOBILE.JPG') }}">
                                                <img src="{{ asset('Images/AUTOMOBILE.JPG') }}" class="img-fluid w-100">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <a onclick="return hs.expand(this)" href="{{ asset('Images/CARPENTRY SHOP.JPG') }}">
                                                <img src="{{ asset('Images/CARPENTRY SHOP.JPG') }}" class="img-fluid w-100">
                                            </a>
                                        </div>
                                    </div>

                                </section>
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