<?php
  class Empresa_contato{
    private $email;
    private $contato;
    private $tipo;

    function Empresa_contato($email,$contato,$tipo){
      $this->email = $email;
      $this->contato = $contato;
      $this->tipo = $tipo;
    }

    function getEmail(){
      return $this->email;
    }
    function getContato(){
      return $this->contato;
    }
    function getTipo(){
      return $this->tipo;
    }

  }
?>
