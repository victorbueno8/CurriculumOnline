<link rel="stylesheet" href="css/addFileButton.css">

<div class="page-header">
  <h1>Atualizar Dados</h1>
</div>

<form class="form-horizontal" method="POST" action="src/control/atualizar_empresa.php" enctype="multipart/form-data">

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
    <div class="input-group input-group-md"><span class="input-group-addon">Razão Social</span><input type="text" name="razao_social" class="form-control" value="<?php echo $empresaDados->getRazao_social(); ?>"></div><br>
  </div>
  <div class="col-sm-7">
    <div class="input-group input-group-md"><span class="input-group-addon">Nome Fantasia</span><input type="text" name="nome_fantasia" class="form-control" value="<?php echo $empresaDados->getNome_fantasia(); ?>"></div><br>
  </div>
  <div class="col-sm-5">
    <div class="input-group input-group-md"><span class="input-group-addon">CNPJ</span><input type="text" name="cnpj" class="form-control" value="<?php echo $empresaDados->getCnpj(); ?>"></div><br>
  </div>
  <div class="col-xs-12">
    <div class="input-group input-group-md"><span class="input-group-addon">Responsável</span><input type="text" name="responsavel" class="form-control" value="<?php echo $empresaDados->getResponsavel(); ?>"></div><br>
  </div>
  <div class="col-sm-9">
    <div class="input-group input-group-md"><span class="input-group-addon">Segmento</span><input type="text" name="segmento" class="form-control" value="<?php echo $empresaDados->getSegmento(); ?>"></div><br>
  </div>
  <div class="col-sm-3">
    <div class="input-group input-group-md"><span class="input-group-addon">Porte</span>
      <select name="porte" class="form-control" selected="<?php echo $empresaDados->getPorte(); ?>">
        <option value="MicroEmpresa">Micro</option>
        <option value="Pequena Empresa">Pequena</option>
        <option value="Empresa Média">Média</option>
        <option value="Empresa Grande">Grande</option>
      </select>
    </div><br>
  </div>
  <div class="col-xs-12">
    <div class="input-group input-group-md"><span class="input-group-addon">Atividade</span><input type="text" name="atividade" class="form-control" value="<?php echo $empresaDados->getAtividade(); ?>"></div><br>
  </div>


</div>

<div class="row col-lg-12">
  <div class="col-xs-12">
    <div class="input-group input-group-md"><span class="input-group-addon">Endereço</span><input type="text" name="endereco" class="form-control" value="<?php echo $empresaDados->getEndereco(); ?>"></div><br>
  </div>
  <div class="col-xs-12">
    <div class="input-group input-group-md"><span class="input-group-addon">Bairro</span><input type="text" name="bairro" class="form-control" value="<?php echo $empresaDados->getBairro(); ?>"></div><br>
  </div>
  <div class="col-sm-9">
    <div class="input-group input-group-md"><span class="input-group-addon">Cidade</span><input type="text" name="cidade" class="form-control" value="<?php echo $empresaDados->getCidade(); ?>"></div><br>
  </div>
  <div class="col-sm-3">
    <div class="input-group input-group-md"><span class="input-group-addon">Estado</span><input type="text" name="estado" class="form-control" value="<?php echo $empresaDados->getEstado(); ?>"></div><br>
  </div>
</div>

<!------------------------------------------------------------------------------------------------>
      <div class="col-lg-12"><hr>

      <h4>Contatos</h4>
      <p class="text-danger">*Tipo: telefone/website/redes sociais etc...</p>
      </div>

      <?php foreach($empresaContato as $i => $contato){ ?>
      <div>
        <div class="col-sm-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Tipo</span><input type="text" name="tipo<?php echo $i;?>" class="form-control" value="<?php echo $contato->getTipo();?>"></div><br>
				</div>
				<div class="col-sm-7">
					<div class="input-group input-group-md"><span class="input-group-addon">Contato</span><input type="text" name="contato<?php echo $i;?>" class="form-control" value="<?php echo $contato->getContato();?>"></div><br>
				</div>
        <div class="col-lg-1">
          <button type="submit" name="deleteContact" class="btn btn-danger" value="<?php echo $i;?>"><span class="glyphicon glyphicon-remove"></span></button><br />
        </div>
      </div>
      <?php } ?>
      <div class="newContact">
        <div class="col-sm-4">
					<div class="input-group input-group-md"><span class="input-group-addon">Tipo</span><input type="text" name="tipoNew" class="form-control"></div><br>
				</div>
				<div class="col-sm-7">
					<div class="input-group input-group-md"><span class="input-group-addon">Contato</span><input type="text" name="contatoNew" class="form-control"></div><br>
				</div>
        <div class="col-lg-1">
          <button type="submit" name="addContact" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button><br />
        </div>
      </div>

<div class="col-md-12"><hr />
  <div class="input-group input-group-md"><span class="input-group-addon">Informações Gerais</span><textarea name="info_gerais" class="form-control"><?php echo $empresaDados->getInfo_gerais(); ?></textarea></div>
</div>

<div class="col-lg-12"><hr></div>

<div class="col-xs-12">
	<input type="submit" name="submitUpdate" class="btn btn-lg btn-default col-xs-12" role="button">
</div>
</form>
