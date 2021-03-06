@extends('layout/main')


@section('title' , 'Tabel Mahasiswa')
    

@section('container')
    
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Tabel Mahasiswa</h1>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                        @foreach($mahasiswa as $mhs)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$mhs -> nim}}</td>
                            <td>{{$mhs -> nama}}</td>
                            <td>{{$mhs -> alamat}}</td>
                            <td>{{$mhs -> fakultas}}</td>
                            <td>{{$mhs -> jurusan}}</td>
                            <td>
                                <a href="" class="badge bg-secondary">Create</a>
                                <a href="" class="badge bg-secondary">Read</a>
                                <a href="" class="badge bg-secondary">Update</a>
                                <a href="" class="badge bg-danger">Delete</a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection