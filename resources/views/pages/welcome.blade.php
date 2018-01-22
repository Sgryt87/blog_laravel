@extends('main')
@section('title', 'Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias consequuntur dicta, enim esse id
                    ipsum itaque magni necessitatibus nobis non nulla obcaecati perspiciatis provident, veniam? Dolorem
                    iure pariatur saepe.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- end of .row-->
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p>{{ substr($post->body, 0, 300) }} {{strlen($post->body) > 300 ? '...' : ''}}</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
            @endforeach

        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection

