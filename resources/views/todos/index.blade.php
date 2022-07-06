@extends('layouts.app')

@section('content')
    <div style="text-align:center;">
        <a type="submit" class="btn btn-primary mb-2 text-center" href="/example/public/todos/create">Create New
            Todo</a>
    </div>
    <div class="pt-10 text-center">
        <h1 class="text-2x1">All ToDos</h1>
        <ul class="list-group" style="width: 500px; margin: auto;">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$todo->title}}
                    <a href="{{'/example/public/todos/'.$todo->id.'/edit'}}" type="button"
                       class="btn btn-outline-warning">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
