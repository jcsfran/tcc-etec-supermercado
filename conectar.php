<?php
	$servidor = 'localhost';
	$usuario  = 'root';
	$senha    = 'etecjau';
	$banco    = 'mercado';

	$conexao = @mysqli_connect($servidor,$usuario,$senha,$banco)or die ("Problemas com a conexao do Banco de Dados");

	mysqli_set_charset($conexao, "utf8");
?>

