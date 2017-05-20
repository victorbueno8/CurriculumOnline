<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>Curriculum Online</title>

		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>
	<body>
		<?php include "src/view/navbar.php"; ?>

		<div class="container">
			<div class="page-header">
				<h1>Curriculum Online</h1>
			</div>

			<div class="jumbotron">
				<form id="cadastro" method="POST" action="src/control/sessao.php" class="form-signin">
	        <h2 class="form-signin-heading">Entrar no Currículo</h2>

	        <label for="inputEmail" class="sr-only">Email</label>
					<div class="input-group input-group-md" id="inputEmail">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input name="email" type="email" class="form-control" placeholder="Email" required autofocus>
					</div><br>

	        <label for="inputPassword" class="sr-only">Senha</label>
					<div class="input-group input-group-md" id="inputPassword">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input name="senha" type="password" class="form-control" placeholder="Password" required>
					</div><br>

	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me"> Lembrar-me
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button><br>
	      </form>
				<a href="cadastro_conta.php"><label>Ainda não cadastrado?</label></a>
			</div>

		</div>

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>
