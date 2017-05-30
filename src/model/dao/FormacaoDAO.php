<?php
include_once($_SERVER['DOCUMENT_ROOT']."/src/util/Conexao.php");
include($_SERVER['DOCUMENT_ROOT']."/src/model/Formacao.php");
//    $teste = new FormacaoDAO();
//    $user = new Formacao("vihto","123","wer","conclu",5);
//    $teste->insertFormacao($user);
//    $person = $teste->selectFormacao("vihto");
//    var_dump($person);

  class FormacaoDAO{

    function insertFormacao($formacao){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO formacao(email,curso,instituicao,status,conclusao) VALUES('{$formacao->getEmail()}','{$formacao->getCurso()}','{$formacao->getInstituicao()}','{$formacao->getStatus()}',{$formacao->getConclusao()});";

      if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar formações: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

		public static function selectFormacao($conta){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$formacoes = array();
			$quary = "SELECT * FROM formacao WHERE email like '{$conta}';";
			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
				$formacao = new Formacao($content["email"], $content["curso"], $content["instituicao"], $content["status"], $content["conclusao"]);
				array_push($formacoes,$formacao);
			}

			mysqli_close($con);
			return $formacoes;
		}
  }
?>
