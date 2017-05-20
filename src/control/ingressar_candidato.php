<?php
  require_once "class-autoloader.php";

  session_start();

    $vagalistDAO = new Vaga_candidatoDAO();
    $list = new Vaga_candidato($_GET['vaga'],$_GET['empresa'],$_SESSION['email'],'solicitado');
    $vagalistDAO->insertVaga_candidato($list);

    header("location:../../home.php?content=3&vaga={$_GET['vaga']}&send=success");

?>
