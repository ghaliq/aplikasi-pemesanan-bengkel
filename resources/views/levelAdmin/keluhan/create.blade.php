@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tambah Keluhan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Tambah Keluhan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('keluhan.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="customer_id">ID Customer</label>
                                <select name="customer_id" id="customer_id" class="form-control">
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->customer_id }}">{{ $customer->customer_id }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_keluhan">Nama Keluhan</label>
                                <input type="text" name="nama_keluhan" id="nama_keluhan" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="ongkos">Ongkos</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="ongkos" id="ongkos" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="no_pol">No Polisi</label>
                                <select name="no_pol" id="no_pol" class="form-control">
                                    @foreach ($kendaraans as $kendaraan)
                                        <option value="{{ $kendaraan->no_pol }}">{{ $kendaraan->no_pol }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="pegawai_id">Pegawai</label>
                                <select name="pegawai_id" id="pegawai_id" class="form-control">
                                    @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->id_pegawai }}">{{ $pegawai->nama_pegawai }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection