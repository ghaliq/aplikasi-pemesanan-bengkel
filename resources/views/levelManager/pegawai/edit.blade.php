@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Edit Pegawai</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="text-center mb-4">Edit Data Pegawai</h3>
                    <hr>
                    <form action="{{ route('pegawai.update', $dataPegawai->id_pegawai) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="id_pegawai" class="form-label">ID Pegawai</label>
                            <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" aria-describedby="idHelp" value="{{ old('id_pegawai', $dataPegawai->id_pegawai) }}" readonly>
                            @error('id_pegawai')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="{{ old('nama_pegawai', $dataPegawai->nama_pegawai) }}">
                            @error('nama_pegawai')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Pegawai</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="{{ old('alamat', $dataPegawai->alamat) }}">
                            @error('alamat')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L" @if(old('jenis_kelamin', $dataPegawai->jenis_kelamin) == 'L') selected @endif>Laki-laki</option>
                                <option value="P" @if(old('jenis_kelamin', $dataPegawai->jenis_kelamin) == 'P') selected @endif>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-control" name="jabatan" id="jabatan">
                                <option value="">Pilih Jabatan</option>
                                <option value="Teknisi" @if(old('jabatan', $dataPegawai->jabatan) == 'Teknisi') selected @endif>Teknisi</option>
                                <option value="Admin" @if(old('jabatan', $dataPegawai->jabatan) == 'Admin') selected @endif>Admin</option>
                                <option value="AVP" @if(old('jabatan', $dataPegawai->jabatan) == 'AVP') selected @endif>AVP</option>
                            </select>
                            @error('jabatan')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="">Pilih Status</option>
                                <option value="Aktif" @if(old('status', $dataPegawai->status) == 'Aktif') selected @endif>Aktif</option>
                                <option value="Tidak_Aktif" @if(old('status', $dataPegawai->status) == 'Tidak Aktif') selected @endif>Tidak Aktif</option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
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