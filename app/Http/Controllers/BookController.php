<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{

    public function __construct(){
        $this->middleware('can:canPost')->except('index');
    }

    public function index()
    {
        return view('books/all', [
            'books' => Book::get()
        ]);
    }

    public function create()
    {
        return view('books/create', [
            'authors' => Author::all()
        ]);
    }

    public function store(BookRequest $request)
    {
        Book::create($request->input());
        return redirect()->route('books.index');
    }

    public function show($id)
    {
        return view('books/info', ['book' => Book::find($id)]);
    }

    public function edit($id)
    {
        return view('books/edit', ['book' => Book::find($id),
            'authors' => Author::all()
        ]);
    }

    public function update($id, BookRequest $request)
    {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('books.index');

    }

    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect()->route('books.index');
    }
}
