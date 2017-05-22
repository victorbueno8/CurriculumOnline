<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>Curriculum Online</title>

		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/addFileButton.css">
	</head>
	<body>
		<?php include "src/view/navbar.php"; ?>


		<div class="container">
			<div class="page-header">
				<h1>Curriculum Online</h1>
			</div>


			<div class="col-lg-12"><h4>Dados Pessoais</h4>
			<br></div>

			<form class="form-horizontal" method="POST" action="src/control/cadastrar_candidato.php" enctype="multipart/form-data">
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
					<div class="input-group input-group-md"><span class="input-group-addon">Nome Completo</span><input type="text" name="nomeCompleto" class="form-control"></div><br>
				</div>
				<div class="col-sm-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Idade</span><input type="text" name="idade" class="form-control"></div><br>
				</div>
				<div class="col-sm-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Sexo</span>
						<select name="sexo" class="form-control">
							<option value="" selected="selected"></option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select>
					</div><br>
				</div>
				<div class="col-sm-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Estado Civil</span><input type="text" name="estadoCivil" class="form-control"></div><br>
				</div>
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Nacionalidade</span><input type="text" name="nacionalidade" class="form-control"></div><br>
				</div>
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Objetivo (area de interesse)</span><input type="text" name="objetivo" class="form-control"></div><br>
				</div>
			</div>

			<div class="row col-lg-12">
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Endereço</span><input type="text" name="endereco" class="form-control"></div><br>
				</div>
				<div class="col-sm-9">
					<div class="input-group input-group-md"><span class="input-group-addon">Cidade</span><input type="text" name="cidade" class="form-control"></div><br>
				</div>
				<div class="col-sm-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Estado</span><input type="text" name="estado" class="form-control"></div><br>
				</div>
				<div class="col-xs-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Telefone</span><input type="text" name="telefone" class="form-control"></div><br>
				</div>
			</div>

<!------------------------------------------------------------------------------------------------>				<div class="col-lg-12"><hr>

			<h4>Formação Acadêmica</h4>
			<br></div>
			<div>
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="curso1" class="form-control"></div><br>
				</div>
				<div class="col-lg-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Instituição</span><input type="text" name="instituicao1" class="form-control"></div><br>
				</div>
				<div class="col-lg-4">
					<div class="input-group input-group-md">
					<select name="status1" class="input-group-addon form-control">
						<option value=""></option>
						<option value="concluido">Concluído em:</option>
						<option value="cursando">Previsão de concluír:</option>
					</select>
					<span class="input-group-btn" style="width:0px;"></span>
					<input type="text" name="conclusao1" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#new2').css('display','block');$(this).remove();">
				</div>
			</div>


			<div id="new2" style="display: none">
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="curso2" class="form-control"></div><br>
				</div>
				<div class="col-lg-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Instituição</span><input type="text" name="instituicao2" class="form-control"></div><br>
				</div>
				<div class="col-lg-4">
					<div class="input-group input-group-md">
					<select name="status2" class="input-group-addon form-control">
						<option value=""></option>
						<option value="concluido">Concluído em:</option>
						<option value="cursando">Previsão de concluír:</option>
					</select>
					<span class="input-group-btn" style="width:0px;"></span>
					<input type="text" name="conclusao2" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#new3').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="new3" style="display: none">
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="curso3" class="form-control"></div><br>
				</div>
				<div class="col-lg-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Instituição</span><input type="text" name="instituicao3" class="form-control"></div><br>
				</div>
				<div class="col-lg-4">
					<div class="input-group input-group-md">
					<select name="status3" class="input-group-addon form-control">
						<option value=""></option>
						<option value="concluido">Concluído em:</option>
						<option value="cursando">Previsão de concluír:</option>
					</select>
					<span class="input-group-btn" style="width:0px;"></span>
					<input type="text" name="conclusao3" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#new4').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="new4" style="display: none">
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="curso4" class="form-control"></div><br>
				</div>
				<div class="col-lg-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Instituição</span><input type="text" name="instituicao4" class="form-control"></div><br>
				</div>
				<div class="col-lg-4">
					<div class="input-group input-group-md">
					<select name="status4" class="input-group-addon form-control">
						<option value=""></option>
						<option value="concluido">Concluído em:</option>
						<option value="cursando">Previsão de concluír:</option>
					</select>
					<span class="input-group-btn" style="width:0px;"></span>
					<input type="text" name="conclusao4" class="form-control"></div><br>
				</div>
			</div>


