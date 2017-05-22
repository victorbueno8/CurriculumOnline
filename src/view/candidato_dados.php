<link rel="stylesheet" href="css/addFileButton.css">

<div class="page-header">
  <h1>Atualizar Dados</h1>
</div>

<form class="form-horizontal" method="POST" action="src/control/atualizar_candidato.php" enctype="multipart/form-data">

  <div class="col-lg-3">
    <div class="thumbnail" style="width: 200px; height: 200px;">
      <img id="foto" src="<?php echo $avatar; ?>" style="width: 200px; height: 190px;">
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
      <div class="input-group input-group-md"><span class="input-group-addon">Nome Completo</span><input type="text" name="nomeCompleto" class="form-control" value="<?php echo $dados->getNomeCompleto();?>"></div><br>
    </div>
    <div class="col-sm-3">
      <div class="input-group input-group-md"><span class="input-group-addon">Idade</span><input type="text" name="idade" class="form-control" value="<?php echo $dados->getIdade();?>"></div><br>
    </div>
    <div class="col-sm-3">
      <div class="input-group input-group-md"><span class="input-group-addon">Sexo</span>
        <select name="sexo" class="form-control">
          <option value="Masculino" <?php if($dados->getSexo()=="Masculino") echo "selected";?>>Masculino</option>
          <option value="Feminino" <?php if($dados->getSexo()=="Feminino") echo "selected";?>>Feminino</option>
        </select>
      </div><br>
    </div>
    <div class="col-sm-6">
      <div class="input-group input-group-md"><span class="input-group-addon">Estado Civil</span><input type="text" name="estadoCivil" class="form-control" value="<?php echo $dados->getEstadoCivil();?>"></div><br>
    </div>
    <div class="col-xs-12">
      <div class="input-group input-group-md"><span class="input-group-addon">Nacionalidade</span><input type="text" name="nacionalidade" class="form-control" value="<?php echo $dados->getNacionalidade();?>"></div><br>
    </div>
    <div class="col-xs-12">
      <div class="input-group input-group-md"><span class="input-group-addon">Objetivo (area de interesse)</span><input type="text" name="objetivo" class="form-control" value="<?php echo $dados->getObjetivo();?>"></div><br>
    </div>
  </div>

  <div class="row col-lg-12">
    <div class="col-xs-12">
      <div class="input-group input-group-md"><span class="input-group-addon">Endereço</span><input type="text" name="endereco" class="form-control" value="<?php echo $dados->getEndereco();?>"></div><br>
    </div>
    <div class="col-sm-9">
      <div class="input-group input-group-md"><span class="input-group-addon">Cidade</span><input type="text" name="cidade" class="form-control" value="<?php echo $dados->getCidade();?>"></div><br>
    </div>
    <div class="col-sm-3">
      <div class="input-group input-group-md"><span class="input-group-addon">Estado</span><input type="text" name="estado" class="form-control" value="<?php echo $dados->getEstado();?>"></div><br>
    </div>
    <div class="col-xs-12">
      <div class="input-group input-group-md"><span class="input-group-addon">Telefone</span><input type="text" name="telefone" class="form-control" value="<?php echo $dados->getTelefone();?>"></div><br>
    </div>
  </div>

  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr></div>

  			<div class="col-md-12">
  					<div class="input-group input-group-md"><span class="input-group-addon">Informações Adicionais</span><textarea name="info_adicional" class="form-control"><?php echo $dados->getInfo_adicional();?></textarea></div>
  			</div><br />
  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12">

  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr></div>

  			<h4>Formação Acadêmica</h4>
  			<br></div>
        <?php foreach($formacoes as $i => $formacao){?>
  			<div>
  				<div class="col-lg-12">
  					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="curso<?php echo $i;?>" class="form-control" value="<?php echo $formacao->getCurso();?>"></div><br>
  				</div>
  				<div class="col-lg-8">
  					<div class="input-group input-group-md"><span class="input-group-addon">Instituição</span><input type="text" name="instituicao<?php echo $i;?>" class="form-control" value="<?php echo $formacao->getInstituicao();?>"></div><br>
  				</div>
  				<div class="col-lg-4">
  					<div class="input-group input-group-md">
  					<select name="status<?php echo $i;?>" class="input-group-addon form-control">
  						<option value=""></option>
  						<option value="concluido" <?php if($formacao->getStatus()=="concluido") echo "selected";?>>Concluído em:</option>
  						<option value="cursando" <?php if($formacao->getStatus()=="cursando") echo "selected";?>>Previsão de concluír:</option>
  					</select>
  					<span class="input-group-btn" style="width:0px;"></span>
  					<input type="text" name="conclusao<?php echo $i;?>" class="form-control" value="<?php echo $formacao->getConclusao();?>"></div><br>
  				</div>
  			</div>
        <?php } ?>

        <div class="newFormation">
  				<div class="col-lg-12">
  					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursoNew" class="form-control"></div><br>
  				</div>
  				<div class="col-lg-7">
  					<div class="input-group input-group-md"><span class="input-group-addon">Instituição</span><input type="text" name="instituicaoNew" class="form-control"></div><br>
  				</div>
  				<div class="col-lg-4">
  					<div class="input-group input-group-md">
  					<select name="statusNew" class="input-group-addon form-control">
  						<option value=""></option>
  						<option value="concluido">Concluído em:</option>
  						<option value="cursando">Previsão de concluír:</option>
  					</select>
  					<span class="input-group-btn" style="width:0px;"></span>
  					<input type="text" name="conclusaoNew" class="form-control"></div><br>
  				</div>
          <div class="col-lg-1">
            <button type="submit" name="addFormation" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button><br />
          </div>
  			</div>
  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr>

  			<h4>Experiência</h4>
  			<br></div>
        <?php foreach($experiencias as $i => $experiencia){?>
  			<div>
  				<div class="col-lg-12">
  					<div class="input-group input-group-md"><span class="input-group-addon">Empresa</span><input type="text" name="empresa<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getEmpresa();?>"></div><br>
  				</div>
  				<div class="col-lg-6">
  					<div class="input-group input-group-md"><span class="input-group-addon">Cargo</span><input type="text" name="cargo<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getCargo();?>"></div><br>
  				</div>
  				<div class="col-lg-3">
  					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Entrada</span><input type="text" name="entrada<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getEntrada();?>"></div><br>
  				</div>
  				<div class="col-lg-3">
  					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Saída</span><input type="text" name="saida<?php echo $i;?>" class="form-control" value="<?php echo $experiencia->getSaida();?>"></div><br>
  				</div>
  			</div>
        <?php } ?>

        <div class="newExperiencia">
  				<div class="col-lg-12">
  					<div class="input-group input-group-md"><span class="input-group-addon">Empresa</span><input type="text" name="empresaNew" class="form-control"></div><br>
  				</div>
  				<div class="col-lg-5">
  					<div class="input-group input-group-md"><span class="input-group-addon">Cargo</span><input type="text" name="cargoNew" class="form-control"></div><br>
  				</div>
  				<div class="col-lg-3">
  					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Entrada</span><input type="text" name="entradaNew" class="form-control"></div><br>
  				</div>
  				<div class="col-lg-3">
  					<div class="input-group input-group-md"><span class="input-group-addon">Ano de Saída</span><input type="text" name="saidaNew" class="form-control"></div><br>
  				</div>
          <div class="col-lg-1">
            <button type="submit" name="addExperiencia" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button><br />
          </div>
  			</div>

  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr>

  			<h4>Idiomas</h4>
  			<br></div>
        <?php foreach($idiomas as $i => $idioma){?>
  			<div>
  				<div class="col-md-6">
  					<div class="input-group input-group-md"><span class="input-group-addon">Idioma</span><input type="text" name="idioma<?php echo $i;?>" class="form-control" value="<?php echo $idioma->getIdioma();?>"></div><br>
  				</div>
  				<div class="col-md-6">
  					<div class="input-group input-group-md"><span class="input-group-addon">Nível</span><input type="text" name="nivel<?php echo $i;?>" class="form-control" value="<?php echo $idioma->getNivel();?>"></div><br>
  				</div>
  			</div>
        <?php } ?>

        <div class="newIdioma">
  				<div class="col-md-6">
  					<div class="input-group input-group-md"><span class="input-group-addon">Idioma</span><input type="text" name="idiomaNew" class="form-control"></div><br>
  				</div>
  				<div class="col-md-5">
  					<div class="input-group input-group-md"><span class="input-group-addon">Nível</span><input type="text" name="nivelNew" class="form-control"></div><br>
  				</div>
          <div class="col-lg-1">
            <button type="submit" name="addIdioma" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button><br />
          </div>
  			</div>

  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr>
  			<h4>Cursos Complementares</h4>
  			<br></div>
        <?php foreach($cursoscompl as $i => $compl){?>
  			<div>
  				<div class="col-md-8">
  					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocompl<?php echo $i;?>" class="form-control" value="<?php echo $compl->getCursocompl();?>"></div><br>
  				</div>
  				<div class="col-md-4">
  					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascompl<?php echo $i;?>" class="form-control" value="<?php echo $compl->getHorascompl();?>"></div><br>
  				</div>
  			</div>
        <?php }?>

        <div class="newCursocompl">
  				<div class="col-md-8">
  					<div class="input-group input-group-md"><span class="input-group-addon">Curso</span><input type="text" name="cursocomplNew" class="form-control"></div><br>
  				</div>
  				<div class="col-md-3">
  					<div class="input-group input-group-md"><span class="input-group-addon">Horas</span><input type="text" name="horascomplNew" class="form-control"></div><br>
  				</div>
          <div class="col-lg-1">
            <button type="submit" name="addCursocompl" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button><br />
          </div>
  			</div>


  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><br></div>

<div class="col-xs-12">
	<input type="submit" name="submitDados" class="btn btn-lg btn-primary col-xs-12" role="button" value="Atualizar">
</div>
</form>
