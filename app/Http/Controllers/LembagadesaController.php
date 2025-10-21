<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lembagadesa;

class LembagadesaController extends Controller
{
    public function index()
    {
        $data['datalembaga_desa'] = Lembagadesa::all();
        return view('admin.lembaga_desa.index', $data);
    }

    public function create()
    {
        return view('admin.lembaga_desa.create');
    }

    public function store(Request $request)
    {
         $data = $request->only([
        'nama_lembaga',
        'deskripsi',
        'kontak'
    ]);

    Lembagadesa::create($data);

    return redirect()->route('lembagadesa.index')
                     ->with('success', 'Penambahan Data Berhasil!');
    }

    public function edit(string $id)
    {
        $data['datalembaga_desa'] = Lembagadesa::findOrFail($id);
        return view('admin.lembaga_desa.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $lembaga_desa = Lembagadesa::findOrFail($id);

        $lembaga_desa->nama_lembaga = $request->nama_lembaga;
        $lembaga_desa->deskripsi    = $request->deskripsi;
        $lembaga_desa->kontak       = $request->kontak;
        $lembaga_desa->save();

        return redirect()->route('lembagadesa.index')
                         ->with('success', 'Perubahan Data Berhasil!');
    }

    public function destroy(string $id)
    {
        $lembaga_desa = Lembagadesa::findOrFail($id);
        $lembaga_desa->delete();

        return redirect()->route('lembagadesa.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}
