@extends('partials.admin.sidebar')
@section('title', 'Feedbacking')
@section('container')

@foreach($report as $reports)

<div class="container">
  <center><h3>Detail Report</h3></center>
    <img src={{$reports->foto}} class="rounded mx-auto d-block" alt="...">
    <form action="{{url('/admin/feedbacking/store', [$reports->id])}}" method="POST">
    {{ csrf_field() }}
    @method('PUT')

    <div class="form-group">
        <label for="exampleInputEmail1">Tanggapi</label>
        <input name="tanggapan" type="tanggapan" class="form-control" placeholder="Tanggapi" required>
    </div>
    <div class="form-group">
        <input name="pengaduan_id" type="password" class="form-control" value = {{$reports->id}} readonly>
    </div>
    <hr>
    <br>
          
        <label for="exampleInputEmail1">Pengadu</label>

          <input class="form-control" value = {{$reports->users->nama}} type="text" placeholder = {{$reports->users->nama}} readonly>

        <label for="exampleInputEmail1">Tanggal Pengaduan</label>
          <input class="form-control" value = {{$reports->tgl_pengaduan}} type="text" placeholder = {{$reports->tgl_pengaduan}} readonly>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Laporan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value = {{$reports->isi_laporan}} readonly>{{$reports->isi_laporan}}</textarea>
          </div>

          <label for="exampleInputEmail1">Status</label>
          <input class="form-control" name="status" placeholder = "Sedang Dikerjakan" type="text" readonly>


          <div class="footer mx-5 pt-3 mb-1">
            <button type="submit" class="btn btn-success">Feed</button>
            <a class="btn btn-secondary" href="{{url('/admin/feed')}}">Close</a>
          </div>
        </form>

    </form>
</div>
@endforeach

@stop