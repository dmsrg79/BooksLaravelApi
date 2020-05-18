@extends('layouts.app')

@section('title-block') All books @endsection

@section('content')
    <h1>All users:</h1>
    <button type="button" class="btn btn-primary btn-lg btn-block">Add new user</button>
    <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
    @foreach($users as $user)
        <div class="alert alert-info">
            <h3>{{ $user->name }}</h3>
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
            <p>Email: {{ $user->email }}</p>
            <p>Role id: {{ $user->role_id }}</p>
            <p>Role: {{ $user->role->title }}</p>
                <a href="{{ Route('users.show', $user->id) }}">
                    <button class="btn btn-warning">Info</button>
                </a>
        </div>
    @endforeach



@endsection


