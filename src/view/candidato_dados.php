<link rel="stylesheet" href="css/addFileButton.css">

<div class="page-header">
  <h1>Atualizar Dados</h1>
</div>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Dados Pesoais</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?content=4">Formações</a>
  </li>

</ul>
<br />
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
  			</div>
  <!------------------------------------------------------------------------------------------------>
  <div class="col-lg-12"><hr></div>

<div class="col-xs-12">
	<input type="submit" name="submitDados" class="btn btn-lg btn-default col-xs-12" role="button">
</div>
</form>
