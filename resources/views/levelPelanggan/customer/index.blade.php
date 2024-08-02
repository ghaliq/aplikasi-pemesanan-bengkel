@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Pelanggan</h1>
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
                    <h3 class="text-center my-4">Data Customer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('customer.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataCustomer as $index => $customer)
                                    <tr>
                                        <td class="text-center">
                                            {{ $index + 1 }}
                                        </td>
                                        <td>{{ $customer->customer_id }}</td>
                                        <td>{{ $customer->nama_customer }}</td>
                                        <td>{{ $customer->alamat }}</td>
                                        <td>
                                            @if ($customer->jenis_kelamin === 'L')
                                                Laki-laki
                                            @elseif ($customer->jenis_kelamin === 'P')
                                                Perempuan
                                            @else
                                                {{ $customer->jenis_kelamin }}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customer.destroy', $customer->customer_id) }}" method="POST">
                                                <a href="{{ route('customer.show', $customer->customer_id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('customer.edit', $customer->customer_id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <div class="alert alert-danger">
                                                Data Customer Belum Ada.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $dataCustomer->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection>
