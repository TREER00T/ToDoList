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
                <li class="list-group-item d-flex align-items-center"
                    style="padding-top: 20px;padding-bottom: 20px;margin-bottom: 3px;margin-top: 3px">
                    <div style="text-align: left">
                        {{$todo->title}}
                    </div>

                    <div style="position: absolute; right: 20px;">
                        <a href="{{'/example/public/todos/'.$todo->id.'/edit'}}" type="button"
                           class="btn btn-outline-warning">Edit</a>

                        <form id="{{'delete-form-'.$todo->id}}" style="position: absolute; right: 20px;" method="post"
                              action="{{'/example/public/todos/'.$todo->id.'/delete'}}">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button type="button" id="{{$todo->id}}" class="btn btn-outline-danger">Delete</button>

                    </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
