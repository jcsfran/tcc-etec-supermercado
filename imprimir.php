<?php
	session_start();
	if(empty($_SESSION['email'])) {
	header('Location: login.php');
	exit();
	} else {
?>
<style>
.col-sm-2 { 
position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
      -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
}

.col-sm-5 {
	width: 41.66667%;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.imprissao {
	background-color: #fff;
}

.corpo {
	background-color: #696969;
}

.total-imp{
	color: blue;
	text-align: right;
}
</style>

<meta charset="utf-8">
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>De Angelis Supercado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" type="imagem/png" href="home/logo.png">

	<!-- Google Webfonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons-->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="corpo">
		<div class="container imprissao">
			<div class="row">
				<script language="javascript">
					function imprime (text)
					{
					text= document
					print(text)
					}
				</script>
				<button type='submit' class='btn btn-light' onclick="imprime()"/>Imprimir</button>
			</div>
			<div class="text-center">
				<div class="row" style="border-bottom: 3px solid black;">
					<div class="col-sm-5">
						<h4>PRODUTO</h4>
					</div>
					<div class="col-sm-2">
						<h4>MARCA</h4>
					</div>
					<div class="col-sm-2">
						<h4>PREÇO</h4>
					</div>
					<div class="col-sm-2">
						<h4>QUANTIDADE</h4>
					</div>
				</div>
			</div>
			<?php
				include_once "conectar.php";
					$total = 0;
					$email = $_SESSION['email'];
					$cliente =mysqli_query($conexao,"select id, email from clientes where email = '$email'");
					while($dados_cliente=mysqli_fetch_array($cliente))
						{
							$id_cliente = $dados_cliente['id'];

							$lista =mysqli_query($conexao,"select id_produto, id, qtde from listas where id_cliente = '$id_cliente'");
							while($dados_lista=mysqli_fetch_array($lista))
								{
									$id_produto = $dados_lista['id_produto'];
									$id_lista = $dados_lista['id'];
										
									$query =mysqli_query($conexao,"select nome, marca, preco_venda , promocao, preco_promocao from produtos where id = '$id_produto'");
								
									while($dados=mysqli_fetch_array($query))
										{
											?>
											<div class="text-center">
												<div class="row" style="border-bottom: 1px solid black">
													<div class="col-sm-5">
														<p><?php echo $dados['nome']; ?></p>
													</div>
													<div class="col-sm-2">
														<p><?php echo $dados['marca']; ?></p>
													</div>
													<div class="col-sm-2">
														<?php
															if ($dados['promocao'] == 1)
															{							
																echo "R$" . $dados['preco_promocao'];
																$total += ($dados_lista['qtde']*$dados['preco_promocao']);
															} else 
																{
																	echo "R$" .  $dados['preco_venda'];
																	$total += ($dados_lista['qtde']*$dados['preco_venda']);
																}
														?>
													</div>
													<div class="col-sm-2">
														<?php
															echo $dados_lista['qtde'];
														?>
													</div>
												</div>
											</div>
											<?php
										}
								}
							echo  "<p class='total-imp'>TOTAL R$ " . $total . "</p>";
						}
				mysqli_close($conexao);
			?>
		</div>
	</body>
</html>
<?php
	} 
?>