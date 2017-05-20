<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/util/Conexao.php");
  include($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/model/Empresa.php");

  class EmpresaDAO{

    function insertEmpresa($empresa){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO Empresa(email,razao_social,nome_fantasia,cnpj,responsavel,endereco,bairro, cidade,estado,segmento,atividade,porte,info_gerais) VALUES('{$empresa->getEmail()}','{$empresa->getRazao_social()}','{$empresa->getNome_fantasia()}','{$empresa->getCnpj()}','{$empresa->getResponsavel()}','{$empresa->getEndereco()}','{$empresa->getBairro()}','{$empresa->getCidade()}','{$empresa->getEstado()}','{$empresa->getSegmento()}','{$empresa->getAtividade()}','{$empresa->getPorte()}','{$empresa->getInfo_gerais()}');";
      echo $quary;
			if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar informações pessoais: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

    function updateEmpresa($empresa){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "UPDATE empresa SET razao_social='{$empresa->getRazao_social()}', nome_fantasia='{$empresa->getNome_fantasia()}', cnpj='{$empresa->getCnpj()}', responsavel='{$empresa->getResponsavel()}', endereco='{$empresa->getEndereco()}', bairro='{$empresa->getBairro()}', cidade='{$empresa->getCidade()}', estado='{$empresa->getEstado()}', segmento='{$empresa->getSegmento()}', atividade='{$empresa->getAtividade()}', porte='{$empresa->getPorte()}', info_gerais='{$empresa->getInfo_gerais()}' WHERE email = '{$empresa->getEmail()}';";
      mysqli_query($con,$quary) or die ("Erro ao atualizar empresa: " . mysqli_error($con));

			mysqli_close($con);
		}

		function selectEmpresa($email){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "SELECT * FROM Empresa WHERE email like '{$email}';";
			$result = mysqli_query($con,$quary);

      $content = mysqli_fetch_array($result);

			$person = new Empresa($content["email"],$content["razao_social"],$content["nome_fantasia"],$content["cnpj"],$content["responsavel"],$content["endereco"],$content["bairro"],$content["cidade"],$content["estado"],$content["segmento"],$content["atividade"],$content["porte"],$content["info_gerais"]);

			mysqli_close($con);
			return $person;
		}

    function buscaEmpresas($valor,$campo){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$list = array();
			$quary = "SELECT * FROM Empresa WHERE {$campo} like '%{$valor}%';";

			$result = mysqli_query($con,$quary);

			while($content = mysqli_fetch_array($result)){
				$person = new Empresa($content["email"],$content["razao_social"],$content["nome_fantasia"],$content["cnpj"],$content["responsavel"],$content["endereco"],$content["bairro"],$content["cidade"],$content["estado"],$content["segmento"],$content["atividade"],$content["porte"],$content["info_gerais"]);
				array_push($list,$person);
			}


			mysqli_close($con);
			return $list;
		}
  }
?>
