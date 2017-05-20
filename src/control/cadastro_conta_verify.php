<?php

$email = trim($_POST['email']);
$senha =  trim($_POST['senha']);
$confirm =  trim($_POST['confirm']);
$perfil = trim($_POST['perfil']);

if ($email == '' || $senha == '' || $confirm == '') {
    header('location:../../cadastro_conta.php?resp=incomplete');
} else if($senha != $confirm){
    header('location:../../cadastro_conta.php?resp=invalid');
} else{
  if($perfil == 'candidato') header('location:../../cadastro_dados.php',true,307);
  else if($perfil == 'empresa') header('location:../../cadastro_empresa.php',true,307);
  else header('location:../../cadastro_conta.php?resp=incomplete');
}
 ?>
