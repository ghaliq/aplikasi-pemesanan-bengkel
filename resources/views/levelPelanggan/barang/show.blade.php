@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tampilan Data Barang</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Detail Barang</h3>
                        <div class="mb-3">
                            <label class="form-label">ID Barang</label>
                            <p class="form-control">{{ $barang->id }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <p class="form-control">{{ $barang->nama_barang }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Merek</label>
                            <p class="form-control">{{ $barang->merek }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Barang</label>
                            <p class="form-control">Rp{{ number_format($barang->harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok Barang</label>
                            <p class="form-control">{{ $barang->stok }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Satuan</label>
                            <p class="form-control">{{ $barang->satuan }}</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
