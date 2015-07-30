<?php

class Conexao extends PDO {
	private $host = 'mysql:host=localhost;dbname=blog';
	private $user = 'root';
	private $password = '';
	public $handle = null;

	function __construct( ) {
		try {
			if ( $this->handle == null ) {
				$conn = parent::__construct( $this->host , $this->user , $this->password );
				$this->handle = $conn;
				return $this->handle;
			}
		}
		catch ( PDOException $e ) {
			echo 'Falha na Conexão: ' . $e->getMessage( );
			return false;
		}
	}

	function __destruct( ) {
		$this->handle = NULL;
	}
}

