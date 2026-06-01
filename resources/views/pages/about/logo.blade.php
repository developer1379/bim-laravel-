@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
<style>
        /* Style for the logo container with background color */
        .logo-container {
            background-color: #ffffff; /* White background */
            padding: 20px; /* Optional padding */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        /* Responsive styling for the embedded logo */
        .logo-container img {
            width: 100%;
            max-width: 800px; /* Maximum width for larger screens */
            height: auto; /* Keeps the aspect ratio of the image */
        }

        /* Adjust padding and container width for smaller screens */
        @media (max-width: 768px) {
            .logo-container {
                padding: 10px;
            }
        }
    </style>
@endpush

@section('content')
<div class="logo-container">
        <img src="{{ asset('Images/logo.png') }}" alt="Logo Image" />
    </div>
@endsection
