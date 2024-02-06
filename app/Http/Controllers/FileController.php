<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\File;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $path = $file->storeAs('dpmptsp/berita/', $name);
        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
            'path' => $path
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Berita::with('foto')->where('id', $id)->first();
        foreach ($data->foto as $d) {
            $fileList[] = [
                'name' => $d->nama_file,
                'size' => Storage::size(($d->path)),
                'path' => route('helper.show-picture', array('path' => $d->path))
            ];
        }
        return json_encode($fileList ?? []);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Delete the file
        Storage::disk('gcs')->delete($id);

        return response()->json([
            'response' => 'File terhapus'
        ]);
    }

    public function hapus($id)
    {
        Storage::disk('gcs')->delete('dpmptsp/berita/' . $id);
        return response()->json([
            'response' => 'File terhapus'
        ]);
    }
}