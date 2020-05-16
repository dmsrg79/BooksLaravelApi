@extends('layouts.app')

@section('title-block') All messages @endsection


@section('content')
    <h1>All authors</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element -> name }}</h3>
            <p> Birth year: {{ $element -> birth_year }}</p>
            <p> Books: <small>{{ $element -> book -> count() }}</small></p>

{{--            @auth--}}
            @can('is_admin')
            <a href="{{ Route('authors.show', $element->id) }}">
                <button class="btn btn-warning">Info</button>
            </a>
            @endcan
{{--            @endauth--}}
        </div>
    @endforeach


@endsection
