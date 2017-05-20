<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/util/Conexao.php");
  include($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/model/Info_pessoal.php");

  class Info_pessoalDAO{

    function insertInfo($info){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO info_pessoal(email,nomeCompleto,idade,sexo,estadoCivil,nacionalidade,objetivo,endereco,cidade,estado,telefone,info_adicional) VALUES('{$info->getEmail()}','{$info->getNomeCompleto()}','{$info->getIdade()}','{$info->getSexo()}','{$info->getEstadoCivil()}','{$info->getNacionalidade()}','{$info->getObjetivo()}','{$info->getEndereco()}','{$info->getCidade()}','{$info->getEstado()}','{$info->getTelefone()}','{$info->getInfo_adicional()}');";

			if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar informações pessoais: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

    function updateInfo_pessoal($info_pessoal){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "UPDATE info_pessoal SET nomeCompleto = '{$info_pessoal->getNomeCompleto()}',idade= {$info_pessoal->getIdade()},sexo = '{$info_pessoal->getSexo()}',estadoCivil = '{$info_pessoal->getEstadoCivil()}',nacionalidade = '{$info_pessoal->getNacionalidade()}',objetivo = '{$info_pessoal->getObjetivo()}',endereco = '{$info_pessoal->getEndereco()}',cidade = '{$info_pessoal->getCidade()}',estado = '{$info_pessoal->getEstado()}',telefone = '{$info_pessoal->getTelefone()}',info_adicional = '{$info_pessoal->getInfo_adicional()}' WHERE email = '{$info_pessoal->getEmail()}';";
      mysqli_query($con,$quary) or die ("Erro ao deletar formações: " . mysqli_error($con));

			mysqli_close($con);
		}

		public static function selectInfo($email){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "SELECT * FROM Info_pessoal WHERE email like '{$email}';";
			$result = mysqli_query($con,$quary);

      $content = mysqli_fetch_array($result);

			$person = new Info_pessoal($content["email"],$content["nomeCompleto"],$content["idade"],$content["sexo"],$content["estadoCivil"],$content["nacionalidade"],$content["objetivo"],$content["endereco"],$content["cidade"],$content["estado"],$content["telefone"],$content["info_adicional"]);

			mysqli_close($con);
			return $person;
		}

    public static function selectInfos($busca){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$list = array();
			$quary = "SELECT * FROM Info_pessoal WHERE nomeCompleto like '%{$busca}%' or objetivo like '%{$busca}%';";
			$result = mysqli_query($con,$quary);

			while($content = mysqli_fetch_array($result)){
				$person = new Info_pessoal($content["email"],$content["nomeCompleto"],$content["idade"],$content["sexo"],$content["estadoCivil"],$content["nacionalidade"],$content["objetivo"],$content["endereco"],$content["cidade"],$content["estado"],$content["telefone"],$content["info_adicional"]);
				array_push($list,$person);
			}


			mysqli_close($con);
			return $list;
		}
  }
?>
