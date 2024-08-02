@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Pegawai</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div> 

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Pegawai</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('pegawai.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID Pegawai</th>
                                    <th scope="col">Nama Pegawai</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pegawais as $index => $pegawai)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $pegawai->id_pegawai }}</td>
                                        <td>{{ $pegawai->nama_pegawai }}</td>
                                        <td>{{ $pegawai->alamat }}</td>
                                        <td>
                                            @if ($pegawai->jenis_kelamin === 'L')
                                                Laki-laki
                                            @elseif ($pegawai->jenis_kelamin === 'P')
                                                Perempuan
                                            @else
                                                {{ $pegawai->jenis_kelamin }}
                                            @endif
                                        </td>
                                        <td>{{ $pegawai->jabatan }}</td>
                                        <td>{{ $pegawai->status }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('pegawai.show', $pegawai->id_pegawai) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <div class="alert alert-danger">
                                                Data Pegawai Belum Ada.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
