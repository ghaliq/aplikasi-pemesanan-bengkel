@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tampilan Data Pelanggan</h1>
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
                        <h3 class="text-center mb-4">Detail Customer</h3>
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <p class="form-control">{{ $customer->customer_id }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Customer</label>
                            <p class="form-control">{{ $customer->nama_customer }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <p class="form-control">{{ $customer->alamat }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <p class="form-control">
                                @if ($customer->jenis_kelamin === 'L')
                                    Laki-laki
                                @elseif ($customer->jenis_kelamin === 'P')
                                    Perempuan
                                @else
                                    {{ $customer->jenis_kelamin }}
                                @endif
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('customer.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection