<?php
	include_once "src/control/carregar_vagas_empresa.php";
	$vagas = minhasVagas();
?>

  <h1 class="page-header">Minhas Vagas </h1>

  <button href="#" class="btn btn-success btn-file" data-toggle="modal" data-target="#myModal">
    <span class="glyphicon glyphicon-plus"></span> Nova Vaga
  </button><br />

	<hr />

  <?php foreach($vagas as $vaga){?>
    <a  href="?content=3&vaga=<?php echo $vaga->getNumero();?>" class="list-group-item">
      <h4 class="list-group-item-heading"><?php echo $vaga->getVaga();?></h4>
      <p class="list-group-item-text"><?php echo $vaga->getArea();?></p>
    </a>
  <?php } ?>


    <div class="modal fade" id="myModal" aria-hidden="false" role="dialog" tabindex="-1">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Criar Nova Vaga</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="src/control/criar_vagas.php" class="form-horizontal" role="form">
            <label id="idvaga"></label><br>
            <div class="input-group input-group-md"><span class="input-group-addon">Vaga</span><input type="text" name="vaga" class="form-control"></div><br>
						<div class="input-group input-group-md"><span class="input-group-addon">Área</span><input type="text" name="area" class="form-control"></div><br>
            <textarea name="descricao" rows="10" class="form-control" placeholder="Descrição"></textarea><br>
            <div class="input-group input-group-md"><span class="input-group-addon">Quantidade</span><input type="number" name="quantidade" class="form-control"></div><br>
            <div class="input-group input-group-md"><span class="input-group-addon">Salario</span><input type="text" name="salario" class="form-control"></div><br>

        </div>
        <div class="modal-footer">
            <input type="submit" name="submit" class="btn btn-success" value="Criar Vaga">
          </form>
          <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>

    </div>
    </div>
