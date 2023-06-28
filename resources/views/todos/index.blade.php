@extends('layout.base')

@section('title', 'todos')

@section('content')
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header bg-danger text-light">
                    Todos
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item d-flex justify-content-between">
                                {{ $todo->name }}
                                @if(!$todo->completed)
                                    <a href="{{ route('todos.complete', $todo->id) }}" class="btn btn-warning btn-sm">Complete</a>
                                @endif
                                <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-primary btn-sm">View</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
