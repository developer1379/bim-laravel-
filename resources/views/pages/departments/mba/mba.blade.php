@extends('layouts.site', [
    'headPartial' => 'includes.head_links1',
    'headerPartial' => 'includes.inner_mba',
    'footerPartial' => 'includes.footer1',
    'scriptsPartial' => 'includes.body_links1',
])

@push('head')
<style>

         /* Popup Start */
         #popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            display: none;
            /* Hidden by default */
        }

        /* Popup image */
        #popup img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            box-shadow: 0 0 15px #fff
        }

        /* Close button */
        #popupClose {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Popup Ends */
        .news-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .news-list li {
            padding: 5px 10px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        .news-list li a {
            text-decoration: none;
            color: #cc1616;
        }

        @media (max-width: 768px) {
            .news-section {
                height: auto !important;
            }

            .news-list {
                font-size: 12px;
            }
        }
    </style>
<style>
        body {
            background-color: #ffffff;
        }

        .gallery-container {
            max-width: 1100px;
            margin: 50px auto;
            text-align: center;
        }

        .gallery-title {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: auto;
            gap: 10px;
        }

        .gallery .img-large {
            grid-column: span 2;
            grid-row: span 2;
        }

        .show-more-btn {
            background-color: #d21404;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 20px;
            margin-top: 20px;
        }

        .show-more-btn:hover {
            background-color: darkred;
        }
    </style>
@endpush

@section('content')
<x-department-hero title="Department of Business Administration (MBA)">
    <div class="carousel-item active h-100">
        <img src="{{ asset('images/1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero Image 1">
    </div>
    <div class="carousel-item h-100">
        <img src="{{ asset('images/2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero Image 2">
    </div>
    <div class="carousel-item h-100">
        <img src="{{ asset('images/3.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Hero Image 3">
    </div>
</x-department-hero>

<x-department-social-cards />
@endsection

