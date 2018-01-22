@extends('main')
@section('title', 'Contact')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input id="subject" type="text" class="form-control" name="subject">
                </div>
                <div class="form-group">
                    <label for="text">Message</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Type your message here..."></textarea>
                </div>
                <input type="submit" value="Send" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection