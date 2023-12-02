<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelayananPerizinanValidation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\PelayananPerizinan;

class PelayananPerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = PelayananPerizinan::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . route('pelayanan-perizinan.edit', $data->id) . '" class="btn btn-outline-primary rounded-round"><i class="far fa-plus-square mr-2"></i>Edit</a>
                        <a href="' . route('pelayanan-perizinan.destroy', $data->id) . '" class="btn btn-outline-danger rounded-round delete-data-table"><i class="fas fa-trash mr-2"></i>Hapus</a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pelayanan-perizinan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelayanan-perizinan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PelayananPerizinanValidation $request)
    {
        PelayananPerizinan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('pelayanan-perizinan.index')->with('store', 'oke');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = PelayananPerizinan::find($id);

        return view('pelayanan-perizinan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PelayananPerizinanValidation $request, string $id)
    {
        PelayananPerizinan::find($id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('pelayanan-perizinan.index')->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PelayananPerizinan::destroy($id);
    }
}
