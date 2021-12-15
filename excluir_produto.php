<?php
	session_start();
	include_once "conectar.php";

	$id = $_GET['id'];
	$sqldelete = "delete from produtos where id = '$id' ";
	$resultado = @mysqli_query($conexao, $sqldelete);

	if ($resultado){
		header('Location: index.php');
		exit();
	} else {
		die('Não encontrado' . @mysqli_error($conexao));
	}
	mysqli_close($conexao);
?>