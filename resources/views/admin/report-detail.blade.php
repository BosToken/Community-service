@extends('partials.admin.sidebar')
@section('title', 'Detail Report')
@section('container')

@foreach($report as $reports)

<div class="container">
    <center><h3>Detail Report</h3></center>
    <img src={{$reports->foto}} class="rounded mx-auto d-block" alt="...">
    <form>
        
        <label for="exampleInputEmail1">Pengadu</label>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$reports->users->nama}}</li>
              </ul>
          </div>

        <label for="exampleInputEmail1">Tanggal Pengaduan</label>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$reports->tgl_pengaduan}}</li>
              </ul>
          </div>

          <label for="exampleInputEmail1">Isi Laporan</label>
          <div class="card">
            <div class="card-body">
                <p class="card-text">{{$reports->isi_laporan}}</p>
            </div>
          </div>

          <label for="exampleInputEmail1">Status</label>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">@if($reports->status === 1)<p class="text-danger">Menunggu Konfirmasi</p>
                    @elseif($reports->status === 2)<p class="text-warning">Sedang Dikerjakan</p>
                    @elseif($reports->status === 3)<p class="text-success">Sudah Selesai Dikerjakan</p>
                    @else Status Tidak Diketahui
                  @endif</li>
              </ul>
          </div>
          <div class="footer mx-5 pt-3 mb-1">
          <a class="btn btn-secondary" href="{{url('/admin/report')}}">Close</a>
          </div>
    </form>
</div>
@endforeach

@stop