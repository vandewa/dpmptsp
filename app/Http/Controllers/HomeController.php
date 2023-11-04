<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Berita;
use App\Models\DaftarInformasiPublik;
use App\Models\InformasiPublik;
use App\Models\Pendiri;
use App\Models\Visitor;
use App\Models\LinkTerkait;
use Illuminate\Http\Request;
use App\Models\InformasiUmum;
use Illuminate\Support\Facades\DB;
use App\Models\TransparansiAnggaran;
use Yajra\DataTables\Facades\DataTables;
use hisorange\BrowserDetect\Parser as Browser;

class HomeController extends Controller
{

    public function pengunjung()
    {
        $geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        if (Browser::isDesktop() == 1) {
            $jenis = 'Desktop';
        }
        if (Browser::isTablet() == 1) {
            $jenis = 'Tablet';
        }
        if (Browser::isMobile() == 1) {
            $jenis = 'Mobile';
        }
        $data = [
            'ip' => $geoipInfo->ip,
            'iso_code' => $geoipInfo->iso_code,
            'country' => $geoipInfo->country,
            'city' => $geoipInfo->city,
            'state' => $geoipInfo->state,
            'state_name' => $geoipInfo->state_name,
            'postal_code' => $geoipInfo->postal_code,
            'lat' => $geoipInfo->lat,
            'lon' => $geoipInfo->lon,
            'timezone' => $geoipInfo->timezone,
            'continent' => $geoipInfo->continent,
            'currency' => $geoipInfo->currency,
            'browser_family' => Browser::browserFamily(),
            'browser_name' => Browser::browserName(),
            'platform_family' => Browser::platformFamily(),
            'platform_name' => Browser::platformName(),
            'jenis' => $jenis,
        ];
        Visitor::create($data);
    }
    public function index()
    {
        $this->pengunjung();
        $berita = Berita::with(['sampul', 'dibuat'])
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('home.index', compact('berita'));
    }

    public function cariBerita(Request $request)
    {

        $cari = $request->judul;

        $posting = Berita::with(['sampul', 'dibuat'])
            ->where('judul', 'like', "%" . $cari . "%")
            ->orderBy('created_at', 'desc')
            ->simplePaginate(8)
            ->appends(['judul' => $request->judul]);

        $jumlah = Berita::where('judul', 'like', "%" . $cari . "%")->count();


        return view('home.cari', compact('posting', 'cari', 'jumlah'));

    }

    public function berita($id)
    {
        $data = Berita::with(['sampul', 'dibuat'])->where('slug', $id)->first();

        views($data)->cooldown(2)->record();

        $berita_terkait = Berita::with(['sampul', 'dibuat'])
            ->where('slug', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('detail-berita', compact('data', 'berita_terkait'));
    }

    public function listNews()
    {
        $data = Berita::with(['sampul', 'dibuat'])
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->simplePaginate(8);

        return view('list-berita', compact('data'));
    }

    public function halaman($id)
    {
        $data = Menu::where('slug', $id)->first();

        return view('detail-halaman', compact('data'));

    }

    public function lhkasn(Request $request)
    {
        $judul = 'LHKASN (Laporan Harta Kekayaan Aparatur Sipil Negara)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_01')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }
    public function perjanjianKinerja(Request $request)
    {
        $judul = 'PERJANJIAN KINERJA';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_02')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));
    }

    public function calk(Request $request)
    {
        $judul = 'CaLK (Catatan Atas Laporan Keuangan)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_03')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }
    public function laporanAset(Request $request)
    {
        $judul = 'LAPORAN ASET';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_04')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }
    public function renja(Request $request)
    {
        $judul = 'RENJA (Rencana Kerja)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_05')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }
    public function renstra(Request $request)
    {
        $judul = 'RENSTRA (Rencana Strategis)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_06')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }
    public function pobl(Request $request)
    {
        $judul = 'POBL (Perkembangan Kegiatan Belanja Langsung)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_07')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }

    public function programKegiatan(Request $request)
    {
        $judul = 'PROGRAM KEGIATAN';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_08')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }

    public function realisasiAnggaran(Request $request)
    {
        $judul = 'REALISASI ANGGARAN';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_09')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }

    public function lkjip(Request $request)
    {
        $judul = 'LKjIP (Laporan Kinerja Instansi Pemerintah)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_10')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }

    public function dpa(Request $request)
    {
        $judul = 'DPA (Dokumen Pelaksanaan Anggaran)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_11')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }

    public function rka(Request $request)
    {
        $judul = 'RKA (Rencana Kerja dan Anggaran)';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_12')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }

    public function neraca(Request $request)
    {
        $judul = 'NERACA';

        if ($request->ajax()) {

            $data = TransparansiAnggaran::where('transparansi_anggaran_tp', 'TRANSPARANSI_ANGGARAN_TP_13')->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank"><i class="far fa-eye mr-2"></i>Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('transparansi-anggaran', compact('judul'));

    }
    public function daftarInformasiPublik()
    {
        return view('daftar-informasi-publik');
    }

    public function getDIP(Request $request)
    {
        if ($request->ajax()) {

            $data = DaftarInformasiPublik::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . asset($data->preview_image) . '" class="btn btn-info rounded-round" target="_blank">Detail</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

    }
    public function getDIP2(Request $request)
    {
        $terbaru = InformasiPublik::max('tahun');
        $data = InformasiPublik::where('tahun', $terbaru)->first();

        return view('dip2', compact('data'));

    }

    public function cariTahun(Request $request)
    {

        $cari = $request->tahun;

        $data = InformasiPublik::where('tahun', $cari)->first();

        return view('dip2', compact('data'));


    }

}