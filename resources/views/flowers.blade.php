@extends('layout')

@section('title', 'Flowers List')

@section('css')
<link rel="stylesheet" href="contact_style.css">
@endsection
@section('content')
    <h2>Flowers List</h2>

    @if (session('success'))
        <span style="color:green">{{ session('success') }}</span>
    @endif

    @if (session('error'))
        <span style="color:red">{{ session('error') }}</span>
    @endif

    @foreach ($flowers as $f)
        <p><strong>Name : </strong> {{ $f->name }}</p>
        <p><strong>Price : </strong> {{ $f->price }}</p>
        <a href="{{ url('/flowers/details', $f->id) }}">Details</a> /
        <a href="{{ url('/flowers/update', $f->id) }}">Update</a> /
        <a href="{{ url('/flowers/delete', $f->id) }}">Delete</a>

        <hr>
    @endforeach

@endsection
