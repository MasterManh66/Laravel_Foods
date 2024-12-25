@extends('layouts.app')

@section('content')
    <h1>This is CREATE of Food Page</h1>

    <form action="/foods" method="POST">
        @csrf
        <input type="text"
        class="form-control"
        name="name"
        placeholder="Enter food's name">
        <input type="text"
        class="form-control"
        name="description"
        placeholder="Enter food's description">
        <input type="text"
        class="form-control"
        name="count"
        placeholder="Enter food's count">
        
        <button class="btn btn-primary">
            Submit
        </button>
    </form>
    <br>
    <a href="index" class="btn btn-primary"
    role="button">
        Index a new Food
    </a>
@endsection