@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
<style>
    .placement-hero {
        background: linear-gradient(135deg, rgba(204,22,22,0.92) 0%, rgba(100,0,0,0.92) 100%);
        padding: 60px 0 50px;
        text-align: center;
        color: #fff;
    }
    .placement-hero h1 {
        font-size: 2.5rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .placement-hero p {
        font-size: 1.1rem;
        opacity: 0.85;
        margin-top: 10px;
    }

    .placement-slider-section {
        padding: 60px 0;
        background: #f8f9fa;
    }

    .placement-swiper {
        padding: 20px 10px 50px !important;
    }

    .placement-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        text-align: center;
        padding: 30px 20px 20px;
        transition: all 0.4s ease;
        border-bottom: 4px solid transparent;
        height: 100%;
    }

    .placement-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(204,22,22,0.12);
        border-bottom-color: #cc1616;
    }

    .placement-card .avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #cc1616;
        margin: 0 auto 20px;
        display: block;
        transition: transform 0.4s ease;
    }

    .placement-card:hover .avatar {
        transform: scale(1.07);
    }

    .placement-card h5 {
        font-size: 1rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 12px;
    }

    .placement-card .badge-dept {
        display: inline-block;
        background: rgba(204,22,22,0.08);
        color: #cc1616;
        font-size: 0.78rem;
        font-weight: 600;
        padding: 3px 12px;
        border-radius: 50px;
        margin-bottom: 12px;
    }

    .placement-card .info-row {
        font-size: 0.85rem;
        color: #555;
        margin-bottom: 5px;
    }

    .placement-card .info-row span {
        font-weight: 600;
        color: #222;
    }

    .placement-card .package-badge {
        display: inline-block;
        background: linear-gradient(135deg, #cc1616, #8a0000);
        color: white;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 5px 18px;
        border-radius: 50px;
        margin-top: 12px;
    }

    /* Swiper custom arrows */
    .swiper-button-next,
    .swiper-button-prev {
        color: #cc1616 !important;
        background: white;
        width: 44px !important;
        height: 44px !important;
        border-radius: 50%;
        box-shadow: 0 4px 15px rgba(0,0,0,0.12);
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 16px !important;
        font-weight: 700;
    }

    .swiper-pagination-bullet-active {
        background: #cc1616 !important;
    }

    .section-title {
        text-align: center;
        font-size: 2rem;
        font-weight: 800;
        color: #222;
        margin-bottom: 8px;
        position: relative;
        padding-bottom: 15px;
    }
    .section-title::after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        width: 60px;
        height: 4px;
        background: #cc1616;
        border-radius: 2px;
    }
    .section-subtitle {
        text-align: center;
        color: #777;
        margin-bottom: 40px;
        font-size: 1rem;
    }
</style>
@endpush

@section('content')

<!-- Hero -->
<section class="placement-hero">
    <div class="container">
        <h1>🏆 Top Placements</h1>
        <p>Our students are placed in top companies across India & beyond.</p>
    </div>
</section>

<!-- Slider Section -->
<section class="placement-slider-section">
    <div class="container">
        <h2 class="section-title">Our Top Placed Students</h2>
        <p class="section-subtitle">Celebrating the achievers who made us proud</p>

        <div class="swiper placement-swiper">
            <div class="swiper-wrapper">

                @php
                $students = [
                    ['img' => asset('images/top_placement_bIM/1.jpeg'), 'name' => 'Harshita Srivastava', 'dept' => 'MBA', 'batch' => '2024-26', 'company' => 'Deloitte, Gurugram', 'package' => '18 LPA'],
                    ['img' => asset('images/top_placement_bIM/2.jpeg'), 'name' => 'Aditya Kumar Singh', 'dept' => 'MBA', 'batch' => '2025', 'company' => 'India Compressor Ltd', 'package' => '8 LPA'],
                    ['img' => asset('images/top_placement_bIM/3.jpeg'), 'name' => 'Sneha Pandey', 'dept' => 'MBA', 'batch' => '2025', 'company' => 'Welspun GCC', 'package' => '6 LPA'],
                    ['img' => asset('images/top_placement_bIM/4.jpeg'), 'name' => 'Priya Bhatt', 'dept' => 'MBA', 'batch' => '2026', 'company' => 'Capgemini', 'package' => '5.5 LPA'],
                    ['img' => asset('images/top_placement_bIM/5.jpg'), 'name' => 'Amit Kumar Dubey', 'dept' => 'MBA', 'batch' => '2026', 'company' => 'Nikham Innovation Pvt. Ltd.', 'package' => '5.5 LPA'],
                    ['img' => asset('images/top_placement_bIM/6.jpeg'), 'name' => 'Atrish Shukla', 'dept' => 'MBA', 'batch' => '2025', 'company' => 'Seeds Fincap Pvt Ltd', 'package' => '4.49 LPA'],
                    ['img' => asset('images/top_placement_bIM/7.jpeg'), 'name' => 'Vachaspati Ojha', 'dept' => 'MBA', 'batch' => '2025', 'company' => 'Seeds Fincap Pvt Ltd', 'package' => '4.49 LPA'],
                    ['img' => asset('images/top_placement_bIM/8.jpeg'), 'name' => 'Ratnesh Kumar', 'dept' => 'MBA', 'batch' => '2025', 'company' => 'Seeds Fincap Pvt Ltd', 'package' => '4.49 LPA'],
                    ['img' => asset('images/top_placement_bIM/9.jpeg'), 'name' => 'Versha Vedi', 'dept' => 'MCA', 'batch' => '2026', 'company' => 'Satya Micro Capital', 'package' => '2.58 LPA'],
                    ['img' => asset('images/top_placement_bIM/10.jpeg'), 'name' => 'Nitin Kumar Rai', 'dept' => 'MCA', 'batch' => '2026', 'company' => 'Startek', 'package' => '2.5 LPA'],
                ];
                @endphp

                @foreach($students as $student)
                <div class="swiper-slide">
                    <div class="placement-card">
                        <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}" class="avatar" />
                        <h5>{{ $student['name'] }}</h5>
                        <span class="badge-dept">{{ $student['dept'] }}</span>
                        <div class="info-row">Batch: <span>{{ $student['batch'] }}</span></div>
                        <div class="info-row">Company: <span>{{ $student['company'] }}</span></div>
                        <div><span class="package-badge">{{ $student['package'] }}</span></div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Arrows & Pagination -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const placementSwiper = new Swiper('.placement-swiper', {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 24,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                576: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            }
        });
    });
</script>

@endsection
