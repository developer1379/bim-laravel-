@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
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
                                    <h2 class=" text-danger text-center text-uppercase">TRANSPORT</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class="">
                                    Institute provides transport facilities for staff and students by the means of six buses, plying between the city and the college.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/transport1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Transport 1" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/transport2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Transport 2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/transport3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Transport 3" />
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
