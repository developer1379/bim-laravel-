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
                        <h6 class="w-bgph fs-6 p-1"><i class=" bx bxl-graphql me-2 "></i>The Department has following labs: </h6>
                        <div class="collapse show  pt-2 pl-0 ">
                            <ul class="list-group ">

                                <li class="list-group-item text-danger border border-1">Fluid Mechanics and Hydraulics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Building Materials Testing Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Surveying Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Building Planning & Drawing Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Structural Detailing and Analysis Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Geo-informatics Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Geo Technical Engineering Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Transportation Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Environmental Engg. Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">NDT Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Solid Mechanics
                                </li>
                                <li class="list-group-item text-danger border border-1">H.H.M. Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Material Testing Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">Environmental Lab
                                </li>
                                <li class="list-group-item text-danger border border-1">CT Lab
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title">
                            <h2 class="text-center text-danger">LABORATRIES</h2>
                        </div>
                        <div class="int-container">

                            <div class="gallery">
                                <div class="container-fluid w-tj">
                                    <p></p>
                                    <h5><a class="text-uppercase text-danger text-decoration-none" href="#" target="_blank">CIVIL LAB COMPLEX</a></h5>

                                    <p>
                                        This complex is used for experiment and teaching in the fields of rigid and flexible pavements and testing pavements materials and structures. Several instruments exist in the lab for conducting materials characterization tests.<br />
                                        <br />
                                    </p>
                                    <p>
                                    </p>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-CE1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 1" />
                                <img src="{{ asset('images/Lab-CE2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 2" />
                            </div>

                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ asset('images/Lab-CE6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 6" />
                                <img src="{{ asset('images/Lab-CE7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 7" />
                            </div>
                        </div>



                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="{{ asset('images/Lab-CE1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 1" />
                        <img src="{{ asset('images/Lab-CE2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 2" />
                        <img src="{{ asset('images/Lab-CE5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 5" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('images/Lab-CE6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 6" />
                        <img src="{{ asset('images/Lab-CE7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 7" />
                        <img src="{{ asset('images/Lab-CE8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 8" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('images/Lab-CE9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 9" />
                        <img src="{{ asset('images/Lab-CE10.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="CE Lab 10" />
                    </div>
                </div>


            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
