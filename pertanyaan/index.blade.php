@extends('adminlte.master');

@section('content')
<div>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">Judul</th>
                      <th>Isi</th>
                      <th>Tanggal Dibuat</th>
                      <th style="width: 40px">Tanggal Diperbarui</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach('$pertanyaan as $key => $list')
                        <tr>
                            <td> {{ $key+1 }}</td>
                            <td>{{ $list=>judul}}</td>
                            <td>{{$list->isi}}</td>
                            <td>{{$list->tanngaldibuat}}</td>
                            <td>{{$list->tanggakdiperbarui}}</td>
                            <td>
                            <a href="/pertanyaan/{{$list->id}}" class="btn btn-sm btn-info">Show</a>
                            <a href="/pertanyaan/{{$list->id}}/edit" class="btn btn-sm btn-default">Edit</a>
                            <form role="form" action="/pertanyaan/{{$list->id}}" method="POST" display="inline">
                                @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                 </form>
                            </td>
                        </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>

@endsection