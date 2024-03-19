<!-- resources/views/todos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $todo->title }}</h1>
        <p>{{ $todo->description }}</p>
        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