<!------------------------------------------------------------------------------------------------>				<div class="col-lg-12"><hr>

			<h4>Experiência</h4>
			<br></div>
			<div>
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Empresa</span><input type="text" name="empresa1" class="form-control"></div><br>
				</div>
				<div class="col-lg-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Cargo</span><input type="text" name="cargo1" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Entrada</span><input type="text" name="entrada1" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Saída</span><input type="text" name="saida1" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" class="btn btn-primary" value="Adicionar outra experiência" onclick="$('#exp2').css('display','block');$(this).remove();">
				</div>
			</div>


			<div id="exp2" style="display: none;">
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Empresa</span><input type="text" name="empresa2" class="form-control"></div><br>
				</div>
				<div class="col-lg-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Cargo</span><input type="text" name="cargo2" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Entrada</span><input type="text" name="entrada2" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Saída</span><input type="text" name="saida2" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" class="btn btn-primary" value="Adicionar outra experiência" onclick="$('#exp3').css('display','block');$(this).remove();">
				</div>
			</div>


			<div id="exp3" style="display: none;">
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Empresa</span><input type="text" name="empresa3" class="form-control"></div><br>
				</div>
				<div class="col-lg-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Cargo</span><input type="text" name="cargo3" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Entrada</span><input type="text" name="entrada3" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Saída</span><input type="text" name="saida3" class="form-control"></div><br>
				</div>
				<div class="col-lg-12">
					<input type="button" class="btn btn-primary" value="Adicionar outra experiência" onclick="$('#exp4').css('display','block');$(this).remove();">
				</div>
			</div>


			<div id="exp4" style="display: none;">
				<div class="col-lg-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Empresa</span><input type="text" name="empresa4" class="form-control"></div><br>
				</div>
				<div class="col-lg-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Cargo</span><input type="text" name="cargo4" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Entrada</span><input type="text" name="entrada4" class="form-control"></div><br>
				</div>
				<div class="col-lg-3">
					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Saída</span><input type="text" name="saida4" class="form-control"></div><br>
				</div>
			</div>

<!------------------------------------------------------------------------------------------------>				<div class="col-lg-12"><hr>

			<h4>Idiomas</h4>
			<br></div>
			<div>
				<div class="col-md-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Idioma</span><input type="text" name="idioma1" class="form-control"></div><br>
				</div>
				<div class="col-md-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Nível</span><input type="text" name="nivel1" class="form-control"></div><br>
				</div>
				<div class="col-md-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outra língua" onclick="$('#lang2').css('display','block');$(this).remove();">
				</div>
			</div>


			<div id="lang2" style="display: none">
				<div class="col-md-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Idioma</span><input type="text" name="idioma2" class="form-control"></div><br>
				</div>
				<div class="col-md-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Nível</span><input type="text" name="nivel2" class="form-control"></div><br>
				</div>
				<div class="col-md-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outra língua" onclick="$('#lang3').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="lang3" style="display: none">
				<div class="col-md-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Idioma</span><input type="text" name="idioma3" class="form-control"></div><br>
				</div>
				<div class="col-md-6">
					<div class="input-group input-group-md"><span class="input-group-addon">Nível</span><input type="text" name="nivel3" class="form-control"></div><br>
				</div>
			</div>

<!------------------------------------------------------------------------------------------------>
<div class="col-lg-12"><hr>
			<h4>Cursos Complementares</h4>
			<br></div>

			<div>
				<div class="col-md-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocompl1" class="form-control"></div><br>
				</div>
				<div class="col-md-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascompl1" class="form-control"></div><br>
				</div>
				<div class="col-md-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#extra2').css('display','block');$(this).remove();">
				</div>
			</div>


			<div id="extra2" style="display: none">
				<div class="col-md-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocompl2" class="form-control"></div><br>
				</div>
				<div class="col-md-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascompl2" class="form-control"></div><br>
				</div>
				<div class="col-md-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#extra3').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="extra3" style="display: none">
				<div class="col-md-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocompl3" class="form-control"></div><br>
				</div>
				<div class="col-md-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascompl3" class="form-control"></div><br>
				</div>
				<div class="col-md-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#extra4').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="extra4" style="display: none">
				<div class="col-md-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocompl4" class="form-control"></div><br>
				</div>
				<div class="col-md-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascompl4" class="form-control"></div><br>
				</div>
				<div class="col-md-12">
					<input type="button" href="javascript:void(0)" class="btn btn-primary" value="Adicionar outro curso" onclick="$('#extra5').css('display','block');$(this).remove();">
				</div>
			</div>

			<div id="extra5" style="display: none">
				<div class="col-md-8">
					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocompl5" class="form-control"></div><br>
				</div>
				<div class="col-md-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascompl5" class="form-control"></div><br>
				</div>
			</div>

<!------------------------------------------------------------------------------------------------>				<div class="col-lg-12"><hr></div>

			<div class="col-md-12">
					<div class="input-group input-group-md"><span class="input-group-addon">Informações Adicionais</span><textarea name="info_adicional" class="form-control"></textarea></div>
			</div>
<!------------------------------------------------------------------------------------------------>				<div class="col-lg-12"><hr></div>

			<div class="col-xs-12">
				<input type="submit" name="submit" class="btn btn-lg btn-default col-xs-12" role="button">
			</div>
			</form>
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
