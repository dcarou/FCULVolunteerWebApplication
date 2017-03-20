<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Volunteer@FC.UL: Página da Instituição</title>

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
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/creative_pagina.css'); ?>">
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
					<a class="navbar-brand page-scroll" href="<?php echo site_url('autenticacao_instituicao/login'); ?>">Bolsa de Voluntariado da FCUL</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="page-scroll" href="#about">Oportunidades</a>
						</li>
						<li>
							<a class="page-scroll" href="#services">Criar Oportunidades</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown"> <img src="<?php echo $fotografia; ?>" style="width:30px;height:30px;" class="img-circle special-img"> <?php echo $username; ?>
							<b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo site_url('instituicao/paginaPerfil'); ?>"><i class="fa fa-edit"></i> Visualizar Perfil </a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo site_url('instituicao/paginaEditarPerfil'); ?>"><i class="fa fa-edit"></i> Editar Perfil </a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo site_url('autenticacao_instituicao/logout'); ?>"><i class="fa fa-sign-out"></i> Terminar Sessão</a>
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
					<h1 style="color:white">Instituição</h1>
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
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<h2 class="section-heading" style="text-align:center">Voluntários</h2>
						<hr class="light">
						<table class="table1" style="text-align: center">
							<tr>
								<th>Fotografia</th>
								<th>Nome</th>
								<th>Localidade</th>
								<th>Áreas de Interesse</th>
								<th>Grupos Alvo</th>
								<th>Disponibilidade</th>
							</tr>
							<tr style="color:white">
								<td><img src="http://img.uefa.com/imgml/TP/players/14/2015/324x324/103125.jpg" height="50px" width="50px"</td>
								<td>Adrien Silva</td>
								<td>Lisboa</td>
								<td>Solidariedade Social</td>
								<td>Mães Solteiras</td>
								<td>17/03/2017</td>
							</tr>
								<tr>
								<td><img src="http://img.uefa.com/imgml/TP/players/14/2015/324x324/250014109.jpg" height="50px" width="50px"</td>
								<td>João Mário</td>
								<td>Lisboa</td>
								<td>Solidariedade Social</td>
								<td>Mães Solteiras</td>
								<td>17/03/2017</td>
							</tr>
							
						</table>
					</div>
				</div>
			</div>

		</section>
		<section class="bg-primary" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<h2 class="section-heading" style="text-align:center">Oportunidades de Voluntariado</h2>
						<hr class="light">
						<table class="table1">
							<tr>
								<th>Áreas de Atuação</th>
								<th>Grupo Alvo</th>
								<th>Função</th>
								<th>Localidade</th>
								<th>Inicio</th>
								<th>Fim</th>
								<th>Horas</th>
								<th>Vagas</th>
								<th>Descrição</th>
								<th></th>
							</tr>
							<tr>
								<td>Desporto e Lazer</td>
								<td>Adultos</td>
								<td>Colaborador de Evento</td>
								<td>Lisboa</td>
								<td>5/8/2016</td>
								<td>21/8/2016</td>
								<td>478</td>
								<td>70</td>
								<td>Descrição</td>
								<td><img src="<?php echo base_url('assets/-Delete.ico'); ?>" height="20px" width="20px"></td>
								<td><img src="<?php echo base_url('assets/edit.png'); ?>" height="20px" width="20px"></td>
							</tr>
							<tr>
								<td>Solidariedade Social</td>
								<td>Adultos</td>
								<td>Colaborador de armazém</td>
								<td>Lisboa</td>
								<td>21/6/2016</td>
								<td>6/9/2017</td>
								<td>4</td>
								<td>2</td>
								<td>Descrição</td>
								<td><img src="<?php echo base_url('assets/-Delete.ico'); ?>" height="20px" width="20px"></td>
								<td><img src="<?php echo base_url('assets/edit.png'); ?>" height="20px" width="20px"></td>
							</tr>
							<tr>
								<td>Saúde</td>
								<td>Adultos</td>
								<td>Auxiliar Hospital</td>
								<td>Lisboa</td>
								<td>1/1/2017</td>
								<td>31/12/2018</td>
								<td>478</td>
								<td>7</td>
								<td>Descrição</td>
								<td><img src="<?php echo base_url('assets/-Delete.ico'); ?>" height="20px" width="20px"></td>
								<td><img src="<?php echo base_url('assets/edit.png'); ?>" height="20px" width="20px"></td>
							</tr>
							<tr>
								<td>Novas Tecnologias</td>
								<td>Adultos</td>
								<td>Programador</td>
								<td>Lisboa</td>
								<td>1/7/2016</td>
								<td>31/8/2016</td>
								<td>78</td>
								<td>4</td>
								<td>Descrição</td>
								<td><img src="<?php echo base_url('assets/-Delete.ico'); ?>" height="20px" width="20px"></td>
								<td><img src="<?php echo base_url('assets/edit.png'); ?>" height="20px" width="20px"></td>
							</tr>
						</table>

					</div>
				</div>
			</div>
		</section>

		<section id="services">

			<h2 class="section-heading" style="text-align:center">Criar Oportunidades de Voluntariado</h2>
			<hr class="light">
			<div class="container">
				<form id="buttonGroupForm" class="form-horizontal" role="form">
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Função</span>
									<input type="text" size="30" value="" name="funcao" class="form-control" id="funcao" placeholder="Função" required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Distrito</span>
									<select id="ddl" name="distrito" onchange="configureDropDownLists(this,document.getElementById('ddl2'))" class="js-example-basic-single col-sm-10" style="outline:none">
										<option value=""></option>
										<option value="Açores">Açores</option>
										<option value="Aveiro">Aveiro</option>
										<option value="Beja">Beja</option>
										<option value="Braga">Braga</option>
										<option value="Bragança">Bragança</option>
										<option value="Catelo Branco">Castelo Branco</option>
										<option value="Coimbra">Coimbra</option>
										<option value="Évora">Évora</option>
										<option value="Faro">Faro</option>
										<option value="Guarda">Guarda</option>
										<option value="Leiria">Leiria</option>
										<option value="Lisboa">Lisboa</option>
										<option value="Madeira">Madeira</option>
										<option value="Portalegre">Portalegre</option>
										<option value="Porto">Porto</option>
										<option value="Santarém">Santarém</option>
										<option value="Setúbal">Setúbal</option>
										<option value="Viana do Castelo">Viana do Castelo</option>
										<option value="Vila Real">Vila Real</option>
										<option value="Viseu">Viseu</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Concelho</span>
									<select id="ddl2" name="concelho" class="js-example-basic-single col-sm-10" name="concelho"></select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Data de Inicio</span>
									<input type="text" class="form-control" name="datainicio" aria-describedby="sizing-addon2">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Data de Fim</span>
									<input type="text" class="form-control" name="datafim" aria-describedby="sizing-addon2">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-6" style="margin-top:10px">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Número de Vagas </span>
									<input type="number" class="col-sm-6" name="numerovagas" style=" width:150px;height:30px; color:black;" />
								</div>
							</div>
							<div class="col-sm-6" style="margin-top:10px">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2" style="text-align:left">Número de Horas </span>
									<input type="number" class="col-sm-6" name="numerohoras" style=" width:150px;height:30px; color:black;" />
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2" style="text-align:left">Descricao </span>

								</div>
							</div>
							<div class="col-sm-12">
								<div class="input-group">
									<textarea name="descricao" style="height: 100px; width: 721px; color:black;"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Áreas de Actuação</span>
									<select id="dropdown-checklist" name="areaatuacao[]" multiple="multiple" class="js-example-basic-single " style="width:570px;">
										<option value="AMBIENTE">Ambiente</option>
										<option value="CIDADANIAEDIREITOS">Cidadania e Direitos</option>
										<option value="CULTURAEARTES">Cultura e Artes</option>
										<option value="DESPORTOELAZER">Desporto e Lazer</option>
										<option value="EDUCACAO">Educação</option>
										<option value="NOVASTECNOLOGIAS">Novas Tecnologias</option>
										<option value="SAUDE">Saúde</option>
										<option value="SOLIDARIEDADESOCIAL">Solidariedade Social</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="col-sm-11">
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">Grupo Alvo</span>
									<select id="dropdown-checklist" name="grupoalvo[]" multiple="multiple" class="js-example-basic-single" style="width:620px;">
										<option value="ADULTOS">Adultos</option>
										<option value="ANIMAIS">Animais</option>
										<option value="CRIANCAS E JOVENS">Crianças e Jovens</option>
										<option value="COMUNIDADE GERAL">Familia e Comunidade em Geral</option>
										<option value="GRAVIDAS">Grávidas</option>
										<option value="MAESADOLESCENTES">Mães Adolescentes</option>
										<option value="BEBES">Bebés</option>
										<option value="JOVENS">Jovens</option>
										<option value="MAESSOLTEIRAS">Mães Solteiras</option>
										<option value="DEFICIENTES">Pessoas com Deficiência</option>
										<option value="IDOSOS">Pessoas Idosas</option>
										<option value="SEMABRIGO">Pessoas Sem-Abrigo</option>
										<option value="DROGADOS">Pessoas Toxico-Dependentes</option>
										<option value="VIOLENCIA DOMESTICA">Vitimas de Violência Doméstica</option>
										<option value="PRESOS">Presos</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<!--
					<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2">
					<div class="col-sm-6">
					<div class="input-group">
					<span class="input-group-addon" id="sizing-addon2">falta título</span>
					<select class="js-example-basic-single col-sm-10" style="outline:none">
					<option value="Regular">Regular</option>
					<option value="Pontual">Pontual</option>
					</select>
					</div>
					</div>
					</div>
					</div>
					-->
					</br>
					</br>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-10" style="text-align:center;">
							<input type="submit" value="Criar Oportunidade" id="reg_vol" class="btn btn-primary btn-xl page-scroll" style="outline:none;color:white; background-color:#f05f40" />
						</div>
					</div>
				</form>
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
		<!-- Include Required Prerequisites -->
		<script type="text/javascript" src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/moment.min.js'); ?>"></script>
		<!-- Include Date Range Picker -->
		<script type="text/javascript" src="<?php echo base_url('assets/daterangepicker.js'); ?>"></script>
		<script src="<?php echo base_url('assets/select2.min.js'); ?>"></script>

		<script type="text/javascript">
			$(function() {
				$('input[name="datainicio"]').daterangepicker({
					singleDatePicker : true,
					showDropdowns : true
				}, function(start, end, label) {
					var years = moment().diff(start, 'years');
				});
			});
			$(function() {
				$('input[name="datafim"]').daterangepicker({
					singleDatePicker : true,
					showDropdowns : true
				}, function(start, end, label) {
					var years = moment().diff(start, 'years');
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$(".js-example-basic-single").select2();
			});

			function configureDropDownLists(ddl1, ddl2) {
				var aC = ['Angra do Heroísmo', 'Calheta', 'Corvo', 'Horta', 'Lagoa', 'Lajes das Flores', 'Lajes do Pico', 'Madalena', 'Nordeste', 'Ponta Delgada', 'Povoação', 'Praia da Vitória', 'Ribeira Grande', 'S.Roque do Pico', 'Sta.Cruz das Flores', 'Sta.Cruz Graciosa', 'Vila Franca do Campo', 'Velas', 'Vila do Porto'];
				var aV = ['Águeda', 'Albergaria-a-Velha', 'Anadia', 'Arouca', 'Aveiro', 'Castelo de Paiva', 'Espinho', 'Estarreja', 'Ílhavo', 'Mealhada', 'Murtosa', 'Oliveira de Azeméis', 'Oliveira do Bairro', 'Ovar', 'S.João da Madeira', 'Sever do Vouga', 'Sta.Maria da Feira', 'Vagos', 'Vale de Cambra'];
				var bJ = ['Aljustrel', 'Almodôvar', 'Alvito', 'Barrancos', 'Beja', 'Castro Verde', 'Cuba', 'Ferreira do Alentejo', 'Mértola', 'Moura', 'Odemira', 'Ourique', 'Serpa', 'Vidigueira'];
				var bR = ['Amares', 'Barcelos', 'Braga', 'Cabeceiras de Basto', 'Celorico de Basto', 'Esposende', 'Fafe', 'Guimarães', 'Póvoa de Lanhoso', 'Terras de Bouro', 'Vila Nova de Famalicão', 'Vieira do Minho', 'Vila Verde', 'Vizela'];
				var bRA = ['Alfândega da Fé', 'Bragança', 'Carrazeda Anisiães', 'Freixo de Espada á Cinta', 'Macedo Cavaleiros', 'Miranda do Douro', 'Mirandela', 'Mogadouro', 'Torre de Moncorvo', 'Vila Flor', 'Vimioso', 'Vinhais'];
				var cB = ['Belmonte', 'Castelo Branco', 'Covilhã', 'Fundão', 'Idanha-a-Nova', 'Oleiros', 'Penamacor', 'Proença-a-Nova', 'Sertã', 'Vila de Rei', 'Vila Velha de Rodão'];
				var cO = ['Arganil', 'Cantanhede', 'Coimbra', 'Condeixa-a-Nova', 'Figueira da Foz', 'Góis', 'Lousã', 'Mira', 'Miranda Do Corvo', 'Montemor-o-Velho', 'Oliveira do Hospital', 'Pampilhosa da Serra', 'Penacova', 'Penela', 'Soure', 'Tábua', 'Vila Nova de Poiares'];
				var eV = ['Alandroal', 'Arraiolos', 'Borba', 'Estremoz', 'Montemor-o-Novo', 'Mora', 'Mourão', 'Portel', 'Redondo', 'Reguengos de Monsaraz', 'Vendas Novas', 'Viana do Castelo', 'Vila Viçosa'];
				var fA = ['Albufeira', 'Alcoutim', 'Aljezur', 'Castro Marim', 'Faro', 'Lagoa', 'Lagos', 'Loulé', 'Monchique', 'Olhão', 'Portimão', 'S.Brás de Alportel', 'Silvez', 'Tavira', 'Vila Real de Sto.António', 'Vila do Bispo'];
				var gU = ['Aguiar da Beira', 'Almeida', 'Celorico da Beira', 'F.Castelo Rodrigo', 'Fornos de Algodres', 'Gouveia', 'Guarda', 'Manteigas', 'Meda', 'Pinhel', 'Sabugal', 'Seia', 'Trancoso', 'Foz Côa'];
				var lE = ['Alcobaça', 'Alvaiázere', 'Ansião', 'Batalha', 'Bombarral', 'Caldas da Rainha', 'Castanheira de Pera', 'Figueiró dos Vinhos', 'Leiria', 'Marinha Grande', 'Nazaré', 'Óbidos', 'Pedrogão Grande', 'Peniche', 'Pombal', 'Porto de Mós'];
				var lX = ['Alenquer', 'Amadora', 'Arruda dos Vinhos', 'Azambuja', 'Cadaval', 'Cascais', 'Lisboa', 'Loures', 'Lourinhã', 'Mafra', 'Odivelas', 'Oeiras', 'Sintra', 'Sobral Monte Agraço', 'Torres Vedras', 'Vila Franca de Xira'];
				var mA = ['Calheta', 'Câmara de Lobos', 'Funchal', 'Machico', 'Ponta do Sol', 'Porto Moniz', 'Porto Santo', 'Ribeira Brava', 'S.Vicente', 'Santana', 'Sta.Cruz'];
				var pR = ['Álter do Chão', 'Arronches', 'Avis', 'Campo Maior', 'Castelo de Vide', 'Crato', 'Elvas', 'Fronteira', 'Gavião', 'Marvão', 'Monforte', 'Nisa', 'Ponte de Sor', 'Portalegre', 'Sousel'];
				var pO = ['Amarante', 'Baião', 'Felgueiras', 'Gondomar', 'Lousada', 'Maia', 'Marco de Canavaeses', 'Matosinhos', 'Paços de Ferreira', 'Paredes', 'Penafiel', 'Porto', 'Póvia de Varzim', 'Sto.Tirso', 'Trofa', 'Valongo', 'Vila do Conde', 'Vila Nova de Gaia'];
				var sA = ['Abrantes', 'Alcanena', 'Almeirim', 'Alpiarça', 'Benavente', 'Cartaxo', 'Chamusca', 'Constância', 'Coruche', 'Entroncamento', 'Ferreira do Zêzere', 'Golegã', 'Mação', 'Ourém', 'Rio Maior', 'Salvaterra de Magos', 'Santarém', 'Sardoal', 'Tomar', 'Torres Novas', 'V.Nova Barquinha'];
				var sE = ['Alcácer do Sal', 'Alcochete', 'Almada', 'Barreiro', 'Grândola', 'Moita', 'Montjo', 'Palmela', 'Santiago do Cacém', 'Seixal', 'Sesimbra', 'Setúbal', 'Sines'];
				var vI = ['Arcos de Valdevez', 'Caminha', 'Melgaço', 'Monção', 'Paredes de Coura', 'Ponte da Barca', 'Ponte de Lima', 'V.Nova de Verveira', 'Valença', 'Viana do Castelo'];
				var vR = ['Alijó', 'Boticas', 'Chaves', 'Mesão Frio', 'Mondim de Basto', 'Montalegre', 'Murça', 'Peso da Régua', 'Ribeira de Pena', 'Sabrosa', 'Sta.Marta Penaguião', 'Valpaços', 'Vila Pouca Aguiar', 'Vila Real'];
				var vS = ['Armamar', 'Carregal do Sal', 'Castro Verde', 'Cinfães', 'Lamego', 'Mangualde', 'Moimenta da Beira', 'Mortágua', 'Nelas', 'Oliveira de Frades', 'Penalva do Castelo', 'Penedono', 'Resende', 'S.João da Pesqueira', 'S.Pedro do Sul', 'Satão', 'Sernancelhe', 'Sta.Comba Dão', 'Tabuaço', 'Tarouça', 'Tondela', 'Vila Nova de Paiva', 'Viseu', 'Vouzela'];

				switch (ddl1.value) {
				case 'Açores':
					ddl2.options.length = 0;
					for ( i = 0; i < aC.length; i++) {
						createOption(ddl2, aC[i], aC[i]);
					}
					break;
				case 'Aveiro':
					ddl2.options.length = 0;
					for ( i = 0; i < aV.length; i++) {
						createOption(ddl2, aV[i], aV[i]);
					}
					break;
				case 'Beja':
					ddl2.options.length = 0;
					for ( i = 0; i < bJ.length; i++) {
						createOption(ddl2, bJ[i], bJ[i]);
					}
					break;
				case 'Braga':
					ddl2.options.length = 0;
					for ( i = 0; i < bR.length; i++) {
						createOption(ddl2, bR[i], bR[i]);
					}
					break;
				case 'Bragança':
					ddl2.options.length = 0;
					for ( i = 0; i < bRA.length; i++) {
						createOption(ddl2, bRA[i], bRA[i]);
					}
					break;
				case 'Castelo Branco':
					ddl2.options.length = 0;
					for ( i = 0; i < cB.length; i++) {
						createOption(ddl2, cB[i], cB[i]);
					}
					break;
				case 'Coimbra':
					ddl2.options.length = 0;
					for ( i = 0; i < cO.length; i++) {
						createOption(ddl2, cO[i], cO[i]);
					}
					break;
				case 'Évora':
					ddl2.options.length = 0;
					for ( i = 0; i < eV.length; i++) {
						createOption(ddl2, eV[i], eV[i]);
					}
					break;
				case 'Faro':
					ddl2.options.length = 0;
					for ( i = 0; i < fA.length; i++) {
						createOption(ddl2, fA[i], fA[i]);
					}
					break;
				case 'Guarda':
					ddl2.options.length = 0;
					for ( i = 0; i < gU.length; i++) {
						createOption(ddl2, gU[i], gU[i]);
					}
					break;
				case 'Leiria':
					ddl2.options.length = 0;
					for ( i = 0; i < lE.length; i++) {
						createOption(ddl2, lE[i], lE[i]);
					}
					break;
				case 'Lisboa':
					ddl2.options.length = 0;
					for ( i = 0; i < lX.length; i++) {
						createOption(ddl2, lX[i], lX[i]);
					}
					break;
				case 'Madeira':
					ddl2.options.length = 0;
					for ( i = 0; i < mA.length; i++) {
						createOption(ddl2, mA[i], mA[i]);
					}
					break;
				case 'Portalegre':
					ddl2.options.length = 0;
					for ( i = 0; i < pR.length; i++) {
						createOption(ddl2, pR[i], pR[i]);
					}
					break;
				case 'Porto':
					ddl2.options.length = 0;
					for ( i = 0; i < pO.length; i++) {
						createOption(ddl2, pO[i], pO[i]);
					}
					break;
				case 'Santarém':
					ddl2.options.length = 0;
					for ( i = 0; i < sA.length; i++) {
						createOption(ddl2, sA[i], sA[i]);
					}
					break;
				case 'Setúbal':
					ddl2.options.length = 0;
					for ( i = 0; i < sE.length; i++) {
						createOption(ddl2, sE[i], sE[i]);
					}
					break;
				case 'Viana do Castelo':
					ddl2.options.length = 0;
					for ( i = 0; i < vI.length; i++) {
						createOption(ddl2, vI[i], vI[i]);
					}
					break;
				case 'Vila Real':
					ddl2.options.length = 0;
					for ( i = 0; i < vR.length; i++) {
						createOption(ddl2, vR[i], vR[i]);
					}
					break;
				case 'Viseu':
					ddl2.options.length = 0;
					for ( i = 0; i < vS.length; i++) {
						createOption(ddl2, vS[i], vS[i]);
					}
					break;

				default:
					ddl2.options.length = 0;
					break;
				}

			}

			function createOption(ddl, text, value) {
				var opt = document.createElement('option');
				opt.value = value;
				opt.text = text;
				ddl.options.add(opt);
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#dropdown-checklist').multiselect();
			});
		</script>

	</body>

</html>

</body>

</html>