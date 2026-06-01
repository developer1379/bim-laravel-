@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
<style>

    </style>
@endpush

@section('content')
<main id="main">
        <section id="about" class="about pt-3 ">
            <div class=" container p-0 ">
                <div class="row mt-3 mb-5 shadow">
                    <div class="col-lg-12">
                        <div class="w_content">
                            <div class="p-3 w-content">
                                <div class="section-title">
                                    <h2 class="courses-heading text-center text-danger" style='text-transform:uppercase;' data-aos="fade-up" data-aos-delay="300">Programmes</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">
                                    <div class=" row  ">
                                        <div class=" col-md-6 p-3 ">
                                            <div class="shadow h-100">
                                                <h4 class=" border border-1 border-danger px-3 py-2 text-center fw-bolder text-danger " data-aos="fade-up" data-aos-delay="400">Master's Degree:</br> (College Code - 1212)</h4>
                                                <h5 class="mt-3" style="text-align: center;" data-aos="fade-up" data-aos-delay="500">MBA (Master of Business Administration)</h5>

                                                <h5 class="mb-3" style="text-align: center;" data-aos="fade-up" data-aos-delay="600">MCA (Master of Computer Applications)</h5>
                                            </div>
                                        </div>
                                        <div class=" col-md-6 p-3 ">
                                            <div class=" shadow h-100">
                                                <h4 class=" border border-1 border-danger px-3 py-2 text-center fw-bolder text-danger " data-aos="fade-up" data-aos-delay="400">Bachelor's Degree: </br>(College Code - 1212)</h4>
                                                <h5 class="mt-3" style="text-align: center;" data-aos="fade-up" data-aos-delay="500">BBA (Bachelor of Business Administration)</h5>
                                                <h5 class="mb-3" style="text-align: center;" data-aos="fade-up" data-aos-delay="600">BCA (Bachelor of Computer Applications)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class=" border border-1 border-danger px-3 py-2 text-center fw-bolder text-danger mt-5 " data-aos="fade-up" data-aos-delay="500">Approved by AICTE ,New Delhi & Affiliated to Dr.APJ Abdul Kalam Technical University ,Lucknow
                                    </h4>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
