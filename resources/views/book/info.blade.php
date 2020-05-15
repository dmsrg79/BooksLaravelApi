@extends('layouts.app')

{{--@section('title-block') {{ $data->name }} @endsection--}}


@section('content')
    <h1>{{ $data->title }}</h1>
        <div class="alert alert-info">
            <h3>{{ $data -> title }}</h3>
            <p> Birth year: {{ $data -> release_year }}</p>
            <p> Author: <small>{{ $data -> author -> name }}</small></p>
            <a href="{{ Route('update-book', $data->id) }}"> <button class="btn btn-primary">Edit</button></a>
            <a href="{{ Route('submit-delete-book', $data->id) }}"> <button class="btn btn-danger">Delete</button></a>

        </div>


@endsection
