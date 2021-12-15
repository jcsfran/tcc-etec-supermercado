<!-- http://akivaron.github.io/miminium/icons.html -->
<?php
	session_start();
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
			<li class="active"><a href="#" data-nav-section="home">Home</a></li>
			<li><a href="#" data-nav-section="produtos">Produtos</a>
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
			<li><a href="#loja" data-nav-section="lojas">Lojas</a></li>
			<li><a href="enquete.php">Enquete</a></li>
			<li><a href="lista_compras.php">Lista de Compras</a></li>
			<li><a href="#receita" data-nav-section="receitas">Receitas</a></li>
			<li><a href="#empresa" data-nav-section="empresa">Empresa</a></li>
			<li><a href="#setores" data-nav-section="setores">Setores</a></li>
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
						<button type="submit" value="cadastrar" name="cadastrar" class="button classbtn btn-primary">Cadastrar</button>
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
							<div class="col-md-9 fh5co-text">
								<div id="carousel-index" class="carousel slide" data-ride="carousel">
									<ul class="carousel-indicators">
										<li data-target="#carousel-index" data-slide-to="0" class="active"></li>
								    	<li data-target="#carousel-index" data-slide-to="1"></li>
								    	<li data-target="#carousel-index" data-slide-to="2"></li>
								    	<li data-target="#carousel-index" data-slide-to="3"></li>
								  	</ul>
								  	<div class="carousel-inner">
								    	<div class="carousel-item active">
								      		<img src="home/carrinho.jpg" alt="Carrinho" class="carousel-img">
								       	 	<div class="carousel-caption">
										    	<p class="carousel-texto">Venha conferir nossos produtos de grande qualidade e variedade !</p>
											</div>
								   	 	</div>
								    	<div class="carousel-item">
								      		<img src="home/carrinho-comida.jpg" alt="Carrinho 2" class="carousel-img">
								      		<div class="carousel-caption">
										   		<p class="carousel-texto">Produtos sempre fresquinhos a qualquer horario.</p>
										  	</div>
								    	</div>
								    	<div class="carousel-item">
								      		<img src="home/economia.jpg" alt="Economia" class="carousel-img">
								      		<div class="carousel-caption">
										   		<p class="carousel-texto">Aqui você enche sua cesta e continua com o bolso cheio. </p>
										  	</div>
								    	</div>
								    	<div class="carousel-item">
								      		<img src="home/hortifruit.jpg" alt="Hortifruit" class="carousel-img">
								      		<div class="carousel-caption">
										   		<p class="carousel-texto">Variedade de cores e sabores. </p>
										  	</div>
								    	</div>
								  </div>
								  
									<a class="carousel-control-prev" href="#carousel-index" data-slide="prev">
								    	<span class="carousel-control-prev-icon"></span>
									</a>
									<a class="carousel-control-next" href="#carousel-index" data-slide="next">
								    	<span class="carousel-control-next-icon"></span>
									</a>
								</div>
							</div>

							<div class="col-md-3 fh5co-text" style="color: black;">
								<g style="color: #fff">MAIS VOTADO ATUALMENTE!</g>
								<div id="fh5co-products" data-section="products" style="margin: 0; padding: 0; border: 0">
									<?php
										include_once "conectar.php";

										$result_pg = " SELECT e.id_produto as cod_produto, SUM(e.voto) AS RESULT
														   FROM produtos p 
														  INNER JOIN enquete e 
															 ON  p.id = e.id_produto 
														  WHERE e.id_produto = p.id
														  GROUP BY e.id_produto
													              ,cod_produto
														  order by RESULT desc
														  limit 1";
										$resultado_pg = mysqli_query($conexao, $result_pg);
										$row_pg = mysqli_fetch_assoc($resultado_pg);
										{
											$row_pg['RESULT'];
											$cod_produto = $row_pg['cod_produto'];
											$result_produtos = "select id, nome, marca, preco_venda, preco_promocao, categoria, foto, enquete from produtos where id = '$cod_produto'";
											$resultado_produtos = mysqli_query($conexao, $result_produtos);
											while ($row_produto = mysqli_fetch_assoc($resultado_produtos)) 
											{
									?>
												<div class="fh5co-figure to-animate" style="background-color: orange;"> <!--  image-popup   ANIMAÇÃO DE TELA CHEIA -->
													<a href="enquete.php">
													<?php
														echo "<h4 class='fh5co-figure-lead enqt'>" .  $row_produto['nome'] . "</h4>";
													?>
													<figure>
														<img src="Setores/<?php echo $row_produto['categoria']; ?>/<?php echo $row_produto['foto']; ?>" class="img-responsive">
													</figure>
													</a>	
													<div class="ganhando text-left">
														<?php
															
															echo "&nbsp;&nbsp;&nbsp;De&nbsp;&nbsp;<gg>R$" . $row_produto['preco_venda']  . "</gg><br>";
															echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para&nbsp;<g>R$" . $row_produto['preco_promocao'] . "</g><br><voto>Votos " .$row_pg['RESULT'] . "</voto><br>";	
												    	?>
												    </div>
													<?php
														echo "<p class='fh5co-figure-lead' style='margin-bottom: 13px;'>" .  $row_produto['marca'] . "</p>";	
													 ?>
											</div>
								</div>
								    	<?php
											}
										
										}
									?>
							</div>
						</div><br><br><br>
					</div>						
				</div>
			</header>
			<!-- END .header -->
			<div class="container">
				<div class="row">
					
				</div>
			</div>
			
			<div id="fh5co-main">
				<div id="fh5co-products" data-section="products">
				    <div class="container"><h4 class='oferta'> PRODUTOS EM OFERTA </h4>
						<div class="row">
							<div class="col-sm-12">

							<?php
								$pagina_atual = filter_input(INPUT_GET , 'pagina', FILTER_SANITIZE_NUMBER_INT);
								$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

								$qtd_result_pg = 4;

								$inicio = ($qtd_result_pg * $pagina) - $qtd_result_pg;

								$result_produtos = "select id, nome, marca, preco_venda, preco_promocao, categoria, promocao, foto from produtos where promocao = '1' LIMIT $inicio, $qtd_result_pg ";
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
														echo "<g>R$ " . $row_produto['preco_promocao'] . "</g><br>";
														echo "<gg>R$" . $row_produto['preco_venda']  . "</gg><br>";	
											    	?>
											    </div>
											    <?php
											    	echo "<p class='fh5co-figure-lead'>" .  $row_produto['marca'] . "</p>";	
											    ?>
										</div>
								    </div>
					    	<?php
								}

								$result_pg = " SELECT COUNT(id) AS num_result FROM produtos where promocao = '1'";
								$resultado_pg = mysqli_query($conexao, $result_pg);
								$row_pg = mysqli_fetch_assoc($resultado_pg);
								$quantidade_pg = ceil($row_pg['num_result']/$qtd_result_pg);

								$max_links = 2;
							?>

							<div class="clearfix visible-sm-block"></div>

							<div class="fh5co-spacer fh5co-spacer-sm"></div>

							<div class="paginas text-center">
								<?php
									echo "<a href='index.php?pagina=1'>&nbsp;Primeira&nbsp;</a>";

									for ($pag_anterior=$pagina - $max_links; $pag_anterior <= $pagina - 1 ; $pag_anterior++) 
									{
										
										if ($pag_anterior >= 1) 
										{
											echo "<a href='index.php?pagina=$pag_anterior'>&nbsp;$pag_anterior&nbsp;</a>";
										}
											
									}

									echo "<b>&nbsp;&nbsp;$pagina&nbsp;&nbsp;</b>";

									for ($pag_depois=$pagina + 1; $pag_depois <= $pagina + $max_links ; $pag_depois++) 
									{ 
										if ($pag_depois <= $quantidade_pg) 
										{
											echo "<a href='index.php?pagina=$pag_depois'>&nbsp;$pag_depois&nbsp;</a>";
										}
									}
									echo "<a href='index.php?pagina=$quantidade_pg'>&nbsp;Ultima&nbsp;</a>";
								?>
							</div>

				    		</div>
				   
						</div>
					</div>
				</div>

				<div id="fh5co-features" data-section="features">


					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
								<h2 class="fh5co-lead">Explore nosso site</h2>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
								<a href="#loja" class="fh5co-feature">
									<span class="fh5co-feature-icon"><i class="fas fa-store-alt"></i></span>
									<h3 class="fh5co-feature-lead">Lojas</h3>
									<p class="fh5co-feature-text">Confira nossas <br>lojas!!</p>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
								<a href="#receita" class="fh5co-feature">
									<span class="fh5co-feature-icon"><i class="icon-book-open"></i></span>
									<h3 class="fh5co-feature-lead">Receitas</h3>
									<p class="fh5co-feature-text">Venha sentir o gosto da Itália</p>
								</a>
							</div>
							<div class="clearfix visible-sm-block"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
								<a href="#empresa" class="fh5co-feature">
									<span class="fh5co-feature-icon"><i class="far fa-building"></i></span>
									<h3 class="fh5co-feature-lead">Empresa</h3>
									<p class="fh5co-feature-text">Nossa história<br>&nbsp;&nbsp;</p>
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
								<a href="#setores" class="fh5co-feature">
									<span class="fh5co-feature-icon"><i class="fas fa-th"></i></span>
									<h3 class="fh5co-feature-lead">Setores</h3>
									<p class="fh5co-feature-text">Setores que oferecem mais qualidade para você</p>
								</a>
							</div>

							<div class="clearfix visible-sm-block"></div>

							<div class="fh5co-spacer fh5co-spacer-sm"></div>
			        	</div>
			       </div>
			       

			    </div>

			    <a name="loja"></a>
				<div id="fh5co-features-3" data-section="benefits">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-6 text-center fh5co-text-wrap texto-receita nome-loja1">
								<div class="fh5co-text">
									<h4 class="fh5co-uppercase-sm">Loja 1</h4>
								</div>
							</div>
							<div class="row">
									<div class="col-md-6 col-sm-6 text-justify fh5co-text-wrap texto-loja1 cabecalho-loja">
										<div class="fh5co-text">
											<h4 class="fh5co-uppercase-sm">ENDEREÇO <i class="fas fa-map-marker-alt"></i></h4>
											<p>Av. do Café, 327 - Vila Netinho Prado, Jaú - SP, 17208-010</p>
											<p>PC7V+V6 Vila Netinho Prado, Jaú - SP</p>
											<h4 class="fh5co-uppercase-sm">CONTATO <i class="fas fa-phone"></i></h4>
											<p>(14) 3602-6969</p>
											<p>recpcao@deangelis.com.br</p>
											<h4 class="fh5co-uppercase-sm">HORÁRIO DE FUNCIONAMENTO <i class="far fa-clock"></i></h4>
											<p>De segunda a sexta das 8:00 - 22:00</p>
											<p>Sabádo e Domindo das 8:00 - 20:00</p>
											<p>Feriados das 8:00 - 13:00</p>
										</div>
									</div>

								<div class="col-md-6 col-sm-6">
									<div class="fh5co-text">
										<p><span><img src="home/loja1.png" class="img-receita"></span></p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 col-sm-6 text-center fh5co-text-wrap texto-receita nome-loja2 row-receita">
								<div class="fh5co-text">
									<h4 class="fh5co-uppercase-sm">Loja 2</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="fh5co-text">
										<p><span><img src="home/loja2.png" class="img-receita"></span></p>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 text-justify fh5co-text-wrap texto-loja cabecalho-loja">
									<div class="fh5co-text">
										<h4 class="fh5co-uppercase-sm">ENDEREÇO <i class="fas fa-map-marker-alt"></i></h4>
										<p>Av. das Nações, 458 - Centro, Jaú - SP, 17201-300</p>
										<p>PC4P+86 Jaú, SP</p>
										<h4 class="fh5co-uppercase-sm">CONTATO <i class="fas fa-phone"></i></h4>
										<p>(14) 3602-6968</p>
										<p>recpcao@deangelis.com.br</p>
										<h4 class="fh5co-uppercase-sm">HORÁRIO DE FUNCIONAMENTO <i class="far fa-clock"></i></h4>
										<p>De segunda a sexta das 8:00 - 22:00</p>
										<p>Sabádo e Domindo das 8:00 - 20:00</p>
										<p>Feriados das 8:00 - 13:00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			    <a name="receita"></a>
				<div id="fh5co-features-3" data-section="benefits">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
								<h2 class="fh5co-lead animate-single features3-animate-1">Receitas</h2>
								<p class="fh5co-sub animate-single features3-animate-2">As melhores receitas Itálianas!</p>
							</div>
							<div class="col-md-12 col-sm-6 text-center fh5co-text-wrap texto-receita nome-receita row-receita">
								<div class="fh5co-text">
									<h4 class="fh5co-uppercase-sm">Bruschetta de travessa</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="fh5co-text">
										<p><span><img src="receita/bruschetta.jpg" class="img-receita"></span></p>
									</div>
								</div>
								
								<div class="clearfix visible-sm-block"></div>

								<div class="col-md-6 col-sm-6 text-justify fh5co-text-wrap texto-receita cabecalho-receita">
									<div class="fh5co-text">
										<h4 class="fh5co-uppercase-sm">Ingredientes</h4>
										<p>• 2 tomates sem sementes em cubos;</p>
										<p>• 1 cebola em cubos;</p>
										<p>• 2 ovos;</p>
										<p>• 1/2 xícara (chá) de creme de leite;</p>
										<p>• 1/2 xícara (chá) de leite;</p>
										<p>• 250g de presunto em cubos;</p>
										<p>• 250g de queijo mussarela em cubos;</p>
										<p>• Sal e azeite a gosto;</p>
										<p>• 1 pão italiano em pedaços;</p>
										<p>• 100g de queijo parmesão ralado;</p>
										<p>• Orégano para polvilhar.</p>
									</div>
								</div>	

								<div class="col-md-3 col-sm-6 text-justify fh5co-text-wrap texto-receita">
									<div class="fh5co-text">
										<p>Tempo: 35min</p>
										<p>Rendimento: 5 porções</p>
										<p>Dificuldade: Fácil</p>
									</div>
								</div>

								<div class="clearfix visible-sm-block"></div>

								<div class="col-md-9 col-sm-6 text-center fh5co-text-wrap cabecalho-receita">
									<div class="fh5co-text">
										<h4 class="fh5co-uppercase-sm">Modo de preparo</h4>
										<p class="text-justify">Em uma tigela, misture o tomate, a cebola, os ovos, o creme de leite, o leite, o presunto, a mussarela, sal e azeite. Espalhe o pão no fundo de um refratário médio untado, regue com azeite e espalhe o recheio por cima. Polvilhe com o parmesão e leve ao forno médio, preaquecido, por 20 minutos. Retire, polvilhe com orégano e sirva.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row row-receita">
							<div class="col-md-12 col-sm-6 text-center fh5co-text-wrap texto-receita nome-receita">
								<div class="fh5co-text">
									<h4 class="fh5co-uppercase-sm">Calzone recheado de presunto e queijo</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="fh5co-text">
										<p><span><img src="receita/calzone.jpg" class="img-receita"></span></p>
									</div>
								</div>
								
								<div class="clearfix visible-sm-block"></div>

								<div class="col-md-6 col-sm-6 text-justify fh5co-text-wrap texto-receita cabecalho-receita">
									<div class="fh5co-text">
										<h4 class="fh5co-uppercase-sm">Ingredientes</h4>
										<p>• 1 tablete de fermento biológico fresco (15g);</p>
										<p>• 150ml de água morna;</p>
										<p>• 1 colher (chá) de sal;</p>
										<p>• 1 colher (sopa) de azeite;</p>
										<p>• 2 e 1/4 de xícaras (chá) de farinha de trigo;</p>
										<p>• Farinha de trigo para enfarinhar a superfície;</p>
										<p>• Óleo para untar;</p>
										<p>• 1 gema para pincelar;</p>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3 col-sm-6 text-justify fh5co-text-wrap">
									<div class="fh5co-text">
										<p class="texto-receita">Tempo: 1h35 (+1h20 de descanso)</p>
										<p class="texto-receita">Rendimento: 1</p>
										<p class="texto-receita">Dificuldade: Fácil</p>
										<h4 class="fh5co-uppercase-sm">Recheio</h4>
										<p>• 1/2 xícara (chá) de molho de tomate temperado;</p>
										<p>• 150g de presunto ralado;</p>
										<p>• 200g de queijo mussarela ralado;</p>
										<p>• 2 tomates fatiados;</p>
										<p>• Orégano a gosto.</p>
									</div>
								</div>

								<div class="clearfix visible-sm-block"></div>

								<div class="col-md-9 col-sm-6 text-center fh5co-text-wrap cabecalho-receita">
									<div class="fh5co-text">
										<h4 class="fh5co-uppercase-sm">Modo de preparo</h4>
										<p class="text-justify">
											Coloque o fermento em uma vasilha e dissolva na água morna. Adicione o sal e o azeite e misture. Despeje a farinha, aos poucos, misturando com uma colher até soltar da lateral da vasilha. Sove sobre superfície lisa e enfarinhada por 10 minutos ou até obter uma massa macia e que não grude nas mãos. Forme uma bola, cubra e deixe descansar por 40 minutos ou até dobrar de volume. Sove novamente por 5 minutos, cubra e deixe descansar mais 40 minutos.
										</p>

										<p class="text-justify">
											Abra com o auxílio de um rolo em uma superfície enfarinhada formando um disco com aproximadamente 35cm de diâmetro e transfira para uma assadeira levemente untada. Espalhe o molho de tomate, o presunto, o queijo e o tomate. Polvilhe com orégano e dobre a massa, apertando bem as laterais para fechar. Pincele com a gema e leve ao forno alto, preaquecido, por 35 minutos ou até dourar levemente. Sirva em seguida.
										</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			    <a name="empresa"></a>
				<div id="fh5co-features-3" data-section="benefits">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
								<h2 class="fh5co-lead animate-single features3-animate-1">Empresa</h2>
								<p class="fh5co-sub animate-single features3-animate-2 text-justify">Nossa empresa começou com o senhor De Angelis em 1978, um típico italiano que queria vender seus produtos com grande qualidade e bom gosto.<br>
								 Como vinha de família humilde trabalhou muito tempo em um restaurante até juntar seus primeiros lucros e conseguir abrir o bazar De Angelis, com pequeno espaço, mas com produtos de grande qualidade. Devido a isso o Bazar teve um crescimento ainda maior e De Angelis decidiu investir em seu primeiro supermercado na região do litoral de São Paulo.<br>
								Em 2008, já com grande sucesso o Supermercado De Angelis inaugurou sua segunda loja, mantendo os mesmos setores e sua qualidade indescritível.
								</p>
							</div>
						</div>
					</div>
				</div>

			    <a name="setores"></a>
				<div id="fh5co-features-3" data-section="benefits">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
								<h2 class="fh5co-lead animate-single features3-animate-1">Setores</h2>
								<p class="fh5co-sub animate-single features3-animate-2">Oferecendo sempre uma grande qualidade para você.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 col-sm-6 text-center fh5co-text-wrap">
								<div class="fh5co-text">
				    				<span class="fh5co-icon"><img src="https://img.icons8.com/office/52/000000/wine-bottle.png"></span>
									<h4 class="fh5co-uppercase-sm">Adega e bebidas </h4>
									<p class="text-justify">Nenhuma refeição ou ocasião festiva é completa sem uma boa bebida para harmonizar os sabores. As adegas dos supermercados De Angelis comercializam centenas de rótulos de bebidas nacionais e importadas. Dentre as opções, estão cervejas, vodkas, whiskys, destilados, refrigerantes, sucos e, é claro, a nossa especialidade: o vinho.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 text-center fh5co-text-wrap">
								<div class="fh5co-text">
				    				<span class="fh5co-icon"><img src="https://img.icons8.com/color/52/000000/bread.png"></span>
									<h4 class="fh5co-uppercase-sm">Padaria e confeitaria</h4>
									<p class="text-justify">É sempre bom chegar à Padaria e Confeitaria do De Angelis para levar pães e bolos deliciosos. Com as unidades produtoras sempre abertas aos olhos dos consumidores, este é mais um setor que possui maquinário moderno. Os pães são produzidos ao longo de todo o dia, oferecendo a melhor qualidade possível.</p>
								</div>
							</div>
							
							<div class="clearfix visible-sm-block"></div>

							<div class="col-md-4 col-sm-6 text-center fh5co-text-wrap">
								<div class="fh5co-text">
				    				<span class="fh5co-icon"><img src="https://img.icons8.com/office/52/000000/strawberry.png"></span>
									<h4 class="fh5co-uppercase-sm">Hortifrúti</h4>
									<p class="text-justify">Nosso setor de hortifrúti conta com as melhores opções para você ter uma alimentação balanceada e saudável. Uma grande variedade de naturais (frutas, verduras e legumes), orgânicos, congelados, polpas e frutas exóticas, tudo entregue sempre fresquinho por nossos excelentes fornecedores selecionados.</p>
								</div>
							</div>
						</div>	

						<div class="row">
							<div class="col-md-4 col-sm-6 text-center fh5co-text-wrap">
								<div class="fh5co-text">
				    				<span class="fh5co-icon"><img src="https://img.icons8.com/color/52/000000/ingredients.png"></span>
									<h4 class="fh5co-uppercase-sm">Mercearia</h4>
									<p class="text-justify">Em nossa mercearia você encontra tudo o que procura, com facilidade, e conta com atendimento de primeira para garantir que você não tenha nenhuma dúvida na hora de escolher seus produtos.</p>
								</div>
							</div>

							<div class="clearfix visible-sm-block"></div>

							<div class="col-md-4 col-sm-6 text-center fh5co-text-wrap">
								<div class="fh5co-text">
				    				<span class="fh5co-icon"><img src="https://img.icons8.com/color/52/000000/cheese.png"></span>
									<h4 class="fh5co-uppercase-sm">Laticínios e frios </h4>
									<p class="text-justify">Além de queijos, embutidos e muitos outros produtos de alta qualidade, no setor de Frios e Laticínios do De Angelis você leva o melhor serviço.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 text-center fh5co-text-wrap">
								<div class="fh5co-text">
				    				<span class="fh5co-icon"><img src="https://img.icons8.com/office/52/000000/pizza.png"></span>
									<h4 class="fh5co-uppercase-sm">Rotisseria</h4>
									<p class="text-justify">Massas com o verdadeiro sabor da Italia e com qualidade indescritível. Venha experimentar. 
									</p>
								</div>
							</div>



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

	

	
	</body>
</html>
