<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::orderBy('id_pegawai')->paginate(10);
        return view('levelAdmin/pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('levelAdmin/pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|in:Teknisi,Admin,APV',
            'status' => 'required|in:Aktif,Tidak_Aktif',
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->status = $request->status;

        // Mengatur id_pegawai secara otomatis dari yang terkecil
        $lastPegawai = Pegawai::orderBy('id_pegawai', 'desc')->first();
        $nextId = ($lastPegawai) ? $lastPegawai->id_pegawai + 1 : 1;
        $pegawai->id_pegawai = str_pad($nextId, 5, '0', STR_PAD_LEFT); // Memastikan maksimal 5 digit dengan leading zeros

        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show($id_pegawai)
{
    $pegawai = Pegawai::findOrFail($id_pegawai);
    return view('levelAdmin/pegawai.show', compact('pegawai'));
}

public function edit($id_pegawai)
{
    $dataPegawai = Pegawai::findOrFail($id_pegawai);
    return view('levelAdmin/pegawai.edit', compact('dataPegawai'));
}


public function update(Request $request, $id_pegawai)
{
    $request->validate([
        'nama_pegawai' => 'required|string|max:150',
        'alamat' => 'required|string',
        'jenis_kelamin' => 'required|in:L,P',
        'jabatan' => 'required|in:Teknisi,Admin,APV',
        'status' => 'required|in:Aktif,Tidak_Aktif',
    ]);

    $pegawai = Pegawai::findOrFail($id_pegawai);
    $pegawai->nama_pegawai = $request->nama_pegawai;
    $pegawai->alamat = $request->alamat;
    $pegawai->jenis_kelamin = $request->jenis_kelamin;
    $pegawai->jabatan = $request->jabatan;
    $pegawai->status = $request->status;

    $pegawai->save();

    return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
}
public function destroy($id_pegawai)
{
    $pegawai = Pegawai::findOrFail($id_pegawai);
    $pegawai->delete();

    return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
}
}
