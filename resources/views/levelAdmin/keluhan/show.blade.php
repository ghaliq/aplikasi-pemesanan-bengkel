@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tampilan Data keluhan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Detail Keluhan</h3>
                        <div class="mb-3">
                            <label class="form-label">ID Keluhan</label>
                            <p class="form-control">{{ $keluhan->id_keluhan }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Customer</label>
                            <p class="form-control">{{ $keluhan->customer_id }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Keluhan</label>
                            <p class="form-control">{{ $keluhan->nama_keluhan }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ongkos</label>
                            <p class="form-control">Rp{{ $keluhan->ongkos }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Polisi</label>
                            <p class="form-control">{{ $keluhan->no_pol }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pegawai</label>
                            <p class="form-control">{{ $keluhan->pegawai->nama_pegawai }}</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('keluhan.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection