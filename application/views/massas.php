<?php
//o cÃƒÂ³digo PHP seguinte nÃƒÂ£o permite acessos directos ao ficheiro
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Volunteer@FC.UL: Perfil do Voluntário</title>

  <!-- Bootstrap Core CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap.min.css'); ?>">

		<!-- Custom Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css" type="text/css">
		<!-- Plugin CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/animate.min.css'); ?>">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/creative_perfil.css'); ?>">
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

<?php
//aqui Ã© feito o loop sobre todas as linhas do resultado da interrogaÃ§Ã£o
foreach ($auth as $linha) {
	foreach ($oracle as $lin) {
		$username = $linha["username"];
		$email = $linha["email"];
		$fotografia = $linha["FOTOGRAFIA"];
		$descricao = $linha["DESCRICAO"];
		$distrito = $linha["DISTRITO"];
		$concelho = $linha["CONCELHO"];
		$telefone = $linha["TELEFONE"];
		$genero = $lin["GENERO"];
		$profissao = $lin["PROFISSAO"];
		$cv = $lin["CV"];
		$data = $lin["DATANASCIMENTO"];
	}
}
	?>

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
                        <a class="page-scroll" href="<?php echo site_url(); ?>">Página Voluntário</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown" aria-expended="false" style="height: 50px; margin-top:-5px;">
                            <img src="<?php echo $fotografia ?>" style="width:30px;height:30px;" class="img-circle special-img"> <?php echo $username ?> <b class="caret"></b>
                        </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('perfil/paginaEditarPerfil'); ?>"><i class="fa fa-edit"></i> Editar Perfil </a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo site_url('autenticacao/logout'); ?>"><i class="fa fa-sign-out"></i> Terminar Sessão</a></li>

                                </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <header style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo base_url('assets/pagina.jpg'); ?>);" >
			<div class="header-content">
				<div class="header-content-inner">
					<h1>Perfil de Voluntário</h1>
					<hr>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<a class="btn btn-primary btn-xl page-scroll" style="outline:none" href="#perfil" >Visualizar Perfil</a>
				</div>
			</div>
	</header>
	
		<section class="bg-primary" id="services">

			<div class="container">
				
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
							<div style="background-color: white;">
								<h1><?php echo $username ?></h1>
							</div>
							
								<h2 style="color:white;">Profissao: </h2>
								<h4 style="color:white;"><?php echo $profissao ?></h4>
							</div>
							
							<div class="col-sm-6">
							<img src="<?php echo $fotografia?>" style="height:100%;width:100%;"> </img>
							</div>
							
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
								<h2 style="color:white;">Genero: </h2>
								<h4 style="color:white;"><?php echo $genero ?></h4>
							</div>
							
							<div class="col-sm-6">
								<h2 style="color:white;">Localidade: </h2>
								<h4 style="color:white;"><?php echo $distrito ?> , <?php echo $concelho ?></h4>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
								<h2 style="color:white;">Data de nascimento: </h2>
								<h4 style="color:white;"><?php echo $data ?></h4>
							</div>
							<div class="col-sm-6">
								<h2 style="color:white;">CV: </h2>
								<a href"<?php echo $cv ?>"><h4 style="color:white;"><?php echo $cv ?></h4></a>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6 col-sm-offset-3">
								<h2 style="color:white;">Resumo: </h2>
								<h4 style="color:white;"><?php echo $descricao ?></h4>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
								
								<table>
                             		<tr>
                                		<h2 style="color:white;">Áreas de Interesse: </h2>
                            		</tr>
                            		
                           			<tr>
                               			<h4 style="color:white;">Desporto</h4>
                          			</tr>
                            		<tr>        
                                		<h4 style="color:white;">Saúde</h4>
                            		</tr>
                        		</table>
								
							</div>
							<div class="col-sm-6">
								
								<table>
                             		<tr>
                                		<h2 style="color:white;">Grupo Alvo: </h2>
                            		</tr>
                            		
                           			<tr>
                               			<h4 style="color:white;">Crianças e Jovens</h4>
                          			</tr>
                            		<tr>        
                                		<h4 style="color:white;">Animais</h4>
                            		</tr>
                        		</table>
								
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6 col-sm-offset-3">
								<h2 style="color:white;">Disponibilidade: </h2>
								<h4><!--<?php echo $email ?>--></h4>
							</div>
						</div>
					</div>
					
					
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
									<h2 style="color:white;">E-mail: </h2>
									<h4 style="color:white;"><?php echo $email ?></h3>
							</div>
							<div class="col-sm-6">
									<h2 style="color:white;">Telefone: </h2>
									<h4 style="color:white;"><?php echo $telefone ?></h3>
							</div>
						</div>
					

					</br>
					</br>
			</div>

		</section>
		
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
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#dropdown-checklist').multiselect();
			});
		</script>

	</body>

</html>