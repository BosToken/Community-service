@extends('partials.admin.sidebar')
@section('title', 'Detail Report')
@section('container')

@foreach($report as $reports)

<div class="container">
  <center><h3>Detail Report</h3></center>
    <img src={{$reports->pengaduans->foto}} class="rounded mx-auto d-block" alt="...">
    <form action="{{url('/admin/feedbacking/store', [$reports->id])}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
          
        <label for="exampleInputEmail1">Pengadu</label>
          <input class="form-control" value = {{$reports->pengaduans->users->nama}} type="text" placeholder = {{$reports->pengaduans->users->nama}} readonly>

            <label for="exampleInputEmail1">Tanggal Pengaduan</label>
          <input class="form-control" value = {{$reports->pengaduans->tgl_pengaduan}} type="text" placeholder = {{$reports->pengaduans->tgl_pengaduan}} readonly>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Laporan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value = {{$reports->pengaduans->isi_laporan}} readonly>{{$reports->pengaduans->isi_laporan}}</textarea>
          </div>

          <label for="exampleInputEmail1">Status</label>
          <input class="form-control" name="status" placeholder = "Sudah Selesai Dikerjakan" type="text" readonly>

          <br>
          <hr>
          <label for="exampleInputEmail1">Tanggapan</label>
          <input class="form-control" value = {{$reports->tanggapan}} type="text" placeholder = {{$reports->tanggapan}} readonly>

          <label for="exampleInputEmail1">Penanggap</label>
          <input class="form-control" name="tanggapan" value = {{$reports->users->username}} type="text" placeholder = {{$reports->users->username}} readonly>

          <label for="exampleInputEmail1">Sebagai</label>
          <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                @if($reports->users->role_id === 1)Admin
                @elseif($reports->users->role_id === 2)Petugas
                @else Tidak Diketahui
                @endif</li>
            </ul>
          </div>

          <div class="footer mx-5 pt-3 mb-1">
            <a class="btn btn-secondary" href="{{url('/admin/home')}}">Close</a>
          </div>
        </form>

    </form>
</div>
@endforeach

@stop