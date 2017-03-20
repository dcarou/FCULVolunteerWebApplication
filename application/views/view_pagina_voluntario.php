<?php
//o cÃƒÂ³digo PHP seguinte nÃƒÂ£o permite acessos directos ao ficheiro
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Volunteer@FC.UL: Página do Voluntário</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap.min.css'); ?>">

		<!-- Custom Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" type="text/css">

		<!-- Plugin CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/animate.min.css'); ?>">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/creative_pagina.css'); ?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php
		//aqui Ã© feito o loop sobre todas as linhas do resultado da interrogaÃ§Ã£o
		foreach ($auth as $linha) {
			$username = $linha["username"];
			$fotografia = $linha["FOTOGRAFIA"];
		}
		?>

	</head>

	<body id="page-top">

		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="<?php echo site_url('autenticacao/login'); ?>">Bolsa de Voluntariado da FCUL</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="page-scroll" href="#about">Oportunidades</a>
						</li>
						<li>
							<a class="page-scroll" href="#services">Outras Oportunidades</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown"> <img src="<?php echo $fotografia; ?>" style="width:30px;height:30px;" class="img-circle special-img"> <?php echo $username; ?>
							<b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo site_url('perfil/paginaPerfil'); ?>"><i class="fa fa-edit"></i> Visualizar Perfil </a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo site_url('perfil/paginaEditarPerfil'); ?>"><i class="fa fa-edit"></i> Editar Perfil </a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo site_url('autenticacao/logout'); ?>"><i class="fa fa-sign-out"></i> Terminar Sessão</a>
								</li>

							</ul>
						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<header style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo base_url('assets/pagina_voluntario.jpg'); ?>);">
			<div class="header-content">
				<div class="header-content-inner">
					<h1 style="color:white">Voluntário</h1>
					<hr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<a href="#about" class="btn btn-primary btn-xl page-scroll">Ver Oportunidades</a>
				</div>
			</div>
		</header>

		<section class="bg-primary" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<h2 class="section-heading">Oportunidades de Voluntariado</h2>
						<hr class="light">
						<table class="table1">
							<tr>
								<th>Fotografia</th>
								<th>Área de Interesse</th>
								<th>Função</th>
								<th>Instituição</th>
								<th>Inicio</th>
								<th>Fim</th>
								<th>Horas</th>
								<th>Vagas</th>
								<th>Descrição</th>
							</tr>
							<tr>
								<td><img src="http://investorplace.com/wp-content/uploads/2015/09/090315-new-google-googl-stock-logo-185.jpg" height="80px" width="100px"></td>
								<td>Cultura e Artes</td>
								<td>Figurante</td>
								<td>CCB</td>
								<td>1/12/2016</td>
								<td>31/1/2017</td>
								<td>963</td>
								<td>966</td>
								<td>Descricao</td>
							</tr>
							<tr>
								<td><img src="http://investorplace.com/wp-content/uploads/2015/09/090315-new-google-googl-stock-logo-185.jpg" height="80px" width="100px"></td>
								<td>Cultura e Artes</td>
								<td>Figurante</td>
								<td>CCB</td>
								<td>1/12/2016</td>
								<td>31/1/2017</td>
								<td>963</td>
								<td>966</td>
								<td>Descricao</td>
							</tr>
						</table>

					</div>
				</div>
			</div>
		</section>

		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<h2 class="section-heading">Outras Oportunidades de Voluntariado</h2>
						<hr class="light">
						
						<table class="table2">
							<tr>
								<th>Fotografia</th>
								<th>Área de Interesse</th>
								<th>Função</th>
								<th>Instituição</th>
								<th>Inicio</th>
								<th>Fim</th>
								<th>Horas</th>
								<th>Vagas</th>
								<th>Descrição</th>
							</tr>
							<tr>
								<td><img src="http://investorplace.com/wp-content/uploads/2015/09/090315-new-google-googl-stock-logo-185.jpg" height="80px" width="100px"></td>
								<td>Cultura e Artes</td>
								<td>Figurante</td>
								<td>CCB</td>
								<td>1/12/2016</td>
								<td>31/1/2017</td>
								<td>963</td>
								<td>966</td>
								<td>Descricao</td>
							</tr>
							<tr>
								<td><img src="http://investorplace.com/wp-content/uploads/2015/09/090315-new-google-googl-stock-logo-185.jpg" height="80px" width="100px"></td>
								<td>Cultura e Artes</td>
								<td>Figurante</td>
								<td>CCB</td>
								<td>1/12/2016</td>
								<td>31/1/2017</td>
								<td>963</td>
								<td>966</td>
								<td>Descricao</td>
							</tr>
						</table>
						

					</div>
				</div>
			</div>
		</section>

		<section id="services2">
			<hr>

			<img style=" margin-left:260px; margin-top:-150px; width:1100px; height:135px;" src="<?php echo base_url('assets/patrocinios.png'); ?>" class="image">
			<br>
			<br>
			<div class="col-lg-12 text-center">
				<i class="fa fa-file-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
				<p>
					<a href=" ">Termos e Condições</a>
				</p>
			</div>
		</section>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets/jquery.js'); ?>"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('assets/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/jasny-bootstrap.min.js'); ?>"></script>
		<!-- Plugin JavaScript -->
		<script src="<?php echo base_url('assets/jquery.easing.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/jquery.fittext.js'); ?>"></script>
		<script src="<?php echo base_url('assets/wow.min.js'); ?>"></script>
		<!-- Custom Theme JavaScript -->
		<script src="<?php echo base_url('assets/creative.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-filestyle.min.js'); ?>"></script>

	</body>

</html>