@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <li>
        <a class="active-menu" href="{{('/')}}"><i class="fa fa-home"></i> Home</a>
    </li>
    <li>
        <a  href="{{('/tentang')}}"><i class="fa fa-user"></i> Tentang</a>
    </li>
    <li>
        <a  href="{{('/kontak')}}"><i class="fa fa-phone"></i> Kontak</a>
    </li>
    <li>
        <a  href="{{('/siswa')}}"><i class="fa fa-male"></i> Data Siswa</a>
    </li>
</ul>
@endsection
@section('judul')
    Beranda
@endsection
@section('content')
@if ($message = Session::get('pesan'))
<div class="alert alert-success">
{{ Session::get('pesan') }}
</div>
@endif
    Selamat Datang di Halaman Beranda Kelas Laravel
@endsection