@extends('layouts.app')

@section('title-block') All books @endsection


@section('content')
    <h1>All books</h1>

    <form action="{{ Route('books.create') }}">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            Add new book
        </button>
    </form>
    <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
    @foreach($books as $book)
        <div class="alert alert-info">
            <h3>{{ $book -> title }}</h3>
            <p> Release year: {{ $book -> release_year }}</p>
            <p>Author: <small>{{ $book->author->name }}</small></p>
{{--            @can('is_admin')--}}
            <a href="{{ Route('books.show', $book->id) }}"><button class="btn btn-warning">Info</button></a>
{{--            @endcan--}}
        </div>
    @endforeach


@endsection


