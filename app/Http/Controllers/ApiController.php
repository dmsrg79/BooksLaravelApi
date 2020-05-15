<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ApiController extends Controller
{
    function list(){
        return response() -> json(Book::with('author:id,name')->get());
    }

    function get($id)
    {
        return response() -> json(Book::find($id));
    }

    function update($id, Request $req)
        {
            $book=Book::find($id);
            $book->title=$req->title;
            $book->author_id=$req->author_id;
            $book->release_year=$req->release_year;
            $book->save();

            return response()->json($book, 201);
        }

    function delete($id)
    {
        Book::find($id)->delete();
        return response(null, 204);
    }
}
