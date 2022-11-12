@extends('layout.main')

@section('title', 'Detail Mahasiswa')
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
        <div class="col-6">
            <h1 class="mt-3">Daftar Dosen</h1>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $student->nama }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                  <p class="card-text">{{ $student->email }}</p>
                  <p class="card-text">{{ $student->jurusan }}</p>
                <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/students" class="card-link">Kembali</a>
                </div>
              </div>

            
        </div>
    </div>
</div>
@endsection
    