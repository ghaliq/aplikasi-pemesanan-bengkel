@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tampilan Data Kendaraan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    <h3 class="text-center my-4">Detail Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>NO Polisi:</strong> {{ $kendaraan->no_pol }}
                        </div>
                        <div class="mb-3">
                            <strong>No Mesin:</strong> {{ $kendaraan->no_mesin }}
                        </div>
                        <div class="mb-3">
                            <strong>Merek:</strong> {{ $kendaraan->merek }}
                        </div>
                        <div class="mb-3">
                            <strong>Warna:</strong> {{ $kendaraan->warna }}
                        </div>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
