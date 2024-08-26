@section('title', 'Berita | DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="Berita" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="bg-img-hero"
            style="background-image: url({{ asset('front/assets/svg/components/abstract-shapes-12.svg') }});">
            <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
                <div class="w-md-100 w-lg-100 text-center mx-md-auto">
                    <h1 style="font-family: 'Open Sans', sans-serif; font-weight: bold;">MANTAP</h1>
                    <h1 style="font-family: 'Open Sans', sans-serif; font-weight: bold;">( Maju, Amanah, Tertib, Profesional
                        )</h1>
                    <p>DPMPTSP Kabupaten Wonosobo</p>

                </div>
            </div>
        </div>

        <!-- End Hero Section -->
        <div class="container space-top-1 space-top-lg-1 space-bottom-2">
            <!-- FAQ Topics Section -->
            {{-- <div class="container space-2 space-bottom-lg-1">
                <div class="d-flex justify-content-center ">
                    <img src="{{ asset('pelayanan.gif') }}" style="height: 150px;">
                </div>
                <div class="d-flex justify-content-center space-bottom-lg-1">
                    <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                </div>

                <div class="space-bottom-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('pelayanan.png') }}" alt="" style="width: 90%;">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                @foreach ($pelayanan as $index => $list)
                                    <a href="{{ route('pelayanan', $list->id) }}">
                                        <span class="kecil">
                                            {{ $index + 1 . '. ' . $list->judul ?? '' }}
                                        </span>
                                    </a>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row justify-content-lg-center">
                    <div class="col-lg-8">
                        <div id="basics" class="space-bottom-1">
                            <div class="d-flex justify-content-center ">
                                <img src="{{ asset('FAQ.gif') }}" style="height: 90px;">
                            </div>
                            <div class="d-flex justify-content-center space-bottom-lg-1">
                                <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>

                            <!-- Basics Accordion -->
                            <div id="basicsAccordion">
                                @foreach ($faq as $list)
                                    <!-- Card -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-header card-collapse" id="basicsHeadingOne">
                                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0"
                                                href="javascript:;" role="button" data-toggle="collapse"
                                                data-target="#basics{{ $list->id }}" aria-expanded="false"
                                                aria-controls="basics{{ $list->id }}">
                                                {{ $list->pertanyaan ?? '' }}

                                                <span class="card-btn-toggle">
                                                    <span class="card-btn-toggle-default">&plus;</span>
                                                    <span class="card-btn-toggle-active">&minus;</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div id="basics{{ $list->id }}" class="collapse"
                                            aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                            <div class="card-body px-0">
                                                {!! $list->jawaban !!}

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                @endforeach
                            </div>
                            <!-- End Basics Accordion -->
                        </div>
                    </div>
                </div>
            </div> --}}


            <div class="space-bottom-1 mt-5">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('berita.gif') }}" style="height: 90px;">
                    {{-- <br> --}}
                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            <form action="{{ route('cari.berita') }}" class="row" id="form_subscribe" method="get"
                                name="form_subscribe">
                                <div class="card p-3 mb-5">
                                    <div class="form-row input-group-borderless">
                                        <div class="col-sm column-divider-sm mb-2 mb-md-0">
                                            <input class="form-control" id="name_1" name="judul"
                                                placeholder="Cari Berita" type="text" />
                                        </div>
                                        <div class="col-md-auto">
                                            <button type="submit" class="btn btn-block btn-primary btn-sm"><i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($data as $item)
                    <!-- Item -->
                    <div class="col-md-3 mb-3">
                        <!-- Blog Card -->
                        <a href="{{ route('detail.berita', $item->slug) }}">
                            <article class="card h-100">
                                <div class="card-img-top position-relative square-img-container">
                                    <img class="card-img-top square-img"
                                        src="{{ route('helper.show-picture', ['path' => $item->sampul->path]) }}"
                                        alt="{{ $item->judul ?? '' }}">
                                    <figure class="ie-curved-y position-absolute right-0 bottom-0 left-0 mb-n1">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                        </svg>
                                    </figure>
                                </div>

                                <div class="card-body">
                                    <h3><a class="text-inherit"
                                            href="{{ route('detail.berita', $item->slug) }}">{{ $item->judul ?? '' }}</a>
                                    </h3>
                                </div>

                                <div class="card-footer border-0 pt-0">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            <a class="avatar avatar-xs avatar-circle" href="#" data-toggle="tooltip"
                                                data-placement="top" title=""
                                                data-original-title=" {{ $item->dibuat->name ?? '' }}">
                                                <img class="avatar-img"
                                                    src="{{ asset('favicon_io/apple-touch-icon.png') }}"
                                                    alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->isoFormat('D MMMM Y') }}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <!-- End Blog Card -->
                    </div>
                @endforeach
            </div>

            <style>
                .square-img-container {
                    position: relative;
                    width: 100%;
                    padding-bottom: 100%;
                    /* Membuat wadah berbentuk persegi dengan rasio 1:1 */
                    overflow: hidden;
                }

                .square-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    /* Menjaga aspek rasio gambar */
                    object-position: center;
                    /* Memposisikan gambar di tengah (center-center) */
                }
            </style>


            <style>
                .square-img-container {
                    position: relative;
                    width: 100%;
                    padding-bottom: 100%;
                    /* Membuat wadah berbentuk persegi dengan rasio 1:1 */
                    overflow: hidden;
                }

                .square-img {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    /* Membuat gambar menyesuaikan ukuran wadah dengan tetap menjaga aspek rasio */
                }
            </style>

        </div>

        <div class="container mt-3 mb-2 text-right">
            <a class="btn btn-primary btn-sm" href="{{ route('berita.lainnya') }}">Lihat Selengkapnya <i
                    class="ml-1 fas fa-angle-right fa-sm"></i></a>
        </div>

    </main>
@endsection

@push('css')
    <style>
        .kecil {
            font-size: 16px;
            line-height: 24px;
        }

        .square-img-container {
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            /* Membuat wadah berbentuk persegi dengan rasio 1:1 */
            overflow: hidden;
        }

        .square-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Menjaga aspek rasio gambar */
            object-position: center;
            /* Memposisikan gambar di tengah (center-center) */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
@endpush
