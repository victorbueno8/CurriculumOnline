<h1 class="page-header"><?php echo $empresaDados->getNome_fantasia(); ?> Visão Geral</h1>

<?php include "src/control/carregar_vagas_empresa.php";
$vagas = curriculosEnviados($empresaDados->getEmail());
?>

<div class="col-md-12">
	<div class="panel panel-primary filterable">
		<div class="panel-heading">
			<h3 class="panel-title">Envio de curriculos</h3>
		</div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Vaga</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Objetivo</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($vagas as $vaga){?>
        <tr>
          <td><?php echo $vaga->getVaga_numero()->getVaga();?></td>
          <td><?php echo $vaga->getCandidato_email()->getNomeCompleto();?></td>
          <td><?php echo $vaga->getCandidato_email()->getEmail();?></td>
          <td><?php echo $vaga->getCandidato_email()->getObjetivo();?></td>
          <td><a href="?content=4&perfil=<?php echo $vaga->getCandidato_email()->getEmail(); ?>&id=<?php echo $vaga->getId(); ?>">Ver Curriculo</a></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
	</div>
</div>
