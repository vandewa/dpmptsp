<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiUmum;
use App\Models\LinkTerkait;
use Yajra\DataTables\Facades\DataTables;

class InformasiUmumController extends Controller
{
    public function visimisi()
    {
        $data = InformasiUmum::where('id', 1)->first();

        return view('visimisi', compact('data'));
    }
    public function storeVisimisi(Request $request)
    {
        InformasiUmum::where('id', 1)->first()->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->route('visimisi')->with('edit', 'ok');
    }

    public function sosmed()
    {
        $data = InformasiUmum::where('id', 1)->first();

        return view('sosmed', compact('data'));
    }

    public function storeSosmed(Request $request)
    {
        InformasiUmum::where('id', 1)->first()->update([
            'fb' => $request->fb,
            'yt' => $request->yt,
            'ig' => $request->ig,
            'twitter' => $request->twitter,
        ]);

        return redirect()->route('sosmed')->with('edit', 'ok');
    }

    public function kontak()
    {
        $data = InformasiUmum::where('id', 1)->first();

        return view('kontak', compact('data'));
    }

    public function storeKontak(Request $request)
    {
        InformasiUmum::where('id', 1)->first()->update([
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ]);

        return redirect()->route('kontak')->with('edit', 'ok');
    }

    public function gantiPassword()
    {
        return view('ganti-password');
    }
}