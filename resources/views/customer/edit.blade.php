<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kelas</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('customer.update', $dataCustomer->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                        
                          <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID(Number)" value="{{ old('id', $dataCustomer->id) }}">
                            @error('id')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Customer</label>
                          <input type="text" name="nama_customer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name Customer" value="{{ old('nama_customer', $dataCustomer->nama_customer) }}">
                          @error('nama_customer')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Aamat Customer</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Alamat" value="{{ old('alamat', $dataCustomer->alamat) }}">
                            @error('alamat')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                <option value="{{ old('jenis_kelamin', $dataCustomer->jenis_kelamin) }}"> {{ old('jenis_kelamin', $dataCustomer->jenis_kelamin) }}
                                <option value="">Pilih</option>
                              <option value="L">L</option>
                              <option value="P">P</option>
                             </select>
                             @error('jenis_kelamin')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                             @enderror
                          </div>
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </form>
           
                        
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>