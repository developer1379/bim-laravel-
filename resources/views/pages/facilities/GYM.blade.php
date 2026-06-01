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
                                    <h2 class=" text-danger text-center text-uppercase">GYM</h2>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/gym3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Gym 3" />

                                        <img src="{{ asset('Images/gym5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Gym 5" />
                                        
                                        <img src="{{ asset('Images/gym6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Gym 6" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/gym7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Gym 7" />
                                        
                                        <img src="{{ asset('Images/gym1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Gym 1" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <img src="{{ asset('Images/gym2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Gym 2" />
                                        <img src="{{ asset('Images/gym4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Gym 4" />
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
