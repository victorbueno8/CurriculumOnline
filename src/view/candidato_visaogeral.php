<h1 class="page-header">Bem Vindo <?php echo strtok($dados->getNomeCompleto(), " "); ?>!</h1>

<h4 class="sub-header">Recomendações</h4>
<div class="row placeholders">
  <?php include_once "src/control/carregar_vagas_candidato.php";
  $recomendacoes = getVagasRelacionadas($dados->getObjetivo());
  $i = 0;
  foreach($recomendacoes as $sugest){?>
  <a href="<?php echo 'home.php?content=3&vaga='.$sugest->getNumero(); ?>">
  <div class="col-xs-6 col-sm-3 placeholder">
    <img src="<?php echo $sugest->getEmail()->getAvatarUrl(); ?>" style="width: 200px; height: 190px;" class="img-responsive" alt="Generic placeholder thumbnail">
    <h4><?php echo $sugest->getVaga(); ?></h4>
    <span class="text-muted"><?php echo $sugest->getEmail()->getNome_fantasia(); ?></span>
  </div>
  </a>
  <?php if (++$i == 4) break; } ?>
</div>


<?php $minhasvagas = minhas_vagas($dados->getEmail());?>
<div class="table-responsive">
  <div class="panel panel-primary filterable">
		<div class="panel-heading">
			<h3 class="panel-title">Minhas Vagas</h3>
		</div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Vaga</th>
          <th>Área</th>
          <th>Empresa</th>
          <th>Data</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($minhasvagas as $vaga){?>
        <tr onclick="window.location.href = '?content=3&vaga=<?php echo $vaga->getVaga_numero()->getNumero();?>';" style="cursor: pointer">
          <td><?php echo $vaga->getVaga_numero()->getVaga();?></td>
          <td><?php echo $vaga->getVaga_numero()->getArea();?></td>
          <td><?php echo $vaga->getVaga_empresa()->getNome_fantasia();?></td>
          <td><?php echo $vaga->getData();?></td>
          <td><?php echo $vaga->getStatus();?></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>
