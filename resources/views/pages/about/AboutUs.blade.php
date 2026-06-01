@extends('layouts.site')

@push('head')
<style>
    .about-hero {
        background: linear-gradient(135deg, rgba(204, 22, 22, 0.9) 0%, rgba(130, 0, 0, 0.9) 100%), url('{{ asset('images/bba_events/pic1.jpg') }}') no-repeat center center;
        background-size: cover;
        padding: 100px 0 80px;
        color: white;
        text-align: center;
        position: relative;
    }

    .about-hero h1 {
        font-weight: 800;
        font-size: 3rem;
        letter-spacing: 1px;
        margin-bottom: 20px;
        text-transform: uppercase;
        animation: fadeInDown 1s ease-in-out;
    }

    .about-hero p {
        font-size: 1.2rem;
        font-weight: 300;
        max-width: 800px;
        margin: 0 auto;
        opacity: 0.9;
    }

    .about-section {
        padding: 80px 0;
        background-color: #fcfcfc;
    }

    .about-text-content {
        padding-right: 40px;
    }

    .about-text-content h2 {
        font-weight: 700;
        color: #222;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 15px;
    }

    .about-text-content h2::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 60px;
        height: 4px;
        background: #cc1616;
        border-radius: 2px;
    }

    .about-text-content p {
        font-size: 1.05rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .about-image-wrapper {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        transform: translateY(0);
        transition: all 0.4s ease;
    }

    .about-image-wrapper:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(204, 22, 22, 0.15);
    }

    .about-image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .feature-card {
        background: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border-bottom: 4px solid transparent;
        text-align: center;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        border-bottom-color: #cc1616;
        box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        background: rgba(204, 22, 22, 0.05);
        color: #cc1616;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .feature-card:hover .feature-icon {
        background: #cc1616;
        color: white;
    }

    .feature-card h4 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 15px;
        color: #333;
    }

    .feature-card p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
    }

    .highlight-box {
        background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
        padding: 40px;
        border-radius: 16px;
        color: white;
        margin-top: 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .highlight-text h3 {
        font-weight: 700;
        margin-bottom: 10px;
    }

    .highlight-text p {
        margin: 0;
        opacity: 0.8;
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 991px) {
        .about-text-content {
            padding-right: 0;
            margin-bottom: 40px;
        }
        .about-hero h1 {
            font-size: 2.5rem;
        }
    }
</style>
@endpush

@section('content')

<!-- Hero Section -->
<section class="about-hero">
    <div class="container">
        <h1>About the Institution</h1>
        <p>Empowering the next generation of leaders through excellence in management, innovation, and technical education.</p>
    </div>
</section>

<!-- Main Content -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Text Content -->
            <div class="col-lg-6">
                <div class="about-text-content">
                    <h2>Welcome to BIM</h2>
                    <p>
                        <strong>Buddha Institute of Management (BIM)</strong> is a premier institution dedicated to excellence in management and technical education. Established with the vision of nurturing competent professionals and responsible citizens, we have consistently focused on delivering quality education, innovation, and industry-oriented learning.
                    </p>
                    <p>
                        The institution aims to bridge the gap between academic knowledge and real-world application through a structured and dynamic learning ecosystem. Our modern approach prepares students to face global challenges with confidence.
                    </p>
                </div>
            </div>

            <!-- Image Content -->
            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <!-- Using a placeholder or existing image from the server -->
                    <img src="{{ asset('images/bba_events/pic2.jpg') }}" alt="BIM Campus" />
                </div>
            </div>

        </div>

        <!-- Features Grid (Institutional Profile) -->
        <div class="features-grid">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-award"></i>
                </div>
                <h4>AICTE Approved</h4>
                <p>Officially approved by the All India Council for Technical Education, New Delhi.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-bank"></i>
                </div>
                <h4>AKTU Affiliated</h4>
                <p>Proudly affiliated to Dr. A.P.J. Abdul Kalam Technical University, Lucknow.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-laptop"></i>
                </div>
                <h4>Modern Infrastructure</h4>
                <p>Equipped with advanced laboratories, digital facilities, and smart classrooms.</p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-lightbulb"></i>
                </div>
                <h4>Innovation Focus</h4>
                <p>Strong emphasis on management, innovation, and fostering entrepreneurial spirit.</p>
            </div>
        </div>

        <!-- Highlight Box -->
        <div class="highlight-box">
            <div class="highlight-text">
                <h3>Business Simulation & Incubation</h3>
                <p>BIM houses a cutting-edge Business Simulation Lab and Entrepreneurship Incubation Centre to foster real-world business skills.</p>
            </div>
            <div class="highlight-action">
                <a href="{{ url('contact') }}" class="btn btn-danger btn-lg px-4 fw-bold" style="border-radius: 8px;">Contact Us</a>
            </div>
        </div>

    </div>
</section>

@endsection
