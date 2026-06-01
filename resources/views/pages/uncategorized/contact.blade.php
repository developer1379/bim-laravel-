@extends('layouts.site', [
    'headPartial' => 'includes.head_links',
    'headerPartial' => 'includes.navbar1',
    'footerPartial' => 'includes.footer',
    'scriptsPartial' => 'includes.body_links',
])

@push('head')
<style>
    /* ── Hero ── */
    .contact-hero {
        background: linear-gradient(135deg, rgba(204,22,22,0.93) 0%, rgba(90,0,0,0.93) 100%);
        padding: 75px 0 60px;
        text-align: center;
        color: #fff;
    }
    .contact-hero h1 {
        font-size: 2.8rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 12px;
    }
    .contact-hero p {
        font-size: 1.1rem;
        opacity: 0.85;
        max-width: 600px;
        margin: 0 auto;
    }

    /* ── Section wrapper ── */
    .contact-section {
        padding: 70px 0 80px;
        background: #f5f6fa;
    }

    /* ── Info card ── */
    .contact-info-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 12px 40px rgba(0,0,0,0.08);
        height: 100%;
    }
    .contact-map {
        width: 100%;
        height: 240px;
        border: none;
        display: block;
    }
    .contact-info-body {
        padding: 30px;
    }
    .contact-info-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 24px;
    }
    .contact-info-item:last-child { margin-bottom: 0; }
    .contact-icon {
        width: 46px;
        height: 46px;
        background: rgba(204,22,22,0.08);
        color: #cc1616;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        flex-shrink: 0;
        transition: all 0.3s;
    }
    .contact-info-item:hover .contact-icon {
        background: #cc1616;
        color: #fff;
    }
    .contact-info-text h6 {
        font-weight: 700;
        color: #222;
        margin-bottom: 4px;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .contact-info-text a,
    .contact-info-text p {
        color: #555;
        font-size: 0.95rem;
        text-decoration: none;
        margin: 0;
        line-height: 1.6;
    }
    .contact-info-text a:hover { color: #cc1616; }

    /* ── Form card ── */
    .contact-form-card {
        background: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.08);
        height: 100%;
    }
    .contact-form-card h3 {
        font-weight: 800;
        color: #222;
        margin-bottom: 6px;
        font-size: 1.6rem;
    }
    .contact-form-card .subtitle {
        color: #888;
        font-size: 0.95rem;
        margin-bottom: 28px;
    }
    .form-floating label { color: #999; }
    .form-floating .form-control,
    .form-floating .form-control:focus {
        border: 1.5px solid #e0e0e0;
        border-radius: 12px;
        box-shadow: none;
        font-size: 0.95rem;
        transition: border-color 0.3s;
    }
    .form-floating .form-control:focus {
        border-color: #cc1616;
    }
    .form-floating textarea.form-control { min-height: 130px; resize: none; }
    .btn-send {
        background: linear-gradient(135deg, #cc1616, #8a0000);
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 14px 40px;
        font-weight: 700;
        font-size: 1rem;
        width: 100%;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
    }
    .btn-send:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(204,22,22,0.3);
        color: #fff;
    }

    /* ── Divider ── */
    .section-divider {
        width: 60px;
        height: 4px;
        background: #cc1616;
        border-radius: 2px;
        margin-bottom: 24px;
    }
</style>
@endpush

@section('content')

{{-- Hero --}}
<section class="contact-hero">
    <div class="container">
        <h1>📍 Contact Us</h1>
        <p>We'd love to hear from you. Reach out to us anytime and we'll get back to you as soon as possible.</p>
    </div>
</section>

{{-- Main Section --}}
<section class="contact-section">
    <div class="container">
        <div class="row g-4 align-items-stretch">

            {{-- Left: Info + Map --}}
            <div class="col-lg-5">
                <div class="contact-info-card">
                    <iframe
                        class="contact-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d135631.34001204107!2d83.12500847084264!3d26.708545605286517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39914700354ed031%3A0x672b2611f1af346b!2sBuddha%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1731493703511!5m2!1sen!2sin"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <div class="contact-info-body">

                        <div class="section-divider"></div>

                        {{-- Address --}}
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="contact-info-text">
                                <h6>Our Location</h6>
                                <a href="https://maps.app.goo.gl/ripuPoW75b1aJjbcA" target="_blank">
                                    Buddha Institute of Management,<br>
                                    CL-1, Sector 7, GIDA,<br>
                                    Gorakhpur, Uttar Pradesh – 273209
                                </a>
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-info-text">
                                <h6>Call Us</h6>
                                <a href="tel:+919554559900">+91 9554559900</a><br>
                                <a href="tel:+919839621881">+91 9839621881</a>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-info-text">
                                <h6>Email Us</h6>
                                <a href="mailto:bim.gida@gmail.com">bim.gida@gmail.com</a><br>
                                <a href="mailto:director@bimgkp.ac.in">director@bimgkp.ac.in</a>
                            </div>
                        </div>

                        {{-- Office Hours --}}
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div class="contact-info-text">
                                <h6>Office Hours</h6>
                                <p>Monday – Saturday: 9:00 AM – 5:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Right: Contact Form --}}
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3>Send Us a Message</h3>
                    <p class="subtitle">Fill out the form below and our team will get back to you within 24 hours.</p>

                    <form action="" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                    <label for="name"><i class="bi bi-person me-2"></i>Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                    <label for="email"><i class="bi bi-envelope me-2"></i>Email Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                                    <label for="subject"><i class="bi bi-chat-text me-2"></i>Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your message..." required></textarea>
                                    <label for="message"><i class="bi bi-pencil me-2"></i>Your Message</label>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn-send">
                                    <i class="bi bi-send-fill me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
