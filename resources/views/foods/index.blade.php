@extends('layouts.app')

@section('content')
    <h1>This is Index of Food Page</h1>
    <a href="foods/create" class="btn btn-primary"
    role="button">
        Create a new Food
    </a>

    @foreach ($foods as $food)
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="fs-4 ">{{ $food->id }}</span>    
                <div class="ms-2 me-auto">
                    <div class="fw-bold">{{ $food->name }}</div>
                    {{ $food->description }}
                </div>
            <span class="badge bg-primary rounded-pill">{{ $food->count  }}</span>
            <a href="foods/{{ $food->id }}/edit">
                Edit Food
            </a>
            {{-- Delete a food --}}
            <form action="/foods/{{ $food->id }}" method="POST">
                @csrf {{-- chống hacker --}}
                @method('delete')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>  
            </li>
        </ul>
    @endforeach
@endsection