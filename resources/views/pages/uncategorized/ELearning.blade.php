<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar')

    <!-- About Us Section Start -->
    <div class="container">
        <section id="about-us" style="padding: 40px; font-family: Arial, sans-serif;">
            <h2 class="text-center text-danger fw-bold text-uppercase">E-Learning</h2>
            <div class=" border border-1 p-3 ">
                <section class="section m-t-0 w-tj pt-0">
                    <div class=" row">
                        <div class=" col-lg-12">
                            <h3 class="w-hd-u">AICTE E-Resources </h3>
                            <ul class="list-group">
                                <li class="list-group-item"><i class="bx bx-star me-3"></i> <a class="text-decoration-none" href="https://free.aicte-india.org/" target="_blank">Free E-Learning Courses </a></li>
                                <li class="list-group-item"><i class="bx bx-star me-3"></i> <a class="text-decoration-none" href="https://www.aicte-india.org/opportunities/students/resources_students" target="_blank">Resources for Students </a></li>
                                <li class="list-group-item"><i class="bx bx-star me-3"></i> <a class="text-decoration-none" href="https://www.aicte-india.org/opportunities/students/competition" target="_blank">Competitions for Students </a></li>
                                <li class="list-group-item"><i class="bx bx-star me-3"></i> <a class="text-decoration-none" href="https://www.aicte-india.org/schemes/students-development-schemes" target="_blank">Students Development schemes </a></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->

    @include('includes.footer')
    @include('includes.body_links')
</body>

</html>