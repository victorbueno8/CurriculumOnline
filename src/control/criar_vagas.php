<?php
  require_once "class-autoloader.php";

  session_start();
  if(isset($_POST['submit'])){
    $vagaDAO = new VagaDAO();
    $vaga = new Vaga($_SESSION['email'],$_POST['area'],$_POST['vaga'],$_POST['descricao'],$_POST['quantidade'],$_POST['salario']);
    $vagaDAO->insertVaga($vaga);

    header("location:../../home_empresa.php?content=3");
  }
?>
