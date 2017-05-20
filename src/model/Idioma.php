<?php
  class Idioma{
    private $email;
    private $idioma;
    private $nivel;

    function Idioma($email, $idioma, $nivel){
      $this->email = $email;
      $this->idioma = $idioma;
      $this->nivel = $nivel;
    }

    function getEmail(){
      return $this->email;
    }

    function getIdioma(){
      return $this->idioma;
    }

    function getNivel(){
      return $this->nivel;
    }
  }
?>
