@foreach($report as $reports)
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

{{-- <div class="container">
    <center><h3>Data</h3></center>
    <img class="rounded mx-auto d-block" src={{$reports->pengaduans->foto}} alt="Lights" style="width:25%">
          
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
</div>
@endforeach --}}

{{-- <html>
    <head>
    <title>Cetak</title>
    </head>
    <body>
      <center>
          <img class="rounded mx-auto d-block" src={{$reports->pengaduans->foto}} alt="Lights" style="width:25%">
          <hr>
          <h5 style="text-center">Pengaduan</h5>
            Pengadu: {{$reports->pengaduans->users->nama}}<br>
            Tanggal Pengaduan: {{$reports->pengaduans->tgl_pengaduan}}<br>
            Isi Pengaduan: {{$reports->pengaduans->isi_laporan}}<br>
            Status: Sudah Selesai Dikerjakan
        <hr>
        <h5 style="text-center">Tanggapan</h5>
        <ul>
            Tanggapan: {{$reports->tanggapan}}<br>
            Penganggap: {{$reports->users->username}}<br>
            Sebagai: @if($reports->users->role_id === 1)Admin
              @elseif($reports->users->role_id === 2)Petugas
              @else Tidak Diketahui
              @endif <br>
            DiTanggapi Pada: {{$reports->created_at}}
        </ul>
            <hr>
            <br>
      </center>
    </body>
</html> --}}

<div class="container">
 <center> <h3 class="card-title">Laporan</h3> </center>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Pengaduan</h5>
    <h6 class="card-subtitle mb-2 ">Username Pengadu : {{$reports->pengaduans->users->username}}</h6>
    <h6 class="card-subtitle mb-2 ">Nama Pengadu : {{$reports->pengaduans->users->nama}}</h6>
    <h6 class="card-subtitle mb-2 ">Isi Pengaduan : </h6>
    <p class="card-text">{{$reports->pengaduans->isi_laporan}}</p>
    <h6 class="card-subtitle mb-2 ">Status : Sudah Selesai Dikerjakan</h6>

    <hr>
    <h5 style="text-center">Tanggapan</h5>
    <h6 class="card-subtitle mb-2 ">Username Penanggap : {{$reports->users->username}}</h6>
    <h6 class="card-subtitle mb-2 ">Nama Penanggap : {{$reports->users->nama}}</h6>
    <h6 class="card-subtitle mb-2 ">Isi Tanggapan : {{$reports->tanggapan}}</h6>
    <h6 class="card-subtitle mb-2 ">Sebagai : @if($reports->users->role_id === 1)Admin
      @elseif($reports->users->role_id === 2)Petugas
      @else Tidak Diketahui
      @endif</h6>
    <h6 class="card-subtitle mb-2 ">Ditanggapi Pada : {{$reports->created_at}}</h6>

  </div>
</div>
</div>

@endforeach