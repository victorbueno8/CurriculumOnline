<?php
  //include($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/config/config.php");

  class Conexao{
    private $db_host = 'localhost';
    private $db_name = 'curriculumdb';
    private $db_user = 'root';
    private $db_pass = 'victor';

    function abrirConexao(){
			$con = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name) or die ("Sem conexao com o servidor");

			if(mysqli_connect_errno()){
				echo "Erro ao conectar no MySQL: " . mysqli_connect_error;
			}
      return $con;
    }
  }
?>
