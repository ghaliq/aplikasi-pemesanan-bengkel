<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $datakendaraan = Kendaraan::all();
        return view('levelAdmin/kendaraan.index', compact('datakendaraan'));
    }

    public function create()
    {
        return view('levelAdmin/kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|regex:/^[0-9]{4}$/|unique:kendaraan,no_pol',
            'no_mesin' => 'required|unique:kendaraan,no_mesin',
            'merek' => 'required',
            'warna' => 'required',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function edit($no_pol)
{
    try {
        $kendaraan = Kendaraan::findOrFail($no_pol);
        return view('levelAdmin/kendaraan.edit', compact('kendaraan'));
    } catch (\Exception $e) {
        return redirect()->route('kendaraan.index')->with('error', 'Kendaraan tidak ditemukan.');
    }
}

public function update(Request $request, $no_pol)
{
    $request->validate([
        'no_mesin' => 'required',
        'merek' => 'required',
        'warna' => 'required',
    ]);

    try {
        $kendaraan = Kendaraan::findOrFail($no_pol);
        $kendaraan->no_mesin = $request->no_mesin;
        $kendaraan->merek = $request->merek;
        $kendaraan->warna = $request->warna;
        $kendaraan->save();

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil diperbarui.');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data kendaraan. ' . $e->getMessage());
    }
}

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus.');
    }
    
    public function show(string $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('levelAdmin/kendaraan.show', compact('kendaraan'));
    }
}
