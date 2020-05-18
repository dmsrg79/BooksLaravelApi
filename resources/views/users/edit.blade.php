@extends('layouts.app')

@section('title-block') Edit user @endsection

@section('content')
    <h1>Edit user page</h1>
    <form action="" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" value="{{ $user->name }}"
                   class="form-control">
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" value="{{ $user->email }}"
                   class="form-control">
        </div>


        <div class="form-group">
            <label for="role" id="role_id">Role</label>
            <select name="role_id">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>



{{--        <div class="form-group">--}}
{{--            <label for="release_year">Release year</label>--}}
{{--            <input type="text" name="release_year" placeholder="Enter year" id="release_year"--}}
{{--                   value="{{ $book->release_year }}" class="form-control">--}}
{{--        </div>--}}


        <button type="submit" class="btn btn-success">Сохранить</button>

    </form>
@endsection
