<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('book.index');//001 iini pertamakali
        $books = Book::all();
        
        return view('book.index', compact('books'));//015 ini mengganti 001

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');//0011
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        
        $book->ISBN = $request->isbn;
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->penerbit = $request->penerbit;
        $book->keterangan = $request->keterangan;
        $book->harga = $request->harga;
        
        // save image
        $getimageName = time().'.'.$request->images->getClientOriginalExtension();
        $request->images->move(public_path(), $getimageName);
        $book->images = $getimageName;
        
        if($book->save()) {
        return redirect('/')->with('success', 'Tambah buku berhasil!');
        } else {
        return redirect('/')->with('error', 'Tambah buku gagal!');//012
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        
        return view('book.edit', compact("book"));//017

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);//018

    $book->ISBN = $request->isbn;
    $book->judul = $request->judul;
    $book->penulis = $request->penulis;
    $book->penerbit = $request->penerbit;
    $book->keterangan = $request->keterangan;
    $book->harga = $request->harga;
    
    // save image
    if ($request->hasFile('images')) {
    $getimageName = time().'.'.$request->images->getClientOriginalExtension();
    $request->images->move(public_path(), $getimageName);
    $book->images = $getimageName;
    }
    
    if($book->save()) {
    return redirect('/')->with('success', 'Edit buku berhasil!');
    } else {
    return redirect('/')->with('error', 'Edit buku gagal!');
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        
        return redirect('/')->with('success', 'Hapus buku berhasil!');

    }
}
