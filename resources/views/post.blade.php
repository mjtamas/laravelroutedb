@extends ('layout')

@section ('content')
    <h1>My Blog Post </h1>

    <p>{{ $post->body }}</p>

@endsection