@extends('partials.admin.sidebar')
@section('title', 'Process')
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
                      <h6 class="m-0 font-weight-bold text-primary">Report
                      </h6>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>

                      @foreach($setting as $settings)
                      <form action="{{url('/admin/report/sort', [$settings->id])}}" method="post">
                        {{ csrf_field() }}
                    @method('PUT')
                        <select class="custom-select" id = "report_sort" name="report_sort"  for="report_sort">
                          <option selected value="{{$settings->report_sort}}">
                            @if($settings->report_sort === "1")All
                            @elseif($settings->report_sort === "2")Wait For Confirmation
                            @elseif($settings->report_sort === "3")On Work
                            @elseif($settings->report_sort === "4")Done
                            @else
                            @endif
                        </option>
                          <option value = "1">All</option>
                          <option value = "2">Wait For Confirmation</option>
                          <option value = "3">On Work</option>
                          <option value = "4">Done</option>
                        </select>

                        <button class="btn btn-primary" type="submit">Sort</button>
                      </form>
                     

                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Isi Laporan
                                </th>
                              <th>Username</th>
                              <th>Tgl Laporan</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
        
                        
                        @if($settings->report_sort === "1")

                        @php $no=0; @endphp
                        @foreach($report as $reports)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$reports->isi_laporan}}</td>
                          <td>{{$reports->users->username}}</td>
                          <td>{{$reports->tgl_pengaduan}}</td>
                          <td>@if($reports->status === 1)<p class="text-danger">Menunggu Konfirmasi</p>
                            @elseif($reports->status === 2)<p class="text-warning">Sedang Dikerjakan</p>
                            @elseif($reports->status === 3)<p class="text-success">Sudah Selesai Dikerjakan</p>
                            @else Status Tidak Diketahui
                          @endif</td>
                          <td><a class="btn btn-primary" href="{{url('/admin/report/detail', [$reports->id])}}">Detail</a></td>
                        </tr>
                        </tbody>
                        @endforeach

                        @elseif($settings->report_sort === "2")
                        @php $no=0; @endphp
                        @foreach($wait as $waits)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$waits->isi_laporan}}</td>
                          <td>{{$waits->users->username}}</td>
                          <td>{{$waits->tgl_pengaduan}}</td>
                          <td>@if($waits->status === 1)<p class="text-danger">Menunggu Konfirmasi</p>
                            @elseif($waits->status === 2)<p class="text-warning">Sedang Dikerjakan</p>
                            @elseif($waits->status === 3)<p class="text-success">Sudah Selesai Dikerjakan</p>
                            @else Status Tidak Diketahui
                          @endif</td>
                          <td><a class="btn btn-primary" href="{{url('/admin/report/detail', [$waits->id])}}">Detail</a></td>
                        </tr>
                        </tbody>
                        @endforeach

                        @elseif($settings->report_sort === "3")
                        @php $no=0; @endphp
                        @foreach($work as $works)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$works->isi_laporan}}</td>
                          <td>{{$works->users->username}}</td>
                          <td>{{$works->tgl_pengaduan}}</td>
                          <td>@if($works->status === 1)<p class="text-danger">Menunggu Konfirmasi</p>
                            @elseif($works->status === 2)<p class="text-warning">Sedang Dikerjakan</p>
                            @elseif($works->status === 3)<p class="text-success">Sudah Selesai Dikerjakan</p>
                            @else Status Tidak Diketahui
                          @endif</td>
                          <td><a class="btn btn-primary" href="{{url('/admin/report/detail', [$works->id])}}">Detail</a></td>
                        </tr>
                        </tbody>
                        @endforeach

                        @elseif($settings->report_sort === "4")
                        @php $no=0; @endphp
                        @foreach($done as $dones)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$dones->isi_laporan}}</td>
                          <td>{{$dones->users->username}}</td>
                          <td>{{$dones->tgl_pengaduan}}</td>
                          <td>@if($dones->status === 1)<p class="text-danger">Menunggu Konfirmasi</p>
                            @elseif($dones->status === 2)<p class="text-warning">Sedang Dikerjakan</p>
                            @elseif($dones->status === 3)<p class="text-success">Sudah Selesai Dikerjakan</p>
                            @else Status Tidak Diketahui
                          @endif</td>
                          <td><a class="btn btn-primary" href="{{url('/admin/report/detail', [$dones->id])}}">Detail</a></td>
                        </tr>
                        </tbody>
                        @endforeach

                        @else
                        @endif
                        
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

