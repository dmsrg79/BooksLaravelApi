<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{

    public function __construct(){
        $this->middleware('can:canPost')->except('index');
    }

    
    public function index()
    {
        return view('author/all', [
            'authors' => Author::get()
        ]);
    }

    public function create()
    {
        return view('author/create');
    }

    public function store(AuthorRequest $request)
    {
        Author::create($request->input());
        return redirect()->route('authors.index');
    }

    public function show($id)
    {
        return view('author/info', ['author' => Author::find($id)]);
    }

    public function edit($id)
    {
        return view('author/edit', ['data' => Author::find($id)]);
    }

    public function update($id, AuthorRequest $request)
    {

        $author = Author::find($id);
        $author->update($request->all());
        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        Author::find($id)->delete();
        return redirect()->route('authors.index');
    }
}
