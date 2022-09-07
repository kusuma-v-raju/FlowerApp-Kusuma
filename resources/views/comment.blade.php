@extends ('layout')

@section('title', 'Comment Page')

@section('content')

    <h2>Comment Page</h2>

    <p>Comment : {{$comment->comment}}</p>
@endsection
