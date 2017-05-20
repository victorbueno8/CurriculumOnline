<?php
include_once($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/util/Conexao.php");
include($_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/src/model/Curso_complementar.php");
//    $teste = new Curso_complementarDAO();
//    $user = new Curso_complementar("vihto","testwee",20);
//    $teste->insertCurso($user);
//    $person = $teste->selectCurso("vihto");
//    var_dump($person[0]);

  class Curso_complementarDAO{

    function insertCurso($curso){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO curso_complementar(email,cursocompl,horascompl) VALUES('{$curso->getEmail()}','{$curso->getCursocompl()}','{$curso->getHorascompl()}');";

      if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar cursos: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

		public static function selectCurso($conta){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$cursos = array();
			$quary = "SELECT * FROM curso_complementar WHERE email like '{$conta}';";
			$result = mysqli_query($con,$quary);


			while($content = mysqli_fetch_array($result)){
				$curso = new Curso_complementar($content["email"], $content["cursocompl"], $content["horascompl"]);
				array_push($cursos,$curso);
			}

			mysqli_close($con);
			return $cursos;
		}
  }
?>
