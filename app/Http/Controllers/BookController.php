<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = Book::all();
        $countBook = $books->count();

        return view('pages.index', compact('books', 'countBook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = DB::table('authors')->get(['id', 'name']);
        $publishers = DB::table('publishers')->get(['id', 'name']);
        return view('pages.add_book', compact('authors', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author_id' => ['required', 'numeric'],
            'publisher_id' => ['required', 'numeric'],
            'sampul' => ['required', 'url'],
            'judul' => ['required'],
            'deskripsi' => ['required', 'min:10'],
            'tahun_terbit' => ['required', 'numeric']
        ]);

        if ($validatedData) {
            $validatedData['slug'] = Str::slug($request->judul, '-');

            Book::create($validatedData);

            return back()->with('msg', 'Buku berhasil ditambahkan');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book, $slug)
    {
        $book = $book->where('slug', $slug)->first();
        return view('pages.detail_book', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
