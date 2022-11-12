@extends('layout.main')

@section('title', 'Form Tambah Data Dosen')
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
        <a class="nav-link" href="{{url('/mahasiswa')}}">Mahasiswa </a>
    </li> 
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{url('/students')}}">Dosen</a>
    </li>    
</ul>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-4">Tambah Data Dosen</h1>

            <form method="post" action="/students">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Mohon Input Nama Anda" name="nama" value="{{ old('nama') }}">

                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan nim anda" name="nim" value="{{ old('nim') }}">

                @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan email anda" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan anda" name="jurusan" value="{{ old('jurusan') }}">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>

            </form>
            
        </div>
    </div>
</div>
@endsection
    