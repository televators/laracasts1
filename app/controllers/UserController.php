<?php

namespace App\Controllers;
use App\Core\App;

class UserController {
	public function index() {
		$users = App::get( 'database' )->selectAll( 'users' );
		return view( 'users', compact('users') );
	}

	public function store() {
		App::get( 'database' )->insertRow(
			"users", [
				"first_name" => $_POST["first_name"],
				"last_name" => $_POST["last_name"],
				"age" => $_POST["age"]
			]
		);
		return redirect("users");
	}
}
