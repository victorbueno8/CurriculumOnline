<?php
  class Empresa{
    private $email;
    private $razao_social;
    private $nome_fantasia;
    private $cnpj;
    private $responsavel;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $segmento;
    private $atividade;
    private $porte;
    private $info_gerais;

    function Empresa($email,$razao_social,$nome_fantasia,$cnpj,$responsavel,$endereco,$bairro, $cidade,$estado,$segmento,$atividade,$porte,$info_gerais){
      $this->email = $email;
      $this->razao_social = $razao_social;
      $this->nome_fantasia = $nome_fantasia;
      $this->cnpj = $cnpj;
      $this->responsavel = $responsavel;
      $this->endereco = $endereco;
      $this->bairro = $bairro;
      $this->cidade = $cidade;
      $this->estado = $estado;
      $this->segmento = $segmento;
      $this->atividade = $atividade;
      $this->porte = $porte;
      $this->info_gerais = $info_gerais;
    }

    function getEmail(){
      return $this->email;
    }
    function getRazao_social(){
      return $this->razao_social;
    }
    function getNome_fantasia(){
      return $this->nome_fantasia;
    }
    function getCnpj(){
      return $this->cnpj;
    }
    function getResponsavel(){
      return $this->responsavel;
    }
    function getEndereco(){
      return $this->endereco;
    }
    function getBairro(){
      return $this->bairro;
    }
    function getCidade(){
      return $this->cidade;
    }
    function getEstado(){
      return $this->estado;
    }
    function getSegmento(){
      return $this->segmento;
    }
    function getAtividade(){
      return $this->atividade;
    }
    function getPorte(){
      return $this->porte;
    }
    function getInfo_gerais(){
      return $this->info_gerais;
    }

    function getAvatarUrl(){
      if(file_exists("images/uploaded/".$this->getEmail().".png")){
        return "images/uploaded/".$this->getEmail().".png";
      } else {
        return "images/avatar_placeholder.png";
      }
    }
  }
?>
