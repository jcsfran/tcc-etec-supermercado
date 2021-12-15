<?php
	session_start();
	$pesquisar = $_GET['pesquisar'];
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
									<ul id="submenu">
										<li><a href="produtos.php?filtro=<?php echo $filtro = 'frios'; ?>#produtos"><i class="fas fa-cheese"> Frios </i></a></li>
										<li><a href="produtos.php?filtro=<?php echo $filtro = 'higiene'; ?>#produtos"><i class="fas fa-toilet-paper"> Higiene </i></a></li>
										<li><a href="produtos.php?filtro=<?php echo $filtro = 'doce'; ?>#produtos"><i class="fas fa-ice-cream"> Doce </i></a></li>
										<li><a href="produtos.php?filtro=<?php echo $filtro = 'massa'; ?>#produtos"><i class="fas fa-bread-slice"> Massa </i></a></li>
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
						if (empty($_SESSION['email'])) 
							{
								echo "<button class='btn btn-login'  data-toggle='modal' data-target='#entrar'>Entrar</button>&nbsp;&nbsp;";
								echo "<button class='btn btn-login' data-toggle='modal' data-target='#cadastrar'>Cadastre-se</button>";
							} else {
								echo "<g><br>". $_SESSION['email'] . "</g>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<gg><a href='http://localhost/mercado/sair.php'>Sair</a></gg>";
							}
					?>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="entrar" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">

				<div class="modal-header">
					Entrar
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true"> &times; </span>
					</button>
				</div>

				<div class="modal-body">
					<form name="menu" action="entrar_enviar.php" method="POST">
						<div class="row">
							<div class="col-sm-2">
								Email:
							</div>
							<div class="col-sm-10">
								<input name="email" type="text" maxlength="60" size="50" required="email">
							</div>
						</div><br>

						<div class="row">
							<div class="col-sm-2">
								Senha:
							</div>
							<div class="col-sm-10">
								<input name="senha" type="password" maxlength="20" size="20" required="senha">
							</div>
						</div>

						<?php
							if(isset($_SESSION['nao_autenticado'])):
						?>	
							<script type="text/javascript">
							function erro_entrar() {
							   $('#entrar').modal('show');
							}

							erro_entrar();
							</script>
									
							<div class="autenticacao">
								<div class="row">
									<div class="col-sm-12">
										<center><p> Usuário ou senha invalidos!!</p></center>
									</div>
								</div>
							</div>
						<?php
						endif;
						unset($_SESSION['nao_autenticado']);
						?>
				</div>		

				<div class="modal-footer">
					<center>
						<button type="submit" value="entrar" name="entrar" class="button classbtn btn-primary">Entrar</button>
					</form>
						<button type="reset" class="button classbtn btn-secondary" data-dismiss="modal">Fechar</button>
					</center>
				</div>

			</div>
		</div>
	</div>	

	<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">

				<div class="modal-header">
					Cadastrar-se
					<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true"> &times; </span>
					</button>
				</div>

				<div class="modal-body">
					<form name="menu" action="cadastro_enviar.php" method="POST">
						<div class="row">
							<div class="col-sm-2">
								Nome:
							</div>
							<div class="col-sm-10">
								<input name="nome" type="text" maxlength="50" size="50" required="nome">
							</div>
						</div><br>

							<div class="row">
								<div class="col-sm-2">
									Email:
								</div>
								<div class="col-sm-10">
									<input name="email" type="text" maxlength="60" size="50" required="email">
								</div>
							</div><br>

							<div class="row">
								<div class="col-sm-2">
									Senha:
								</div>
								<div class="col-sm-10">
									<input name="senha" type="password" maxlength="20" size="20" required="senha">
								</div>
							</div>
								<?php
							if(isset($_SESSION['cadastrado'])):
							?>

							<script type="text/javascript">
								function erro_cadastrar() {
							    	$('#cadastrar').modal('show');
								}

								erro_cadastrar();
							</script>

							<div class="autenticacao">
								<div class="row">
									<div class="col-sm-12">
										<center><p> EMAIL JA CADASTRADO!!</p></center>
									</div>
								</div>
							</div>
							<?php
							endif;
							unset($_SESSION['cadastrado']);
							?>
				</div>		

				<div class="modal-footer">
					<center>
						<button type="submit" value="cadastrar" name="cadastrar" class="button classbtn btn-primary">Entrar</button>
					</form>
						<button type="reset" class="button classbtn btn-secondary" data-dismiss="modal">Fechar</button>
					</center>
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

			<div id="fh5co-main">
				<a name="produtos"></a>
				<div id="fh5co-products" data-section="products">
				    <div class="container"><h4 class='oferta'> PRODUTOS</h4>
						<div class="row">
							<div class="col-sm-12">

					 		<?php
							include_once "conectar.php";
							$pagina_atual = filter_input(INPUT_GET , 'pagina', FILTER_SANITIZE_NUMBER_INT);
							$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

							$qtd_result_pg = 8;

							$inicio = ($qtd_result_pg * $pagina) - $qtd_result_pg;

							$result_pg = " SELECT COUNT(id) AS num_result FROM produtos where nome like '%$pesquisar%'";
							$resultado_pg = mysqli_query($conexao, $result_pg);
							$row_pg = mysqli_fetch_assoc($resultado_pg);
							$quantidade_pg = ceil($row_pg['num_result']/$qtd_result_pg);

							$max_links = 2;

							?>
							<h4>Você pesquisou por '<?php echo $pesquisar; ?>'
							Itens encontrados '<?php echo $row_pg['num_result']; ?>'</h4> 
						</div>
				 		<div class="row">
				 		<?php
							$result_produtos = "select id, nome, marca, preco_venda, preco_promocao, categoria, promocao, foto from produtos where nome like '%$pesquisar%' LIMIT $inicio, $qtd_result_pg";
							$resultado_produtos = mysqli_query($conexao, $result_produtos);
							while ($row_produto = mysqli_fetch_assoc($resultado_produtos)) 
							{
						?>
									 <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
									 	<div class="fh5co-figure to-animate"> <!--  image-popup   ANIMAÇÃO DE TELA CHEIA -->
											<a href="produto.php?id=<?php echo $row_produto['id']; ?>">
													<?php
														echo "<h4 class='fh5co-figure-lead prod'>" .  $row_produto['nome'] . "</h4>";
													?>
												<figure>
													<img src="Setores/<?php echo $row_produto['categoria']; ?>/<?php echo $row_produto['foto']; ?>" class="img-responsive">
												</figure>
											</a>	
												<div class="informacoes">
														<form name="menu" action="adicionar_lista.php?id=<?php echo $row_produto['id']; ?>" method="POST">
															<button type='submit' class='btn-adicionar_lista'><i class='fas fa-cart-plus'></i></button>
															<input name='qtde' type='number'  step='1' maxlength='3'  placeholder='1' value='1'>
														</form>
													<?php
														echo "<g>R$ " .  $row_produto['preco_venda'] . "</g><br>";
														echo "<gg>R$" . $row_produto['preco_promocao'] . "</gg><br>";	
											    	?>
											    </div>
											    <?php
											    	echo "<p class='fh5co-figure-lead'>" .  $row_produto['marca'] . "</p>";	
											    ?>
										</div>
								    </div>
				    	<?php
							}
						?>

							<div class="clearfix visible-sm-block"></div>

							<div class="fh5co-spacer fh5co-spacer-sm"></div>

							<div class="paginas text-center">
						<?php
							echo "<a href='pesquisar.php?pagina=1&pesquisar=$pesquisar'>&nbsp;Primeira&nbsp;</a>";

							for ($pag_anterior=$pagina - $max_links; $pag_anterior <= $pagina - 1 ; $pag_anterior++) 
							{
								
								if ($pag_anterior >= 1) 
								{
									echo "<a href='pesquisar.php?pagina=$pag_anterior&pesquisar=$pesquisar'>&nbsp;$pag_anterior&nbsp;</a>";
								}
									
							}

							echo "<b>&nbsp;&nbsp;$pagina&nbsp;&nbsp;</b>";

							for ($pag_depois=$pagina + 1; $pag_depois <= $pagina + $max_links ; $pag_depois++) 
							{ 
								if ($pag_depois <= $quantidade_pg) 
								{
									echo "<a href='pesquisar.php?pagina=$pag_depois&pesquisar=$pesquisar'>&nbsp;$pag_depois&nbsp;</a>";
								}
							}
							echo "<a href='pesquisar.php?pagina=$quantidade_pg&pesquisar=$pesquisar'>&nbsp;Ultima&nbsp;</a>";
						?>
							</div>
			        	</div>
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

	

	

			<?php					
				mysqli_close($conexao);
			?>
		</body>
</html>