<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Customer;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PelangganKeluhanController extends Controller
{
    public function index()
    {
        $keluhans = Keluhan::with(['customer', 'kendaraan', 'pegawai'])->paginate(10);
        return view('levelPelanggan/keluhan.index', compact('keluhans'));
    }

    public function create()
    {
        $customers = Customer::all();
        $kendaraans = Kendaraan::all();
        $pegawais = Pegawai::all();
        return view('levelPelanggan/keluhan.create', compact('customers', 'kendaraans', 'pegawais'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|uuid|exists:customers,customer_id',
            'nama_keluhan' => 'required|string|max:255',
            'ongkos' => 'required|numeric',
            'no_pol' => 'required|string|exists:kendaraan,no_pol',
            'pegawai_id' => 'required|integer|exists:pegawai,id_pegawai',
        ]);

        $keluhan = Keluhan::create($request->all());
        return redirect()->route('keluhan.index')->with('success', 'Keluhan berhasil ditambahkan.');
    }

    public function show($id_keluhan)
    {
        $keluhan = Keluhan::with(['customer', 'kendaraan', 'pegawai'])->findOrFail($id_keluhan);
        return view('levelPelanggan/keluhan.show', compact('keluhan'));
    }

    public function edit($id_keluhan)
    {
        $keluhan = Keluhan::findOrFail($id_keluhan);
        $customers = Customer::all();
        $kendaraans = Kendaraan::all();
        $pegawais = Pegawai::all();
        return view('levelPelanggan/keluhan.edit', compact('keluhan', 'customers', 'kendaraans', 'pegawais'));
    }

    public function update(Request $request, $id_keluhan)
    {
        $request->validate([
            'customer_id' => 'required|uuid|exists:customers,customer_id',
            'nama_keluhan' => 'required|string|max:255',
            'ongkos' => 'required|numeric',
            'no_pol' => 'required|string|exists:kendaraan,no_pol',
            'pegawai_id' => 'required|integer|exists:pegawai,id_pegawai',
        ]);

        $keluhan = Keluhan::findOrFail($id_keluhan);
        $keluhan->update($request->all());
        return redirect()->route('levelPelanggan/keluhan.index')->with('success', 'Keluhan berhasil diperbarui.');
    }

    public function destroy($id_keluhan)
    {
        $keluhan = Keluhan::findOrFail($id_keluhan);
        $keluhan->delete();
        return redirect()->route('keluhan.index')->with('success', 'Keluhan berhasil dihapus.');
    }
}

