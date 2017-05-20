<?php
  class Formacao{
    private $email;
    private $curso;
    private $instituicao;
    private $status;
    private $conclusao;

    function Formacao($email, $curso, $instituicao, $status, $conclusao){
      $this->email = $email;
      $this->curso = $curso;
      $this->instituicao = $instituicao;
      $this->status = $status;
      $this->conclusao = $conclusao;
    }

    function getEmail(){
      return $this->email;
    }

    function getCurso(){
      return $this->curso;
    }

    function getInstituicao(){
      return $this->instituicao;
    }

    function getStatus(){
      return $this->status;
    }

    function getConclusao(){
      return $this->conclusao;
    }
  }
?>
