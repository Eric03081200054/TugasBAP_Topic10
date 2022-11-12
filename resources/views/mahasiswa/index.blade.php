@extends('layout.main')

@section('title', 'Data Mahasiswa')
@section('container')
<div class="container">
<ul class="nav nav-tabs">
    
    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{url('/mahasiswa')}}">Mahasiswa </a>
    </li> 
    <li class="nav-item">
        <a class="nav-link" href="{{url('/students')}}">Dosen</a>
    </li>    
</ul>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $mahasiswa as $mhs )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <th>{{ $mhs->nama }}</th>
                        <th>{{ $mhs->nim }}</th>
                        <th>{{ $mhs->email }}</th>
                        <th>{{ $mhs->jurusan }}</th>
                        <th>
                            <a href="" class="badge text-bg-success">edit</a>
                            <a href="" class="badge text-bg-danger">delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
    