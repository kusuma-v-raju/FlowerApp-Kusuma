@extends ('layout')

@section('title', 'Comment Page')

@section('content')

    <h2>Comment Page</h2>

    @foreach ($comments as $c)
        <p>For Flower : {{ $c->flower->name }}</p>
        <p>Comment : {{ $c->comment }} </p>
        <hr>
    @endforeach
@endsection
