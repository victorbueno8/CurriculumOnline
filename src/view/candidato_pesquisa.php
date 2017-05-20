<?php
	include_once "src/control/carregar_vagas_candidato.php";
	$vagas = array();
	if(isset($_GET['busca'])){
		$vagas = getVaga();
	}
?>

<form method="get" action="#">
<div class="col-lg-12">
	<div class="input-group input-group-md">
		<select name="pesquisa" class="input-group-addon form-control">
			<option value="vaga">Vaga</option>
			<option value="area">Area</option>
			<option value="empresa">Empresa</option>
		</select>
		<span class="input-group-btn" style="width:0px;"></span>
		<input type="text" name="busca" class="form-control" placeholder="Selecione a sua pesquisa">
		<input type="hidden" name="content" value="3" class="form-control">
		<span class="input-group-btn">
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
		</span>
	</div>
</div>
</form>

<div class="col-lg-12"><hr></div>

<ul class="list-group col-lg-12">
	<?php foreach($vagas as $vaga){?>
	<a  href="?content=3&vaga=<?php echo $vaga->getNumero();?>" class="list-group-item">
		<h4 class="list-group-item-heading"><?php echo $vaga->getVaga();?></h4>
		<p class="list-group-item-text"><?php echo $vaga->getEmail()->getNome_fantasia();?></p>
	</a>
	<?php } ?>
</ul><br>
