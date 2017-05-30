<?php
include_once($_SERVER['DOCUMENT_ROOT']."/src/util/Conexao.php");
include_once($_SERVER['DOCUMENT_ROOT']."/src/model/Vaga.php");
include_once "EmpresaDAO.php";

  class VagaDAO{

    function insertVaga($vaga){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO vaga(email,area,vaga,descricao,quantidade,data,salario) VALUES('{$vaga->getEmail()}','{$vaga->getArea()}','{$vaga->getVaga()}','{$vaga->getDescricao()}',{$vaga->getQuantidade()},NOW(),{$vaga->getSalario()});";

      if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar formações: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

    function updateVaga($vaga){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "UPDATE vaga SET area = '{$vaga->getArea()}',vaga = '{$vaga->getVaga()}',descricao = '{$vaga->getDescricao()}',quantidade = {$vaga->getQuantidade()},salario = {$vaga->getSalario()} WHERE numero = {$vaga->getNumero()};";
      mysqli_query($con,$quary) or die ("Erro ao deletar formações: " . mysqli_error($con));

			mysqli_close($con);
		}

		function selectVaga($numero){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "SELECT * FROM vaga WHERE numero = {$numero};";
			$result = mysqli_query($con,$quary);

      $content = mysqli_fetch_array($result);
      $eDAO = new empresaDAO();
      $empresa = $eDAO->selectEmpresa($content["email"]);

      $vaga = new Vaga($empresa, $content["area"], $content["vaga"], $content["descricao"], $content["quantidade"], $content["salario"]);
      $vaga->setNumero($content["numero"]);
      $vaga->setData($content["data"]);

			mysqli_close($con);
			return $vaga;
		}

    public static function selectVagas($email){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$vagas = array();
			$quary = "SELECT * FROM vaga WHERE email like '{$email}';";
			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
        $eDAO = new empresaDAO();
        $empresa = $eDAO->selectEmpresa($content["email"]);

				$vaga = new Vaga($empresa, $content["area"], $content["vaga"], $content["descricao"], $content["quantidade"], $content["salario"]);
        $vaga->setNumero($content["numero"]);
        $vaga->setData($content["data"]);
				array_push($vagas,$vaga);
			}

			mysqli_close($con);
			return $vagas;
		}

    function buscaVagas($valor,$campo){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$vagas = array();
			$quary = "SELECT * FROM vaga WHERE {$campo} like '%{$valor}%';";

			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
        $eDAO = new empresaDAO();
        $empresa = $eDAO->selectEmpresa($content["email"]);

				$vaga = new Vaga($empresa, $content["area"], $content["vaga"], $content["descricao"], $content["quantidade"], $content["salario"]);
        $vaga->setNumero($content["numero"]);
        $vaga->setData($content["data"]);
				array_push($vagas,$vaga);
			}

			mysqli_close($con);
			return $vagas;
		}


    function deleteVaga($vaga){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "DELETE FROM vaga WHERE numero = {$vaga->getNumero()}";

      mysqli_query($con,$quary) or die ("Erro ao deletar formações: " . mysqli_error($con));

			mysqli_close($con);
		}
  }
?>
