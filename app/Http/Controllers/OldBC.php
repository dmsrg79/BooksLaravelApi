<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Author;


class BookController extends Controller
{
    public function showPageAddBook() {
        $authorAll = Author::all();
        return view('book/add-new', [
            'authorAll' => $authorAll
        ]);
    }


    public function createBook(Request $req) {
        $book = new Book;
        $authorAll = Author::all();
        $authorId = $req->author_id;
        $book->title=$req->input('title');
        $book->author_id = $req->input('author_id');
        $book->release_year = $req->input('release_year');

        $book->save();


        return redirect()->route('all-books');

    }

    public function showAllBooks() {
        $author = new Author;
        $book = new Book;
        return view('book/all', ['books' => $book->get() ]);
    }

    public function showOneBook($id) {
        $book = new Book;

        return view('book/info', ['data' => $book->find($id)]);
    }

    public function showPageUpdateBook($id) {
        $book = new Book;

        return view('book/edit', ['data' => $book -> find($id),
                        'authorAll' => Author::all()
        ]);
    }

    public function SubmitUpdateBook($id, BookRequest $req) {
        $book = Book::find($id);
        $book->title = $req->input('title');
        $book->author_id = $req->input('author_id');
        $book->release_year = $req->input('release_year');

        $book->save();

        return redirect()->route('all-books');
    }

    public function deleteBook($id) {
        Book::find($id)->delete();
        return redirect()->route('all-books');
    }
}
