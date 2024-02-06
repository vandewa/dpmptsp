<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\LinkTerkaitController;
use App\Http\Controllers\InformasiUmumController;
use App\Http\Controllers\PelayananPerizinanController;
use App\Http\Controllers\DaftarInformasiPublikController;
use App\Http\Controllers\TransparansiAnggaran\DpaController;
use App\Http\Controllers\TransparansiAnggaran\RkaController;
use App\Http\Controllers\TransparansiAnggaran\CalkController;
use App\Http\Controllers\TransparansiAnggaran\PoblController;
use App\Http\Controllers\TransparansiAnggaran\LkjipController;
use App\Http\Controllers\TransparansiAnggaran\RenjaController;
use App\Http\Controllers\TransparansiAnggaran\LhkasnController;
use App\Http\Controllers\TransparansiAnggaran\NeracaController;
use App\Http\Controllers\TransparansiAnggaran\RenstraController;
use App\Http\Controllers\TransparansiAnggaran\LaporanAsetController;
use App\Http\Controllers\TransparansiAnggaran\ProgramKegiatanController;
use App\Http\Controllers\TransparansiAnggaran\PerjanjianKinerjaController;
use App\Http\Controllers\TransparansiAnggaran\RealisasiAnggaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/news/{id}', [HomeController::class, 'berita'])->name('detail.berita');
Route::get('/pelayanan/{id}', [HomeController::class, 'pelayanan'])->name('pelayanan');
Route::get('/news-list', [HomeController::class, 'listNews'])->name('news.list');
Route::get('/page/tracking-perizinan', [HomeController::class, 'trackingPerizinan'])->name('tracking.perizinan');
Route::get('/cari-berita', [HomeController::class, 'cariBerita'])->name('cari.berita');
Route::get('/berita-lainnya', [HomeController::class, 'beritaLainnya'])->name('berita.lainnya');
Route::get('/page/personil', [HomeController::class, 'pagePersonil']);
Route::get('/page/lhkasn', [HomeController::class, 'lhkasn']);
Route::get('/page/perjanjian-kinerja', [HomeController::class, 'perjanjianKinerja']);
Route::get('/page/calk', [HomeController::class, 'calk']);
Route::get('/page/laporan-aset', [HomeController::class, 'laporanAset']);
Route::get('/page/renja', [HomeController::class, 'renja']);
Route::get('/page/renstra', [HomeController::class, 'renstra']);
Route::get('/page/pobl', [HomeController::class, 'pobl']);
Route::get('/page/program-kegiatan', [HomeController::class, 'programKegiatan']);
Route::get('/page/realisasi-anggaran', [HomeController::class, 'realisasiAnggaran']);
Route::get('/page/lkjip', [HomeController::class, 'lkjip']);
Route::get('/page/dpa', [HomeController::class, 'dpa']);
Route::get('/page/rka', [HomeController::class, 'rka']);
Route::get('/page/neraca', [HomeController::class, 'neraca']);
Route::get('/page/daftar-informasi-publik', [HomeController::class, 'daftarInformasiPublik'])->name('dip');
Route::get('/page/daftar-informasi-publik1', [HomeController::class, 'getDIP'])->name('dip.list');
Route::get('/page/daftar-informasi-publik2', [HomeController::class, 'getDIP2'])->name('dip2.list');
Route::get('/page/daftar-informasi-publik3', [HomeController::class, 'cariTahun'])->name('cari.tahun.dip2');
Route::get('/page/{id}', [HomeController::class, 'halaman'])->name('halaman');
Route::get('show-picture', [HelperController::class, 'showPicture'])->name('helper.show-picture');
Route::get('hapus/{id}', [FileController::class, 'hapus'])->name('hapus');

//dokumentasi template
Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('ganti-password', [DashboardController::class, 'password'])->name('password');
    Route::post('/ganti-password', [DashboardController::class, 'gantiPassword'])->name('ganti.password');
    Route::post('sendCheckbox', [BeritaController::class, 'changeAccess']);
    Route::get('/berita/checkSlug', [BeritaController::class, 'checkSlug']);
    Route::get('sosial-media', [InformasiUmumController::class, 'sosmed'])->name('sosmed');
    Route::post('sosial-media', [InformasiUmumController::class, 'storeSosmed'])->name('sosmed.post');
    Route::get('kontak', [InformasiUmumController::class, 'kontak'])->name('kontak');
    Route::post('kontak', [InformasiUmumController::class, 'storeKontak'])->name('kontak.post');
    Route::get('/isi-menu', [MenuController::class, 'indexIsiMenu'])->name('isi.menu.index');
    Route::get('/isi-menu/{id}', [MenuController::class, 'editIsiMenu'])->name('isi.menu.edit');
    Route::put('/isi-menu/{id}', [MenuController::class, 'updateIsiMenu'])->name('isi.menu.update');
    Route::resource('berita', BeritaController::class);
    Route::resource('file_image', FileController::class);
    Route::resource('link-terkait', LinkTerkaitController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('attachment', AttachmentController::class);
    Route::resource('lhkasn', LhkasnController::class);
    Route::resource('perjanjian-kinerja', PerjanjianKinerjaController::class);
    Route::resource('calk', CalkController::class);
    Route::resource('laporan-aset', LaporanAsetController::class);
    Route::resource('renja', RenjaController::class);
    Route::resource('renstra', RenstraController::class);
    Route::resource('pobl', PoblController::class);
    Route::resource('program-kegiatan', ProgramKegiatanController::class);
    Route::resource('realisasi-anggaran', RealisasiAnggaranController::class);
    Route::resource('lkjip', LkjipController::class);
    Route::resource('dpa', DpaController::class);
    Route::resource('rka', RkaController::class);
    Route::resource('neraca', NeracaController::class);
    Route::resource('dip', DaftarInformasiPublikController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('pelayanan-perizinan', PelayananPerizinanController::class);

});