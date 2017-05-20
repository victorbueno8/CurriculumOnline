<?php
  class Vaga{
    private $numero;
    private $email;
    private $area;
    private $vaga;
    private $descricao;
    private $quantidade;
    private $data;
    private $salario;

    function Vaga($email, $area, $vaga, $descricao, $quantidade, $salario){
      $this->email = $email;
      $this->area = $area;
      $this->vaga = $vaga;
      $this->descricao = $descricao;
      $this->quantidade = $quantidade;
      $this->salario = $salario;
    }

    function setNumero($numero){
      $this->numero = $numero;
    }

    function setData($data){
      $this->data = $data;
    }

    function getNumero(){
      return $this->numero;
    }

    function getEmail(){
      return $this->email;
    }

    function getArea(){
      return $this->area;
    }

    function getVaga(){
      return $this->vaga;
    }

    function getDescricao(){
      return $this->descricao;
    }

    function getQuantidade(){
      return $this->quantidade;
    }

    function getData(){
      return $this->data;
    }

    function getSalario(){
      return $this->salario;
    }
  }
?>
