<?php
require_once "class-autoloader.php";

session_start();
if(isset($_POST['submitDados'])){
  atualizar_dados_pessoais();
}else if(isset($_POST['addFormation'])){
  add_formacoes();
}else if(isset($_POST['addExperiencia'])){
  add_experiencia();
}else if(isset($_POST['addIdioma'])){
  add_idioma();
}else if(isset($_POST['addCursocompl'])){
  add_cursocompl();
}

function atualizar_dados_pessoais(){
  $imagedir = $_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/images/uploaded/".$_SESSION['email'].".png";
  move_uploaded_file($_FILES['foto']['tmp_name'], $imagedir);

  $dadosDAO = new Info_pessoalDAO();
  $info_pessoal = new Info_pessoal($_SESSION['email'],$_POST['nomeCompleto'],$_POST['idade'],$_POST['sexo'],$_POST['estadoCivil'],$_POST['nacionalidade'],$_POST['objetivo'],$_POST['endereco'],$_POST['cidade'],$_POST['estado'],$_POST['telefone'],$_POST['info_adicional']);
  $dadosDAO->updateInfo_pessoal($info_pessoal);

}

function add_formacoes(){
  $formacaoDAO = new FormacaoDAO();
  $formacao = new Formacao($_SESSION['email'],$_POST["cursoNew"],$_POST["instituicaoNew"],$_POST["statusNew"],$_POST["conclusaoNew"]);
  $formacaoDAO->insertFormacao($formacao);
}

function add_experiencia(){
  $experienciaDAO = new ExperienciaDAO();
  $experiencia = new Experiencia($_SESSION['email'],$_POST["empresaNew"],$_POST["cargoNew"],$_POST["entradaNew"],$_POST["saidaNew"]);
  $experienciaDAO->insertExperiencia($experiencia);
}

function add_idioma(){
  $idiomaDAO = new IdiomaDAO();
  $idioma = new Idioma($_SESSION['email'],$_POST["idiomaNew"],$_POST["nivelNew"]);
  $idiomaDAO->insertIdioma($idioma);
}

function add_cursocompl(){
  $complDAO = new Curso_complementarDAO();
  $complementar = new Curso_complementar($_SESSION['email'],$_POST["cursocomplNew"],$_POST["horascomplNew"]);
  $complDAO->insertCurso($complementar);
}

  header("location:../../home.php?content=2");
?>
