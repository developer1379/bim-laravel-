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
                                    <h2 class="text-center text-uppercase text-danger">Mess</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class=" fw-bold">
                                    Institute is equipped with a fully functional mess to serve hygienic food to the students. It is run by the Management under the guidance of the Administrative Officer. Vegetarian food is served in the hostel. Mess charges are collected on an annual basis at the time of admission.</p>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/mess1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess1" />
                                        <img src="{{ asset('images/mess2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess2" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/mess3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess3" />
                                        <img src="{{ asset('images/mess4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess4" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('images/mess2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mess2" />
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
