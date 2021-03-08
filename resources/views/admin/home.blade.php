@extends('partials.admin.sidebar')
@section('title', 'Home Admin')
@section('container')
<div class="container">
    <div class="container">
        <div class="container">
            <center><h1>Your Work</h1></center>
            @foreach($report as $reports)
            <div class="card">
                <div class="card-body">
                  <h5 class="card-subtitle mb-2">{{$reports->pengaduans->users->nama}}</h5>
                  <p class="card-text">{{$reports->pengaduans->isi_laporan}}</p>
                    <a class="btn btn-primary" href="{{url('/admin/generating', [$reports->id])}}">Detail</a>
                </div>
              </div>
              @endforeach
        </div>
    </div>
</div>
</div>
@stop