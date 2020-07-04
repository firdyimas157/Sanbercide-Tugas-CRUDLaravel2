@extends('adminlte.master');

@section('content');
<div>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul / Topik </label>
                    <input type="text" class="form-control" id="text1" name="judul" placeholder="Isikan Judul/Topic">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi</label>
                    <input type="text" class="form-control" id="tex2" name="isi" placeholder="Tuliskan Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="text" class="form-control" id="tex3" name="tanggaldibuat"placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Diperbarui</label>
                    <input type="text" class="form-control" id="tex4" name="tanggaldiperbarui" placeholder="">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>





</div>

@endsection