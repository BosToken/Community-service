@extends('partials.user.navbar')
@section('title', 'Complaint')
@section('container')
<div class="container">
    {{-- <form action="{{url('/masyarakat/complaint/store')}}" method="POST">
        {{ csrf_field() }}
        <center><h3>Tulis Isi Pengaduan</h3></center>
      <div class="mb-3"  id = "isi_laporan" name="isi_laporan" required>
        <label for="exampleFormControlTextarea1" class="form-label">Isi Pengaduan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3"  id = "foto" name="foto" required>
        <label for="formFile" class="form-label">Unggah Foto</label>
        <input class="form-control" type="file" id="formFile">
      </div>

      <div class="modal-footer mx-5 pt-3 mb-1">
        <button type="dissmis" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-success">Save</button>
    </div>
    </form> --}}

    
        <form action="{{url('/masyarakat/complaint/store')}}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <center><h3>Tulis Isi Pengaduan</h3></center>
      {{-- <div class="mb-3"  id = "isi_laporan" name="isi_laporan" required>
        <label for="exampleFormControlTextarea1" class="form-label">Isi Pengaduan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div> --}}
      <div class="row">
        <div class="col-md-12">
            <div class="form-group">Isi Laporan
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <textarea class="form-control" aria-label="With textarea" name="isi_laporan" type="isi_laporan"></textarea>
              </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Unggah Foto</label>
        <input class="form-control" type="file" id="formFile" name="foto">
      </div>
          <div class="footer mx-5 pt-3 mb-1">
            <button type="dissmis" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Buat</button>
          </div>
        </form>
</div>


<style>
    h3{
        color :black;
    }
</style>

@stop