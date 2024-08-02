@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tambah Barang</h1>
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
                        <h3 class="text-center my-4">Tambah Barang</h3>
                        <hr>
                        <form action="{{ route('barang.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="merek">Merek</label>
                                <input type="text" name="merek" id="merek" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="harga">Harga Barang</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="text" name="harga" id="harga" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="stok">Stok Barang</label>
                                <input type="number" name="stok" id="stok" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="satuan">Satuan</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection