@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Edit Keluhan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <h3 class="text-center my-4">Edit Keluhan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('keluhan.update', $keluhan->id_keluhan) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="id_keluhan">ID Keluhan</label>
                                <input type="text" id="id_keluhan" class="form-control" value="{{ $keluhan->id_keluhan }}" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label for="customer_id">ID Customer</label>
                                <input type="text" id="customer_id" class="form-control" value="{{ $keluhan->customer_id }}" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_keluhan">Nama Keluhan</label>
                                <input type="text" name="nama_keluhan" id="nama_keluhan" class="form-control" value="{{ $keluhan->nama_keluhan }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="ongkos">Ongkos</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="ongkos" id="ongkos" class="form-control" value="{{ $keluhan->ongkos }}" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="no_pol">No Polisi</label>
                                <select name="no_pol" id="no_pol" class="form-control">
                                    @foreach ($kendaraans as $kendaraan)
                                        <option value="{{ $kendaraan->no_pol }}" {{ $keluhan->no_pol == $kendaraan->no_pol ? 'selected' : '' }}>
                                            {{ $kendaraan->no_pol }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="pegawai_id">Pegawai</label>
                                <select name="pegawai_id" id="pegawai_id" class="form-control">
                                    @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->id_pegawai }}" {{ $keluhan->pegawai_id == $pegawai->id_pegawai ? 'selected' : '' }}>
                                            {{ $pegawai->nama_pegawai }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('keluhan.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
