@extends('layout/main')


@section('title' , 'Detail Mahasiswa')
    

@section('container')
    
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1 class="mt-3">Detail Mahasiswa</h1>

                   <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$mahasiswas->nim}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswas->nama}}</h6>
                        <p class="card-subtitle mb-2 text-muted">{{$mahasiswas->alamat}}</p>
                        <p class="card-subtitle mb-2 text-muted">{{$mahasiswas->fakultas}}</p>
                        <p class="card-subtitle mb-2 text-muted">{{$mahasiswas->jurusan}}</p>

                        <a href="{{$mahasiswas->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="{{$mahasiswas->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="/mahasiswas" class="card-link">Kembali</a>
                        
                        
                    
                    </div>
                </div>
                    

                </div>
            </div>
        </div>
@endsection