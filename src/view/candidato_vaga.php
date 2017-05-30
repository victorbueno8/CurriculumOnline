<?php
//access ?content=3&vaga=
	include_once "src/control/carregar_vagas_candidato.php";
	$vaga = Vaga($_GET['vaga']);
  $empresa = $vaga->getEmail();
?>

  <h1 class="page-header"><?php echo $vaga->getVaga();?></h1>

  <div class="jumbotron">
    <div class="col-lg-3">
      <a class="thumbnail" style="width: 200px; height: 200px;">
        <img src="<?php echo $empresa->getAvatarUrl(); ?>" style="width: 200px; height: 190px;">
      </a>
    </div>
    <h3><?php echo $empresa->getNome_fantasia();?></h3>
    <?php echo $empresa->getRazao_social();?>, <?php echo $empresa->getSegmento();?><br />
    <?php echo $empresa->getAtividade();?><br />
    CNPJ: <?php echo $empresa->getCnpj();?><br>
    <?php echo $empresa->getEndereco();?>, <?php echo $empresa->getBairro();?><br>
    <?php echo $empresa->getCidade();?>, <?php echo $empresa->getEstado();?><br />
    Email: <?php echo $empresa->getEmail();?><br />
    <div class="col-lg-offset-9">
      <a href="src/control/ingressar_candidato.php?vaga=<?php echo $vaga->getNumero();?>&empresa=<?php echo $empresa->getEmail();?>">
				<?php if(!verificar_minha_vaga($vaga->getNumero(),$_SESSION['email'])){?>
					<button class="btn btn-primary">
        		<span class="glyphicon glyphicon-send"></span> Enviar Currículo
      		</button>
				<?php } else { ?>
					<button class="btn btn-default">
	        	Enviado
	      	</button>
				<?php } ?>
			</a>
    </div>
  </div>

  <div class=" col-lg-12"><div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#objContent" data-toggle="collapse">Detalhes da Vaga</a>
      </h4>
    </div>
    <div id="objContent" class="panel-body collapse in">
      Nro: <?php echo $vaga->getNumero();?><br />
      Nome da Vaga: <?php echo $vaga->getVaga();?><br />
      Área de Atuação: <?php echo $vaga->getArea();?><br />
      Descrição: <?php echo $vaga->getDescricao();?><br />
      Quantidade de Vagas: <?php echo $vaga->getQuantidade();?><br />
      Salário Inicial: <?php echo $vaga->getSalario();?><br />
    </div>
  </div></div>

<!-- Modal -->
<div id="modalSuccess" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sucesso</h4>
      </div>
      <div class="modal-body">
        <p>Currículo enviado com sucesso!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>
