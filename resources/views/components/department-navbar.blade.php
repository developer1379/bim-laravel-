<!-- Topbar Start -->
<div class="topbar d-none d-md-block">
    <nav class="navbar navbar-expand-lg py-1" style="padding:0px 0px 0px 5px !important">
        <div class="container-fluid" style="padding:0px 0px !important">
            <div class="logo"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 120px"></div>
        </div>
    </nav>
</div>

<!-- Middle Section Start -->
<section class="middle" style="background-color: #ffffff">
    <div class="container py-4 d-none d-md-block">
        <div class="row">
            <div class="col-md-1 px-1 text-center">
                <a href="{{ url('/') }}">
                    <img src="{{ $logo ?? asset('images/logo-ba.png') }}" class="img-fluid w-logo" style="{{ $logoStyle ?? '' }}" />
                </a>
            </div>
            <div class="col-md-10 text-center w-head fw-bolder">
                <h2 class="w-tsh text-danger fw-bold">{{ $title ?? '' }}</h2>
                <h5 class="w-tsh text-danger fw-bold">{{ $subtitle ?? '' }}</h5>
                <h6 class="text-dark">
                    Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul Kalam Technical University, Lucknow, Uttar Pradesh
                    <br><br><span class="bg-warning px-2 text-dark">College Code - 1212</span>
                </h6>
            </div>
            <div class="col-md-1 px-1 text-center">
                <a href="https://aktu.ac.in/" target="_blank">
                    <img src="{{ asset('images/aktu.png') }}" class="img-fluid w-logo" />
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile View -->
    <div class="container py-2 d-block d-md-none text-center" style="background-color: #ffffff">
        <div class="row align-items-center">
            <div class="col-3">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid w-logo" style="max-width: 50px" />
                </a>
            </div>
            <div class="col-8 text-start">
                <h6 class="text-danger fw-bold m-0 text-center">{{ $title ?? '' }}</h6>
                <h6 class="text-warning fw-bold m-0 text-center">{{ $subtitle ?? '' }}</h6>
                <h6 class="text-dark fw-bold m-0 text-center">
                   Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul Kalam Technical University, Lucknow, Uttar Pradesh
                    <span class="bg-warning text-dark"><br><br>Code-1212</span>
                </h6>
            </div>
        </div>
    </div>
</section>

<!-- Header -->
<header id="header" class="d-flex align-items-center py-2" style="padding:0px 0px 0px 5px !important">
    <div class="container-fluid d-flex align-items-center justify-content-between" style="padding:0px 0px !important">
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
        <nav id="navbar" class="navbar">
            <ul>
                {{ $slot }}
            </ul>
        </nav>
    </div>
</header>
