@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
<style>
    /* Hero Banner Area styling */
    .hero-banner-section {
        background: linear-gradient(135deg, #cc1616, #7a0c0c);
        color: #ffffff;
        padding: 4rem 0 3rem 0;
        position: relative;
        overflow: hidden;
    }

    .hero-banner-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.08) 0%, transparent 60%);
        pointer-events: none;
    }

    .hero-banner-section .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .hero-banner-section .breadcrumb-item a:hover {
        color: #ffffff;
    }

    .hero-banner-section .breadcrumb-item.active {
        color: rgba(255, 255, 255, 0.6);
    }

    /* Team Section Styling */
    .placement-team-section {
        padding: 3rem 0;
    }

    .section-title {
        font-weight: 700;
        color: #1a202c;
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 2rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background-color: #cc1616;
        border-radius: 2px;
    }

    /* Profile Card Custom Styling */
    .coordinator-card {
        background: #ffffff;
        border: none;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.03);
    }

    .coordinator-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(204, 22, 22, 0.08);
        border-color: rgba(204, 22, 22, 0.15);
    }

    .img-container {
        position: relative;
        width: 180px;
        height: 180px;
        margin: 25px auto 15px auto;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #f8f9fa;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .coordinator-card:hover .img-container {
        border-color: rgba(204, 22, 22, 0.2);
        transform: scale(1.03);
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .role-badge {
        display: inline-block;
        padding: 4px 14px;
        border-radius: 20px;
        background-color: rgba(204, 22, 22, 0.06);
        color: #cc1616;
        font-weight: 600;
        font-size: 0.8rem;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .head-card {
        border: 1px solid rgba(204, 22, 22, 0.1);
        background: linear-gradient(to bottom, #ffffff, #fffdfd);
    }

    .head-card .role-badge {
        background-color: #cc1616;
        color: #ffffff;
    }

    /* Social links styling */
    .social-links-wrapper {
        margin-top: 15px;
        display: flex;
        justify-content: center;
        gap: 12px;
    }

    .social-icon-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: #f8f9fa;
        color: #495057;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        transition: all 0.2s ease;
        text-decoration: none;
    }

    .social-icon-btn:hover {
        background-color: #cc1616;
        color: #ffffff;
        transform: translateY(-2px);
    }

    /* Statistics Section Styling */
    .stats-section {
        background: #f8f9fa;
        padding: 4rem 0;
        border-top: 1px solid rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.03);
    }

    .stat-box {
        text-align: center;
        padding: 20px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        border: 1px solid rgba(0, 0, 0, 0.03);
        transition: transform 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .stat-box:hover {
        transform: translateY(-5px);
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: #cc1616;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 0.95rem;
        color: #4a5568;
        font-weight: 600;
    }

    /* Process steps section styling */
    .process-section {
        padding: 4rem 0;
    }

    .process-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 25px;
        border: 1px solid rgba(0, 0, 0, 0.04);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.02);
        height: 100%;
        transition: all 0.3s ease;
        position: relative;
    }

    .process-card:hover {
        border-color: rgba(204, 22, 22, 0.15);
        box-shadow: 0 10px 30px rgba(204, 22, 22, 0.04);
    }

    .process-step-num {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 2.2rem;
        font-weight: 800;
        color: rgba(204, 22, 22, 0.08);
        line-height: 1;
    }

    .process-card:hover .process-step-num {
        color: rgba(204, 22, 22, 0.15);
    }

    .process-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background-color: rgba(204, 22, 22, 0.06);
        color: #cc1616;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')
<!-- Hero Header Section -->
<section class="hero-banner-section text-center mb-5">
    <div class="container" data-aos="fade-down" data-aos-duration="800">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-3">
                <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door-fill me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="/placement">Placement</a></li>
                <li class="breadcrumb-item active" aria-current="page">Placement Cell</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold mb-2">Placement Cell</h1>
        <p class="lead mb-0 text-white-50">Empowering careers and bridging the gap between classroom excellence and corporate demands.</p>
    </div>
</section>

