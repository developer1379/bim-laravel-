<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement Cell - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    @include('includes.head_links')
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
</head>

<body>
    @include('includes.navbar1')

    <!-- Placement Section Start -->
    <div class="container placement-cell">
            <div class="row my-3 d-flex justify-content-center">
                <h2 class="text-center">Placement Cell</h2>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="card text-start shadow d-flex justify-content-center">
                        <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="{{ asset('images/abhay.png') }}" alt="Error 404 - Image Not Found" />
                        <div class="card-body text-center">
                            
                            <h6 class="card-text"> Mr. Abhay Upadhayay</h6>
                            <h6 class="card-title">Placement Coordinator (BBA) </h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 my-2">
                    <div class="card text-start shadow d-flex justify-content-center">
                        <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="{{ asset('images/h_p.jpeg') }}" alt="Error 404 - Image Not Found" />
                        <div class="card-body text-center">
                            <h6 class="card-text">Mr. Amitesh Mani Tripathi</h6>
                            <h6 class="card-title">Head PLacement & Placement Coordinator (MBA) </h6>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 my-2">
                    <div class="card text-start shadow d-flex justify-content-center">
                        <img class="card-img-top img-fluid mx-auto mt-3 rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" src="{{ asset('images/shrey.jpeg') }}" alt="Error 404 - Image Not Found" />
                        <div class="card-body text-center">
                            <h6 class="card-text">Mr. Shrey Srivastava</h6>
                            <h6 class="card-title">Placement Coordinator Computer Application</h6>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Placement Section Ends -->

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>