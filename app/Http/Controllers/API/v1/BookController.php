<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return response() -> json(Book::with('author:id,name')->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return response() -> json(Book::find($id));
    }

    public function update(Request $request, $id)
    {
        $book=Book::find($id);
        $book->title=$request->title;
        $book->author_id=$request->author_id;
        $book->release_year=$request->release_year;
        $book->save();

        return response()->json($book, 201);
    }

    public function destroy($id)
    {
        Book::find($id)->delete();
        return response(null, 204);
    }
}
