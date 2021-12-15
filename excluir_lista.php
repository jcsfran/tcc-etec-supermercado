<?php
	session_start();
	include_once "conectar.php";

	$id = $_GET['id_lista'];
	$sqldelete = "delete from listas where id = '$id' ";
	$resultado = @mysqli_query($conexao, $sqldelete);

	if ($resultado){
		header('Location: lista_compras.php');
		exit();
	} else {
		die('Não encontrado' . @mysqli_error($conexao));
	}
	mysqli_close($conexao);
?>