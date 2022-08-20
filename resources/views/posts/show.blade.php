@extends('layouts.app')

@section('content')
    <h2>Single post</h2>

    <hr>
    <h2>{{$post['title']}}</h2>
    <p>{{$post['description']}}</p>
@endsection
