<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Barang;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::with('barang')->get(); // Memuat relasi barang
        return view('levelAdmin/supplier.index', compact('suppliers'));
    }

    public function create()
    {
        $barang = Barang::all(); // Ambil semua data barang
        return view('levelAdmin/supplier.create', compact('barang'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'id_barang' => 'required|exists:barang,id',
        ]);

        Supplier::create($validatedData);

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('levelAdmin/supplier.show', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        $barang = Barang::all(); // Ambil semua data barang
        return view('levelAdmin/supplier.edit', compact('supplier', 'barang'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'id_barang' => 'required|exists:barang,id',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($validatedData);

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil dihapus.');
    }
}
