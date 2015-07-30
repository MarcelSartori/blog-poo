<?php

class Blog{

	public $titulo;
	public $subtitulo;
	public $texto;

	public function __construct($cod){

		$conexao = new Conexao();

		$busca = $conexao->prepare("SELECT SQL_CACHE titulo, subtitulo, texto FROM noticias WHERE cod = {$cod}");
		$busca->execute();
		$result = $busca->fetch(PDO::FETCH_OBJ);

		$this->cod = $cod;
		$this->titulo = $result->titulo;
		$this->subtitulo = $result->subtitulo;
		$this->texto = $result->texto;
	}

	public function titulo(){
		return $this->titulo;
	}

	public function subtitulo(){
		return $this->subtitulo;
	}

	public function texto(){
		return $this->texto;
	}
}
