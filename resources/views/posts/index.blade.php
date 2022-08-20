@extends('layouts.app')

@section('content')

    <h2>All Posts</h2>
    <hr>
    <div>
        @foreach($posts as $post)
            <div>
                <h3>{{ $post['title'] }}</h3>
                <p>{{ $post['description'] }}</p>
                <p>
{{--                    <a href="{{ route('posts.show', $post['id']) }}">View</a>--}}
{{--                    <a href="{{ route('posts.edit', $post['id']) }}">Edit</a>--}}
                </p>
            </div>
            @endforeach
    </div>
@endsection
