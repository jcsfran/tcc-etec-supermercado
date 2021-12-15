<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualizar</title>
</head>
	<body>
		<?php
			session_start();
			include "conectar.php";
			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$preco_venda = $_POST['preco_venda'];
			$preco_promocao = $_POST['preco_promocao'];
			$marca = $_POST['marca'];
			$estoque = $_POST['estoque'];
			$estoque_min = $_POST['estoque_min'];
			$categoria = $_POST['categoria'];
			$foto = $_POST['foto'];

			if (isset ($_POST['enquete'])){
				echo $_POST['enquete'];
			} else {
				$_POST['enquete'] = 0;
				echo $_POST['enquete'];
			}

			$enquete = $_POST['enquete'];

			if (isset ($_POST['promocao'])){
				echo $_POST['promocao'];
			} else {
				$_POST['promocao'] = 0;
				echo $_POST['promocao'];
			}

			$promocao = $_POST['promocao'];

			$ingredientes = $_POST['ingredientes'];
			$informacoes_nutri = $_POST['nutricional'];

			if (isset ($_POST['loja1'])){
				echo $_POST['loja1'];
			} else {
				$_POST['loja1'] = 0;
				echo $_POST['loja1'];
			}

			$loja1 = $_POST['loja1'];

			if (isset ($_POST['loja2'])){
				echo $_POST['loja2'];
			} else {
				$_POST['loja2'] = 0;
				echo $_POST['loja2'];
			}

			$loja2 = $_POST['loja2'];

			$query = "update produtos set nome = '$nome', preco_venda = '$preco_venda', preco_promocao = '$preco_promocao', marca = '$marca', estoque = '$estoque', estoque_min = '$estoque_min', categoria = '$categoria', foto = '$foto', enquete = '$enquete', promocao = '$promocao', ingredientes = '$ingredientes', informacoes_nutri = '$informacoes_nutri', loja1 = '$loja1', loja2 = '$loja2' WHERE id = '$id'";

			$resultado = @mysqli_query($conexao, $query);
			if($resultado){
				header('Location: index.php');
				exit();
			} else {
				die('Falha na Alteração'.@mysqli_error($conexao));
				header('Location: produto_atualizar.php');
				exit();
			}
			@mysqli_close($conexao);
		?>
	</body>
</html>