<!-- Placement Coordinators Team -->
<section class="placement-team-section container mb-5">
    <h3 class="text-center section-title" data-aos="fade-up">Placement Leadership &amp; Team</h3>
    
    <!-- Leadership / Head Card -->
    <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card coordinator-card head-card text-center p-4">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/bit_hp.png') }}" alt="Mr. Shashank Kumar Srivastav" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=SKS'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">Head Placement</span>
                    <h5 class="fw-bold text-dark mb-1">Mr. Shashank Kumar Srivastav</h5>
                    <p class="text-muted mb-2 fw-semibold">Head Placement &amp; Placement Coordinator CS</p>
                    <div class="social-links-wrapper">
                        <a href="mailto:placement@bit.ac.in" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-icon-btn" title="Phone"><i class="bi bi-telephone-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Coordinators Grid -->
    <div class="row justify-content-center g-4" data-aos="fade-up" data-aos-delay="200">
        <!-- Coordinator 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pccse.png') }}" alt="Ms. Chaynika Srivastava" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=CS'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">CSE Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Ms. Chaynika Srivastava</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator CSE</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinator 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pccse_1.png') }}" alt="Mr. Prashant Chaturvedi" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=PC'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">CSE Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Mr. Prashant Chaturvedi</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator CSE</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinator 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pccseaiml.png') }}" alt="Mr. Krishna Jaiswal" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=KJ'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">CSE(AIML) Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Mr. Krishna Jaiswal</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator CSE(AIML)</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinator 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pccseaiml_1.png') }}" alt="Ms. Anjum Ahehsan" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=AA'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">CSE(AIML) Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Ms. Anjum Ahehsan</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator CSE(AIML)</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinator 5 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pcit.png') }}" alt="Mr. Javed Khan" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=JK'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">IT Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Mr. Javed Khan</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator IT</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinator 6 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pcce.png') }}" alt="Mr. Arun Kumar" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=AK'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">CE Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Mr. Arun Kumar</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator CE</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinator 7 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pcme.png') }}" alt="Md. Qaiser" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=MQ'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">ME Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Md. Qaiser</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator ME</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinator 8 -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card coordinator-card text-center p-4 h-100">
                <div class="img-container">
                    <img src="{{ asset('images/bit_placment_cell/pcece.png') }}" alt="Mr. Arun Kumar Mishra" onerror="this.src='https://placehold.co/200x200/cc1616/ffffff?text=AKM'">
                </div>
                <div class="card-body p-2">
                    <span class="role-badge">ECE Coordinator</span>
                    <h5 class="fw-bold text-dark mb-1 fs-6">Mr. Arun Kumar Mishra</h5>
                    <p class="text-muted mb-2 small fw-semibold">Placement Coordinator ECE</p>
                    <div class="social-links-wrapper">
                        <a href="#" class="social-icon-btn" title="Email"><i class="bi bi-envelope-fill"></i></a>
                        <a href="#" class="social-icon-btn" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Placement Statistics Widget -->
<section class="stats-section mb-5">
    <div class="container">
        <h3 class="text-center section-title mb-5" data-aos="fade-up">Our Placement Records</h3>
        <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3 col-md-6">
                <div class="stat-box">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Overall Placement Rate</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-box">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Recruiter Partners</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-box">
                    <div class="stat-number">12 LPA</div>
                    <div class="stat-label">Highest Package Offered</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-box">
                    <div class="stat-number">4.8 LPA</div>
                    <div class="stat-label">Average Package Offered</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recruitment Process Pipeline -->
<section class="process-section container mb-5">
    <h3 class="text-center section-title mb-5" data-aos="fade-up">Placement Journey & Process</h3>
    <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
        <!-- Step 1 -->
        <div class="col-lg-3 col-md-6">
            <div class="process-card">
                <div class="process-step-num">01</div>
                <div class="process-icon"><i class="bi bi-file-earmark-person"></i></div>
                <h5 class="fw-bold mb-2">Resume Building & Registration</h5>
                <p class="text-muted small mb-0">Students build expert-vetted resumes and register themselves in the placement database.</p>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="col-lg-3 col-md-6">
            <div class="process-card">
                <div class="process-step-num">02</div>
                <div class="process-icon"><i class="bi bi-award"></i></div>
                <h5 class="fw-bold mb-2">Corporate Training</h5>
                <p class="text-muted small mb-0">Imparting communication, soft skills, aptitude training, and mock interview preparations.</p>
            </div>
        </div>
        <!-- Step 3 -->
        <div class="col-lg-3 col-md-6">
            <div class="process-card">
                <div class="process-step-num">03</div>
                <div class="process-icon"><i class="bi bi-buildings"></i></div>
                <h5 class="fw-bold mb-2">Recruitment Drives</h5>
                <p class="text-muted small mb-0">Top tier organizations visit campus to conduct assessments, group discussions, and interviews.</p>
            </div>
        </div>
        <!-- Step 4 -->
        <div class="col-lg-3 col-md-6">
            <div class="process-card">
                <div class="process-step-num">04</div>
                <div class="process-icon"><i class="bi bi-briefcase"></i></div>
                <h5 class="fw-bold mb-2">Final Job Offer</h5>
                <p class="text-muted small mb-0">Securing employment offers and getting officially placed before final university exams.</p>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init();
        }
    });
</script>
@endpush
@endsection
