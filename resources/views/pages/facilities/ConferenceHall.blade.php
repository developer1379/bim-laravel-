@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- About Us Section Start -->
    <div class="container">




        <section id="about" class="about pt-3 ">
            <div class=" container  p-0 ">
                <div class="row shadow">


                    <div class="col-lg-12">
                        <div class="w_content">

                            <div class="border border-1 p-3 w-content">
                                <div class="section-title">
                                    <h2 class=" text-danger text-center text-uppercase">Conference Hall</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class="">BIT has a fully air-conditioned conference hall having state-of-the-art equipment and facilities.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Set1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Set1" />
                                        <img src="{{ asset('Images/Set2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Set2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Set3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Set3" />
                                        <img src="{{ asset('Images/Set4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Set4" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Set2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Set2" />
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
@endsection
