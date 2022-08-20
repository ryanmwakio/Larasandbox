@extends('layouts.app')

@section('content')
    <h2>Single post</h2>

    <hr>
{{--    check if it has is_new key--}}
    @if(isset($post['is_new']) )
        <h2>{{$post['title']}}</h2>
        <p>{{$post['description']}}</p>
    @else
        <h2>The post is not new</h2>
    @endif

    @unless(isset($post['is_new']))
        <p>The post is using unless</p>
    @endunless

    @isset($post['has_comments'])
        <p>The post has comments</p>
    @endisset
@endsection
