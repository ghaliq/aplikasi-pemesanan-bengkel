<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Input Data Pegawai</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pegawai.store') }}" method="POST"  >
                          @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID(Number)">
                                @error('id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama Pegawai</label>
                              <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name Pegawai">
                              @error('nama_customer')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Pegawai</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Alamat">
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
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


                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Jabatan</label>
                                <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                                    <option value="">Pilih</option>
                                  <option value="Teknisi">Teknisi</option>
                                  <option value="Admin">Admin</option>
                                  <option value="AVP">AVP</option>
                                 </select>
                                 @error('jabatan')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                 </div>
                                 @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                    <option value="">Pilih</option>
                                  <option value="Aktif">Aktif</option>
                                  <option value="Tidak_Aktif">Tidak Aktif</option>
                                 </select>
                                 @error('status')
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