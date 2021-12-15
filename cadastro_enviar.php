<head>
	<meta charset="utf-8">
	<title>Entrar</title>
</head>
	<body>
		<?php
			session_start();
			include_once "conectar.php";

			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$query = "select email from clientes where email = ('$email')";
			
			$result = mysqli_query($conexao, $query);

			$row = mysqli_num_rows($result);

			if($row == 1){
				$_SESSION['cadastrado'] = true;
				header('Location: index.php');
				exit();
			} 
			else
				{

				$sqlinsert = "insert into clientes (nome, email, senha) values('$nome','$email', '$senha')";
				$resultado = @mysqli_query($conexao, $sqlinsert);

				if ($resultado){
					$_SESSION['email'] = $email;
					$_SESSION['nome'] = $nome;
					
					$nquery =mysqli_query($conexao,"select nome, email from clientes where email = '$email'");
						while($dados=mysqli_fetch_array($nquery))
							{
								$_SESSION['nome'] = $dados['nome'];
							}
					header('Location: index.php');
					exit();
				} 
				else
					{
					die('Error em cadastrar-se ' . @mysqli_error($conexao));
					}
				}
			mysqli_close($conexao);
		?>
	</body>
</html>