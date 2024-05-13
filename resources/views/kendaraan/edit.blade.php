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
                        <form action="{{ route('kendaraan.update', $dataKendaraan->no_pol) }}" method="POST">
                          @csrf
                          @method('PUT')
                        
                              <div class="form-group">
                                <label for="exampleInputEmail1">NO Polisi</label>
                                <input type="text" name="no_pol" class="form-control"  placeholder="Enter No Polisi" value="{{ old('no_pol', $dataKendaraan->no_pol) }}">
                                <small id="emailHelp " class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @error('no_pol')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">No Mesin</label>
                              <input type="text" name="no_mesin" class="form-control"  placeholder="Enter No Mesin" value="{{ old('no_mesin', $dataKendaraan->no_mesin) }}">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              @error('no_mesin')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Merek</label>
                                <select class="form-control" name="merek">
                                    <option value="{{ old('merek', $dataKendaraan->merek) }}"> {{ old('merek', $dataKendaraan->merek) }}
                                    <option value="">Pilih</option>
                                  <option value="Honda">Honda</option>
                                  <option value="Yamaha">Yamaha</option>
                                  <option value="Suzuki">Suzuki</option>
                                  <option value="Kawasaki">Kawasaki</option>
                                  <option value="lain-lain">lain-lain</option>
                                 </select>
                                 @error('level')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                 </div>
                                 @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Warna</label>
                                <select class="form-control" name="warna">
                                    <option value="{{ old('warna', $dataKendaraan->warna) }}"> {{ old('warna', $dataKendaraan->warna) }}
                                    <option value="">Pilih</option> 
                                  <option value="Putih">Putih</option>
                                  <option value="Hitam">Hitam</option>
                                  <option value="Hijau">Hijau</option>
                                  <option value="Merah">Merah</option>
                                  <option value="lain-lain">lain-lain</option>
                                 </select>
                                 @error('level')
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