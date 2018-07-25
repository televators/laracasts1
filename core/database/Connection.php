<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection {
	public static function make( $config ) {
			try {
			  return new PDO( "{$config["connection"]};dbname={$config["name"]}", "{$config["username"]}", "{$config["password"]}", $config['options'] );
			} catch ( PDOException $e ) {
			  die('Couldn\'t connect. Is this thing on?');
			}
	}
}

// $newPDO = Connection::make();

// If it isn't static, below
// $connection = new Connection();
// $connection->make();
