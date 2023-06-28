@extends('layout.base')

@section('title', 'todo-'. $todo->id)

@section('content')
    <h1 class="text-center my-5">
        {{ $todo->name }}
    </h1>

    @if($todo->completed)
        <div class="row justify-content-center my-2 mb-2">
            <h3 class="text-center text-danger">This todo({{ $todo->id }}) has completed</h3>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header bg-dark text-light">
                    Details
                </div>

                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
            <a class="btn btn-info btn-sm my-2" href="{{ route('todos.edit', $todo->id) }}">Edit</a>
            <form action="{{ route('todos.delete', $todo->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger my-2" value="Delete">
            </form>
        </div>
    </div>
@endsection
