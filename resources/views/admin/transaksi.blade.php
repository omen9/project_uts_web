@extends('admin.admin')

@section('title','Akun')

@section('content')


<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pembeli</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Jumlah </th>
      <th scope="col">Harga </th>
      <th scope="col">Total harga</th>
    </tr>
  </thead>
  <tbody>
    <?php

    use GuzzleHttp\Psr7\Request;

    $no = 1; ?>
    @foreach($transaksi as $item)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{ $item -> pembeli}}</td>
      <td>{{ $item -> alamat}}</td>
      <td>{{ $item -> nama_barang}}</td>
      <td>{{ $item -> jumlah}}</td>
      <td>{{ $item -> harga}}</td>
      <td>{{ $item -> total_harga}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>


@endsection