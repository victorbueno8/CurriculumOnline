<?php
  class Experiencia{
    private $email;
    private $empresa;
    private $cargo;
    private $entrada;
    private $saida;

    function Experiencia($email, $empresa, $cargo, $entrada, $saida){
      $this->email = $email;
      $this->empresa = $empresa;
      $this->cargo = $cargo;
      $this->entrada = $entrada;
      $this->saida = $saida;
    }

    function getEmail(){
      return $this->email;
    }

    function getEmpresa(){
      return $this->empresa;
    }

    function getCargo(){
      return $this->cargo;
    }

    function getEntrada(){
      return $this->entrada;
    }

    function getSaida(){
      return $this->saida;
    }
  }
?>
