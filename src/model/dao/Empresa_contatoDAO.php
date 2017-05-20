<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/util/Conexao.php");
  include($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/model/Empresa_contato.php");

  class Empresa_contatoDAO{

    function insertEmpresa_contato($empresa){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO empresa_contato(email,contato,tipo) VALUES('{$empresa->getEmail()}','{$empresa->getContato()}','{$empresa->getTipo()}');";

			if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar informações pessoais: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

    function updateEmpresa_contato($empresa){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "UPDATE empresa_contato SET contato='{$empresa->getContato()}', tipo='{$empresa->getTipo()}' WHERE email = '{$empresa->getEmail()}';";
      mysqli_query($con,$quary) or die ("Erro ao atualizar empresa: " . mysqli_error($con));

			mysqli_close($con);
		}

    function deleteEmpresa_contato($empresa){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "DELETE FROM empresa_contato WHERE contato='{$empresa->getContato()}' AND tipo='{$empresa->getTipo()}' AND email = '{$empresa->getEmail()}';";
      mysqli_query($con,$quary) or die ("Erro ao deletar empresa: " . mysqli_error($con));

			mysqli_close($con);
		}

		function selectEmpresa_contato($email){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

      $contatos = array();
			$quary = "SELECT * FROM empresa_contato WHERE email like '{$email}';";
			$result = mysqli_query($con,$quary);

      while($content = mysqli_fetch_array($result)){
			     $contato = new Empresa_contato($content["email"],$content["contato"],$content["tipo"]);
           array_push($contatos,$contato);
      }

			mysqli_close($con);
			return $contatos;
		}

    function selectEmpresa_contatos(){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$list = array();
			$quary = "SELECT * FROM Empresa_contato;";
			$result = mysqli_query($con,$quary);

			while($content = mysqli_fetch_array($result)){
				$person = new Empresa_contato($content["email"],$content["contato"],$content["tipo"]);
				array_push($list,$person);
			}


			mysqli_close($con);
			return $list;
		}
  }
?>
