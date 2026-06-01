@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@section('content')
<!-- Affiliation Section Start -->
    <div class=" container ">
        <div class="row shadow">
            <div class="col-lg-12">
                <div class="w_content">
                    <div class=" border border-0 p-3 ">
                        <div class="section-title">
                            <h2 class=" text-danger text-center" data-aos="fade-up" data-aos-delay="300">Affiliation AICTE</h2>
                        </div>
                        <section class="section m-t-0 w-tj pt-0">
                            <div class="row d-flex justify-content-center" style='text-transform:uppercase;'>
                                
                                <div class="col-md-4 sm-12 shadow-sm text-center py-4" data-aos="fade-up" data-aos-delay="500">
                                    <h5><a target="_blank" class="text-decoration-none text-dark" href="{{ url('AICTE-LOA-2023-2024') }}">AICTE Letter of Approval (LoA) 2023-24</a></h5>
                                </div>
                                <div class="col-md-4 sm-12 shadow-sm text-center py-4" data-aos="fade-up" data-aos-delay="700">
                                    <h5><a class="text-decoration-none text-dark" target="_blank" href="{{ url('AICTE-EOA-2024-2025') }}">AICTE Extension of Approval (EoA) 2024-25</a></h5>
                                </div>
                            </div>
                            
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Affiliation Section Ends -->
@endsection
