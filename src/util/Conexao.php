<?php
//  include($_SERVER['DOCUMENT_ROOT']."/config/config.php");

  class Conexao{
/*    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;

    function Conexao(){
      $this->db_host = $GLOBALS['db_host'];
      $this->db_name = $GLOBALS['db_name'];
      $this->db_user = $GLOBALS['db_user'];
      $this->db_pass = $GLOBALS['db_pass'];
    }*/

    function abrirConexao(){
			//$con = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name) or die ("Sem conexao com o servidor");
      $con = mysqli_connect('mysql.hostinger.com.br', 'u342460793_root', '6zFnUXVVKkXf', 'u342460793_curbd') or die ("Sem conexao com o servidor");
      //$con = mysqli_connect('localhost', 'root', 'victor', 'curriculumdb') or die ("Sem conexao com o servidor");

			if(mysqli_connect_errno()){
				echo "Erro ao conectar no MySQL: " . mysqli_connect_error;
			}
      return $con;
    }
  }
?>
