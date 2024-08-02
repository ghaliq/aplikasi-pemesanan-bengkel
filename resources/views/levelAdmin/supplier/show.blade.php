@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tampilan Data Supplier</h1>
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
                        <h3 class="text-center my-4">Detail Supplier</h3>
                        <hr>
                        <div class="form-group mb-3">
                            <label for="id">ID Supplier</label>
                            <p class="form-control">{{ $supplier->id }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama_supplier">Nama Supplier</label>
                            <p class="form-control">{{ $supplier->nama_supplier }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <p class="form-control">{{ $supplier->alamat }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_hp">No HP</label>
                            <p class="form-control">{{ $supplier->no_hp }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label for="id_barang">ID Barang</label>
                            <p class="form-control">{{ $supplier->id_barang }}</p>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
