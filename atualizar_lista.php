<?php
	session_start();
	include_once "conectar.php";

	$id = $_GET['id_lista'];
	$qtde = $_POST['qtde'];
	$sqlupdate = "update listas set qtde = '$qtde' where id = '$id' ";
	$resultado = @mysqli_query($conexao, $sqlupdate);

	if ($resultado){
		header('Location: lista_compras.php');
		exit();
	} else {
		die('Não encontrado' . @mysqli_error($conexao));
	}
	mysqli_close($conexao);
?>