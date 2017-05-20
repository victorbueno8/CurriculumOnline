<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>Curriculum Online</title>

		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style>
			.jumbotron{
				width: 500px;
				text-align: center;
				margin-left: auto;
				margin-right: auto;
			}

			.radio{
				text-align: left;
			}
		</style>
	</head>
	<body>
		<?php include "src/view/navbar.php";?>


		<div class="container">
			<div class="page-header">
				<h1>Curriculum Online</h1>
			</div>

			<h4>Nova Conta</h4>
			<br>

			<div class="jumbotron">
				<form id="cadastro" method="POST" action="src/control/cadastro_conta_verify.php">
					<div class="input-group input-group-md"><span class="input-group-addon">E-Mail</span><input type="text" name="email" class="form-control"></div><br>
					<div class="input-group input-group-md"><span class="input-group-addon">Senha</span><input type="password" name="senha" class="form-control"></div><br>
					<div class="input-group input-group-md"><span class="input-group-addon">Confirmar Senha</span><input type="password" name="confirm" class="form-control"></div><br>

					<div class="radio">
			      <label><input type="radio" name="perfil" value="candidato">Candidato</label>
					</div>
					<div class="radio">
			      <label><input type="radio" name="perfil" value="empresa">Empresa</label>
			    </div>

					<input type="submit" id="confirm" value="Confirma" class="btn btn-primary btn-block">
				</form>
			</div>
			<div id="alert-placeholder"></div>
		</div>

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script>
		bootstrap_alert = function() {}
		bootstrap_alert.warning = function(message) {
		  $('#alert-placeholder').html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span><strong>'+message+'</strong></span></div>')
		 }
		 <?php
		 	if(isset($_GET['resp'])){
				$message = $_GET['resp'];
				if($message == "incomplete") echo "bootstrap_alert.warning('Preencha todos os campos!');";
				else if($message == "invalid")	echo "bootstrap_alert.warning('Senha de confirmação inválida!');";
		 	}
		 ?>
		</script>
	</body>
</html>
