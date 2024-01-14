<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\PublicYear;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
        $countAuthor = Author::all()->count();
        $countCategory = Category::all()->count();
        $countPublisher = Publisher::all()->count();
        $countPublicYear = PublicYear::all()->count();

        return view('pages.index', compact('books', 'countBook', 'countAuthor', 'countCategory', 'countPublisher', 'countPublicYear'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = DB::table('authors')->get(['id', 'name']);
        $categories = DB::table('categories')->get(['id', 'name']);
        $publishers = DB::table('publishers')->get(['id', 'name']);
        $publication_years = DB::table('publication_years')->get(['id', 'year']);
        return view('pages.add_book', compact('authors', 'categories', 'publishers', 'publication_years'));
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
            'category_id' => ['required', 'numeric'],
            'publisher_id' => ['required', 'numeric'],
            'publication_year_id' => ['required', 'numeric'],
            'cover' => ['required', 'url'],
            'title' => ['required', 'unique:list_books'],
            'description' => ['required', 'min:10']
        ]);

        if ($validatedData) {
            $validatedData['slug'] = Str::slug($request->title, '-');

            Book::create($validatedData);

            return redirect('home')->with('msg', 'Book added successfully');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book, string $slug)
    {
        $book = $book->where('slug', $slug)->first();
        return view('pages.book_detail', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, string $slug)
    {
        $bookData = $book->where('slug', $slug)->first();
        $authors = DB::table('authors')->get(['id', 'name']);
        $categories = DB::table('categories')->get(['id', 'name']);
        $publishers = DB::table('publishers')->get(['id', 'name']);
        $publication_years = DB::table('publication_years')->get(['id', 'year']);
        return view('pages.edit_book', compact('bookData', 'authors', 'categories', 'publishers', 'publication_years'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $book = Book::where('slug', $slug)->first();
        // dd($book->id);
        $validatedData = $request->validate([
            'author_id' => ['required', 'numeric'],
            'category_id' => ['required', 'numeric'],
            'publisher_id' => ['required', 'numeric'],
            'publication_year_id' => ['required', 'numeric'],
            'cover' => ['required', 'url'],
            'title' => ['required', Rule::unique('list_books', 'title')->ignore($book->id)],
            'description' => ['required', 'min:10']
        ]);

        if ($validatedData) {
            $validatedData['slug'] = Str::slug($request->title, '-');

            $book->update($validatedData);

            return redirect('home')->with('msg', 'Book data has been successfully changed');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, $slug)
    {
        $book->where('slug', $slug)->first()->delete();

        return redirect('home')->with('msg', 'The book has been successfully deleted');
    }
}
