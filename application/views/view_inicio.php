<?php
   //o código PHP seguinte não permite acessos directos ao ficheiro
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
      <title>Volunteer@FC.UL: Bolsa de Voluntariado da FCUL</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap.min.css'); ?>">
      <!-- Custom Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" type="text/css">
      <!-- Plugin CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/animate.min.css'); ?>">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/creative.css'); ?>">
      <!-- Custom styles for login -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/signin.css'); ?>">
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
               <a class="navbar-brand page-scroll" href="#page-top">Bolsa de Voluntariado da FCUL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a class="page-scroll" href="#services">Voluntário</a>
                  </li>
                  <li>
                     <a class="page-scroll" href="#empresa">Instituição</a>
                  </li>
                  <li>
                     <a class="page-scroll" href="#contact">Contactos</a>
                  </li>
                  <li>
                     <a class="page-scroll" href="#about">Login</a>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <header class="bg-primary" style="background:url(<?php echo base_url('assets/voluntario.jpg'); ?>);">
         <div class="header-content">
            <div class="header-content-inner">
               <h1>Bolsa de Voluntariado da FCUL</h1>
               <hr>
               <p>
                  "Voluntários não são pagos não porque não tenham valor, mas porque são impagaveis!"
               </p>
               <p>
                  Uma ponte entre quem quer dar... e quem quer receber!
               </p>
               <a href="#services" class="btn btn-primary btn-xl page-scroll">DESCOBRE MAIS</a>
            </div>
         </div>
      </header>
      <section class="bg-primary" id="about">
         <div id="buttons">
            <p style="font-size:26px;text-align:center">
               <button id="yes" class="btn btn-default btn-circle selected" style="text-decoration: none; outline:none" href="#" onclick="return show('Academic','Business');">
               Voluntário
               </button>
               /
               <button id="no" class="btn btn-default btn-circle default" style="text-decoration:none; outline:none" href="#" onclick="return show('Business','Academic');">
               Instituição
               </button>
            </p>
         </div>
         <hr class="light">
         </br>
         </br>
         <div id="Academic">
            <div class="container">
               <div class="row" style="margin-top: -35px;">
                  <div class="col-lg-8 col-lg-offset-2 text-center">
                     <form action="index.php/autenticacao/login" method="post" accept-charset="utf-8" class="form-signin">
                        <input type="text" name="username" value="" id="username" size="30" class="form-control" placeholder="Username" required/>
                        <input type="password" name="password" value="" id="password" size="30" id="inputPassword" class="form-control" placeholder="Password" required />
                        <div class="checkbox">
                           <label><input type="checkbox" name="remember" value="1" id="remember"/>	Relembrar dados </label>
                        </div>
                        <p style="font-size: 10px">
                           Ainda não tem uma conta? <a href="<?php echo site_url('/autenticacao/registo') ?>" style="color:white;font-size: 10px">Registe-se aqui!
                        </p>
                        </a>
                        <input type="submit" name="login" value="login" class="btn btn-default btn-xl" />
                     </form>
                     <!-- /fimdiv -->
                  </div>
                  <!-- /container -->
               </div>
            </div>
         </div>
         <div id="Business" style="display:none;margin-top: -35px">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 text-center">
                    <form action="index.php/autenticacao_instituicao/login" method="post" accept-charset="utf-8" class="form-signin">
                        <input type="text" name="username" value="" id="username" size="30" class="form-control" placeholder="Username" required/>
                        <input type="password" name="password" value="" id="password" size="30" id="inputPassword" class="form-control" placeholder="Password" required />
                        <div class="checkbox">
                           <label><input type="checkbox" name="remember" value="1" id="remember"/>	Relembrar dados </label>
                        </div>
                        <p style="font-size: 10px">
                           Ainda não tem uma conta? <a href="<?php echo site_url('/autenticacao_instituicao/registo') ?>" style="color:white;font-size: 10px">Registe-se aqui!
                        </p>
                        </a>
                        <input type="submit" name="login" value="login" class="btn btn-default btn-xl" />
                     </form>
                     <!-- /fimdiv -->
                  </div>
                  <!-- /container -->
               </div>
            </div>
         </div>
      </section>
      <section id="services">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <i class="fa fa-4x fa-child wow bounceIn text-primary"></i>
                  <h2 class="section-heading">Voluntário</h2>
                  <p class="motivacao">Altruísmo e solidariedade são valores morais socialmente constituídos vistos como virtude do indivíduo. Do ponto de vista religioso acredita-se que a prática do bem salva a alma; numa perspectiva social e política, pressupõe-se que a prática de tais valores zelará pela manutenção da ordem social e pelo progresso do homem. A caridade (forte herança cultural e religiosa), reforçada pelo ideal, as crenças, os sistemas de valores, e o compromisso com determinadas causas são componentes vitais do engajamento</p>
                  <hr class="primary">
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-6 text-center">
                  <div class="service-box">
                     <h3>João Santos, aluno Fcul</h3>
                     <p class="text-muted">
                        "Chegado a uma fase da vida livre das responsabilidades laborais e com maior disponibilidade de tempo, senti necessidade de abraçar novas tarefas. Tento contrariar alguns confortáveis conceitos pessoais e impor a mim próprio uma filosofia de vida onde continuar a ser útil aos outros é também um dos caminhos de realização pessoal. É aqui que surge uma curiosidade pelo que se vai fazendo em Lisboa no campo do voluntariado."
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="empresa">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <i class="fa fa-4x fa-briefcase wow bounceIn text-primary" data-wow-delay=".1s"></i>
                  <h2 class="section-heading">Instituição</h2>
                  <p class="motivacao">Uma resposta necessária mas provisória, porque "toda a pessoa tem direito a um nível de vida suficiente que lhe assegure e à sua família, a saúde e o bem-estar, principalmente quanto à alimentação, ao vestuário, ao alojamento, à assistência médica e ainda aos serviços sociais necessários</p>
                  <hr class="primary">
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-6 text-center">
                  <div class="service-box">
                     <h3>Banco Alimentar </h3>
                     <p class="text-muted">
                        "Os Bancos Alimentares são uma emanação da sociedade civil e devem ser por ela, alimentados com trabalho voluntário, produtos e fundos. Não se pretende uma caridade condescendente: a resposta dos dadores deve ser um gesto consciente, uma opção de cidadania que vai contribuir para criar mais justiça e mais equidade."
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-primary" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-lg-offset-2 text-center">
                  <h2 class="section-heading">Fale Connosco!</h2>
                  <hr class="primary">
                  <p>
                     Somos uma equipa Agile, pronta para qualquer desafio!
                  </p>
                  <a href="https://pt.linkedin.com/in/nuno-vieira-a22b39b5/en" target="_blank"> <img src="<?php echo base_url('assets/nuno.jpg'); ?>" alt="nuno" style="width:150px;height:150px;border-radius:50%;margin-top: 50px;margin-bottom: 50px;margin-right: 25px;"> </a>
                  <a href="https://pt.linkedin.com/in/ricardo-vallejo-75988893" target="_blank"> <img src="<?php echo base_url('assets/user-icon.jpg'); ?>" alt="vallejo" style="width:150px;height:150px;border-radius: 50%;margin-top: 50px;margin-bottom: 50px;margin-right: 25px;"> </a>
                  <a href="https://www.dcarou.com" target="_blank"> <img src="<?php echo base_url('assets/diogo.png'); ?>" alt="diogo" style="width:150px;height:150px;border-radius: 50%; margin-top: 50px;margin-bottom: 50px;margin-right: 25px;"> </a>
                  <a href="gramaca.jpg" target="_blank"> <img src="<?php echo base_url('assets/user-icon.jpg'); ?>" alt="gramaca" style="width:150px;height:150px;border-radius: 50%; margin-top: 50px;margin-bottom: 50px;margin-right: 25px;"> </a>
               </div>
               <div class="col-lg-4 col-lg-offset-2 text-center">
                  <i class="fa fa-phone fa-3x wow bounceIn"></i>
                  <p>
                     123-456-6789
                  </p>
               </div>
               <div class="col-lg-4 text-center">
                  <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                  <p>
                     <a href="mailto:your-email@your-domain.com">volunteer@fc.ul.pt</a>
                  </p>
               </div>
            </div>
            <div class="col-lg-12 text-center">
               <i class="fa fa-file-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
               <p>
                  <a href=" ">Termos e Condições</a>
               </p>
            </div>
         </div>
      </section>
      <!-- jQuery -->
      <script src="<?php echo base_url('assets/jquery.js'); ?>"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="<?php echo base_url('assets/bootstrap.min.js'); ?>"></script>
      <!-- Plugin JavaScript -->
      <script src="<?php echo base_url('assets/jquery.easing.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/jquery.fittext.js'); ?>"></script>
      <script src="<?php echo base_url('assets/wow.min.js'); ?>"></script>
      <!-- Custom Theme JavaScript -->
      <script src="<?php echo base_url('assets/creative.js'); ?>"></script>
      <script>
         function show(shown, hidden) {
         	document.getElementById(shown).style.display = 'block';
         	document.getElementById(hidden).style.display = 'none';
         	return false;
         }
         
         function bindButtons() {
         	var buttons = $('#buttons button').on('click', function(e) {
         
         		var $this = $(this).removeClass('default').addClass('selected'),
         		    el = buttons.not(this).removeClass('selected').addClass('default'),
         		    isYes = $this.is('#yes');
         
         	});
         }
         
         bindButtons();
      </script>
   </body>
</html>