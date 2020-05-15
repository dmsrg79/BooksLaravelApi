@extends('layouts.app')

@section('title-block') Add author @endsection

@section('content')
    <h1>Add author page</h1>
    <form action="{{ Route('add-author-submit') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="year of birth">Year of birth</label>
            <input type="text" name="birth_year" placeholder="Enter year" id="birth_year" class="form-control">
        </div>


        <button type="submit" class="btn btn-success">Отправить</button>

    </form>
@endsection
