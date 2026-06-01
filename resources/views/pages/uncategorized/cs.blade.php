@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
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
<div class="row">
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            
               <!--<img src="{{ asset('Images/lec.jpeg') }}" class="img-thumbnail img-rounded" alt="leadcom" title="leadcom " width="304" height="236"> -->

        </div>
         <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
             <h3 class="text-center text-danger text-uppercase"> CCC Certification </h3>
             <hr>

             <p class="text-justify">
                 Buddha Institute of Management (BIM) offers the CCC (Course on Computer Concepts) certification free of cost to all students, promoting essential digital literacy and technical skills. This initiative ensures every student is equipped with fundamental IT competencies to enhance employability and career readiness.


             </p>

         </div>
 <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            
               <!--<img src="{{ asset('Images/lec.jpeg') }}" class="img-thumbnail img-rounded" alt="leadcom" title="leadcom " width="304" height="236"> -->

        </div>

    </div>
    <!--<div class="pdf-container">
        <embed src="{{ asset('PDF/MOU.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />
    </div>-->
@endsection
