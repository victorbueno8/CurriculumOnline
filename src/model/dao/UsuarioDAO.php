<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/src/util/Conexao.php");
  include($_SERVER['DOCUMENT_ROOT']."/src/model/Usuario.php");

  class UsuarioDAO{

    function insertUsuario($usuario){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "INSERT INTO usuario(email,senha,perfil) VALUES('{$usuario->getEmail()}','{$usuario->getSenha()}','{$usuario->getPerfil()}');";

			if(!mysqli_query($con,$quary)){
				echo "Erro ao cadastrar usuario: " . mysqli_error($con);
			}

			mysqli_close($con);
		}

		public static function verificaUsuario($email,$senha){
      $conexao = new Conexao();
      $con = $conexao->abrirConexao();

			$quary = "SELECT * FROM usuario WHERE email like '{$email}' AND senha like '{$senha}';";

			$result = mysqli_query($con,$quary);

			$find = null;
			if(mysqli_num_rows($result) == 1){
        $content = mysqli_fetch_array($result);
				$find = $content["perfil"];
			}

			mysqli_close($con);
			return $find;
		}
  }
?>
