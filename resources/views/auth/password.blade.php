@extends('main')
@section('title', 'Forgot My Password')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
            </div>
            <div class="panel-body">
                {!! Form::open(['url' => 'password/email', 'method' => 'POST']) !!}
                {!! Form::label('email', 'Email Address:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection