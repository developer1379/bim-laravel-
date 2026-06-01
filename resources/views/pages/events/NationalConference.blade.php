@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
<style>
        /* Style for the PDF container with background color */
        .pdf-container {
            background-color: #ffffff; /* Blue background */
            padding: 20px; /* Optional padding */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        /* Responsive styling for the embedded PDF */
        .pdf-container embed {
            width: 100%;
            max-width: 800px; /* Maximum width for larger screens */
            height: 90vh; /* Height adapts to viewport */
        }

        /* Adjust padding and container width for smaller screens */
        @media (max-width: 768px) {
            .pdf-container {
                padding: 10px;
            }
        }
    </style>
@endpush

@section('content')
<section id="about" class="about pt-3 ">
            <div class=" container p-0 ">

                <div class="row shadow my-3">
                    <h5>Research & Development >> Research >> <span class="active" style="color: #ff0000;"> National Conference </span> </h5>
                </div>
                </div>
            </section>

      <div class="pdf-container">

        <embed src="{{ asset('PDF/BIM NATIONAL CONFERENCE- BCA.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />

    </div>

    <!-- About Us Section Start -->
   <!-- <div class="container">


  s


        <section id="about" class="about pt-3 ">
            <div class=" container p-0 ">
                <div class="row shadow my-3">


                    <div class="col-lg-12">
                        <div class="w_content">

                            <div class="p-3 w-content">
                                <div class="section-title">
                                    <h2 class=" text-danger text-center text-uppercase">National Conference</h2>
                                </div>
                                <section class="section m-t-0 w-tj pt-0">
                                    
                                    <div class="pdf-container">
                                      <embed src="{{ asset('PDF/BIM NATIONAL CONFERENCE- BCA.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />
                                    </div>

                                </section>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>-->
    <!-- About Us Section Ends -->
@endsection
