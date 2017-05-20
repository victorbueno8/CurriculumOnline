<?php
  class Usuario{
    private $email;
    private $senha;
    private $perfil;

    function Usuario($email, $senha, $perfil){
      $this->email = $email;
      $this->senha = $senha;
      $this->perfil = $perfil;
    }

    function getEmail(){
      return $this->email;
    }

    function getSenha(){
      return $this->senha;
    }

    function getPerfil(){
      return $this->perfil;
    }
  }
?>
