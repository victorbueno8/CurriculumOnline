<?php
	include_once "src/control/carregar_vagas_empresa.php";
	$vaga = getVaga();
	$currs = getCurriculosVaga($vaga);

?>

  <h1 class="page-header"><?php echo $vaga->getVaga();?></h1>

	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a href="#atualizar" data-toggle="collapse">Atualizar Dados de Vaga</a>
			</h3>
		</div>
  <div id="atualizar" class="panel-body collapse jumbotron" style="margin-bottom:0;">
    <form method="post" action="src/control/atualizar_vaga.php" class="form-horizontal" role="form">
      <div class="input-group input-group-md"><span class="input-group-addon">Numero</span><input type="text" class="form-control" value="<?php echo $vaga->getNumero();?>" disabled></div><br>
			<input type="hidden" name="numero" class="form-control" value="<?php echo $vaga->getNumero();?>">

      <div class="input-group input-group-md"><span class="input-group-addon">Vaga</span><input type="text" name="vaga" class="form-control" value="<?php echo $vaga->getVaga();?>"></div><br>
			<div class="input-group input-group-md"><span class="input-group-addon">Area</span><input type="text" name="area" class="form-control" value="<?php echo $vaga->getArea();?>"></div><br>
      <textarea name="descricao" rows="10" class="form-control" placeholder="Descrição"><?php echo $vaga->getDescricao();?></textarea><br>
      <div class="input-group input-group-md"><span class="input-group-addon">Quantidade</span><input type="number" name="quantidade" class="form-control" value="<?php echo $vaga->getQuantidade();?>"></div><br>
      <div class="input-group input-group-md"><span class="input-group-addon">Salario</span><input type="text" name="salario" class="form-control" value="<?php echo $vaga->getSalario();?>"></div><br>

      <button type="submit" class="btn btn-primary btn-file" name="update">
        <span class="glyphicon glyphicon-pencil"></span> Atualizar Vaga
      </button>
      <button type="submit" class="btn btn-danger btn-file" name="delete">
        <span class="glyphicon glyphicon-trash"></span> Inativar Vaga
      </button>
		</form>
  </div>
</div>
</div>

	<div class="col-md-6">
		<div class="panel panel-primary filterable">
			<div class="panel-heading">
				<h3 class="panel-title">Candidatos em processo</h3>
			</div>
			<div class="table-responsive">
			  <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Nome</th>
			        <th>Email</th>
							<th>Status</th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php foreach($currs as $i => $curr){?>
			      <tr>
			        <td><?php echo $curr->getCandidato_email()->getNomeCompleto();?></td>
			        <td><?php echo $curr->getCandidato_email()->getEmail();?></td>
							<td><?php echo $curr->getStatus();?></td>
			        <td><a href="?content=4&perfil=<?php echo $curr->getCandidato_email()->getEmail();?>&id=<?php echo $curr->getId();?>">Ver Curriculo</a></td>
			      </tr>
			      <?php }?>
			    </tbody>
			  </table>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-primary filterable">
			<div class="panel-heading">
				<h3 class="panel-title">Envio de curriculos</h3>
			</div>
			<div class="table-responsive">
			  <table class="table table-striped">
			    <thead>
			      <tr>
			        <th>Nome</th>
			        <th>Email</th>
							<th>Status</th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php foreach($currs as $i => $curr){?>
			      <tr>
			        <td><?php echo $curr->getCandidato_email()->getNomeCompleto();?></td>
			        <td><?php echo $curr->getCandidato_email()->getEmail();?></td>
							<td><?php echo $curr->getStatus();?></td>
			        <td><a href="?content=4&perfil=<?php echo $curr->getCandidato_email()->getEmail();?>&id=<?php echo $curr->getId();?>">Ver Curriculo</a></td>
			      </tr>
			      <?php }?>
			    </tbody>
			  </table>
			</div>
		</div>
	</div>
