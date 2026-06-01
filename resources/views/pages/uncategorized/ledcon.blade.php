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
            
               <img src="{{ asset('images/lec.jpeg') }}" class="img-thumbnail img-rounded" alt="leadcom" title="leadcom " width="304" height="236"> 

        </div>
         <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
             <h3 class="text-center text-danger text-uppercase"> LeadCon </h3>

             <p class="text-justify">
                 LeadCon, organized by Buddha Institute of Management (BIM), is a dynamic platform designed to foster leadership, creativity, and competitive excellence among students., the event brings together a blend of technical, managerial, and creative competitions aimed at holistic student development.
The conclave features engaging events such as Ad-Mad (team-based advertising challenge), CodeQuest (technical coding competition), and Biz-Quiz (business quiz), along with other collaborative activities like Fusion Fiesta. These events are thoughtfully curated to enhance innovation, analytical thinking, teamwork, and communication skills.
Participants compete for cash prizes and certificates, making LeadCon not only a platform for learning and exposure but also for recognition and achievement. The event reflects BIM’s commitment to nurturing future-ready professionals through experiential learning and competitive engagement


             </p>

         </div>


    </div>
    <!--<div class="pdf-container">
        <embed src="{{ asset('PDF/MOU.pdf#toolbar=0') }}" type="application/pdf" width="50%" height="900px" />
    </div>-->
@endsection
