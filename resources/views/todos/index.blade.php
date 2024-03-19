<!-- resources/views/todos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todos</h1>
        <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Create Todo</a>
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    <a href="{{ route('todos.show', $todo->id) }}">{{ $todo->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
