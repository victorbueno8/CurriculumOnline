<?php
	include("src/model/dao/Info_pessoalDAO.php");

	$dados = array();
	if(isset($_GET["busca"])){
		$dados = Info_pessoalDAO::selectInfos($_GET['busca']);
	}

?>

<form method="GET" action="#">
<div class="col-lg-12">
  <div class="input-group input-group-md">
    <input type="text" name="busca" class="form-control" placeholder="Busca por nome ou área">
    <span class="input-group-btn">
    <input type="hidden" name="content" value="4" class="form-control">
    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
    </span>
  </div>
</div>
</form>

<div class="col-lg-12"><hr></div>

<ul class="list-group col-lg-12">
  <?php foreach($dados as $dado){?>
  <a  href="?content=4&perfil=<?php echo $dado->getEmail();?>" class="list-group-item">
    <h4 class="list-group-item-heading"><?php echo $dado->getNomeCompleto();?></h4>
    <p class="list-group-item-text"><?php echo $dado->getObjetivo();?></p>
  </a>
  <?php } ?>
</ul>
