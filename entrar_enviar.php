<html>
	<head>
		<meta charset="utf-8">
		<title>Entrar</title>
	</head>
	<body>
		<?php
			session_start();
			include_once "conectar.php";
		if(empty($_POST['email']) || empty($_POST['senha'])) {
			header('Location: entrar_enviar.php');
			exit();
		}
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$query = "select email, senha, nome from clientes where email = ('$email') and  senha = ('$senha')";
			
			$result = mysqli_query($conexao, $query);

			$row = mysqli_num_rows($result);

			if($row == 1){
				$_SESSION['email'] = $email;

			$nquery =mysqli_query($conexao,"select nome, email from clientes where email = '$email'");
			while($dados=mysqli_fetch_array($nquery))
				{
					$_SESSION['nome'] = $dados['nome'];
				}
				header('Location: index.php');
				exit();
			} else {
				$_SESSION['nao_autenticado'] = true;
				header('Location: index.php');
				exit();
			}
		?>
	</body>
</html>