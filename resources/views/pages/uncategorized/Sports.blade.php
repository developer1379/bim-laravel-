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
                                    <h2 class="text-center text-danger text-uppercase">Sports Facilities</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class=" fw-bold">BIT offers best of sporting facilities for its students for various Out-door sports like well constructed Basket Ball Court of required standards, Lawn tennis Court, Badminton Court and Cricket Field. There are well equipped facilities for In-door sports like Table Tennis, Carrom. Construction of In-door Squash Court is being planned.</p>
                                </section>
                                <!-- Gallery -->
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Sports1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports1" />
                                        <img src="{{ asset('Images/Sports2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports2" />
                                        <img src="{{ asset('Images/Sports3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports3" />
                                        <img src="{{ asset('Images/Sports4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports4" />
                                        <img src="{{ asset('Images/Sports5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports5" />
                                        <img src="{{ asset('Images/Sports11.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports11" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Sports7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports7" />
                                        <img src="{{ asset('Images/Sports8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports8" />
                                        <img src="{{ asset('Images/Sports9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports9" />
                                        <img src="{{ asset('Images/Sports10.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports10" />
                                        <img src="{{ asset('Images/Sports6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports6" />
                                        <img src="{{ asset('Images/Sports12.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports12" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/Sports13.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports13" />
                                        <img src="{{ asset('Images/Sports14.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports14" />
                                        <img src="{{ asset('Images/Sports15.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports15" />
                                        <img src="{{ asset('Images/Sports16.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports16" />
                                        <img src="{{ asset('Images/Sports17.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Sports17" />
                                    </div>
                                </div>

                                <!-- Gallery -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- About Us Section Ends -->
@endsection
