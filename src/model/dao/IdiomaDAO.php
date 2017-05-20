<?php
include_once($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/util/Conexao.php");
include($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/model/Idioma.php");
//    $teste = new IdiomaDAO();
//    $user = new Idioma("vihto","teste","teste");
//    $teste->insertIdioma($user);
//    $person = $teste->selectIdioma("vihto");
//    var_dump($person);

  class IdiomaDAO{

    function insertIdioma($idioma){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO Idioma(email,idioma,nivel) VALUES('{$idioma->getEmail()}','{$idioma->getIdioma()}','{$idioma->getNivel()}');";

      if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar idiomas: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

		public static function selectIdioma($conta){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$idiomas = array();
			$quary = "SELECT * FROM idioma WHERE email like '{$conta}';";
			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
				$idioma = new Idioma($content["email"], $content["idioma"], $content["nivel"]);
				array_push($idiomas,$idioma);
			}

			mysqli_close($con);
			return $idiomas;
		}
  }
?>
