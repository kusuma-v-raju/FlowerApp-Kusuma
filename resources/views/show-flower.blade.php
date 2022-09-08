@extends('layout')

@section('title', 'Flower Details')

@section('content')
    <h2>Flower Details</h2>


    <p>Name : {{ $flower->name }}</p>
    <p>Price : {{ $flower->price }}</p>
    <a href="{{ url('/flowers/update', $flower->id) }}">Update</a> /
    <a href="{{ url('/flowers/delete', $flower->id) }}">Delete</a>
    <hr>

    @if (count($flower->comments) > 0)

        <h3>Comments</h3>
        @foreach ($flower->comments as $c)
            <li>{{ $c->comment }}</li>
        @endforeach

    @endif

@endsection
