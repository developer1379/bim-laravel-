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



                                <li class="list-group-item text-danger border border-1"> Basic Electrical Engg. Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Basic Electrical Engg. Lab and General Engineering
                                </li>
                                <li class="list-group-item text-danger border border-1"> Analog Electronics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Digital Electronics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Electrical Instrumentation & Measurement Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Electrical Machine-I Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Environmental Studies Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Industrial Electronics and Control Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Electrical Design Drawing and Estimating –I Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Energy Conservation Lab
                                </li>
                                <li class="list-group-item text-danger border border-1"> Electrician Lab
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
                                    <h5><a class="text-uppercase text-danger text-decoration-none"  href="#" target="_blank">ELECTRICAL LAB COMPLEX</a></h5>

                                    <p>
                                        This complex gives better understanding of basic electrical engineering principles, theorems and electrical machines and instruments .It includes various symbols of electrical equipments and machines & verification of various theorems on tailor made circuits.<br />
                                        <br />
                                    </p>
                                    <p>
                                    </p>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-EE1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="EE Lab 1" />
                                <img src="{{ asset('images/Lab-EE2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="EE Lab 2" />
                            </div>

                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-EE3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="EE Lab 3" />
                                
                                <img src="{{ asset('images/Lab-EE4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="EE Lab 4" />
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
