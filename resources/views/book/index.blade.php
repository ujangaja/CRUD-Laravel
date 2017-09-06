{{-- @extends('master')

@section('content')
    <h3>List buku</h3
@endsection
 --}}

@extends('master')

@section('content')
    @if (session('success'))
        <div class="alert alert-info">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h3>List buku</h3>
    <a href="/create" class="btn btn-info">Tambah buku</a>
    <table class="table">
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($books) > 0 )
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->penulis }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->keterangan }}</td>
                        <td>{{ $book->harga }}</td>
                        <td ><img src="{{ asset($book->images) }}" style="width: 100px;height: 100px;"></td>
                        <td>
                            <a href="/edit/{{ $book->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $book->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" align="center">No data available.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
<!-- 013 -->
