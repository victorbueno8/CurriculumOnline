<?php
require_once "class-autoloader.php";

session_start();
if(isset($_GET['id'])){
  $vcDAO = new Vaga_candidatoDAO();
  $solicitacao = $vcDAO->selectVaga_candidato($_GET['id']);
  selecionar_candidato($solicitacao);
}

function selecionar_candidato($vaga){
  $vcDAO = new Vaga_candidatoDAO();
  $vaga->setStatus('selecionado');
  $vcDAO->updateVaga_candidato($vaga);
}

header("location:../../home_empresa.php?content=3&vaga={$solicitacao->getVaga_numero()->getNumero()}");

?>
