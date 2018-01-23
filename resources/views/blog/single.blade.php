@extends('main')
@section('title', "$post->title")
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2"></div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </div>
@endsection