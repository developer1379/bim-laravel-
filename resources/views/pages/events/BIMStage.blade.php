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
                                    <h2 class=" text-danger text-center text-uppercase">BGI STAGE:</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class="">BIT Stage is equipped with permanent decorative structure alongwith proper light and sound facility is available for arts and cultural events.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Stage2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Stage 2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Stage1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Stage 1" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Stage2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Stage 2" />
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
