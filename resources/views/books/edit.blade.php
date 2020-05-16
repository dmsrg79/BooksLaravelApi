@extends('layouts.app')

@section('title-block') Add book @endsection

@section('content')
    <h1>Edit book page</h1>
    <form action="{{ Route('books.update', $book->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" name="title" placeholder="Enter title" id="title" value="{{ $book->title }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label for="title" id="author_id">Author</label>
            <select name="author_id">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="release_year">Release year</label>
            <input type="text" name="release_year" placeholder="Enter year" id="release_year"
                   value="{{ $book->release_year }}" class="form-control">
        </div>


        <button type="submit" class="btn btn-success">Сохранить</button>

    </form>
@endsection
