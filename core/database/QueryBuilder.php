<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class QueryBuilder {

	protected $pdo;

	public function __construct( PDO $pdo ) {
		$this->pdo = $pdo;
	}
	public function selectAll( $table ) {
		$statement = $this->pdo->prepare( "select * from {$table}" );
		$statement->execute();
		return $statement->fetchAll( PDO::FETCH_CLASS );
	}

	public function selectAllIntoClass( $table, $intoClass ) {
		$statement = $this->pdo->prepare( "select * from {$table}" );
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass );
	}

	public function insertRow( $table, $newRow ) {
		$newRowColumns = implode( ", ", array_keys( $newRow ) );
		$newRowValues = "'" . implode( "', '", $newRow ) . "'";

		$sql = "insert into {$table} ({$newRowColumns}) values ({$newRowValues})";

		try {
			$statement = $this->pdo->prepare( $sql );
			$statement->execute();
		} catch ( \Exception $e ) {
			die("Aw shit. Something ain't right. Here's the error code: <code>" . $e->getMessage() . "</code>");
		}

	}
}
