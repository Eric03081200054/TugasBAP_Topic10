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

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Dosen</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

            <ul class="list-group">
                @foreach( $students as $student )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}

                    <a href="/students/{{ $student->id }}" class="badge rounded-pill text-bg-info">DETAIL</a>
                </li>
                @endforeach
              </ul>

            
        </div>
    </div>
</div>
@endsection
    