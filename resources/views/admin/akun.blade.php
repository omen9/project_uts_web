@extends('admin.admin')

@section('title','Akun')

@section('content')

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Success</h4>
  {{session('pesan')}}
</div>
@endif
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php

    use GuzzleHttp\Psr7\Request;

    $no = 1; ?>
    @foreach($akun as $item)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{ $item -> username}}</td>
      <td>{{ $item -> password}}</td>
      
      <td>
        <form>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $item->id}}">
            Delete
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@foreach($akun as $item)
<div class="modal modal-danger fade" id="delete{{ $item->id}}">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Anda Yakin ingin menghapus {{ $item->username}}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <a href="/akun/delete/{{ $item->id}}"><button type="button" class="btn btn-outline">Ya</button></a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach

@endsection