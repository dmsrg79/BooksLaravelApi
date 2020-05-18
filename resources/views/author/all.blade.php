@extends('layouts.app')

@section('title-block') All messages @endsection


@section('content')
    <h1>All authors</h1>

    <form action="{{ Route('authors.create') }}">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            Add new author
        </button>
    </form>
    <hr style="width: 100%; color: black; height: 1px; background-color:black;" />

    @foreach($authors as $author)
        <div class="alert alert-info">
            <h3>{{ $author -> name }}</h3>
            <p> Birth year: {{ $author -> birth_year }}</p>
            <p> Books: <small>{{ $author -> book -> count() }}</small></p>

{{--            @auth--}}
{{--            @can('is_admin')--}}
            <a href="{{ Route('authors.show', $author->id) }}">
                <button class="btn btn-warning">Info</button>
            </a>
{{--            @endcan--}}
{{--            @endauth--}}
        </div>
    @endforeach


@endsection
