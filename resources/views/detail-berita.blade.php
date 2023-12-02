@section('title', $data->judul ?? '' . '| DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="{{ $data->judul ?? '' }}" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <!--Start Course Details-->
    <section class="course-details">
        <div class="container">
            <div class="row">
                <!--Start Course Details Content-->
                <div class="col-xl-8 col-lg-8">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($data->foto as $list)
                                <div class="swiper-slide">
                                    <img src="{{ asset($list->preview_image ?? '') }}" alt="image"
                                        style="width: 100%; border-top-left-radius: 25px; border-top-right-radius: 25px;" />
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="course-details__content">
                        <!--Start Single Courses One-->
                        <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="courses-one__single-content">
                                <h6
                                    style=" font-size: 14px;
                                    line-height: 24px;
                                    font-weight: 400;
                                    color:red;">
                                    <b>{{ $data->dibuat->name ?? '' }}<span> |
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('dddd, D MMMM Y') }}</span></b>
                                    <ul class="list-unstyled news-one__meta">
                                        <li>
                                            <span style="color: black;">Share This Article :</span>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/berita/detail/' . $data->slug) }}"
                                                target="_blank"><i class="fa-brands fa-facebook"
                                                    style="color:blue;"></i>Facebook&nbsp;&nbsp;</a>
                                            <a href="https://api.whatsapp.com/send?text={{ url('/berita/detail/' . $data->slug) }}"
                                                target="_blank"><i class="fa-brands fa-square-whatsapp"
                                                    style="color:green;"></i>WhatsApp&nbsp;&nbsp;</a>
                                            <a style="color: black"><i class="fa-solid fa-eye"
                                                    style="color:black"></i>&nbsp;{{ views($data)->count() }} views</></a>
                                        </li>
                                    </ul>
                                </h6>
                                <h4
                                    style="font-size: 34px;
                            line-height: 40px;
                            font-weight: 700;
                            margin-top: 10px;">
                                    {{ $data->judul }}</h4>
                                <div class="mt-4"
                                    style="text-align:justify; text-justify: inter-word;text-indent: 10px;  color:black;line-height:25px; font-size:15px;">
                                    {!! $data->isi_berita !!}
                                </div>

                            </div>
                        </div>
                        <!--End Single Courses One-->
                    </div>
                </div>
                <!--End Course Details Content-->

                <!--Start Course Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <div class="course-details__sidebar">
                        <div class="wow fadeInUp animated" data-wow-delay="0.1s">
                            <form action="{{ route('cari.berita') }}" class="row" method="get">
                                <div class="card p-3 mb-2" style="width:100%">
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
                        <div class="mb-4"></div>

                        <div class="course-details__new-courses wow fadeInUp animated " data-wow-delay="0.5s">
                            <h3 class="course-details__new-courses-title">Berita Terkait</h3>
                            <ul class="course-details__new-courses-list list-unstyled">
                                @foreach ($berita_terkait as $terkait)
                                    <li class="course-details__new-courses-list-item">
                                        <div class="course-details__new-courses-list-item-img ">
                                            <img src="{{ asset($terkait->sampul->preview_image ?? '') }}" alt=""
                                                style="width:66px;height:66px;" class="img-fluid transition-zoom-hover" />
                                        </div>
                                        <div class="course-details__new-courses-list-item-content">
                                            <h4 class="course-details__new-courses-list-item-content-title"
                                                style="hover {background: yellow}">
                                                <a
                                                    href="{{ route('detail.berita', $terkait->slug) }}">{{ $terkait->judul }}</a>
                                            </h4>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Course Details Sidebar-->
            </div>
        </div>
    </section>
    <!--End Course Details-->
@endsection


@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush

@push('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
@endpush
