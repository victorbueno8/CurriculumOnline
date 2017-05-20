<!DOCTYPE html>
<html>
<head>
<?php
//	include("src//curriculos.php");
	// esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
	session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['password']) || $_SESSION['perfil'] != "candidato"){
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		unset($_SESSION['perfil']);
		header('location:index.php?resp=sessionexpired');
	}

	$logado = $_SESSION['email'];

	 include("src/control/curriculos.php");
?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $dados->getNomeCompleto();?></title>

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="icon" href="images/logo-dark.png">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="pull-left navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="30" height="30"> Curriculum Online</a>
	    </div>

	  </div><!-- /.container-fluid -->
	</nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" id="sidebar">
					<div class="sidebar-user-info">
						<img id="avatar" src="<?php echo $avatar; ?>" style="width: 200px; height: 190px;" class="img-responsive">
						<h4><?php echo $dados->getNomeCompleto();?></h4>
					</div><br>
          <ul class="nav nav-sidebar">
						<li></li>
						<li<?php if(!isset($_GET['content']) || $_GET['content']=="1"){ echo " class=\"active\""; } ?>>
							<a href="?content=1">Visão Geral </a>
						</li>
            <li<?php if(isset($_GET['content']) && $_GET['content']=="2"){ echo " class=\"active\""; } ?>>
							<a href="?content=2">Meus Dados Pessoais</a>
						</li>
            <li<?php if(isset($_GET['content']) && $_GET['content']=="3"){ echo " class=\"active\""; } ?>>
							<a href="?content=3">Procurar Vagas</a>
						</li>
            <li><a href="src/control/logout.php">Sair</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<?php
					if(isset($_GET['content'])){
						switch($_GET['content']){
						case 1: include 'src/view/candidato_visaogeral.php'; break;
						case 2: include 'src/view/candidato_dados.php'; break;
						case 3: if(isset($_GET['vaga'])){include 'src/view/candidato_vaga.php';} else{include 'src/view/candidato_pesquisa.php';} break;
						case 4: include 'src/view/candidato_formacoes.php'; break;
						//case 3.1: include 'src/view/vaga.php'; break;
						}
					}else{
						include 'src/view/candidato_visaogeral.php';
					}
					?>
				</div>

      </div>
    </div>

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="js/thumbnail.js"></script>
</body>
</html>
