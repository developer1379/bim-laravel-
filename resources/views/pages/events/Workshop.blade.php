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
                                    <h2 class="text-center text-uppercase text-danger">Workshop</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">

                                    <p class=" fw-bold">
                                        The college has a well-equipped workshop where students learn about basic manufacturing methods. Every student prepares jobs in all the shops with his/her own hands under the guidance of experienced faculty and technicians. The workshop has the following sections:</p>
                                    <ul>
                                        <li>Machine Shop</li>
                                        <li>Foundry Shop</li>
                                        <li>Welding Shop</li>
                                        <li>Fitting Shop</li>
                                        <li>Sheet Metal Shop</li>
                                    </ul>
                                </section>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/AUTOMOBILE.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Automobile Lab" />
                                        <img src="{{ asset('Images/CARPENTRY SHOP.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Carpentry Shop" />
                                        <img src="{{ asset('Images/DRAWING LAB-2.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Drawing Lab" />
                                        <img src="{{ asset('Images/DSC_0152.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Campus View 1" />
                                        <img src="{{ asset('Images/DSC_0202.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Campus View 2" />
                                        <img src="{{ asset('Images/FITTING SHOP.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Fitting Shop" />
                                        <img src="{{ asset('Images/FLUID MACHINERY.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Fluid Machinery" />
                                        <img src="{{ asset('Images/FLUID MECHANICS.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Fluid Mechanics" />
                                        <img src="{{ asset('Images/HMT LAB.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="HMT Lab" />
                                        <img src="{{ asset('Images/WORKSHOP-1.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Workshop 1" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/DSC_0203.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Campus View 3" />
                                        <img src="{{ asset('Images/FITTING SHOP-2.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Fitting Shop 2" />
                                        <img src="{{ asset('Images/FLUID MACHINERY-2.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Fluid Machinery 2" />
                                        <img src="{{ asset('Images/GRINDING MACHINE.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Grinding Machine" />
                                        <img src="{{ asset('Images/HYDROLC RAM2.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hydraulic Ram 2" />
                                        <img src="{{ asset('Images/INVENTION CENTRE.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Invention Centre" />
                                        <img src="{{ asset('Images/MACHINE SHOP.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Machine Shop" />
                                        <img src="{{ asset('Images/MECHANICS LAB.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Mechanics Lab" />
                                        <img src="{{ asset('Images/MM LAB.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="MM Lab" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('Images/HYDROLIC RAM.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Hydraulic Ram" />
                                        <img src="{{ asset('Images/MACHINE SHOP-2.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Machine Shop 2" />
                                        <img src="{{ asset('Images/MST LAB.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="MST Lab" />
                                        <img src="{{ asset('Images/PROJECT WORKSHOP.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Project Workshop" />
                                        <img src="{{ asset('Images/RAC LAB.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="RAC Lab" />
                                        <img src="{{ asset('Images/RAC LAB-2.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="RAC Lab 2" />
                                        <img src="{{ asset('Images/RESEARCH.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Research Lab" />
                                        <img src="{{ asset('Images/THYRMODYNAMICS.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Thermodynamics Lab" />
                                        <img src="{{ asset('Images/THYROMODYNAMICS 2.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Thermodynamics Lab 2" />
                                        <img src="{{ asset('Images/TOM.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="TOM Lab" />
                                        <img src="{{ asset('Images/WELDING SHOP.JPG') }}" class="w-100 shadow-1-strong rounded mb-4" alt="Welding Shop" />
                                        
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
