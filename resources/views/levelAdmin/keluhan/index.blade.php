@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Keluhan</h1>
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
                    <h3 class="text-center my-4">Data Keluhan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('keluhan.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID Customer</th>
                                    <th scope="col">Nama Keluhan</th>
                                    <th scope="col">Ongkos</th>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col">ID Keluhan</th>
                                    <th scope="col">Pegawai</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($keluhans as $keluhan)
                                    <tr>
                                        <td class="text-center">{{ $loop->index + 1 }}</td>
                                        <td>{{ $keluhan->id_keluhan }}</td>
                                        <td>{{ $keluhan->nama_keluhan }}</td>
                                        <td>{{ $keluhan->ongkos }}</td>
                                        <td>{{ $keluhan->no_pol }}</td>
                                        <td>{{ $keluhan->customer->customer_id }}</td>
                                        <td>{{ $keluhan->pegawai->nama_pegawai }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('keluhan.destroy', $keluhan->id_keluhan) }}" method="POST">
                                                <a href="{{ route('keluhan.show', $keluhan->id_keluhan) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('keluhan.edit', $keluhan->id_keluhan) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                                                Data Keluhan Belum Ada.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $keluhans->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
