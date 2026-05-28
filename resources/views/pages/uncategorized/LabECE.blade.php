<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=deviLab-ce-width, initial-scale=1">
    <title>LABORATRIES - BIM</title>
    <link href="{{ asset('Includes/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('Images/logo.png') }}">
    @include('includes.head_links')
</head>

<body>
    @include('includes.navbar')

    <!-- About Us Section Start -->
    <div class="container">

        <section id="about" class="about bg-white ">
            <div class="container shadow  px-2 border border-1 p-3">
                <div class="row">
                    <div class="col-md-4 px-md-0 pb-50">
                        <h6 class="w-bgph fs-6 p-1 "><i class=" bx bxl-graphql me-2 "></i>The Department has following labs: </h6>
                        <div class="collapse show  pt-2 pl-0 ">
                            <ul class="list-group ">
                                <li class="list-group-item text-danger border border-1">Electronic Devices Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Digital System Design Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Network Analysis And Synthesis Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Integrated Circuits Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Digital Signal Processing Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Microprocessor Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Optical Communication Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Electronics Circuit Design Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Communication Engineering Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Analog Circuit Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Signal System Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Digital Communication Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Control System Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Microcontrollers & Embedded System Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Project Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Robotics & Iot Lab
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title">
                            <h2 class=" text-danger text-center">LABORATRIES</h2>
                        </div>
                        <div class="int-container">

                            <div class="gallery">
                                <div class="container-fluid w-tj">
                                    <p></p>
                                    <h5><a class="text-uppercase text-danger text-decoration-none" href="#" target="_blank">DEPARTMENT OF ELECTRONICS & COMMUNICATION ENGINEERING </a></h5>

                                    <p>
                                        The department provides access to study of high end software like MATLAB, Lab View, Cadence Tools, Mentor Graphics, Xilinx, Vx-works Windriver, Wireless LAN Network and Electromagnetic Simulators.<br />
                                        <br />
                                    </p>
                                    <p>
                                    </p>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-ECE1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ECE Lab 1" />
                                <img src="{{ asset('images/Lab-ECE2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ECE Lab 2" />
                            </div>

                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-ECE3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ECE Lab 3" />

                                <img src="{{ asset('images/Lab-ECE3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ECE Lab 3" />
                            </div>
                        </div>


                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="{{ asset('Images/Lab-ECE5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ECE5" />
                        <img src="{{ asset('Images/Lab-ECE6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ECE6" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('Images/Lab-ECE7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ECE7" />
                        <img src="{{ asset('Images/Lab-ECE8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ECE8" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('Images/Lab-ECE9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ECE9" />
                        
                        <img src="{{ asset('Images/Lab-ECE10.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ECE10" />
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