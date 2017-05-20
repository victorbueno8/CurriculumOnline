<?php
  class Info_pessoal{
    private $email;
    private $nomeCompleto;
    private $idade;
    private $sexo;
    private $estadoCivil;
    private $nacionalidade;
    private $objetivo;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefone;
    private $info_adicional;


    function Info_pessoal($email, $nomeCompleto, $idade, $sexo, $estadoCivil, $nacionalidade, $objetivo, $endereco,$cidade, $estado, $telefone, $info_adicional){
      $this->email = $email;
      $this->nomeCompleto = $nomeCompleto;
      $this->idade = $idade;
      $this->sexo = $sexo;
      $this->estadoCivil = $estadoCivil;
      $this->nacionalidade = $nacionalidade;
      $this->objetivo = $objetivo;
      $this->endereco = $endereco;
      $this->cidade = $cidade;
      $this->estado = $estado;
      $this->telefone = $telefone;
      $this->info_adicional = $info_adicional;
    }

    function getEmail(){
      return $this->email;
    }
    function getNomeCompleto(){
      return $this->nomeCompleto;
    }
    function getIdade(){
      return $this->idade;
    }
    function getSexo(){
      return $this->sexo;
    }
    function getEstadoCivil(){
      return $this->estadoCivil;
    }
    function getNacionalidade(){
      return $this->nacionalidade;
    }
    function getObjetivo(){
      return $this->objetivo;
    }
    function getEndereco(){
      return $this->endereco;
    }
    function getCidade(){
      return $this->cidade;
    }
    function getEstado(){
      return $this->estado;
    }
    function getTelefone(){
      return $this->telefone;
    }
    function getInfo_adicional(){
      return $this->info_adicional;
    }

  }
?>
