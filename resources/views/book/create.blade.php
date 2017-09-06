@extends('master')

@section('content')
    <h3>Tambah Buku</h3>
    <form action="/" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label>ISBN</label>
          <input type="text" class="form-control" name="isbn">
        </div>
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
          <label>Penulis</label>
          <input type="text" class="form-control" name="penulis">
        </div>
        <div class="form-group">
          <label>Penerbit</label>
          <input type="text" class="form-control" name="penerbit">
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <textarea class="form-control" name="keterangan"></textarea>
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" class="form-control" name="harga">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="images">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection

