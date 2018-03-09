@extends('layouts.email')

@section('content')
    <div class="container" style="text-align: center">
        <h2>Hi {{$data['name']}},</h2>
        <p><strong>Welcome to Fulllance!</strong> We are glad that you are here.</p>
        <p>
            Please follow the link below to
            <a href="{{ URL::to('signup/verify/' .$data['type']. '/'.$data['confirmation_code']) }}">verify</a> your email address
        </p>
    </div>
@endsection