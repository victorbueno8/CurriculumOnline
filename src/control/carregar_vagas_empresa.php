<?php
//require_once "class-autoloader.php";
include_once($_SERVER['DOCUMENT_ROOT']."/src/model/dao/EmpresaDAO.php");
include_once($_SERVER['DOCUMENT_ROOT']."/src/model/dao/VagaDAO.php");
include_once($_SERVER['DOCUMENT_ROOT']."/src/model/dao/Vaga_candidatoDAO.php");

function getVaga(){
  $edao = new EmpresaDAO();
  $dao = new VagaDAO();
  return  $dao->selectVaga($_GET['vaga']);
}

function minhasVagas(){
  $edao = new EmpresaDAO();
  $dao = new VagaDAO();
  if($_SESSION['perfil'] == 'empresa'){
	   $vagas = $dao->selectVagas($_SESSION['email']);
  }
  return $vagas;
}

function curriculosEnviados($usuario){
  $vcDAO = new Vaga_candidatoDAO();
  $newCur = $vcDAO->selectVaga_candidatos($usuario);
  return $newCur;
}

function getCurriculosVaga($vaga){
  $vcDAO = new Vaga_candidatoDAO();
  $newCur = $vcDAO->buscaVaga_candidatos($vaga->getNumero(),"vaga_numero");
  return $newCur;
}

?>
