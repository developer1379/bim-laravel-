@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- About Us Section Start -->
    <div class="container">

        <section id="about" class="about bg-white ">
            <div class="container shadow  px-2 border border-1 p-3">
                <div class="row">
                    <div class="col-md-4 px-md-0 pb-50">
                        <h6 class="w-bgph fs-6 p-1 "><i class=" bx bxl-graphql me-2 "></i>The Department has following labs: </h6>
                        <div class="collapse show  pt-2 pl-0 ">
                            <ul class="list-group ">


                                <li class="list-group-item text-danger border border-1"> Engg. Mechanics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Material Science & Testing Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Machine Drawing I
                                </li>
                                <li class="list-group-item text-danger border border-1"> Thermodynamics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Fluid Mechanics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Machine Drawing II
                                </li>
                                <li class="list-group-item text-danger border border-1"> Manufacturing Science I Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Measurement & Metrology Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Electrical Machines & Automatic Control Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Machine Design I Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Manufacturing Science II Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Heat & Mass Transfer Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Fluid Machinery Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Machine Design II Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Theory Of Machines Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Refrigeration & Air Conditioning Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> CAD / CAM Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> IC Engine & Automobile Lab
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title">
                            <h2 class=" text-danger">LABORATRIES</h2>
                        </div>
                        <div class="int-container">

                            <div class="gallery">
                                <div class="container-fluid w-tj">
                                    <p></p>
                                    <h5><a class="text-uppercase text-danger text-decoration-none" href="#" target="_blank">MECHANICAL LAB COMPLEX</a></h5>

                                    <p>
                                        It plays a key role in developing, operating and manufacturing new machines, devices and processes to benefit humanity.<br />
                                        <br />
                                    </p>
                                    <p>
                                    </p>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-ME1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ME Lab 1" />
                                <img src="{{ asset('images/Lab-ME2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ME Lab 2" />
                            </div>

                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-ME3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ME Lab 3" />

                                <img src="{{ asset('images/Lab-ME4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="ME Lab 4" />
                            </div>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="{{ asset('Images/Lab-ME5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ME5" />
                        <img src="{{ asset('Images/Lab-ME6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ME6" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('Images/Lab-ME7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ME7" />
                        <img src="{{ asset('Images/Lab-ME8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ME8" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('Images/Lab-ME9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ME9" />

                        <img src="{{ asset('Images/Lab-ME10.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Lab ME10" />
                    </div>
                </div>


            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
