@extends('layouts.app')

@section('title-block') All messages @endsection


@section('content')
    <h1>All authors</h1>
    @foreach($authors as $author)
        <div class="alert alert-info">
            <h3>{{ $author -> name }}</h3>
            <p> Birth year: {{ $author -> birth_year }}</p>
            <p> Books: <small>{{ $author -> book -> count() }}</small></p>

{{--            @auth--}}
            @can('is_admin')
            <a href="{{ Route('authors.show', $author->id) }}">
                <button class="btn btn-warning">Info</button>
            </a>
            @endcan
{{--            @endauth--}}
        </div>
    @endforeach


@endsection
