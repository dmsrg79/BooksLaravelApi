@extends('layouts.app')

@section('title-block') Add book @endsection

@section('content')
    <h1>Edit book page</h1>
    <form action="{{route('submit-update-book', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" name="title" placeholder="Enter title" id="title" value="{{ $data->title }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="title" id="author_id">Author</label>
            <select name="author_id">
                @foreach ($authorAll as $el)
                    <option value="{{ $el->id }}">{{ $el->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="release_year">Release year</label>
            <input type="text" name="release_year" placeholder="Enter year" id="release_year" value="{{ $data->release_year }}" class="form-control">
        </div>


        <button type="submit" class="btn btn-success">Сохранить</button>

    </form>
@endsection
