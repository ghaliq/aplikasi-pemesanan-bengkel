@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Barang</h1>
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
                    <h3 class="text-center my-4">Data Barang</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('barang.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Harga Barang</th>
                                    <th scope="col">Stok Barang</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($barangs as $index => $barang)
                                    <tr>
                                        <td class="text-center">
                                            {{ $index + 1 }}
                                        </td>
                                        <td>{{ $barang->id }}</td>
                                        <td>{{ $barang->nama_barang }}</td>
                                        <td>{{ $barang->merek }}</td>
                                        <td>Rp{{ number_format($barang->harga, 0, ',', '.') }}</td>
                                        <td>{{ $barang->stok }}</td>
                                        <td>{{ $barang->satuan }}</td>
                                    
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                                                <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">
                                            <div class="alert alert-danger">
                                                Data Barang Belum Ada.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $barangs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
