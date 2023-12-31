@section('title', 'Tracking Perizinan | DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="Tracking Perizinan" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <main id="content" role="main">
        <div class="container space-top-3 space-top-lg-3 space-bottom-2">
            <div class="mb-5">
                <center>
                    <h2>Tracking Perizinan</h2>
                </center>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 ">

                    <form class="mb-3 input-group input-group-sm input-group-merge input-group-flush" action=""
                        method="get">

                        <input name="q" type="search" class="form-control" placeholder="Masukkan Nomor Transaksi"
                            aria-label="Search articles" aria-describedby="searchLabel">

                        <div class="input-group-append">
                            <div class="input-group-text" id="searchLabel">
                                <button type="submit" class="no-border btn-transparent">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    @if (request('q') != '')
                        @if ($meta['code'] == 200)
                            <div class="mb-3">
                                <span>Kode Transaksi : <b>{{ $kode }}</b></span>
                            </div>
                            @if ($data == 'Tahap Pengajuan')
                                <span class="badge bg-secondary text-light" style="font-size:2em;">Tahap Pengajuan
                                </span>
                            @elseif ($data == 'Tahap Pengecekan')
                                <span class="badge bg-dark" style="font-size:2em;">Tahap Pengecekan
                                    Teknis
                                </span>
                            @elseif ($data == 'Tahap Penilaian Teknis')
                                <span class="badge bg-info text-light" style="font-size:2em;">Tahap Penilaian
                                    Teknis
                                </span>
                            @elseif ($data == 'Proses Penandatanganan')
                                <span class="badge bg-dark text-light" style="font-size:2em;">Proses Penandatanganan
                                </span>
                            @elseif ($data == 'Selesai')
                                <span class="badge bg-success" style="color:white; font-size:2em;">Selesai
                                </span>
                            @elseif ($data == 'Ditolak')
                                <span class="badge bg-danger" style="color:white; font-size:2em;">Ditolak
                                </span>
                            @endif
                        @else
                            <span>Kode Transaksi : <b>{{ $kode }}</b></span><br>
                            <b><span class="text-danger">{{ $meta['message'] }} </span></b>
                        @endif

                    @endif

                </div>
            </div>
        </div>
    </main>
@endsection
