<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Models\Book;



class AuthorController extends Controller
{

    public function showAllAuthors() {
        $author = new Author;
        $book = new Book;
        return view('author/all', ['data' => $author->get(), 'data2' => $book->get() ]);
    }

    public function showOneAuthor($id) {
        $author = new Author;

        return view('author/info', ['data' => $author->find($id)]);
    }

    public function showPageUpdateAuthor($id) {
        $author = new Author;

        return view('author/edit', ['data' => $author -> find($id)]);
    }

    public function SubmitUpdateAuthor($id, AuthorRequest $req) {
        $author = Author::find($id);
        $author->name = $req->input('name');
        $author->birth_year = $req->input('birth_year');

        $author->save();

        return redirect()->route('all-authors');
    }

    public function deleteAuthor($id) {
      Author::find($id)->delete();
      return redirect()->route('all-authors');
    }

    public function submit(AuthorRequest $req) {
        $author = new Author();
        $author->name = $req->input('name');
        $author->birth_year = $req->input('birth_year');

        $author->save();
        return redirect()->route('all-authors');

    }
}
