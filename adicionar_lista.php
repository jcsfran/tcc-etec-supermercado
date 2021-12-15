<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Entrar</title>
</head>
	<body>
		<?php
			session_start();
			include_once "conectar.php";

			$id_produto = $_GET['id'];
			$email = $_SESSION['email'];
			$qtde = $_POST['qtde'];

			$query =mysqli_query($conexao,"select id, email from clientes where email = '$email'");
			while($dados=mysqli_fetch_array($query))
				{
					$id_cliente = $dados['id'];
						$sqlinsert = "insert into listas (id_produto, id_cliente, qtde) values('$id_produto', '$id_cliente', '$qtde')";
						$resultado = @mysqli_query($conexao, $sqlinsert);
				}
			if ($resultado){
				header('Location: lista_compras.php');
				exit();
			} else{
				die('Produto não foi AIDICIONADO: ' . @mysqli_error($conexao));
			}
			mysqli_close($conexao);
		?>
	</body>
</html>