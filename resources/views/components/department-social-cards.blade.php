@props(['notices' => []])
<section class="social-notices-section py-5 bg-light">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- Upcoming Events Card -->
            <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="modern-card shadow-sm h-100">
                    <div class="card-header-badge bg-slate">Upcoming Events</div>
                    <div class="card-body p-4">
                        <div class="custom-scroll">
                            <ul class="list-unstyled mb-0">
                                @if(count($notices) > 0)
                                    @foreach($notices as $notice)
                                    <li class="mb-3 border-bottom pb-2">
                                        <a href="{{ $notice['link'] }}" target="_blank" class="text-decoration-none text-dark">
                                            <h6 class="mb-1 text-slate fw-bold">{{ $notice['title'] }}</h6>
                                            <p class="mb-0 small text-muted">{{ $notice['desc'] ?? '' }}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                @else
                                    <li class="mb-3 border-bottom pb-2">
                                        <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank" class="text-decoration-none text-dark">
                                            <h6 class="mb-1 text-slate fw-bold">Academic Calendar Even Sem 2024-25</h6>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Events Card -->
            <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="400">
                <div class="modern-card shadow-sm h-100">
                    <div class="card-header-badge bg-crimson">Latest Events</div>
                    <div class="card-body p-4">
                        <div class="custom-scroll">
                            <ul class="list-unstyled mb-0">
                                @if(count($notices) > 0)
                                    @foreach($notices as $notice)
                                    <li class="mb-3 border-bottom pb-2">
                                        <a href="{{ $notice['link'] }}" target="_blank" class="text-decoration-none text-dark">
                                            <h6 class="mb-1 text-crimson fw-bold">{{ $notice['title'] }}</h6>
                                            <p class="mb-0 small text-muted">{{ $notice['desc'] ?? '' }}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                @else
                                    <li class="mb-3 border-bottom pb-2">
                                        <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank" class="text-decoration-none text-dark">
                                            <h6 class="mb-1 text-crimson fw-bold">Academic Calendar Even Sem 2024-25</h6>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notices Card -->
            <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="500">
                <div class="modern-card shadow-sm h-100">
                    <div class="card-header-badge bg-green">Notices</div>
                    <div class="card-body p-4">
                        <div class="custom-scroll">
                            <ul class="list-unstyled mb-0">
                                @if(count($notices) > 0)
                                    @foreach($notices as $notice)
                                    <li class="mb-3 border-bottom pb-2">
                                        <a href="{{ $notice['link'] }}" target="_blank" class="text-decoration-none text-dark">
                                            <h6 class="mb-1 text-green fw-bold">{{ $notice['title'] }}</h6>
                                            <p class="mb-0 small text-muted">{{ $notice['desc'] ?? '' }}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                @else
                                    <li class="mb-3 border-bottom pb-2">
                                        <a href="{{ asset('PDF/academice_calen_even_2024_25.pdf') }}" target="_blank" class="text-decoration-none text-dark">
                                            <h6 class="mb-1 text-green fw-bold">Academic Calendar Even Sem 2024-25</h6>
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
</section>

<style>
.bg-slate { background-color: #0f172a !important; color: white; }
.text-slate { color: #0f172a !important; }
.bg-crimson { background-color: #dc2626 !important; color: white; }
.text-crimson { color: #dc2626 !important; }
.bg-green { background-color: #16a34a !important; color: white; }
.text-green { color: #16a34a !important; }

.modern-card {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    position: relative;
    padding-top: 20px; /* space for badge */
    margin-top: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.modern-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
}

.card-header-badge {
    position: absolute;
    top: -16px;
    left: 50%;
    transform: translateX(-50%);
    padding: 6px 24px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 0.9rem;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.2);
    white-space: nowrap;
    z-index: 2;
}

.custom-scroll {
    height: 220px;
    overflow-y: auto;
    padding-right: 10px;
}
.custom-scroll::-webkit-scrollbar {
    width: 6px;
}
.custom-scroll::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}
.custom-scroll::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
}
.custom-scroll::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>
