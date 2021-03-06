@extends('layout/main')


@section('title' , 'Tabel Mahasiswa')
    

@section('container')
    
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h1 class="mt-3">Daftar Mahasiswa</h1>

                    <a href="/mahasiswas/create" class="btn btn-secondary">Tambah data</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif

                    <ul class="list-group">
                    @foreach ( $mahasiswas as $pelajar )
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$pelajar -> nama}}
                        <a href="/mahasiswas/{{ $pelajar -> id }}" class="badge bg-info">Detail</a>
                        </li>

                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
@endsection