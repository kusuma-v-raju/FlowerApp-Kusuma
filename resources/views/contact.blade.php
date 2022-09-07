@extends ('layout')

@section('title', 'Contact Page')


@section('css')
    <link rel="stylesheet" href="contact_style.css">
@endsection

@section('content')

    <h2>Contact Page</h2>

    <form method="post">
        @csrf
        <input type="text" name="name" placeholder="Contact"><br>
        <input type="submit" value="Submit">
    </form>

@endsection
