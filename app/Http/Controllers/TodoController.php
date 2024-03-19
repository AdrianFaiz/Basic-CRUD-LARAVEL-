<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->save();
        return redirect()->route('todos.index');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->save();
        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}