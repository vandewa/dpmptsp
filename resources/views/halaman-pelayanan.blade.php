@section('title', $data->judul ?? '' . '| DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="{{ $data->judul ?? '' }}" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Article Description Section -->
        <div class="container space-top-3 space-bottom-2">
            <div class="w-lg-60 mx-lg-auto">
                <!-- Author -->
                <center>
                    <h1 class="h2">{{ $data->judul ?? '' }}</h1>
                    <br>

                    <div style="text-align:justify; text-justify:auto; color:black;"> <!-- text-indent: 40px;-->
                        {!! $data->isi ?? '' !!}
                    </div>

            </div>
        </div>
    </main>
    <!-- ========== END MAIN ========== -->
@endsection

@push('css')
    <style>
        img {
            max-width: 1000px;
        }
    </style>
@endpush
