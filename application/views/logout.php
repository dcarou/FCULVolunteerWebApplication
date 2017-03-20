<?php
//o cÃ³digo PHP seguinte nÃ£o permite acessos directos ao ficheiro
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

		<title>Volunteer@FC.UL: Registo do Voluntário</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap.min.css'); ?>">

		<!-- Custom Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" type="text/css">
		<!-- Include Required Prerequisites -->
		<link rel="stylesheet" type="text/css" 	href="<?php echo base_url('assets/bootstrap.css'); ?>" />
		<!-- Include Date Range Picker -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/daterangepicker.css'); ?>" />
		<!-- Plugin CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/animate.min.css'); ?>">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/creative.css'); ?>">
		<!-- Custom styles for login -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/signin.css'); ?>">
		<link href="<?php echo base_url('assets/jasny-bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
		<link href="<?php echo base_url('assets/select2.min.css'); ?>" rel="stylesheet" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

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
					<a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>" >Bolsa de Voluntariado da FCUL</a>
				</div>

			</div>
			<!-- /.container-fluid -->
		</nav>
		<header style="background-image: url(<?php echo base_url('assets/logout.jpg'); ?>);">
			<div class="header-content">
				<div class="header-content-inner">
					<h1>Voluntário</h1>
					<hr>
					<p>
						A sessão foi terminada com sucesso!
					</p>
					<a class="btn btn-primary btn-xl page-scroll" style="outline:none" href="<?php echo base_url(); ?>" >Home</a>
				</div>
			</div>
		</header>

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
		<!-- Include Required Prerequisites -->
		<script type="text/javascript" src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/moment.min.js'); ?>"></script>
		<!-- Include Date Range Picker -->
		<script type="text/javascript" src="<?php echo base_url('assets/daterangepicker.js'); ?>"></script>
		<script src="<?php echo base_url('assets/select2.min.js'); ?>"></script>

	</body>

</html>