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
    <div class=" container p-0 ">
        <div class="row shadow my-3">


            <div class="col-lg-12">
                <div class="w_content">

                    <div class="p-3 w-content">
                        <div class="section-title">
                            <h2 class=" text-danger">BIT INCUBATION CELL</h2>
                        </div>
                        <section class="section m-t-0 w-tj pt-0">
                            <div class="w-img1 mb-4">
                                <img alt="" src="{{ asset('images/INCUBATION.JPG') }}" class=" img-fluid" style="max-height:350px !important;">
                            </div>

                            <p><span style="font-weight: 700; color: rgb(0, 0, 0); font-size: 18px; text-align: justify;">Head: Mr. Ankur Kumar</span></p>

                            <p>
                                <font color="#000000"><span style="font-size: 16px;">Incubation Cell in&nbsp; the Institute is established with an objective to encourage the entrepreurship skill and innovative acumen among students by our Institute under the aegis of <em><strong>KALAM CENTRE FOR INNOVATION AND INCUBATION OF STRATUPS</strong></em> of Dr. A.P.J. Abdul Kalam Technical University and Department of Researech &amp; Development, Buddha Institute of Technology, Gorakhpur. Institute has provided the required infrastructure and fund to further the objectives of the Incubation Cell.</span></font>
                            </p>
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
    </div>
    <!-- About Us Section Ends -->
@endsection
