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

    /* Search area styles */
    .search-box-wrapper {
        background: #ffffff;
        border-radius: 50px;
        border: 1px solid rgba(0, 0, 0, 0.08);
        padding: 5px 15px;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        display: flex;
        align-items: center;
    }

    .search-box-wrapper:focus-within {
        box-shadow: 0 8px 30px rgba(204, 22, 22, 0.08) !important;
        border-color: rgba(204, 22, 22, 0.3);
    }

    .search-box-wrapper input {
        border: none;
        outline: none;
        box-shadow: none;
        padding-left: 10px;
    }

    .search-box-wrapper input:focus {
        outline: none;
        box-shadow: none;
    }

    /* Table custom styling */
    .premium-table-card {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        border: 1px solid rgba(0, 0, 0, 0.05);
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .custom-table {
        margin-bottom: 0;
        vertical-align: middle;
    }

    .custom-table thead th {
        background-color: #f8f9fa;
        color: #495057;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.8px;
        padding: 18px 20px;
        border-bottom: 2px solid #e9ecef;
    }

    .custom-table tbody tr {
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .custom-table tbody tr:hover {
        background-color: rgba(204, 22, 22, 0.015);
    }

    .custom-table tbody td, .custom-table tbody th {
        padding: 16px 20px;
        border-bottom: 1px solid #f1f3f5;
        font-size: 0.9rem;
        color: #495057;
    }

    /* Badges */
    .role-badge {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 30px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .badge-chairman {
        background-color: #fff8e1;
        color: #ffb300;
        border: 1px solid rgba(255, 179, 0, 0.2);
    }

    .badge-secretary {
        background-color: #e3f2fd;
        color: #1e88e5;
        border: 1px solid rgba(30, 136, 229, 0.2);
    }

    .badge-member {
        background-color: #f3e5f5;
        color: #8e24aa;
        border: 1px solid rgba(142, 36, 170, 0.2);
    }

    .badge-edu {
        background-color: #e8f5e9;
        color: #43a047;
        border: 1px solid rgba(67, 160, 71, 0.2);
    }

    .badge-default {
        background-color: #eceff1;
        color: #546e7a;
        border: 1px solid rgba(84, 110, 122, 0.2);
    }

    /* Avatar Circles */
    .avatar-circle {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.9rem;
        margin-right: 12px;
    }

    /* Colorful Avatars */
    .avatar-1 { background-color: #ffebee; color: #c62828; }
    .avatar-2 { background-color: #e8f5e9; color: #2e7d32; }
    .avatar-3 { background-color: #e3f2fd; color: #1565c0; }
    .avatar-4 { background-color: #fff3e0; color: #ef6c00; }
    .avatar-5 { background-color: #f3e5f5; color: #6a1b9a; }
    .avatar-6 { background-color: #e0f2f1; color: #00695c; }
    .avatar-7 { background-color: #fbe9e7; color: #d84315; }
    .avatar-8 { background-color: #efebe9; color: #4e342e; }

    /* Mobile Cards custom styling */
    .mobile-member-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid rgba(0, 0, 0, 0.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        padding: 20px;
        margin-bottom: 1.25rem;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .mobile-member-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(204, 22, 22, 0.06);
    }

    .mobile-card-meta {
        font-size: 0.85rem;
        color: #6c757d;
        display: flex;
        align-items: center;
        margin-bottom: 6px;
    }

    .mobile-card-meta i {
        font-size: 0.95rem;
        margin-right: 8px;
        width: 16px;
        color: #cc1616;
    }

    /* Document Metadata styling */
    .meta-badge-container {
        display: inline-flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .meta-badge-item {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        color: #ffffff;
        padding: 6px 16px;
        border-radius: 30px;
        font-size: 0.8rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* General responsive padding adjustments */
    @media (max-width: 991px) {
        .custom-table-container {
            display: none;
        }
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
                <li class="breadcrumb-item"><a href="/about-us">About</a></li>
                <li class="breadcrumb-item active" aria-current="page">Board of Governors</li>
            </ol>
        </nav>
        <h1 class="display-5 fw-bold mb-2">Board of Governors</h1>
        <p class="lead mb-4 text-white-50">Providing vision, stewardship, and governance for excellence.</p>
        
        <div class="meta-badge-container justify-content-center">
            <span class="meta-badge-item">
                <i class="bi bi-hash"></i> Ref: BIM/DO/2024-25/021
            </span>
            <span class="meta-badge-item">
                <i class="bi bi-calendar3"></i> Date: 06-09-2024
            </span>
            <span class="meta-badge-item bg-warning text-dark border-0 fw-semibold">
                <i class="bi bi-bookmark-star-fill"></i> Session 2024-25
            </span>
        </div>
    </div>
</section>

<!-- Content Container -->
<div class="container mb-5">
    <!-- Filter, Search, and Action Row -->
    <div class="row align-items-center mb-4 g-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <div class="col-md-8">
            <div class="search-box-wrapper shadow-sm">
                <i class="bi bi-search text-muted fs-5 ms-2"></i>
                <input type="text" id="boardSearch" class="form-control" placeholder="Search by name, role, occupation, address or qualification...">
            </div>
        </div>
        <div class="col-md-4 text-md-end text-center">
            <a href="{{ asset('PDF/BOG.pdf') }}" class="btn btn-danger rounded-pill px-4 py-2.5 shadow-sm fw-semibold" target="_blank">
                <i class="bi bi-file-earmark-pdf-fill me-2"></i>Official PDF Version
            </a>
        </div>
    </div>

    <!-- Empty State (No Search Results) -->
    <div id="noResultsState" class="text-center py-5 d-none" data-aos="fade-up">
        <i class="bi bi-people text-muted display-4"></i>
        <h4 class="mt-3 text-dark fw-semibold">No Board Members Found</h4>
        <p class="text-muted">Try adjusting your search keywords.</p>
    </div>

    <!-- Desktop View: High Fidelity Responsive Table -->
    <div class="custom-table-container" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="premium-table-card">
            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 80px;">S.No</th>
                            <th scope="col">Particular / Role</th>
                            <th scope="col">Name</th>
                            <th scope="col">Qualification</th>
                            <th scope="col">Occupation</th>
                            <th scope="col">Official Address</th>
                        </tr>
                    </thead>
                    <tbody id="boardTableBody">
                        <!-- Row 1 -->
                        <tr class="board-row-item" data-search="1 Chairman Dr. Ram Avatar Agrawal MBBS, MS Doctor Agrawal Orthopaedic Jubli Road Gorakhpur">
                            <td class="fw-bold text-secondary">01</td>
                            <td><span class="role-badge badge-chairman">Chairman</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-1">RA</div>
                                    <div class="fw-bold text-dark">Dr. Ram Avatar Agrawal</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">MBBS, MS</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-heart-pulse-fill text-danger me-1"></i> Doctor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> Agrawal Orthopaedic, Jubli Road, Gorakhpur</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="board-row-item" data-search="2 Member Dr. Rajat Agrawal MBBS, MS Doctor Agrawal Orthopaedic Jubli Road Gorakhpur">
                            <td class="fw-bold text-secondary">02</td>
                            <td><span class="role-badge badge-member">Member</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-2">RA</div>
                                    <div class="fw-bold text-dark">Dr. Rajat Agrawal</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">MBBS, MS</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-heart-pulse-fill text-danger me-1"></i> Doctor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> Agrawal Orthopaedic, Jubli Road, Gorakhpur</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="board-row-item" data-search="3 Professor of Institute Prof. Awadhesh Kumar Tiwari M.Com, Ph.D Professor Buddha Institute of Technology, GIDA, Gorakhpur">
                            <td class="fw-bold text-secondary">03</td>
                            <td><span class="role-badge badge-edu">Professor of Institute</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-3">AT</div>
                                    <div class="fw-bold text-dark">Prof. Awadhesh Kumar Tiwari</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">M.Com, Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-briefcase me-1"></i> Professor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> Buddha Institute of Technology, GIDA, Gorakhpur</td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="board-row-item" data-search="4 Technologist / Educationist to be nominated by society Prof. R.P. Mani M.Sc. Ph.D Professor MMM University of Technology, Gorakhpur">
                            <td class="fw-bold text-secondary">04</td>
                            <td><span class="role-badge badge-default">Technologist / Edu</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-4">RM</div>
                                    <div class="fw-bold text-dark">Prof. R.P. Mani</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">M.Sc., Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-briefcase me-1"></i> Professor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> MMM University of Technology, Gorakhpur</td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="board-row-item" data-search="5 Industrialist/ Educationist to be nominated by society Dr. Arif Mohhamad MBA, Ph.D Industrialist GIDA, Gorakhpur">
                            <td class="fw-bold text-secondary">05</td>
                            <td><span class="role-badge badge-default">Industrialist / Edu</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-5">AM</div>
                                    <div class="fw-bold text-dark">Dr. Arif Mohhamad</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">MBA, Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-building me-1"></i> Industrialist</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> GIDA, Gorakhpur</td>
                        </tr>
                        <!-- Row 6 -->
                        <tr class="board-row-item" data-search="6 Technologist / Educationist to be nominated by University Prof. Manish Mishra M.Sc. Electronic, Ph.D Professor DDUGU, Gorakhpur">
                            <td class="fw-bold text-secondary">06</td>
                            <td><span class="role-badge badge-default">University Nominee</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-6">MM</div>
                                    <div class="fw-bold text-dark">Prof. Manish Mishra</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">M.Sc. Electronic, Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-briefcase me-1"></i> Professor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> DDUGU, Gorakhpur</td>
                        </tr>
                        <!-- Row 7 -->
                        <tr class="board-row-item" data-search="7 Industrialist Educationist nominated by society Dr. Prashant Tripathi MBA, Ph.D Industrialist Radio Mantra Gorakhpur">
                            <td class="fw-bold text-secondary">07</td>
                            <td><span class="role-badge badge-default">Industrialist Nominee</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-7">PT</div>
                                    <div class="fw-bold text-dark">Dr. Prashant Tripathi</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">MBA, Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-building me-1"></i> Industrialist</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> Radio Mantra, Gorakhpur</td>
                        </tr>
                        <!-- Row 8 -->
                        <tr class="board-row-item" data-search="8 Assistant Professor of the Institute Mr. Rama Raman Pandey MBA, B.Com, NET Assistant Professor Buddha Institute of Technology, GIDA, Gorakhpur">
                            <td class="fw-bold text-secondary">08</td>
                            <td><span class="role-badge badge-edu">Assistant Professor</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-8">RP</div>
                                    <div class="fw-bold text-dark">Mr. Rama Raman Pandey</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">MBA, B.Com, NET</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-briefcase me-1"></i> Assistant Professor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> Buddha Institute of Technology, GIDA, Gorakhpur</td>
                        </tr>
                        <!-- Row 9 -->
                        <tr class="board-row-item" data-search="9 Nominee of State Govt.(Ex.officio) Prof. Ashwani Ph.D RHEO Gorakhpur Canal Road, Daudpur, Gorakhpur">
                            <td class="fw-bold text-secondary">09</td>
                            <td><span class="role-badge badge-member">State Govt. Nominee</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-1">AS</div>
                                    <div class="fw-bold text-dark">Prof. Ashwani</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-bank me-1"></i> RHEO Gorakhpur</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> Canal Road, Daudpur, Gorakhpur</td>
                        </tr>
                        <!-- Row 10 -->
                        <tr class="board-row-item" data-search="10 Industrialist/Technologist/ Educationist to be nominated by society Mr. Anil Kumar Yadav M.Com, Ph.D Professor DDU ,GKP University, GKP">
                            <td class="fw-bold text-secondary">10</td>
                            <td><span class="role-badge badge-default">Society Nominee</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-2">AY</div>
                                    <div class="fw-bold text-dark">Mr. Anil Kumar Yadav</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">M.Com, Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-briefcase me-1"></i> Professor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> DDU GKP University, Gorakhpur</td>
                        </tr>
                        <!-- Row 11 -->
                        <tr class="board-row-item" data-search="11 Member Secretary Dr. Abishek Kumar Tripathi M.Com, MBA, Ph.D Professor Buddha Institute of Technology, GIDA, Gorakhpur">
                            <td class="fw-bold text-secondary">11</td>
                            <td><span class="role-badge badge-secretary">Member Secretary</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle avatar-3">AT</div>
                                    <div class="fw-bold text-dark">Dr. Abhishek Kumar Tripathi</div>
                                </div>
                            </td>
                            <td><span class="badge bg-light text-dark border px-2 py-1">M.Com, MBA, Ph.D</span></td>
                            <td class="fw-semibold text-secondary"><i class="bi bi-briefcase me-1"></i> Professor</td>
                            <td class="text-muted"><i class="bi bi-geo-alt me-1"></i> Buddha Institute of Technology, GIDA, Gorakhpur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Mobile View: Cards Grid (visible on tablets/mobile) -->
    <div class="d-lg-none row" id="boardCardsContainer" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <!-- Card 1 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Chairman Dr. Ram Avatar Agrawal MBBS, MS Doctor Agrawal Orthopaedic Jubli Road Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-1">RA</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Dr. Ram Avatar Agrawal</h6>
                        <span class="role-badge badge-chairman">Chairman</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> MBBS, MS</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-heart-pulse-fill"></i>
                    <span><strong>Occupation:</strong> Doctor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> Agrawal Orthopaedic, Jubli Road, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Member Dr. Rajat Agrawal MBBS, MS Doctor Agrawal Orthopaedic Jubli Road Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-2">RA</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Dr. Rajat Agrawal</h6>
                        <span class="role-badge badge-member">Member</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> MBBS, MS</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-heart-pulse-fill"></i>
                    <span><strong>Occupation:</strong> Doctor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> Agrawal Orthopaedic, Jubli Road, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Professor of Institute Prof. Awadhesh Kumar Tiwari M.Com, Ph.D Professor Buddha Institute of Technology, GIDA, Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-3">AT</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Prof. Awadhesh Kumar Tiwari</h6>
                        <span class="role-badge badge-edu">Professor of Institute</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> M.Com, Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-briefcase-fill"></i>
                    <span><strong>Occupation:</strong> Professor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> Buddha Institute of Technology, GIDA, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Technologist / Educationist to be nominated by society Prof. R.P. Mani M.Sc. Ph.D Professor MMM University of Technology, Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-4">RM</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Prof. R.P. Mani</h6>
                        <span class="role-badge badge-default">Technologist / Edu</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> M.Sc., Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-briefcase-fill"></i>
                    <span><strong>Occupation:</strong> Professor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> MMM University of Technology, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Industrialist/ Educationist to be nominated by society Dr. Arif Mohhamad MBA, Ph.D Industrialist GIDA, Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-5">AM</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Dr. Arif Mohhamad</h6>
                        <span class="role-badge badge-default">Industrialist / Edu</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> MBA, Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-building-fill"></i>
                    <span><strong>Occupation:</strong> Industrialist</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> GIDA, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Technologist / Educationist to be nominated by University Prof. Manish Mishra M.Sc. Electronic, Ph.D Professor DDUGU, Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-6">MM</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Prof. Manish Mishra</h6>
                        <span class="role-badge badge-default">University Nominee</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> M.Sc. Electronic, Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-briefcase-fill"></i>
                    <span><strong>Occupation:</strong> Professor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> DDUGU, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Industrialist Educationist nominated by society Dr. Prashant Tripathi MBA, Ph.D Industrialist Radio Mantra Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-7">PT</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Dr. Prashant Tripathi</h6>
                        <span class="role-badge badge-default">Industrialist Nominee</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> MBA, Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-building-fill"></i>
                    <span><strong>Occupation:</strong> Industrialist</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> Radio Mantra, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Assistant Professor of the Institute Mr. Rama Raman Pandey MBA, B.Com, NET Assistant Professor Buddha Institute of Technology, GIDA, Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-8">RP</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Mr. Rama Raman Pandey</h6>
                        <span class="role-badge badge-edu">Assistant Professor</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> MBA, B.Com, NET</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-briefcase-fill"></i>
                    <span><strong>Occupation:</strong> Assistant Professor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> Buddha Institute of Technology, GIDA, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 9 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Nominee of State Govt.(Ex.officio) Prof. Ashwani Ph.D RHEO Gorakhpur Canal Road, Daudpur, Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-1">AS</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Prof. Ashwani</h6>
                        <span class="role-badge badge-member">State Govt. Nominee</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-bank-fill"></i>
                    <span><strong>Occupation:</strong> RHEO Gorakhpur</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> Canal Road, Daudpur, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 10 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Industrialist/Technologist/ Educationist to be nominated by society Mr. Anil Kumar Yadav M.Com, Ph.D Professor DDU ,GKP University, GKP">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-2">AY</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Mr. Anil Kumar Yadav</h6>
                        <span class="role-badge badge-default">Society Nominee</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> M.Com, Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-briefcase-fill"></i>
                    <span><strong>Occupation:</strong> Professor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> DDU GKP University, Gorakhpur</span>
                </div>
            </div>
        </div>

        <!-- Card 11 -->
        <div class="col-md-6 col-12 board-card-item" data-search="Member Secretary Dr. Abishek Kumar Tripathi M.Com, MBA, Ph.D Professor Buddha Institute of Technology, GIDA, Gorakhpur">
            <div class="mobile-member-card">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-circle avatar-3">AT</div>
                    <div>
                        <h6 class="fw-bold text-dark mb-1">Dr. Abhishek Kumar Tripathi</h6>
                        <span class="role-badge badge-secretary">Member Secretary</span>
                    </div>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span><strong>Qualification:</strong> M.Com, MBA, Ph.D</span>
                </div>
                <div class="mobile-card-meta">
                    <i class="bi bi-briefcase-fill"></i>
                    <span><strong>Occupation:</strong> Professor</span>
                </div>
                <div class="mobile-card-meta mb-0 align-items-start">
                    <i class="bi bi-geo-alt-fill mt-1"></i>
                    <span><strong>Address:</strong> Buddha Institute of Technology, GIDA, Gorakhpur</span>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('boardSearch');
        const tableRows = document.querySelectorAll('.board-row-item');
        const mobileCards = document.querySelectorAll('.board-card-item');
        const noResultsState = document.getElementById('noResultsState');
        const tableContainer = document.querySelector('.custom-table-container');
        const cardsContainer = document.getElementById('boardCardsContainer');

        searchInput.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase().trim();
            let tableVisibleCount = 0;
            let cardsVisibleCount = 0;

            // Search Table Rows
            tableRows.forEach(row => {
                const text = row.getAttribute('data-search').toLowerCase();
                if (text.includes(query)) {
                    row.style.setProperty('display', '', 'important');
                    tableVisibleCount++;
                } else {
                    row.style.setProperty('display', 'none', 'important');
                }
            });

            // Search Mobile Cards
            mobileCards.forEach(card => {
                const text = card.getAttribute('data-search').toLowerCase();
                if (text.includes(query)) {
                    card.style.setProperty('display', '', 'important');
                    cardsVisibleCount++;
                } else {
                    card.style.setProperty('display', 'none', 'important');
                }
            });

            // Check Empty States
            const isDesktop = window.innerWidth >= 992;
            const visibleCount = isDesktop ? tableVisibleCount : cardsVisibleCount;

            if (visibleCount === 0) {
                noResultsState.classList.remove('d-none');
                if (isDesktop) {
                    tableContainer.classList.add('d-none');
                } else {
                    cardsContainer.classList.add('d-none');
                }
            } else {
                noResultsState.classList.add('d-none');
                if (isDesktop) {
                    tableContainer.classList.remove('d-none');
                } else {
                    cardsContainer.classList.remove('d-none');
                }
            }
        });

        // Initialize AOS if available, otherwise fallback
        if (typeof AOS !== 'undefined') {
            AOS.init();
        }
    });
</script>
@endpush
@endsection
