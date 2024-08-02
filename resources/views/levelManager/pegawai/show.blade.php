@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tampilan Data Pegawai</h1>
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
                        <h3 class="text-center mb-4">Detail Pegawai</h3>
                        <div class="mb-3">
                            <label class="form-label">ID Pegawai</label>
                            <p class="form-control">{{ $pegawai->id_pegawai }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Pegawai</label>
                            <p class="form-control">{{ $pegawai->nama_pegawai }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <p class="form-control">{{ $pegawai->alamat }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <p class="form-control">
                                @if ($pegawai->jenis_kelamin === 'L')
                                    Laki-laki
                                @elseif ($pegawai->jenis_kelamin === 'P')
                                    Perempuan
                                @else
                                    {{ $pegawai->jenis_kelamin }}
                                @endif
                            </p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <p class="form-control">{{ $pegawai->jabatan }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <p class="form-control">{{ $pegawai->status }}</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
