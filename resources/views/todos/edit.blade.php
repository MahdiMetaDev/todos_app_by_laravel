@extends('layout.base')

@section('content')
    <h1 class="text-center my-5">Edit Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header text-primary">Edit todo-{{ $todo->id }}</div>
                <div class="card-body">
                    <form action="{{ route('todos.update', $todo->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" name="name"
                                   value="{{ $todo->name }}">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <textarea name="description" cols="10" rows="5" class="form-control">{{ $todo->description }}</textarea>
                            @error('description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
