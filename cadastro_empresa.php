<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>Curriculum Online</title>

		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/addFileButton.css">
		<link rel="icon" href="images/logo-dark.png">
	</head>
	<body>
		<?php include "src/view/navbar.php"; ?>


		<div class="container">
			<div class="page-header">
				<h1>Curriculum Online</h1>
			</div>


			<div class="col-lg-12"><h4>Dados da Empresa</h4>
			<br></div>

			<form class="form-horizontal" method="POST" action="src/control/cadastrar_empresa.php" enctype="multipart/form-data">

			<input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
			<input type="hidden" name="senha" value="<?php echo $_POST['senha'];?>">
			<input type="hidden" name="perfil" value="<?php echo $_POST['perfil'];?>">

			<div class="col-lg-3">
				<div class="thumbnail" style="width: 200px; height: 200px;">
					<img id="foto" src="images/avatar_placeholder.png">
				</div>
				<div class="col-lg-12">
					<label class="btn btn-default btn-file">
					Selecionar foto <input type="file" name="foto" id="addfoto" accept="image/*">
					</label>
				</div>
				<div class="col-lg-12"><br></div>
			</div>

			<div class="row col-lg-9">
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Razão Social</span><input type="text" name="razao_social" class="form-control"></div><br>
				</div>
				<div class="col-sm-7">
					<div class="input-group input-group-md"><span class="input-group-addon">Nome Fantasia</span><input type="text" name="nome_fantasia" class="form-control"></div><br>
				</div>
        <div class="col-sm-5">
					<div class="input-group input-group-md"><span class="input-group-addon">CNPJ</span><input type="text" name="cnpj" class="form-control"></div><br>
				</div>
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Responsável</span><input type="text" name="responsavel" class="form-control"></div><br>
				</div>
        <div class="col-sm-9">
					<div class="input-group input-group-md"><span class="input-group-addon">Segmento</span><input type="text" name="segmento" class="form-control"></div><br>
				</div>
        <div class="col-sm-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Porte</span>
						<select name="porte" class="form-control">
							<option value="" selected="selected"></option>
							<option value="MicroEmpresa">Micro</option>
							<option value="Pequena Empresa">Pequena</option>
              <option value="Empresa Média">Média</option>
							<option value="Empresa Grande">Grande</option>
						</select>
					</div><br>
				</div>
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Atividade</span><input type="text" name="atividade" class="form-control"></div><br>
				</div>


			</div>

			<div class="row col-lg-12">
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Endereço</span><input type="text" name="endereco" class="form-control"></div><br>
				</div>
        <div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Bairro</span><input type="text" name="bairro" class="form-control"></div><br>
				</div>
				<div class="col-sm-9">
					<div class="input-group input-group-md"><span class="input-group-addon">Cidade</span><input type="text" name="cidade" class="form-control"></div><br>
				</div>
				<div class="col-sm-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Estado</span><input type="text" name="estado" class="form-control"></div><br>
				</div>
			</div>

      <div class="col-lg-12"><hr></div>

      <div class="col-md-12">
      	<div class="input-group input-group-md"><span class="input-group-addon">Informações Gerais</span><textarea name="info_gerais" class="form-control"></textarea></div>
      </div>

<!------------------------------------------------------------------------------------------------>
      <div class="col-lg-12"><hr>

      <h4>Contatos</h4>
      <p class="text-danger">*Tipo: telefone/website/redes sociais etc...</p>
      </div>

        <div class="col-sm-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Tipo</span><input type="text" name="tipo1" class="form-control"></div><br>
				</div>
				<div class="col-sm-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Contato</span><input type="text" name="contato1" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro contato" onclick="$('#new2').css('display','block');$(this).remove();">
				</div>


			<div id="new2" style="display: none">
        <div class="col-sm-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Tipo</span><input type="text" name="tipo2" class="form-control"></div><br>
				</div>
				<div class="col-sm-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Contato</span><input type="text" name="contato2" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro contato" onclick="$('#new3').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="new3" style="display: none">
        <div class="col-sm-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Tipo</span><input type="text" name="tipo3" class="form-control"></div><br>
				</div>
				<div class="col-sm-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Contato</span><input type="text" name="contato3" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro contato" onclick="$('#new4').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="new4" style="display: none">
        <div class="col-sm-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Tipo</span><input type="text" name="tipo4" class="form-control"></div><br>
				</div>
				<div class="col-sm-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Contato</span><input type="text" name="contato4" class="form-control"></div><br>
				</div>
			</div>



<!------------------------------------------------------------------------------------------------>
    <div class="col-lg-12"><hr></div>

			<div class="col-xs-12">
				<input type="submit" name="submit" class="btn btn-lg btn-default col-xs-12" role="button">
			</div>
			</form>
		</div>
  </div>

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#addfoto").change(function(){
				var reader = new FileReader();
				reader.onload = function(e) {
					$("#foto").attr('style', "width: 200px; height: 190px;");
					$("#foto").attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			});

		});
		</script>
	</body>
</html>
