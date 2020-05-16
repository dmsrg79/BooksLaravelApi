@extends('layouts.app')

@section('title-block') {{ $author->name }} @endsection


@section('content')
    <h1>{{ $author->name }}</h1>
        <div class="alert alert-info">
            <h3>{{ $author -> name }}</h3>
            <p> Birth year: {{ $author -> birth_year }}</p>
            <p> Books: <small>{{ $author -> book -> count() }}</small></p>
            <a href="{{ Route('authors.edit', $author->id) }}"> <button class="btn btn-primary">Edit</button></a>
            <form action="{{ Route('authors.destroy', $author->id) }}" class="btn" method="POST">
                @method('DELETE')
                @csrf
            <button class="btn btn-danger">Delete</button>
            </form>
        </div>


@endsection
