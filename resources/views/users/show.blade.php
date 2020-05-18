@extends('layouts.app')

@section('title-block') {{ $user->name }} @endsection


@section('content')
    <h1>{{ $user->name }}</h1>
    <div class="alert alert-info">

        @switch($user->role->title)
            @case('Administrator')
                <div class="alert alert-danger" role="alert">
                    {{ $user->role->title }}
                </div>
            @break

            @case('Editor')
                <div class="alert alert-success" role="alert">
                    {{ $user->role->title }}
                </div>
            @break

            @default
                <div class="alert alert-primary" role="alert">
                    {{ $user->role->title }}
                </div>
        @endswitch

        <h3>Name: {{ $user->name }}</h3>
        <p>Email: {{ $user->email }}</p>
        <p>Role: {{ $user->role->title }}</p>
        <p>Role id : <small>{{ $user -> role -> id }}</small></p>
        <a href="{{ Route('users.edit', $user->id) }}"> <button class="btn btn-primary">Edit</button></a>
        <form action="{{ Route('users.destroy', $user->id) }}" class="btn" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Delete</button>
{{--        </form>--}}
    </div>


@endsection
