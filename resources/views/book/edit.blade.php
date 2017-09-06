@extends('master')

@section('content')
    <h3>Edit Buku</h3>
    <form action="/edit/{{ $book->id }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label>ISBN</label>
          <input type="text" class="form-control" name="isbn" value="{{ $book->ISBN }}">
        </div>
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul" value="{{ $book->judul }}">
        </div>
        <div class="form-group">
          <label>Penulis</label>
          <input type="text" class="form-control" name="penulis" value="{{ $book->penulis }}">
        </div>
        <div class="form-group">
          <label>Penerbit</label>
          <input type="text" class="form-control" name="penerbit" value="{{ $book->penerbit }}">
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <textarea class="form-control" name="keterangan">{{ $book->keterangan }}</textarea>
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" class="form-control" name="harga" value="{{ $book->harga }}">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <img src="{{ asset($book->images) }}">
          <input type="file" class="form-control" name="images">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection

