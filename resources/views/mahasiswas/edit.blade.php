@extends('layout/main')


@section('title' , 'Detail Mahasiswa')
    

@section('container')
    
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

                <form method="post" action="/mahasiswas/{{$mahasiswas->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="masukan nim" name="nim" value="{{$mahasiswas->nim}}">
                    
                    @error('nim')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    
                    </div>

                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{$mahasiswas->nama}}">
                    
                    @error('nim')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for="nim">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="masukan alamat" name="alamat" value="{{$mahasiswas->alamat}}">
                    </div>

                    <div class="form-group">
                        <label for="nim">Fakultas</label>
                        <input type="text" class="form-control" id="fakultas" placeholder="masukan fakultas" name="fakultas" value="{{$mahasiswas->fakultas}}">
                    </div>

                    <div class="form-group">
                        <label for="nim">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="masukan jurusan" name="jurusan" value="{{$mahasiswas->jurusan}}">
                    </div>

                    <button type="submit" class="btn btn-dark">Ubah data mahasiswa</button>
                      
                </form>
                    

                </div>
            </div>
        </div>
@endsection