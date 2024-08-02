@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Tambah Kendaraan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div>
                    <h3 class="text-center my-4">Tambah Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kendaraan.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="no_pol">NO Polisi</label>
                                <input type="text" name="no_pol" class="form-control" id="no_pol" aria-describedby="noPolHelp" placeholder="Masukkan NO Polisi (4 digit angka)" maxlength="4" required>
                                <small id="noPolHelp" class="form-text text-muted">Contoh: 9999</small>
                                @error('no_pol')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_mesin">No Mesin</label>
                                <input type="text" name="no_mesin" class="form-control" id="no_mesin" placeholder="Masukkan No Mesin" required>
                                @error('no_mesin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="merek">Merek</label>
                                <select class="form-control" name="merek" id="merek" required>
                                    <option value="">Pilih Merek</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Yamaha">Yamaha</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Kawasaki">Kawasaki</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                                @error('merek')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <select class="form-control" name="warna" id="warna" required>
                                    <option value="">Pilih Warna</option>
                                    <option value="Putih">Putih</option>
                                    <option value="Hitam">Hitam</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Merah">Merah</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                                @error('warna')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection