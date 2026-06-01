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
                                    <h2 class=" text-danger text-center text-uppercase">Guest House</h2>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/GestRoom1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Guest Room 1" />
                                        
                                        <img src="{{ asset('Images/GestRoom2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Guest Room 2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img src="{{ asset('Images/GestRoom3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Guest Room 3" />
                                    <img src="{{ asset('Images/GestRoom4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Guest Room 4" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img src="{{ asset('Images/GestRoom5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Guest Room 5" />
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
