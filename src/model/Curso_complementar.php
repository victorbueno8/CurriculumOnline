<?php
  class Curso_complementar{
    private $email;
    private $cursocompl;
    private $horascompl;

    function Curso_complementar($email, $cursocompl, $horascompl){
      $this->email = $email;
      $this->cursocompl = $cursocompl;
      $this->horascompl = $horascompl;
    }

    function getEmail(){
      return $this->email;
    }

    function getCursocompl(){
      return $this->cursocompl;
    }

    function getHorascompl(){
      return $this->horascompl;
    }
  }
?>
