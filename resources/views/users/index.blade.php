@extends('layouts.app')

@section('title-block') All books @endsection


@section('content')
    <h1>All users:</h1>
    @foreach($users as $user)
        <div class="alert alert-info">
            <h3>{{ $user->name }}</h3>
            <p>Email: {{ $user->email }}</p>
            <p>Role id: {{ $user->role_id }}</p>
            <p>Role: {{ $user->role->name }}</p>

            @can('is_admin')
                <a href="{{ Route('users.show', $user->id) }}">
                    <button class="btn btn-warning">Info</button>
                </a>
            @endcan
        </div>
    @endforeach



@endsection


