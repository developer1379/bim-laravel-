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
         
         <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"><h4 class="text-center text-danger text-uppercase"> college video</h4></div>

     </div>


    <div class="pdf-container">
        <div class="embed-responsive embed-responsive-16by9">
        
         <a href="https://youtu.be/JgfesOatD3o?si=5gEnlamiAwUIq2yV" target="_blank" alt="college video" title="college video"> click here to view more</a>
</div>
    </div>
@endsection
