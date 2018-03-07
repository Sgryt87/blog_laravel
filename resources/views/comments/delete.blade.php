@extends('main')
@section('title', 'Delete Comment')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Delete this comment?</h2>
            <p>
                <strong>Name: {{$comment->name}}</strong>
                <strong>Email: {{$comment->email}}</strong>
                <strong>Comment: {{$comment->comment}}</strong>
            </p>
            {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete this comment', ['class' => 'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection