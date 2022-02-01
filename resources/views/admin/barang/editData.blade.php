@extends('admin.admin')

@section('title','Edit Data')

@section('content')

<form action="/barang/update/{{ $barang-> id }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>Kategori</label>
    <select class="form-control" name="kategori" value="{{ $barang -> kategori }}">
      <option>--Pilih--</option>
      <option value="Novel">Novel</option>
      <option value="Cergam">Cergam</option>
      <option value="Komik">Komik</option>
      <option value="Ensiklopedi">Ensiklopedi</option>
      <option value="Nomik">Nomik</option>
      <option value="Antologi">Antologi</option>
      <option value="Dongeng">Dongeng</option>
      <option value="Biografi">Biografi</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
    <input type="text" class="form-control" name="nama_buku" aria-describedby="emailHelp" value="{{$barang->nama}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control" name="harga" aria-describedby="emailHelp" value="{{$barang->harga}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
    <input type="text" class="form-control" name="desc" aria-describedby="emailHelp" value="{{$barang->deskripsi}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gambar</label>
    <input type="file" class="form-control" name="gambar" aria-describedby="emailHelp" value="{{$barang->img}}">
  </div>

  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection