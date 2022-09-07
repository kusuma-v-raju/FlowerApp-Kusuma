@extends('layout')

@section('title', 'Flower Details')

@section('content')
    <h2>Flower Details</h2>


    <p>Name : {{ $flower->name }}</p>
    <p>Price : {{ $flower->price }}</p>
    <p>Comments : {{ $flower->comment}}</p>

@endsection
