<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::orderByDesc('id')->get());
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);

        Todo::create($data);

        session()->flash('success', 'Todo Created Successfully');

        return redirect(route('todos.index'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);

        $todo->update($data);

        session()->flash('success', 'Todo Updated Successfully');


        return redirect(route('todos.show', $todo->id));
    }

    public function destroy(Todo $todo)
    {

        $todo->delete();

        session()->flash('success', 'Todo Deleted Successfully');

        return redirect(route('todos.index'));
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;

        $todo->save();

        session()->flash('success', 'Todo Completed Successfully');

        return redirect(route('todos.index'));
    }
}

// $data = request()->all();

// $todo = new Todo();
// $todo->name = $data['name'];
// $todo->description = $data['description'];

// $todo->save();
