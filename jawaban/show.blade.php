@extends('adminlte.master');

@section('content')
<div>
    <h3>Pertanyaan</h3>
    <p>Isi   : {{$list->isi}}</p>
    <p>Tanggal dibuat : {{$list->tanggaldibuat}}</p>
    <p>Tanggal diperbarui : {{$list->tanggaldiperbarui}}</p>
</div>


@endsection