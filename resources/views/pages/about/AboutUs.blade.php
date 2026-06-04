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
        <p>Empowering the next generation of engineers and technocrats through excellence in technical education, research, and innovation.</p>
    </div>
</section>

<!-- Main Content -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Text Content -->
            <div class="col-lg-6">
                <div class="about-text-content">
                    <h2>Welcome to BIT</h2>
                    <h5 class="text-danger mb-3 fw-bold">BIT : YOUR GATEWAY TO THE PROFESSIONAL WORLD !!</h5>
                    <p>
                        <strong>Buddha Institute of Technology (BIT)</strong> is an AICTE approved and AKTU affiliated premier engineering institution committed to providing quality technical education. Established with a vision to create competent engineers and technocrats, the institute has been consistently delivering excellence in education, research, and innovation.
                    </p>
                    <p>
                        The institute is approved by the All India Council for Technical Education (AICTE), New Delhi, and is affiliated to Dr. A.P.J. Abdul Kalam Technical University (AKTU), Lucknow. BIT offers undergraduate programs in various disciplines of engineering including Computer Science &amp; Engineering, Electronics &amp; Communication Engineering, Mechanical Engineering, and Civil Engineering. All programs are designed to meet industry requirements and international standards.
                    </p>
                    <p>
                        Located in a serene and pollution-free environment, the institute campus is spread over acres of land with state-of-the-art infrastructure. The campus provides an ideal atmosphere for learning and overall personality development. The institute is well-connected by road and rail, making it easily accessible from major cities.
                    </p>
                </div>
            </div>

            <!-- Image Content -->
            <div class="col-lg-6">
                <div class="about-image-wrapper mb-4">
                    <img src="{{ asset('images/bba_events/pic2.jpg') }}" alt="BIT Campus" />
                </div>
                <div class="about-text-content">
                    <p>
                        BIT maintains strong industry interaction through regular industrial visits, internships, and training programs. Leading companies from various sectors visit the campus for recruitment drives. The institute has established collaborations with reputed industries and research organizations to provide students with practical exposure and hands-on experience in their respective fields.
                    </p>
                    <p>
                        The institute boasts well-equipped laboratories with modern equipment and latest technology. Each department has dedicated laboratories for practical training and research activities. The central library houses a vast collection of books, journals, e-resources, and digital materials. Students have access to online databases and research publications to support their academic and research endeavors.
                    </p>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="about-text-content">
                    <h3 class="fw-bold mb-4 text-danger">Salient Features :</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Highly qualified and experienced faculty members with expertise in their respective domains</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Modern teaching methodology incorporating ICT tools, smart classrooms, and interactive learning</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Special emphasis on communication skills, personality development, and soft skills training</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Dedicated Training &amp; Placement Cell with excellent placement record in reputed companies</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Regular industry exposure through industrial visits, internships, and expert lectures</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Well-equipped laboratories with latest equipment and technology for practical training</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Regular workshops, seminars, and guest lectures by industry experts and academicians</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Excellent sports facilities and encouragement for extracurricular activities</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Central library with extensive collection of books, journals, and e-resources</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Separate hostel facilities for boys and girls with all modern amenities</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Student welfare schemes including scholarships and financial assistance programs</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Innovation and research cell promoting entrepreneurship and research activities</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Community development programs and social outreach initiatives</li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-check-circle-fill text-danger me-2 mt-1"></i> Modern infrastructure including air-conditioned classrooms, auditorium, and conference halls</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Highlight Box -->
        <div class="highlight-box">
            <div class="highlight-text">
                <h3>Innovation &amp; Technical Research Cell</h3>
                <p>BIT houses a cutting-edge technical laboratory and Innovation Incubation Centre to promote entrepreneurship and research activities.</p>
            </div>
            <div class="highlight-action">
                <a href="{{ url('contact') }}" class="btn btn-danger btn-lg px-4 fw-bold" style="border-radius: 8px;">Contact Us</a>
            </div>
        </div>

    </div>
</section>

@endsection
