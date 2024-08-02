@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Edit Supplier</h1>
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
                        <h3 class="text-center my-4">Edit Supplier</h3>
                        <hr>
                        <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="id">ID Supplier</label>
                                <input type="text" name="id" id="id" class="form-control" value="{{ $supplier->id }}" readonly>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nama_supplier">Nama Supplier</label>
                                <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" value="{{ $supplier->nama_supplier }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $supplier->alamat }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="no_hp">No HP</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $supplier->no_hp }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="id_barang">ID Barang</label>
                                <input type="text" name="id_barang" id="id_barang" class="form-control" value="{{ $supplier->id_barang }}" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection