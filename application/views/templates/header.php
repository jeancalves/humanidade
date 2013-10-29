<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Mais Humanidade </title>
	<!--[if lt IE 9]><script src=<?php echo '"'.base_url()."assets/js/html5shiv.js".'"' ?> ></script><![endif]-->
	<!--[if lt IE 9]><script src=<?php echo '"'.base_url()."assets/js/mq.js".'"' ?>></script><![endif]-->
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<meta name="viewport" content="width=device-width">
	<!-- Css Files Start -->
	<link href=<?php echo '"'.base_url()."assets/css/skins/orange.css".'"' ?> rel="stylesheet" type="text/css" /><!-- All css -->
	<link href=<?php echo '"'.base_url()."assets/css/style.css".'"' ?> rel="stylesheet" type="text/css" /><!-- All css -->
	<link href=<?php echo '"'.base_url()."assets/css/bootstrap.css".'"' ?> rel="stylesheet" type="text/css" /><!-- Bootstrap Css -->

	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/customIE.css" /><![endif]-->
	<link href=<?php echo '"'.base_url()."assets/css/font-awesome.css".'"' ?> rel="stylesheet" type="text/css" /><!-- Font Awesome Css -->
	<link href=<?php echo '"'.base_url()."assets/css/font-awesome-ie7.css".'"' ?> rel="stylesheet" type="text/css" /><!-- Font Awesome iE7 Css -->

	<!-- Css Files End -->
	<!-- Social Icons no JS -->
	<noscript><link rel="stylesheet" type="text/css" href=<?php echo base_url()."assets/css/nj.css"?> /></noscript>
	<script src=<?php echo '"'.base_url()."assets/plugins/jquery-2.0.3.min.js"?> type="text/javascript" ></script><!-- Jquery -->
</head>
<body>

	<div class="wrapper">
		<header>
			<section class="top_bar">
				<section class="container-fluid container">
					<section class="row-fluid">
						<article class="span6">
							<ul class="details">
								<li><i class="icon-map-marker"> </i> Belo Horizonte, MG - Brasil</li>
								<!-- <li><i class="icon-mobile-phone"> </i> +55 31 </li> -->
								<li><i class="icon-envelope-alt"> </i><a href="mailto:maishumanidade@gmail.com">maishumanidade@gmail.com</a> </li>
							</ul>
						</article>
						<article class="span4 offset2"> 		
							<ul class="social">
								<li> <a href="#" class="s1"> Facebook</a> </li>
							</ul>
						</article>
					</section>
				</section>	
			  </section> <!-- top_bar -->
			  <section class="container-fluid container">
				<section class="row-fluid">
					<section class="span4">
						<h1 id="logo">
							<a href="index.html">
								<img src=<?php echo base_url()."assets/images/orange/logo3.png"?> >
							</a>
						</h1>
					</section>
					<section class="nav form-pesquisa">
						<!-- formulario de pesquisa -->
						<form id="custom-search-form" class="form-search form-horizontal pull-right">
			                <div class="input-append span12">
			                    <input type="text" class="search-query" placeholder="Search">
			                    <button type="submit" class="btn"><i class="icon-search"></i></button>
			                </div>
		            	</form>
					</section> <!-- nav form-pesquisa -->
				</section> <!-- row-fluid -->
			</section> <!-- container-fluid container -->

			<!-- Main Nav Bar -->
	
			<section class="logo_container">
			   <div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li class="active"> <a href=""> Home </a> </li>
								  <li class=""> <a href="">  Sobre </a>
									
								  </li>
			 
								  <!--<li class="dropdown"> <a class="dropdown-toggle" href=""> Eventos de caridade	<b class="caret"></b> </a>
									<ul class="dropdown-menu">
										<li><a href="">Detalhes do Evento</a></li>
										<li><a href="">Calendário</a></li>
										<li><a href="">Local do evento</a></li>
									</ul>
								  </li>-->
			 
								  <li class="dropdown"> <a class="dropdown-toggle" href="" >  Instituição de caridade	<b class="caret"></b> </a>
									<ul class="dropdown-menu">
										<li><a href="">Lista de Instituições</a></li>
										<li><a href="">Doação </a></li>
									</ul>
								  </li>

			 					  <li class="dropdown"> <a class="dropdown-toggle" href="" >  Contatos <b class="caret"></b> </a>
									<ul class="dropdown-menu">
										<li><a href="">Telefones Úteis</a></li>
										<li><a href="product_listing_list.html">Contate-nos</a></li>
										
									</ul>
								  </li>
							</ul>
							<ul class="nav pull-right">
								  <li class="dropdown"> <a class="dropdown-toggle" href=""> Cadastre-se	<b class="caret"></b> </a>
									<ul class="dropdown-menu" >
										<li><a href="pessoafisica.html">Doador</a></li>
										<li><a href=<?php echo base_url()."donatario/cadastro"?>>Donatário</a></li>
										
									</ul>
								  </li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#" data-toggle="dropdown">Entrar <strong class="caret"></strong></a>
									<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
										<form method="post" action="login" accept-charset="UTF-8">
											<input style="margin-bottom: 15px;" type="text" placeholder="Nome" id="username" name="username">
											<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
											<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
											<label class="string optional" for="user_remember_me"> Lembre-me</label>
											<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Entrar">
											<!--<label style="text-align:center;margin-top:5px">ou</label>
			                                <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Entre com uma conta do facebook">
											<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Entre com uma conta do google">-->
										</form>
									</div>
								</li>
							</ul>
						</div>
						<!--/.nav-collapse -->
					</div>
					<!--/.container-fluid -->
				</div>
				<!--/.navbar-inner -->
			</div>
			<!--/.navbar -->
		 
				<script type="text/javascript">

					jQuery(document).ready(function($) {

						$('.dropdown-menu').find('form').click(function(event) {
							e.stopPropagation();
						});
					});
				</script>

			</section> <!-- logo_container -->

		</header> <!-- header -->