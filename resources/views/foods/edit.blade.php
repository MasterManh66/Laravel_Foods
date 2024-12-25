@extends('layouts.app')

@section('content')
    <h1>This is EDIT of Food Page</h1>

    <form action="/foods/{{$food->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text"
        class="form-control"
        name="name"
        value="{{$food->name}}"
        placeholder="Enter food's name">
        <input type="text"
        class="form-control"
        name="description"
        value="{{$food->description}}"
        placeholder="Enter food's description">
        <input type="text"
        class="form-control"
        name="count"
        value="{{$food->count}}"
        placeholder="Enter food's count">
        
        <button class="btn btn-primary">
            Update Food
        </button>
    </form>
@endsection