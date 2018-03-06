<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller {
	public function getIndex() {
		$posts = Post::orderBy( 'created_at', 'desc' )->limit( 4 )->get();

		return view( 'pages.welcome' )->withPosts( $posts );
	}

	public function getAbout() {
		$first            = 'Jon';
		$last             = 'Doe';
		$fullname         = $first . " " . $last;
		$email            = 'jondoe@gmail.com';
		$data             = [];
		$data['email']    = $email;
		$data['fullname'] = $fullname;

		return view( 'pages.about' )->withData( $data );
	}

	public function getContact() {
		return view( 'pages.contact' );
	}

	public function postContact( Request $request ) {
		$this->validate( $request, [
			'email'   => 'required|email',
			'subject' => 'required|min:3|max:255',
			'message' => 'required|min:10|max:2000'
		] );
		$data = [
			'email'       => $request->email,
			'subject'     => $request->subject,
			'bodyMessage' => $request->message
		];
		Mail::send( 'emails.contact', $data, function ( $message ) use ( $data ) {
			$message->from( $data['email'] );
			$message->to( 'jondoe@gmail.com' );
			$message->subject( $data['subject'] );
		} );
		Session::flash( 'success', 'Your email was sent!' );

		return redirect()->url( '/' );
	}
}