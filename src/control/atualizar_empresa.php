<?php
require_once "class-autoloader.php";

session_start();
if(isset($_POST['submitUpdate'])){
  atualizar_dados_empresa();
}else if(isset($_POST['addContact'])){
  adicionar_contato();
}else if(isset($_POST['deleteContact'])){
  remover_contato();
}

function atualizar_dados_empresa(){
  $imagedir = $_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/images/uploaded/".$_SESSION['email'].".png";
  move_uploaded_file($_FILES['foto']['tmp_name'], $imagedir);

  $edao = new EmpresaDAO();
  $empresa = new Empresa($_SESSION['email'],$_POST['razao_social'],$_POST['nome_fantasia'],$_POST['cnpj'],$_POST['responsavel'],$_POST['endereco'],$_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['segmento'],$_POST['atividade'],$_POST['porte'],$_POST['info_gerais']);
  $edao->updateEmpresa($empresa);

  $ecDAO = new Empresa_contatoDAO();
  for($i=0; $i<5; $i++){
    if($_POST["contato{$i}"] != ""){
      $contato = new Empresa_contato($_POST['email'],$_POST["contato{$i}"],$_POST["tipo{$i}"]);
      $ecDAO->updateEmpresa_contato($contato);
    }
  }

}

function adicionar_contato(){
  $ecDAO = new Empresa_contatoDAO();
  $contato = new Empresa_contato($_SESSION['email'],$_POST["contatoNew"],$_POST["tipoNew"]);
  $ecDAO->insertEmpresa_contato($contato);
}

function remover_contato(){
  $i = $_POST['deleteContact'];
  $ecDAO = new Empresa_contatoDAO();
  $contato = new Empresa_contato($_SESSION['email'],$_POST["contato{$i}"],$_POST["tipo{$i}"]);
  $ecDAO->deleteEmpresa_contato($contato);
}

  header("location:../../home_empresa.php?content=2");
?>
