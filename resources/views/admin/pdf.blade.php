@extends('partials.admin.sidebar')
@section('title', 'Generate')
@section('container')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


          <div class="content-wrapper">
        
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-xl-12">
              <div class="box box-primary">
                <div class="box-header">
                  </div>
                  @if(Session::get('alert_message'))
                        <div class="alert alert-success">
                          <strong>{{Session::get('alert_message')}}</strong>
                        </div>
                    @endif
                    <br>
                    <div class="card shadow mb-5">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Process
                      </h6>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Isi Laporan</th>
                              <th>Username</th>
                              <th>Tgl Laporan</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
        
                        @php $no=0; @endphp
                        @foreach($report as $reports)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$reports->pengaduans->isi_laporan}}</td>
                          <td>{{$reports->pengaduans->users->username}}</td>
                          <td>{{$reports->pengaduans->tgl_pengaduan}}</td>
                          <td>@if($reports->pengaduans->status === 1)<p class="text-danger">Menunggu Konfirmasi</p>
                            @elseif($reports->pengaduans->status === 2)<p class="text-warning">Sedang Dikerjakan</p>
                            @elseif($reports->pengaduans->status === 3)<p class="text-success">Sudah Selesai Dikerjakan</p>
                            @else Status Tidak Diketahui
                          @endif</td>
                          <td><a class="btn btn-success" href="{{url('/admin/pdf/detail', [$reports->id])}}">Generate</a></td>
                        </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div> 
            </section>
          </div>
        </div>

@stop