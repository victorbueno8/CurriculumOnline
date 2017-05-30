<?php
require_once "class-autoloader.php";
require $_SERVER['DOCUMENT_ROOT']."/src/model/Vaga.php";

session_start();

$vaga = new Vaga($_SESSION['email'],$_POST['area'],$_POST['vaga'],$_POST['descricao'],$_POST['quantidade'],$_POST['salario']);
$vaga->setNumero($_POST['numero']);

if(isset($_POST['delete'])){
  inativarVaga($vaga);
} else if(isset($_POST['update'])){
  updateVaga($vaga);
}

function inativarVaga($vaga){
  $dao = new VagaDAO();
  $dao->deleteVaga($vaga);
}

function updateVaga($vaga){
  $dao = new VagaDAO();
  $dao->updateVaga($vaga);
}

header("location:../../home_empresa.php?content=3");
?>
