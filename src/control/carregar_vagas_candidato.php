<?php
require_once "class-autoloader.php";

function Vaga($numero){
  $dao = new VagaDAO();
  return $dao->selectVaga($numero);
}

function getVaga(){
  $edao = new EmpresaDAO();
  $dao = new VagaDAO();
  $vagas = array();
   if($_GET['pesquisa'] == 'empresa'){
      $empresas = $edao->buscaEmpresas($_GET['busca'],"razao_social");
       foreach($empresas as $empresa){
         $vagas = array_merge($vagas,$dao->buscaVagas($empresa->getEmail(),'email'));
       }
     } else{
       $vagas = $dao->buscaVagas($_GET['busca'],$_GET['pesquisa']);
     }

    return $vagas;
}

function minhas_vagas($usuario){
  $myVagasDAO = new Vaga_candidatoDAO();
  $myVagas = $myVagasDAO->selectVaga_candidatos($usuario);
  return $myVagas;
}

function verificar_minha_vaga($num,$email){
  $myVagasDAO = new Vaga_candidatoDAO();
  $myVagas = minhas_vagas($email);
  foreach ($myVagas as $vaga) {
    if($vaga->getVaga_numero()->getNumero() == $num) return true;
  }
  return false;
}

function getVagasRelacionadas($objetivo){
  $relacVagasDAO = new VagaDAO();
  $relacVagas = $relacVagasDAO->buscaVagas($objetivo,"area");
  return $relacVagas;
}

?>
