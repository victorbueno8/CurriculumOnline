<?php
include_once($_SERVER['DOCUMENT_ROOT']."/src/util/Conexao.php");
include($_SERVER['DOCUMENT_ROOT']."/src/model/Experiencia.php");
    $teste = new ExperienciaDAO();
//    $user = new Experiencia("vihto","123","wer",3,5);
//    $teste->insertExperiencia($user);
//    $person = $teste->selectExperiencia("vihto");
//    var_dump($person);

  class ExperienciaDAO{

    function insertExperiencia($experiencia){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO experiencia(email,empresa,cargo,entrada,saida) VALUES('{$experiencia->getEmail()}','{$experiencia->getEmpresa()}','{$experiencia->getCargo()}',{$experiencia->getEntrada()},{$experiencia->getSaida()});";

      if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar experiências: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

		public static function selectExperiencia($conta){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$experiencias = array();
			$quary = "SELECT * FROM experiencia WHERE email like '{$conta}';";
			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
				$experiencia = new Experiencia($content["email"], $content["empresa"], $content["cargo"], $content["entrada"], $content["saida"]);
				array_push($experiencias,$experiencia);
			}

			mysqli_close($con);
			return $experiencias;
		}
  }
?>
