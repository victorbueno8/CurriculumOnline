<?php
  class Vaga_candidato{
    private $id;
    private $vaga_numero;
    private $vaga_empresa;
    private $candidato_email;
    private $data;
    private $status;

    function Vaga_candidato($vaga_numero, $vaga_empresa, $candidato_email, $status){
      $this->vaga_numero = $vaga_numero;
      $this->vaga_empresa = $vaga_empresa;
      $this->candidato_email = $candidato_email;
      $this->status = $status;
    }

    function setId($id){
      $this->id = $id;
    }

    function setData($data){
      $this->data = $data;
    }

    function setStatus($status){
      $this->status = $status;
    }

    function getId(){
      return $this->id;
    }

    function getVaga_numero(){
      return $this->vaga_numero;
    }

    function getVaga_empresa(){
      return $this->vaga_empresa;
    }

    function getCandidato_email(){
      return $this->candidato_email;
    }

    function getData(){
      return $this->data;
    }

    function getStatus(){
      return $this->status;
    }
  }
?>
