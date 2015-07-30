<?php

// Recebo o código do post por GET
if (isset($_GET)){
	$codigo = $_GET['codigo'];
}

function __autoload($class) {
	require_once("classes/{$class}.class.php");
}

$conexao = new Conexao();

// Instancio a classe Blog com o código do Post
$artigo = new Blog($codigo);
// Printo os dados do Banco
echo "Meu título é: ".$artigo->titulo();
echo "</br>Meu subtitulo é: ".$artigo->subtitulo();
echo "</br>Meu texto é:</br>".$artigo->texto();
