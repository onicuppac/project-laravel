@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <li>
        <a href="{{('/')}}"><i class="fa fa-home"></i>Home</a>
    </li>
    <li>
        <a href="{{('/tentang')}}"><i class="fa fa-user"></i>Tentang</a>
    </li>
    <li>
        <a href="{{('/kontak')}}"><i class="fa fa-phone"></i>Kontak</a>
    </li>
    <li>
        <a class="active-menu" href="{{('/siswa')}}"><i class="fa fa-male"></i>Data Siswa</a>
    </li>
</ul>
@endsection
@section('judul')
Data siswa
@endsection
@section('content')
<div class="table-responsive">
<form method="POST">
@csrf
<table class="table" border="1" cellpadding="2" cellspacing="2">
</tr>
<tr>
    <td>NIS</td>
    <td><input type="text" name="nis" value="{{ (isset($siswa)) ? $siswa->nis_siswa : ''}}"></td>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name="nama" value="{{ (isset($siswa)) ? $siswa->nama_siswa : ''}}"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><textarea name="alamat" rows="3">{{ (isset($siswa)) ? $siswa->alamat_siswa : ''}}</textarea></td>
</tr>
<tr>
    <td colspan="2"><button type="submit">SIMPAN</button> <a href="{{url('siswa')}}">Kembali</a></td>
</table>
</form>
</div>
@endsection