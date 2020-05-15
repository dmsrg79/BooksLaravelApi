@extends('layouts.app')

@section('title-block') {{ $data->name }} @endsection


@section('content')
    <h1>{{ $data->name }}</h1>
        <div class="alert alert-info">
            <h3>{{ $data -> name }}</h3>
            <p> Birth year: {{ $data -> birth_year }}</p>
            <p> Books: <small>{{ $data -> book -> count() }}</small></p>
            <a href="{{ Route('update-author', $data->id) }}"> <button class="btn btn-primary">Edit</button></a>
            <a href="{{ Route('delete-author', $data->id) }}"> <button class="btn btn-danger">Delete</button></a>

        </div>


@endsection
