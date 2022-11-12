@extends('layout.main')

@section('title', 'Tentang Saya')
@section('container')
<div class="container">
<ul class="nav nav-tabs">
    
    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{url('/about')}}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/mahasiswa')}}">Mahasiswa </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/students')}}">Dosen </a>
    </li>     
</ul>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, {{$nama}}!</h1>
        </div>
    </div>
</div>
@endsection
    