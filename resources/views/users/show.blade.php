@extends('layouts.app')

@section('title-block') {{ $user->name }} @endsection


@section('content')
    <h1>{{ $user->name }}</h1>
    <div class="alert alert-info">
        <div class="alert alert-danger" role="alert">
            {{ $user->role->name }}
        </div>
        <h3>Name: {{ $user->name }}</h3>
        <p>Email: {{ $user->email }}</p>
        <p>Role: {{ $user->role->name }}</p>
        <p>Role id : <small>{{ $user -> role -> id }}</small></p>
        <a href="{{ Route('users.edit', $user->id) }}"> <button class="btn btn-primary">Edit</button></a>
{{--        <form action="{{ Route('books.destroy', $book->id) }}" class="btn" method="POST">--}}
{{--            @method('DELETE')--}}
{{--            @csrf--}}
            <button class="btn btn-danger">Delete</button>
{{--        </form>--}}
    </div>


@endsection
