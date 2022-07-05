@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                    <div class="card-footer">
                        @include('layouts.flash')
                        <div class="custom-file mb-3">
                            <form action="/example/public/upload" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" class="custom-file-input" name="image">
                                <label style="margin-top: 10px" class="custom-file-label" for="customFile">Choose file</label>
                                <button style="margin-top: 30px" type="submit" value="upload" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
