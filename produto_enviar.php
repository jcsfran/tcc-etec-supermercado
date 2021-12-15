<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar</title>
</head>
	<body>
		<?php
			session_start();
			include_once "conectar.php";

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

			$sqlinsert = "insert into produtos (nome, preco_venda, preco_promocao, marca, categoria, enquete, promocao, estoque, estoque_min, foto, ingredientes, informacoes_nutri, loja1, loja2) values('$nome', '$preco_venda', '$preco_promocao','$marca', '$categoria', '$enquete', '$promocao', '$estoque', '$estoque_min', '$foto', '$ingredientes', '$informacoes_nutri', '$loja1', '$loja2')";
			$resultado = @mysqli_query($conexao, $sqlinsert);

			if ($resultado){
				header('Location: cadastro_produto.php');
				exit();
			} else{
				die('Produto não foi cadastrado: ' . @mysqli_error($conexao));
			}
			mysqli_close($conexao);
		?>
	</body>
</html>