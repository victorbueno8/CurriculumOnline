<?php
	include($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/model/Curriculo.php");

	if(isset($_GET['perfil'])){
		$curriculo = new Curriculo($_GET['perfil']);

		$dados = $curriculo->getDados();
		$formacoes = $curriculo->getFormacoes();
		$experiencias = $curriculo->getExperiencias();
		$idiomas = $curriculo->getIdiomas();
		$cursoscompl = $curriculo->getCursoscompl();
		$avatar = $curriculo->getAvatarUrl();
	} else {
		$curriculo = new Curriculo($_SESSION['email']);

		$dados = $curriculo->getDados();
		$formacoes = $curriculo->getFormacoes();
		$experiencias = $curriculo->getExperiencias();
		$idiomas = $curriculo->getIdiomas();
		$cursoscompl = $curriculo->getCursoscompl();
		$avatar = $curriculo->getAvatarUrl();
	}

?>
