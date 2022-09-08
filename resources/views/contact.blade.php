@extends ('layout')

@section('title', 'Contact Page')


@section('css')
    <link rel="stylesheet" href="{{asset ('css/contact_style.css')}}">
@endsection

@section('content')

    <h2>Contact Page</h2>

    <form method="post">
        @csrf
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <textarea name="message" cols="30" rows="20" placeholder="Email"> </textarea><br>
        <input type="submit" value="Submit">
    </form>

@endsection
