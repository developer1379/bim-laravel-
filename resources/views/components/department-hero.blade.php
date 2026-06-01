@props(['title' => 'Department', 'notices' => []])

<div class="department-hero-wrapper position-relative">
    <!-- Carousel Background -->
    <div id="heroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="3500">
        <div class="carousel-inner h-100">
            {{ $slot }}
        </div>
        <div class="hero-overlay"></div>
    </div>
    
    <!-- Content Overlay -->
    <div class="hero-content-wrapper container">
        <div class="row h-100 align-items-center">
            <!-- Left Side: Title -->
            <div class="col-lg-8 col-md-12 text-white hero-text-col">
                <h1 class="display-4 fw-bolder text-uppercase mb-3" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">{{ $title }}</h1>
                <h4 class="text-light fw-light mb-4" style="text-shadow: 1px 1px 5px rgba(0,0,0,0.5);">Buddha Institute of Management, Gorakhpur</h4>
            </div>
            
            <!-- Right Side: Notice Board -->
            <div class="col-lg-4 col-md-12 hero-notice-col mt-4 mt-lg-0">
                <div class="notice-board glass-card shadow-lg">
                    <div class="notice-header bg-crimson text-white text-center py-2 rounded-top">
                        <h5 class="mb-0 fw-bold"><i class="bx bx-bell me-2"></i> Latest Events</h5>
                    </div>
                    <div class="notice-body p-3">
                        <div class="notice-scroll">
                            <ul class="list-unstyled mb-0">
                                @if(count($notices) > 0)
                                    @foreach($notices as $notice)
                                    <li class="notice-item mb-3 border-bottom pb-2">
                                        <a href="{{ $notice['link'] }}" target="_blank" class="text-decoration-none text-dark d-block">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1 text-crimson fw-bold">{{ $notice['title'] }}</h6>
                                            </div>
                                            <p class="mb-0 small text-muted">{{ $notice['desc'] ?? '' }}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                @else
                                    <li class="notice-item mb-3 border-bottom pb-2">
                                        <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank" class="text-decoration-none text-dark d-block">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1 text-crimson fw-bold">Academic Calendar</h6>
                                            </div>
                                            <p class="mb-0 small text-muted">Even Sem 2024-25</p>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.department-hero-wrapper {
    height: 80vh;
    min-height: 500px;
    width: 100%;
    overflow: hidden;
    background-color: #0f172a; /* Slate 900 base */
}

/* Make carousel images cover the container */
#heroCarousel .carousel-item {
    height: 80vh;
    min-height: 500px;
}
#heroCarousel .carousel-item img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
}

/* Beautiful dark blue gradient overlay */
.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.5) 50%, rgba(220, 38, 38, 0.3) 100%);
    z-index: 1;
}

.hero-content-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    z-index: 2;
}

.text-crimson {
    color: #dc2626 !important;
}
.bg-crimson {
    background-color: #dc2626 !important;
}

/* Glassmorphism Notice Board */
.glass-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.2);
    overflow: hidden;
    transition: transform 0.3s ease;
}
.glass-card:hover {
    transform: translateY(-5px);
}

/* Custom Scrollbar for notices */
.notice-scroll {
    height: 250px;
    overflow-y: auto;
    padding-right: 5px;
}
.notice-scroll::-webkit-scrollbar {
    width: 6px;
}
.notice-scroll::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}
.notice-scroll::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}
.notice-scroll::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

.notice-item {
    transition: background-color 0.2s ease;
    border-radius: 6px;
    padding: 8px;
}
.notice-item:hover {
    background-color: #f8fafc;
}

@media (max-width: 991px) {
    .department-hero-wrapper {
        height: auto;
        min-height: auto;
        padding-bottom: 40px;
    }
    #heroCarousel .carousel-item {
        height: 50vh;
        min-height: 400px;
    }
    .hero-content-wrapper {
        position: relative;
        padding-top: 50px;
    }
    .hero-overlay {
        height: 50vh;
    }
}
</style>
