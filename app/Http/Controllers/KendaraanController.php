<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KendaraanController extends Controller
{
    public function index(): View
    {
       $dataKendaraan = Kendaraan::latest()->paginate(10);
       return view('kendaraan.index',compact('dataKendaraan'));
    }
    public function create(): View
    {
        return view('kendaraan.create');
    }
    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'no_pol'      => 'required|unique:kendaraan,no_pol',
            'no_mesin'      => 'required',
            'merek'      => 'required',
            'warna'      => 'required',
        ]);

        Kendaraan::create([
            'no_pol'        => $request->no_pol,
            'no_mesin'        => $request->no_mesin,
            'merek'        => $request->merek,
            'warna'        => $request->warna,
        ]);
        //redirect to index
        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dataKendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('dataKendaraan'));
    }

    public function show(string $id): View
    {
        $kendaraan = Kendaraan::findOrFail($id);

        return view('kendaraan.show', compact('kendaraan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'no_pol'        => 'required',
            'no_mesin'      => 'required',
            'merek'         => 'required',
            'warna'         => 'required',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update([
            'no_pol'            => $request->no_pol,
            'no_mesin'          => $request->no_mesin,
            'merek'             => $request->merek,
            'warna'             => $request->warna,
        ]);
        //redirect to index
        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id): RedirectResponse
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

