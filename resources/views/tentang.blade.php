@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <li>
        <a href="{{('/')}}"><i class="fa fa-home"></i>Home</a>
    </li>
    <li>
        <a class="active-menu" href="{{('/tentang')}}"><i class="fa fa-user"></i>Tentang</a>
    </li>
    <li>
        <a href="{{('/kontak')}}"><i class="fa fa-phone"></i>Kontak</a>
    </li>
    <li>
        <a href="{{('/siswa')}}"><i class="fa fa-male"></i>Data Siswa</a>
    </li>
</ul>
@endsection
@section('judul')
Tentang
@endsection
@section('content')
    Kelas belajar Laravel
@endsection