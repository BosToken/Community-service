@extends('partials.admin.sidebar')
@section('title', 'User Setting')
@section('container')

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
                    <br>
                    <div class="card shadow mb-5">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">User
                      </h6>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>

                        @foreach($roleset as $settings)
                      <form action="{{url('/admin/user-setting/sort', [$settings->id])}}" method="post">
                        {{ csrf_field() }}
                    @method('PUT')
                        <select class="custom-select" id = "role_sort" name="role_sort"  for="role_sort">
                          <option selected value="{{$settings->role_sort}}">
                            @if($settings->role_sort === "2")Petugas
                            @elseif($settings->role_sort === "3")Masyarakat
                            @elseif($settings->role_sort === "4")Banned
                            @else
                            @endif
                        </option>
                          <option value = "2">Petugas</option>
                          <option value = "3">Masyarakat</option>
                          <option value = "4">Banned</option>
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
                              <th>Nama</th>
                              <th>Username</th>
                              <th>Telphone</th>
                              <th>Role</th>
                              <th>Created At</th>
                              <th>Update At</th>
                            </tr>
                          </thead>
                          <tbody>
        
                    @if($settings->role_sort === "2")
                        @php $no=0; @endphp
                        @foreach($petugas as $penggunas)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$penggunas->nama}}</td>
                          <td>{{$penggunas->username}}</td>
                          <td>{{$penggunas->telp}}</td>
                          <td>@if($penggunas->role_id === 1)Admin
                            @elseif($penggunas->role_id === 2)Petugas</p>
                            @elseif($penggunas->role_id === 3)Masyarakat
                            @else Banned
                          @endif</td>
                          <td>{{$penggunas->created_at}}</td>
                          <td>{{$penggunas->updated_at}}</td>
                        </tr>
                        </tbody>
                        @endforeach
                    @elseif($settings->role_sort === "3")
                    @php $no=0; @endphp
                        @foreach($masyarakat as $penggunas)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$penggunas->nama}}</td>
                          <td>{{$penggunas->username}}</td>
                          <td>{{$penggunas->telp}}</td>
                          <td>@if($penggunas->role_id === 1)Admin
                            @elseif($penggunas->role_id === 2)Petugas</p>
                            @elseif($penggunas->role_id === 3)Masyarakat
                            @else Banned
                          @endif</td>
                          <td>{{$penggunas->created_at}}</td>
                          <td>{{$penggunas->updated_at}}</td>
                        </tr>
                        </tbody>
                        @endforeach
                    @elseif($settings->role_sort === "4")
                        @php $no=0; @endphp
                        @foreach($banned as $penggunas)
                        @php $no++; @endphp
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$penggunas->nama}}</td>
                          <td>{{$penggunas->username}}</td>
                          <td>{{$penggunas->telp}}</td>
                          <td>@if($penggunas->role_id === 1)Admin
                            @elseif($penggunas->role_id === 2)Petugas</p>
                            @elseif($penggunas->role_id === 3)Masyarakat
                            @else Banned
                          @endif</td>
                          <td>{{$penggunas->created_at}}</td>
                          <td>{{$penggunas->updated_at}}</td>
                        </tr>
                        </tbody>
                        @endforeach
                    @else
                    @endif
                      </table>
                    </div>
                  </div>
                </div>
              </div> 
            </section>
          </div>
        </div>
        @endforeach
@stop