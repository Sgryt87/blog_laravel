@extends('main')
@section('title', 'Create New Post')
@section('stylesheets')
    {!! Html::style('public/css/parsley.css') !!}
    {!! Html::style('public/css/select2.min.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title', null, array('class' => 'form-control input-lg', 'required' => '', 'maxlength' => '255')) !!}
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null , ['class' => 'form-control', 'required', 'minlength' => '5', 'maxlength' => '255']) !!}
            {!! Form::label('category_id', 'Category:') !!}
            <select id="" class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            {!! Form::label('tags', 'Tags:') !!}
            <select id="" class="form-control select2-multi" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>

            {!! Form::label('body', 'Post Body:', ['class' => 'form-spacing-top']) !!}
            {!! Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) !!}
            {!! Form::submit('Create Post', array('class' => 'btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection()
@section('scripts')

    {{--<link href="{{ asset('css')}}" rel="stylesheet">--}}
    {{--<script src="{{ asset('js')}}"></script>--}}

    {!! Html::script('public/js/parsley.min.js') !!}
    {!! Html::script('public/js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection