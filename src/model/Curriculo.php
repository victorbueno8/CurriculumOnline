<?php
  include("dao/Info_pessoalDAO.php");
  include("dao/FormacaoDAO.php");
  include("dao/ExperienciaDAO.php");
  include("dao/IdiomaDAO.php");
  include("dao/Curso_complementarDAO.php");

  class Curriculo{
    private $dados;
  	private $formacoes;
  	private $experiencias;
  	private $idiomas;
  	private $cursoscompl;

    function Curriculo($email){
      $this->dados = Info_pessoalDAO::selectInfo($email);
    	$this->formacoes = FormacaoDAO::selectFormacao($email);
    	$this->experiencias = ExperienciaDAO::selectExperiencia($email);
    	$this->idiomas = IdiomaDAO::selectIdioma($email);
    	$this->cursoscompl = Curso_complementarDAO::selectCurso($email);
    }

    function getDados(){
      return $this->dados;
    }

    function getFormacoes(){
      return $this->formacoes;
    }

    function getExperiencias(){
      return $this->experiencias;
    }

    function getIdiomas(){
      return $this->idiomas;
    }

    function getCursoscompl(){
      return $this->cursoscompl;
    }

    function getAvatarUrl(){
      if(file_exists("images/uploaded/".$this->getDados()->getEmail().".png")){
        return "images/uploaded/".$this->getDados()->getEmail().".png";
      } else {
        return "images/avatar_placeholder.png";
      }
    }
  }
?>
