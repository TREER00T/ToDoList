@if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}
        <div/>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}
                <div/>
                @elseif($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}
                            <div/>
    @endforeach
@endif
