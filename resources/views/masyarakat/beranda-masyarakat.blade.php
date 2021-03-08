@extends('partials.user.navbar')
@section('title', 'Dashboard')
@section('container')

@if($user->role_id === 1)
<div class="container">
    <center><h3>Selamat Datang {{$user->nama}} Di Layanan Mas Zidan :3.</h3></center>
    <center><h3>Silahkan Kehalaman Admin Untuk Melakukan Tanggapan</h3></center>
    <center><a class="btn btn-outline-primary" href="{{url('/admin/home')}}">Admin Page</a></center>
</div>

@elseif($user->role_id === 2)
<div class="container">
    <center><h3>Selamat Datang {{$user->nama}} Di Layanan Mas Zidan :3.</h3></center>
    <center><h3>Silahkan Kehalaman Admin Untuk Melakukan Tanggapan</h3></center>
    <center><a class="btn btn-outline-primary" href="{{url('/admin/home')}}">Admin Page</a></center>
</div>

@elseif($user->role_id === 3)
<div class="container">
    <center><h3>Selamat Datang {{$user->nama}} Di Layanan Mas Zidan :3.</h3></center>
    @foreach($report as $pengaduans)
    <div class="card">
        <div class="card-body">
          <h5 class="card-subtitle mb-2">{{$user->username}}</h5>
          <p class="card-text">{{$pengaduans->isi_laporan}}</p>
            <a class="btn btn-primary" href="{{url('/masyrakat/report/detail', [$pengaduans->id])}}">Detail</a>
        </div>
      </div>
    @endforeach
</div>

@else
<div class="container">
    <center><h3>Maaf, Akun Ini Sudah Terblacklist Dari Web Ini</h3></center>
</div>

@endif

<style>
    h3{
        color :black;
    }
</style>

@stop