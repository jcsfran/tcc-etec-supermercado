<?php
	session_start();
	if($_SESSION['email'] == 'administrador@hotmail.com')
	{
?>
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
	<body>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	<div id="fh5co-offcanvass" class="menu">
		<?php
			if(empty($_SESSION['email']))
				{
				echo "...";
				}
			else if($_SESSION['email'] == 'administrador@hotmail.com') 
				{
					echo "<a href='http://localhost/mercado/cadastro_produto.php'><button class='btn btn-light'>Cadastrar Produto</button></a>";
				}
			else
				{
				echo "<h4>Bem Vindo " . $_SESSION['nome'] . " !!</h4>";
				echo "Agradeçemos a prefrerencia.";
				}
		?>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="#" data-nav-section="produtos">Produtos</a>
				<ul id="submenu" class="submenu">
					<li>
						<a href="produtos.php?filtro=<?php echo $filtro = 'bebidas'; ?>#produtos">
							<img src="https://img.icons8.com/office/26/000000/wine-bottle.png"> Adega e Bebidas 
						</a>
					</li>
					<li>
						<a href="produtos.php?filtro=<?php echo $filtro = 'confeitaria'; ?>#produtos">
							<img src="https://img.icons8.com/color/26/000000/bread.png"> Padaria e Confeitaria 
						</a>
					</li>
					<li>
						<a href="produtos.php?filtro=<?php echo $filtro = 'hortifruti'; ?>#produtos">
							<img src="https://img.icons8.com/office/26/000000/strawberry.png"> Hortifrúti 
						</a>
					</li>
					<li>
						<a href="produtos.php?filtro=<?php echo $filtro = 'mercearia'; ?>#produtos">
							<img src="https://img.icons8.com/color/26/000000/ingredients.png"> Mercearia 
						</a>
					</li>
					<li>
						<a href="produtos.php?filtro=<?php echo $filtro = 'laticinios'; ?>#produtos"
							><img src="https://img.icons8.com/color/26/000000/cheese.png"> Laticínios e Frios 
						</a>
					</li>
					<li>
						<a href="produtos.php?filtro=<?php echo $filtro = 'rotisseria'; ?>#produtos">
							<img src="https://img.icons8.com/office/26/000000/pizza.png"> Rotisseria 
						</a>
					</li>
				</ul>
			</li>
			<li><a href="#" data-nav-section="lojas">Lojas</a></li>
			<li><a href="enquete.php">Enquete</a></li>
			<li><a href="lista_compras.php">Lista de Compras</a></li>
			<li><a href="#" data-nav-section="receitas">Receitas</a></li>
			<li><a href="#" data-nav-section="empresa">Empresa</a></li>
			<li><a href="#" data-nav-section="setores">Setores</a></li>
		</ul><br>
<!-- 		<h3 class="fh5co-lead">Connect with us</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p> -->
	</div>
	
	<div id="fh5co-menu" class="navbar">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<a href="index.php" class="navbar-brand"><span><img src="home/talia2.png" class="img-italial"></span></a>
					<form class="form-inline" method="GET" action="pesquisar.php">
						<div class="form-group mx-sm-3">
						    <input type="search" name="pesquisar" class="search form-control" id="busca" placeholder="Buscar">
						</div>
							<button type="submit" class="btn btn-light">Pesquisar</button>
					</form>
				</div>
				<div class="col-md-5 login">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><span>Menu</span> <i></i></a>
					<?php 
						echo "<g><br>". $_SESSION['email'] . "</g>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<gg><a href='http://localhost/mercado/sair.php'>Sair</a></gg>";
					?>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-page">
		<div id="fh5co-wrap">
			<header id="fh5co-hero" data-section="home" role="banner" style="background: url(images/bg_2.jpg) top left; background-size: cover;" >
				<div class="fh5co-overlay"></div>
				<div class="fh5co-intro">
					<div class="container">

						<div class="row">
					</div>				
				</div>
			</header>
			<!-- END .header -->
			<div class="container">
				<div class="col-sm-12">
					<form name="menu" action="produto_atualizar.php" method="POST">
						<div class="row">
							<fieldset>
								<legend>Cadastro de Produtos</legend>
								<?php
									include_once "conectar.php";
									$id = $_GET['id'];
									$query =mysqli_query($conexao,"select id, nome, marca, preco_venda, preco_promocao, marca, categoria, enquete, promocao, estoque, estoque_min, foto, ingredientes, informacoes_nutri, loja1, loja2 from produtos where id = '$id'");
									while($dados=mysqli_fetch_array($query))
										{	
								?>	
									<div class="col-sm-4" style="margin-right: 20px">
										<div class="row">
											<fieldset class="col-sm-12">
												<legend class="text-center">Descrições</legend>
													<div class="row">
														<div class="col-sm-2 descricao">
															ID:
														</div>
														<div class="col-sm-4">
															<input name="id" type="text" maxlength="4" readonly="true" size="4" required="id" value="<?php echo $dados['id']; ?>">
														</div>
													</div>
													<div class="row">
														<div class="col-sm-2 descricao">
															Nome:
														</div>
														<div class="col-sm-4">
															<input name="nome" type="text" maxlength="50" size="30" required="nome" value="<?php echo $dados['nome']; ?>">
														</div>
													</div>

													<div class="row">
														<div class="col-sm-2 descricao">
															Marca:
														</div>
														<div class="col-sm-4">
															<input name="marca" type="text" maxlength="50" size="30" required="marca" value="<?php echo $dados['marca']; ?>">	
														</div>
													</div>

													<div class="row">
														<div class="col-sm-3 descricao">
															Categoria:
														</div>
														<div class="col-sm-3">
															<select name="categoria" required="categoria">
																<option value="<?php echo $dados['categoria']; ?>"><?php echo $dados['categoria']; ?></option>
																<option value="bebidas">ADEGA E BEBIDAS</option>
																<option value="confeitaria">PADARIA E CONFEITARIA</option>
																<option value="hortifruti">HORTIFRÚTI</option>
																<option value="mercearia">MERCEARIA</option>
																<option value="laticinios">LATICÍNIOS E FRIOS</option>
																<option value="rotisseria">ROTISSERIA</option>
															</select>
														</div>
													</div>

													<div class="row">
														<div class="col-sm-12 text-right">
															<?php
																if ($dados['enquete'] == 1){
															?>
																<input name="enquete" type="checkbox" value="1" class="checar" checked="checked">Enquete
															<?php
																} else {
																	$dados['enquete'] = 0;
																?>
																<input name="enquete" type="checkbox" value="1" class="checar">Enquete
																<?php
																}
															?>
														</div>
													</div><br>
											</fieldset>
										</div>	

										<div class="row">
											<fieldset class="col-sm-12">
												<legend class="text-center">Estoque & Preços</legend>
													<div class="row">
														<div class="col-sm-6 descricao">
															Preço venda:
														</div>
														<div class="col-sm-5">
															<input name="preco_venda" type="number"  step="0.01" maxlength="5" size="5" required="preco_venda" style="width: 130px;" value="<?php echo $dados['preco_venda']; ?>">
														</div>
													</div>

													<div class="row">
														<div class="col-sm-6 descricao">
															Preço promoção:
														</div>
														<div class="col-sm-3">
															<input name="preco_promocao" type="number"  step="0.01" maxlength="5" size="5" required="preco_promocao" style="width: 130px;" value="<?php echo $dados['preco_promocao']; ?>">
														</div>
													</div>
													<div class="row">
														<div class="col-sm-11 text-right">
															<?php
																if ($dados['promocao'] == 1){
															?>
																<input name="promocao" type="checkbox" value="1" class="checar" checked="checked">Promoção
															<?php
																} else {
																	$dados['promocao'] = 0;
																?>
																<input name="promocao" type="checkbox" value="1" class="checar">Promoção
																<?php
																}
															?>
														</div>
													</div><br>

													<div class="row">
														<div class="col-sm-6 descricao">
															Estoque:
														</div>
														<div class="col-sm-4">
															<input name="estoque" type="number"  step="0.01" maxlength="5" size="5" required="estoque" style="width: 130px;" value="<?php echo $dados['estoque']; ?>">
														</div>
													</div>

													<div class="row">
														<div class="col-sm-6 descricao">
															Estoque Minimo:
														</div>
														<div class="col-sm-4">
															<input name="estoque_min" type="number"  step="0.01" maxlength="5" size="5" required="estoque_min" style="width: 130px;" value="<?php echo $dados['estoque_min']; ?>">
														</div>
													</div><br>
											</fieldset>
										</div>
									</div>

										<fieldset class="col-sm-3">
											<legend class="text-center">Lojas</legend>
												<div class="row">
													<div class="col-sm-12">
														<?php
															if ($dados['loja1'] == 1){
														?>
															<input name="loja1" type="checkbox" value="1" class="checar" checked="checked">Loja 1
														<?php
															} else {
																$dados['loja1'] = 0;
															?>
															<input name="loja1" type="checkbox" value="1" class="checar">Loja 1
															<?php
															}
														?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<?php
															if ($dados['loja2'] == 1){
														?>
															<input name="loja2" type="checkbox" value="1" class="checar" checked="checked">Loja 2
														<?php
															} else {
																$dados['loja2'] = 0;
															?>
															<input name="loja2" type="checkbox" value="1" class="checar">Loja 2
															<?php
															}
														?>
													</div>
												</div>
										</fieldset>

										<fieldset class="col-sm-4">
											<legend class="text-center">Imagem</legend>
												<img src="Setores/<?php echo $dados['categoria']; ?>/<?php echo $dados['foto']; ?>" class="img-produto">
												<div class="row">
													<p>
														Imagem:
														<input name="foto" type="file">
													</p>
												</div>
										</fieldset>
							</fieldset>
						</div>
				</div>
			</div>

			<div class="container">
						<fieldset>
							<legend>Informações Adicionais</legend>
								<div class="row">
									<div class="col-sm-6">
										Ingredientes:
									</div>
									<div class="col-sm-5">
										Informaçoes Nutricionais:
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<textarea id="ingredientes" cols="50" rows="6" name="ingredientes" maxlength="300"><?php echo $dados['ingredientes']; ?></textarea>
									</div>
									<div class="col-sm-5">
										<textarea id="nutricional" cols="50" rows="4" name="nutricional" maxlength="200"><?php echo $dados['informacoes_nutri']; ?></textarea>
									</div>
								</div>
						</fieldset>
						<center>
							<input type="submit" value="Atualizar" class="btn">
					</form>
<!-- 							<input type="reset" value="Limpar" class="btn-cadastro"> -->
							<input type="button" value="Voltar" onClick="history.go(-1)" class="btn-cadastro">
						</center>
						<?php					
							}
						mysqli_close($conexao);
						?>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- toCount -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	

	
	</body>
</html>
<?php
	} else {
		header('Location: index.php');
		exit();
	}
?>