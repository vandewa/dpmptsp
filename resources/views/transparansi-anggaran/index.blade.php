@extends('layouts/app')

@section('content')
    <div class="content-wrapper">
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="d-flex justify-content-end">
                            @if (Request::segment(1) == 'lhkasn')
                                <a href="{{ route('lkhasn.create') }}" type="button" class="btn btn-md btn-primary">
                                @elseif(Request::segment(1) == 'perjanjian-kinerja')
                                    <a href="{{ route('perjanjian-kinerja.create') }}" type="button"
                                        class="btn btn-md btn-primary">
                                    @elseif(Request::segment(1) == 'calk')
                                        <a href="{{ route('calk.create') }}" type="button" class="btn btn-md btn-primary">
                                        @elseif(Request::segment(1) == 'laporan-aset')
                                            <a href="{{ route('laporan-aset.create') }}" type="button"
                                                class="btn btn-md btn-primary">
                                            @elseif(Request::segment(1) == 'renja')
                                                <a href="{{ route('renja.create') }}" type="button"
                                                    class="btn btn-md btn-primary">
                                                @elseif(Request::segment(1) == 'renstra')
                                                    <a href="{{ route('renstra.create') }}" type="button"
                                                        class="btn btn-md btn-primary">
                                                    @elseif(Request::segment(1) == 'pobl')
                                                        <a href="{{ route('pobl.create') }}" type="button"
                                                            class="btn btn-md btn-primary">
                                                        @elseif(Request::segment(1) == 'program-kegiatan')
                                                            <a href="{{ route('program-kegiatan.create') }}" type="button"
                                                                class="btn btn-md btn-primary">
                                                            @elseif(Request::segment(1) == 'realisasi-anggaran')
                                                                <a href="{{ route('realisasi-anggaran.create') }}"
                                                                    type="button" class="btn btn-md btn-primary">
                                                                @elseif(Request::segment(1) == 'lkjip')
                                                                    <a href="{{ route('lkjip.create') }}" type="button"
                                                                        class="btn btn-md btn-primary">
                                                                    @elseif(Request::segment(1) == 'dpa')
                                                                        <a href="{{ route('dpa.create') }}" type="button"
                                                                            class="btn btn-md btn-primary">
                                                                        @elseif(Request::segment(1) == 'rka')
                                                                            <a href="{{ route('rka.create') }}"
                                                                                type="button"
                                                                                class="btn btn-md btn-primary">
                                                                            @elseif(Request::segment(1) == 'neraca')
                                                                                <a href="{{ route('neraca.create') }}"
                                                                                    type="button"
                                                                                    class="btn btn-md btn-primary">
                            @endif

                            <i class="nav-icon fas fa-plus-square mr-3"></i>Add Data</a>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- Content area -->
                        <div class="card mt-3">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="devan" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Tahun</th>
                                                <th>Aksi</th>
                                                <th style="display: none"></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        var table = $('#devan').DataTable({
            processing: true,
            serverSide: true,
            dom: 'lrt',
            // responsive: true,
            "order": [
                [0, "desc"]
            ],
            ajax: window.location.href,
            columns: [{
                    data: 'tahun',
                    name: 'tahun',
                    className: "text-left"

                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    </script>
@endpush
