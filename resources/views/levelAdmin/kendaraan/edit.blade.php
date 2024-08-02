@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Edit Kendaraan</h1>
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
                    <h3 class="text-center my-4">Edit Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="no_pol" class="form-label">NO Polisi</label>
                                <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ $kendaraan->no_pol }}" readonly>
                                <input type="hidden" name="no_pol_original" value="{{ $kendaraan->no_pol }}">
                                @error('no_pol')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_mesin" class="form-label">No Mesin</label>
                                <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ $kendaraan->no_mesin }}">
                                @error('no_mesin')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="merek" class="form-label">Merek</label>
                                <select class="form-control" id="merek" name="merek">
                                    <option value="Honda" {{ $kendaraan->merek == 'Honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="Yamaha" {{ $kendaraan->merek == 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                                    <option value="Suzuki" {{ $kendaraan->merek == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                    <option value="Kawasaki" {{ $kendaraan->merek == 'Kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                                    <option value="lain-lain" {{ $kendaraan->merek == 'lain-lain' ? 'selected' : '' }}>lain-lain</option>
                                </select>
                                @error('merek')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="warna" class="form-label">Warna</label>
                                <select class="form-control" id="warna" name="warna">
                                    <option value="Putih" {{ $kendaraan->warna == 'Putih' ? 'selected' : '' }}>Putih</option>
                                    <option value="Hitam" {{ $kendaraan->warna == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                                    <option value="Hijau" {{ $kendaraan->warna == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                                    <option value="Merah" {{ $kendaraan->warna == 'Merah' ? 'selected' : '' }}>Merah</option>
                                    <option value="lain-lain" {{ $kendaraan->warna == 'lain-lain' ? 'selected' : '' }}>lain-lain</option>
                                </select>
                                @error('warna')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection