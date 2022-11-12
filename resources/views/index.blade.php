@extends('layout/main')

@section('title', 'Website Eric')

@section('container')
<div class="container">
<ul class="nav nav-tabs">
    
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/mahasiswa')}}">Mahasiswa</a>
    </li>   
    <li class="nav-item">
        <a class="nav-link" href="{{url('/students')}}">Dosen</a>
    </li>   
</ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, world!</h1>
        </div>
    </div>
</div>
@endsection
    