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

                                <li class="list-group-item text-danger border border-1">Engineering Chemistry Lab</li>
                                <li class="list-group-item text-danger border border-1">Computer Aided Engg. Graphics </li>
                                <li class="list-group-item text-danger border border-1">Physics Lab </li>
                                <li class="list-group-item text-danger border border-1">Professional Communication Lab </li>

                                <!--<li class="list-group-item text-danger border border-1">Botany Lab </li>
                            <li class="list-group-item text-danger border border-1">Zoology Lab </li>-->

                            </ul>

                        </div>



                    </div>
                    <div class="col-md-8">
                        <div class="section-title">
                            <h2 class="text-center text-danger">LABORATRIES</h2>
                        </div>
                        <div class="int-container">

                            <div class="gallery">
                                <div class="container-fluid">
                                    <p></p>
                                    <h5><a class="text-danger text-decoration-none" href="#" target="_blank">DEPARTMENT OF APPLIED SCIENCES</a></h5>

                                    <p>
                                        The college provides modern teaching facilities and buildings modeled around modern architecture, giving the precinct a dynamic and vibrant atmosphere.
                                        <br />
                                        <br />
                                        The infrastructure also includes a state of art air-conditioned computer laboratory with servers and internet facilities; and work stations have Welding and Smithy equipments that provide hands on experience to our engineering students. Apart from this, each department has its own discipline based laboratories for academic deliverance.<br />
                                        <br />
                                    </p>
                                    <p>
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="{{ asset('images/AP-Lab1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 1" />
                        <img src="{{ asset('images/AP-Lab2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 2" />
                        <img src="{{ asset('images/AP-Lab5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 5" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('images/AP-Lab6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 6" />
                        <img src="{{ asset('images/AP-Lab7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 7" />
                        <img src="{{ asset('images/AP-Lab8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 8" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('images/AP-Lab9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 9" />
                        <img src="{{ asset('images/AP-Lab10.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="AP Lab 10" />
                    </div>
                </div>



            </div>
        </section>

    </div>
    <!-- About Us Section Ends -->
@endsection
