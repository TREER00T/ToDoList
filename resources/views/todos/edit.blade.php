@extends('layouts.app')

@section('content')

    <div>
        <button style="margin-left: 50px" type="button" onclick="history.back()" class="btn btn-outline-dark">Back
        </button>
    </div>

    <div class="pt-10 text-center">
        <h1 class="text-2x1">Update This todo</h1>

        <form class="py-5" method="post" action="{{route('todo.update',$todo->id)}}">
            @csrf
            @method('PUT')
            @include('layouts.flash')
            <input type="text" name="title" class="form-control-lg border-3 rounded py-2 px-2" value="{{$todo->title}}">
            <button type="submit" class="btn btn-primary mb-2">Update</button>
        </form>
    </div>

@endsection
