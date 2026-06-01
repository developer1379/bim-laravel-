@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.inner_mba',
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
<br>
   <!--<div class="container">
              <div class="row">

                       <div class="col-md-12">
                          
                                <div class="col-md-3">
                                    
                                    <img class="img-thumbnail" src="{{ asset('../../../images/ssp/1.jpeg') }}" alt="Student speek">

                                </div>
                                <div class="col-md-3">
                                    

                                    <img class="img-thumbnail" src="{{ asset('../../../images/ssp/2.jpeg') }}" alt="Student speek">

                                </div>
                                <div class="col-md-3">
                                    
                                        <img class="img-thumbnail" src="{{ asset('../../../images/ssp/3.jpeg') }}" alt="Student speek">

                                </div> 
                                 <div class="col-md-3">
                                    
                                        <img class="img-thumbnail" src="{{ asset('../../../images/ssp/4.jpeg') }}" alt="Student speek">

                                </div> 

                       </div>


            </div>
</div>-->
<br>

<Section class="container">
        <h1 class="text-center pb-4" style="text-transform: uppercase;" data-aos="fade-up" data-aos-delay="300">Student Speak</h1>
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="300">
                    <img class="img-thumbnail" src="{{ asset('../../../images/ssp/1.jpeg') }}" alt="Student speek">
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="400">
                    <img class="img-thumbnail" src="{{ asset('../../../images/ssp/2.jpeg') }}" alt="Student speek">
                   
                </div>
            </div>




            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="500">
                    <img class="img-thumbnail" src="{{ asset('../../../images/ssp/3.jpeg') }}" alt="Student speek">
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card text-start shadow border-0" data-aos="fade-up" data-aos-delay="600">
                     <img class="img-thumbnail" src="{{ asset('../../../images/ssp/4.jpeg') }}" alt="Student speek">
                   
                    
                </div>
            </div>
            
           
        </div>
    </Section>
    <!--<div class="pdf-container">
        <video width="33%" height="33%" controls>
            <source src="{{ asset('../../../Images/mba_video/mba_v1.mp4') }}" type="video/mp4">
            <source src="{{ asset('../../../Images/mba_video/mba_v1.ogg') }}" type="video/ogg">
  
         </video>

          <video width="33%" height="33%" controls>
            <source src="{{ asset('../../../Images/mba_video/mba_v2.mp4') }}" type="video/mp4">
            <source src="{{ asset('../../../Images/mba_video/mba_v2.ogg') }}" type="video/ogg">
  
         </video>
          <video width="33%" height="33%" controls>
            <source src="{{ asset('../../../Images/mba_video/mba_v3.mp4') }}" type="video/mp4">
            <source src="{{ asset('../../../Images/mba_video/mba_v3.ogg') }}" type="video/ogg">
  
         </video>
    </div>-->
@endsection
