@extends('adminlte.master');

@section('content');
<div>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$pedit->id}}" method="POST">
              @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul / Topik </label>
                  </div>
                    <input type="text" class="form-control" id="text1" value="{{ $peredit->judul}}"name="judul" placeholder="Isikan Judul/Topic">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi</label>
                    <input type="text" class="form-control" id="tex2" value="{{ $peredit->isi}}"name="isi" placeholder="Tuliskan Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="text" class="form-control" id="tex3" value="{{ $peredit->tanggaldibuat}}"name="tanggaldibuat"placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Diperbarui</label>
                    <input type="text" class="form-control" id="tex4" value="{{ $peredit->tanggaldiperbarui}}"name="tanggaldiperbarui" placeholder="">
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