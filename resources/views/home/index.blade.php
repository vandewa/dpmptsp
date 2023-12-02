@section('title', 'Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Wonosobo')
@section('meta-description')
    <meta content="Website Resmi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Wonosobo" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="position-relative bg-primary overflow-hidden"
            style="background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20221201/pngtree-black-shiny-wallpaper-background-design-image_1484065.jpg); background-size: cover;
            background-position: center center; filter: brightness(100%);"
            data-aos="zoom-out">
            <div class="container position-relative z-index-2 space-top-2 space-top-md-3 space-bottom-3 space-bottom-md-4">
                {{-- <div class="w-md-80 w-xl-60" style="height:250px;"> --}}
                <div style="height:200px;">
                    <center>
                        <div class="mb-2">
                            <img src="{{ asset('logo.png') }}" alt="Logo" height="100">
                        </div>
                        <h1 style="color: white">
                            PORTAL DPMPTSP KABUPATEN WONOSOBO
                        </h1>
                        <div style="background: white; width:70%;" class="mt-3">
                            <p>
                                <b>
                                    "Segala
                                    Bentuk Pelayanan di DPMPTSP Wonosobo Tidak Dikenakan Biaya
                                    (Gratis)".
                                </b>
                            </p>
                        </div>
                    </center>

                    {{-- <div class="mb-7">
                        <h1 class="display-4 mb-4"
                            style=" color: #00000000; /* Fallback for older browsers */
                        color: rgba(0, 0, 0, 0.5);">
                            Collaborative tools to design user experience</h1>
                        <p class="lead mb-4">For everyone, from beginners to experts.</p>
                    </div> q
                    <a class="btn btn-light btn-wide transition-3d-hover" href="#">Start Now</a>
                    <a class="btn text-white" href="#">Get in Touch <i class="fas fa-angle-right fa-sm ml-1"></i></a> --}}
                </div>
            </div>

            <!-- SVG Shapes -->
            <figure class="position-absolute top-0 left-0 w-60">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
                    <g opacity=".4">
                        <linearGradient id="doubleEllipseTopLeftID1" gradientUnits="userSpaceOnUse" x1="2073.5078"
                            y1="1.7251" x2="2273.4375" y2="1135.5818" gradientTransform="matrix(-1 0 0 1 2600 0)">
                            <stop offset="0.4976" style="stop-color:#000000" />
                            <stop offset="1" style="stop-color:#000000" />
                        </linearGradient>
                        <polygon fill="url(#doubleEllipseTopLeftID1)" points="519.8,0.6 0,0.6 0,1078 863.4,1078   " />

                    </g>
                </svg> --}}
            </figure>
            <figure class="position-absolute right-0 bottom-0 left-0 mb-n1">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                    <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
                </svg>
            </figure>
            <!-- End SVG Shapes -->
        </div>
        <!-- End Hero Section -->
        <!-- Clients Section -->
        <div class="container space-bottom-0 space-bottom-lg-0">
            <div class="row">
                <div class="mt-2 col-lg-3 pt-7 pt-lg-0">
                    <!-- Card -->

                    @if (is_mobile())
                        <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                            style="margin-top:0rem!important;background: rgb(16,199,77);
                        background: linear-gradient(45deg, rgba(16,199,77,1) 0%, rgba(16,199,77,1) 58%, rgba(77,255,136,1) 100%);">
                        @else
                            <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                                style="margin-top: -10rem;!important;background: rgb(16,199,77);
                        background: linear-gradient(45deg, rgba(16,199,77,1) 0%, rgba(16,199,77,1) 58%, rgba(77,255,136,1) 100%);">
                    @endif
                    `
                    <div class="text-center text-white">
                        <div style="margin-bottom: 3.4rem; margin-top:1rem;">
                            <img src="{{ asset('osslogo.png') }}" height="50">
                        </div>
                        <div class="space-y-2 mb-3">
                            <span><b>OSS</b></span> <br>
                            <span style="font-size: 14px;">Urus Izinmu menggunakan OSS</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <!-- Item #1 -->
                        <div class="mr-2 mb-3">
                            <a href="https://oss.go.id" class="p-1 text-white hvr-underline-from-left" target="blank">
                                <span class="text-center">
                                    <center><i class="fa-solid fa-house fa-xl"></i></center>
                                    <span style="font-size:11px;">
                                        Beranda
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="mr-2 mb-3">
                            <a href="https://oss.go.id/regulasi" class="p-1 text-white hvr-underline-from-left"
                                target="blank">
                                <span class="text-center">
                                    <center><i class="fa-solid fa-receipt fa-xl"></i></center>
                                    <span style="font-size:11px;">
                                        Regulasi
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="mr-2 mb-3">
                            <a href="https://oss.go.id/panduan" class="p-1 text-white hvr-underline-from-left"
                                target="blank">
                                <span class="text-center">
                                    <center><i class="fa-solid fa-book-open fa-xl"></i></center>
                                    <span style="font-size:11px;">
                                        Panduan
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class=" transition-3d-hover" href="#"></div>
                </div>
                <!-- End Card -->
            </div>

            <div class="mt-2 col-lg-3 pt-7 pt-lg-0">
                <!-- Card -->
                @if (is_mobile())
                    <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                        style="margin-top:0rem;!important;background: rgb(60,83,228);
                        background: linear-gradient(45deg, rgba(60,83,228,1) 0%, rgba(60,83,228,1) 58%, rgba(74,99,255,1) 100%); height:390px;">
                    @else
                        <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                            style="margin-top: -10rem;!important;background: rgb(60,83,228);
                    background: linear-gradient(45deg, rgba(60,83,228,1) 0%, rgba(60,83,228,1) 58%, rgba(74,99,255,1) 100%); height:390px;">
                @endif

                <div class="text-center text-white">
                    <div style="margin-bottom: 4rem; margin-top:3rem;">
                        <img src="{{ asset('investasi.png') }}" width="150" height="40">
                    </div>
                    <div class="space-y-2 mb-3">
                        <span><b>Investasi</b></span> <br>
                        <span style="font-size: 14px;">Urus Izinmu menggunakan OSS</span>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-3">
                    <!-- Item #1 -->
                    <div class="mr-2 mb-3">
                        <a href="https://investasidevwe.wonosobokab.go.id" class="p-1 text-white hvr-underline-from-left"
                            target="blank">
                            <span class="text-center">
                                <center><i class="fa-solid fa-house fa-xl"></i></center>
                                <span style="font-size:11px;">
                                    Beranda
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class=" transition-3d-hover" href="#"></div>
            </div>
            <!-- End Card -->
        </div>
        <div class="mt-2 col-lg-3 pt-7 pt-lg-0">
            <!-- Card -->
            @if (is_mobile())
                <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                    style="margin-top:0rem;!important;background: rgb(228,60,60);
                        background: linear-gradient(45deg, rgba(228,60,60,1) 0%, rgba(228,60,60,1) 58%, rgba(244,131,131,1) 100%); height:390px;">
                @else
                    <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                        style="margin-top: -10rem;!important;background: rgb(228,60,60);
                            background: linear-gradient(45deg, rgba(228,60,60,1) 0%, rgba(228,60,60,1) 58%, rgba(244,131,131,1) 100%); height:390px;">
            @endif

            <div class="text-center text-white">
                <div class="mt-5" style="margin-bottom: 3rem;">
                    <img src="{{ asset('aprizob.png') }}" width="90" height="70">
                </div>
                <div class="space-y-2 mb-3">
                    <span><b>Aprizob</b></span> <br>
                    <span style="font-size: 14px;">Aplikasi Perizinan Online</span>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <!-- Item #1 -->
                <div class="mr-2 mb-3">
                    <a href="https://aprizob.wonosobokab.go.id" class="p-1 text-white hvr-underline-from-left"
                        target="blank">
                        <span class="text-center">
                            <center><i class="fa-solid fa-house fa-xl"></i></center>
                            <span style="font-size:11px;">
                                Beranda
                            </span>
                        </span>
                    </a>
                </div>
                <div class="mr-2 mb-3">
                    <a href="https://aprizob.wonosobokab.go.id/persyaratan" class="p-1 text-white hvr-underline-from-left"
                        target="blank">
                        <span class="text-center">
                            <center><i class="fa-solid fa-book fa-xl"></i></center>
                            <span style="font-size:11px;">
                                Info Persyaratan
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class=" transition-3d-hover" href="#"></div>
        </div>
        <!-- End Card -->
        </div>
        <div class="mt-2 col-lg-3 pt-7 pt-lg-0">
            <!-- Card -->
            @if (is_mobile())
                <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                    style="margin-top: 0rem;!important;background: rgb(217,176,40);
                        background: linear-gradient(45deg, rgba(217,176,40,1) 0%, rgba(217,176,40,1) 58%, rgba(247,204,61,1) 100%);">
                @else
                    <div class="p-4 card shadow-primary-lg p-lg-5 mb-7" data-aos="fade-up"
                        style="margin-top: -10rem;!important;background: rgb(217,176,40);
                                background: linear-gradient(45deg, rgba(217,176,40,1) 0%, rgba(217,176,40,1) 58%, rgba(247,204,61,1) 100%);">
            @endif
            <div class="text-center text-white">
                <div class="mt-5" style="margin-bottom: 3rem;">
                    <img src="{{ asset('logo.png') }}" width="150" height="60">
                </div>
                <div class="space-y-2 mb-3">
                    <span><b>DPMPTSP</b></span> <br>
                    <span style="font-size: 14px;">Website DPMPTSP Wonosobo</span>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <div class="mr-2 mb-3">
                    <div class="mr-2 mb-3">
                        <a href="{{ url('news-list') }}" class="p-1 text-white hvr-underline-from-left" target="blank">
                            <span class="text-center">
                                <center><i class="fa-solid fa-book-open-reader fa-xl"></i></center>
                                <span style="font-size:11px;">
                                    Berita
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="mr-2 mb-3">
                    <div class="mr-2 mb-3">
                        <a href="{{ route('tracking.perizinan') }}" class="p-1 text-white hvr-underline-from-left"
                            target="blank">
                            <span class="text-center">
                                <center><i class="fa-solid fa-magnifying-glass fa-xl"></i></center>
                                <span style="font-size:11px;">
                                    Tracking Perizinan
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
            <div class=" transition-3d-hover" href="#"></div>
        </div>
        <!-- End Card -->
        </div>
        </div>
        </div>
        <!-- End Clients Section -->

    </main>
@endsection
