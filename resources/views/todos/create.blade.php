@extends('layout.base')

@section('content')
    <h1 class="text-center my-5">Create Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header text-primary">Create New Todo</div>
                <div class="card-body">
                    <form action="{{ route('todos.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" name="name"
                                   value="{{ old('name') }}" placeholder="Name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <textarea name="description" placeholder="Description" cols="10" rows="5" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
