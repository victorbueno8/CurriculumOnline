<?php
require_once "class-autoloader.php";

session_start();
if(isset($_POST['submitDados'])){
  atualizar_dados_pessoais();
}else if(isset($_POST['submitForm'])){
  atualizar_formacoes();
}

function atualizar_dados_pessoais(){
  $imagedir = $_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/images/uploaded/".$_SESSION['email'].".png";
  move_uploaded_file($_FILES['foto']['tmp_name'], $imagedir);

  $dadosDAO = new Info_pessoalDAO();
  $info_pessoal = new Info_pessoal($_SESSION['email'],$_POST['nomeCompleto'],$_POST['idade'],$_POST['sexo'],$_POST['estadoCivil'],$_POST['nacionalidade'],$_POST['objetivo'],$_POST['endereco'],$_POST['cidade'],$_POST['estado'],$_POST['telefone'],$_POST['info_adicional']);
  $dadosDAO->updateInfo_pessoal($info_pessoal);

}

function atualizar_formacoes(){
  
}

  header("location:../../home.php?content=1");
?>
