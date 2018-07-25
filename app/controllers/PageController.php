<?php

namespace App\Controllers;

class PageController {
	public function index() {
		return view( 'index');
	}

	public function about() {
		return view( 'about' );
	}

	public function coffee() {
		return view( 'coffee' );
	}

	public function contact() {
		return view( 'contact' );
	}
}
