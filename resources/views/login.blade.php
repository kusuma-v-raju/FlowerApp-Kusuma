@extends ('layout')

@section ('title', 'LogIn Page')

@section ('content')

<h2>LogIn Page</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post">
    @csrf
    <input type="email" name="email" placeholder="Email Address"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Submit">
</form>

@endsection