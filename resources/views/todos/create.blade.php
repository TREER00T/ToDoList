@extends('layouts.app')

@section('content')

    <div>
        <button style="margin-left: 50px" type="button" onclick="history.back()" class="btn btn-outline-dark">Back</button>
    </div>

    <div class="pt-10 text-center">
        <h1 class="text-2x1">What next you need To-Do?</h1>

        <form class="py-5" method="post" action="/example/public/todos/create">
            @csrf
            @include('layouts.flash')
            <input type="text" class="form-control-lg border-3 rounded py-2 px-2" name="title">
            <button type="submit" class="btn btn-primary mb-2">Create</button>
        </form>
    </div>

@endsection
