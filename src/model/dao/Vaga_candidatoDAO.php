<?php
include_once($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/util/Conexao.php");
include_once($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/model/Vaga_candidato.php");

  class Vaga_candidatoDAO{

    function insertVaga_candidato($vaga){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO Vaga_candidato(vaga_numero,vaga_empresa,candidato_email,data,status) VALUES('{$vaga->getVaga_numero()}','{$vaga->getVaga_empresa()}','{$vaga->getCandidato_email()}',NOW(),'{$vaga->getStatus()}');";

      if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar formações: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

    function updateVaga_candidato($vaga){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "UPDATE Vaga_candidato SET status = '{$vaga->getStatus()}' WHERE candidato_email = '{$vaga->getCandidato_email()->getEmail()}';";
      mysqli_query($con,$quary) or die ("Erro ao deletar formações: " . mysqli_error($con));

			mysqli_close($con);
    }

		function selectVaga_candidato($id){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

      $quary = "SELECT * FROM Vaga_candidato WHERE id = {$id}";
			$result = mysqli_query($con,$quary);

      $content = mysqli_fetch_array($result);

      $eDAO = new empresaDAO();
      $empresa = $eDAO->selectEmpresa($content["vaga_empresa"]);
      $vDAO = new vagaDAO();
      $vaga = $vDAO->selectVaga($content["vaga_numero"]);
      $cDAO = new Info_PessoalDAO();
      $pessoa = $cDAO->selectInfo($content["candidato_email"]);

			$vagac = new Vaga_candidato($vaga, $empresa, $pessoa, $content['status']);
      $vagac->setId($content["id"]);
      $vagac->setData($content["data"]);

			mysqli_close($con);
			return $vagac;
		}

    function selectVaga_candidatos($email){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$vagas = array();
			$quary = "SELECT * FROM Vaga_candidato WHERE candidato_email like '{$email}' XOR vaga_empresa like '{$email}';";
			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
        $eDAO = new empresaDAO();
        $empresa = $eDAO->selectEmpresa($content["vaga_empresa"]);
        $vDAO = new vagaDAO();
        $vaga = $vDAO->selectVaga($content["vaga_numero"]);
        $cDAO = new Info_PessoalDAO();
        $pessoa = $cDAO->selectInfo($content["candidato_email"]);

				$vaga = new Vaga_candidato($vaga, $empresa, $pessoa, $content['status']);
        $vaga->setId($content["id"]);
        $vaga->setData($content["data"]);

				array_push($vagas,$vaga);
			}

			mysqli_close($con);
			return $vagas;
		}

    function buscaVaga_candidatos($valor,$campo){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$vagas = array();
			$quary = "SELECT * FROM Vaga_candidato WHERE {$campo} like '{$valor}';";
      
			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
        $eDAO = new empresaDAO();
        $empresa = $eDAO->selectEmpresa($content["vaga_empresa"]);
        $vDAO = new vagaDAO();
        $vaga = $vDAO->selectVaga($content["vaga_numero"]);
        $cDAO = new Info_PessoalDAO();
        $pessoa = $cDAO->selectInfo($content["candidato_email"]);

				$vaga = new Vaga_candidato($vaga, $empresa, $pessoa, $content['status']);
        $vaga->setId($content["id"]);
        $vaga->setData($content["data"]);
				array_push($vagas,$vaga);
			}

			mysqli_close($con);
			return $vagas;
		}
  }
?>
