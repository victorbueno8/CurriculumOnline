<?php
  include($_SERVER['DOCUMENT_ROOT']."/src/model/dao/UsuarioDAO.php");
  // session_start inicia a sessão
  session_start();
  // as variáveis login e senha recebem os dados digitados na página anterior
  $email = $_POST['email'];
  $senha = md5($_POST['senha']);

  $user = new UsuarioDAO();
  $verif = $user->verificaUsuario($email,$senha);
  if($verif == 'candidato'){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['perfil'] = $verif;

    header("location:../../home.php");
  } else if($verif == 'empresa'){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['perfil'] = $verif;

    header("location:../../home_empresa.php");
  } else{
  	unset($_SESSION['email']);
  	unset($_SESSION['senha']);
    unset($_SESSION['perfil']);

  	header('location:../../index.php?resp=erro');
  }

?>
