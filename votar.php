<?php
	session_start();
	include_once "conectar.php";

	$id = $_POST['id_produto'];
	$email = $_SESSION['email'];
	$consul_usu = mysqli_query($conexao, "select id from clientes where email = '$email'");
	 while($dados_usu=mysqli_fetch_array($consul_usu)){
	$id_cliente = $dados_usu['id'];

	 $query =mysqli_query($conexao,"select e.id_produto, e.id_cliente, voto from enquete e inner join produtos p on e.id_produto = p.id
	 																		 inner join clientes u on e.id_cliente = u.id
	 																		 where u.email = '$email'");
	 while($dados=mysqli_fetch_array($query))
		{	
			
		 if (($dados['id_cliente'] == $id_cliente) || ($dados['id_produto'] != $id))
		{

			$deleta = "delete from enquete where id_cliente = '$id_cliente'";
			
			$resultado_delete = @mysqli_query($conexao, $deleta);
		 	$voto = +1;
		 	
		 	$sqlinsert = "insert into enquete (id_produto, id_cliente, voto) values('$id', '$id_cliente', '$voto')";
			$resultado = @mysqli_query($conexao, $sqlinsert);
	 		$atualiza = "update enquete set voto = '$voto' where id_produto = '$id'";
	 		$resultado = @mysqli_query($conexao, $atualiza);	

	 		header('Location: enquete.php');	
			exit();
			// da SUM dps
	 	} 
	 	else if (($dados['id_cliente'] != $id_cliente) || ($dados['id_produto'] == $id))
		{
		 	$voto = $dados['voto']+1;
	 		$atualiza = "update enquete set voto = '$voto' where id_produto = '$id'";
	 		$resultado = @mysqli_query($conexao, $atualiza);
	 		echo " pvvvvvvv";		
			exit();
	 	} 
	}
		 	$voto = 1;
			$sqlinsert = "insert into enquete (id_produto, id_cliente, voto) values('$id', '$id_cliente', '$voto')";
			$resultado = @mysqli_query($conexao, $sqlinsert);

			header('Location: enquete.php');
			exit();
		}
	mysqli_close($conexao);
?>