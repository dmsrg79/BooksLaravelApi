@extends('layouts.app')

@section('title-block') {{ $book->name }} @endsection


@section('content')
    <h1>{{ $book->title }}</h1>
        <div class="alert alert-info">
            <h3>{{ $book -> title }}</h3>
            <p> Birth year: {{ $book -> release_year }}</p>
            <p> Author: <small>{{ $book -> author -> name }}</small></p>
            <a href="{{ Route('books.edit', $book->id) }}"> <button class="btn btn-primary">Edit</button></a>
            <form action="{{ Route('books.destroy', $book->id) }}" class="btn" method="POST">
                @method('DELETE')
                @csrf
            <button class="btn btn-danger">Delete</button>
            </form>
        </div>


@endsection
