<?php
  require_once "class-autoloader.php";

  if(isset($_POST['submit'])) {
    $userDAO = new UsuarioDAO();
    $usuario = new Usuario($_POST['email'],$_POST['senha'],$_POST['perfil']);
  	$userDAO->insertUsuario($usuario);


    $candidatoDAO = new Info_pessoalDAO();
  	$candidato = new Info_pessoal($_POST['email'],$_POST['nomeCompleto'],$_POST['idade'],$_POST['sexo'],$_POST['estadoCivil'],$_POST['nacionalidade'],$_POST['objetivo'],$_POST['endereco'],$_POST['cidade'],$_POST['estado'],$_POST['telefone'],$_POST['info_adicional']);
  	$candidatoDAO->insertInfo($candidato);

    $formacaoDAO = new FormacaoDAO();
  	for($i=1; $i<5; $i++){
  		if($_POST["curso{$i}"] != ""){
  			$formacao = new Formacao($_POST['email'],$_POST["curso{$i}"],$_POST["instituicao{$i}"],$_POST["status{$i}"],$_POST["conclusao{$i}"]);
  			$formacaoDAO->insertFormacao($formacao);
  		}
  	}

    $experienciaDAO = new ExperienciaDAO();
  	for($i=1; $i<5; $i++){
  		if($_POST["empresa{$i}"] != ""){
  			$experiencia = new Experiencia($_POST['email'],$_POST["empresa{$i}"],$_POST["cargo{$i}"],$_POST["entrada{$i}"],$_POST["saida{$i}"]);
  			$experienciaDAO->insertExperiencia($experiencia);
  		}
  	}

    $idiomaDAO = new IdiomaDAO();
  	for($i=1; $i<4; $i++){
  		if($_POST["idioma{$i}"] != ""){
  			$idioma = new Idioma($_POST['email'],$_POST["idioma{$i}"],$_POST["nivel{$i}"]);
  			$idiomaDAO->insertIdioma($idioma);
  		}
  	}

    $complDAO = new Curso_complementarDAO();
  	for($i=1; $i<6; $i++){
  		if($_POST["cursocompl{$i}"] != ""){
  			$complementar = new Curso_complementar($_POST['email'],$_POST["cursocompl{$i}"],$_POST["horascompl{$i}"]);
  			$complDAO->insertCurso($complementar);
  		}
  	}

//    $file_ext=strtolower(end(explode('.',$_FILES['foto']['name'])));
    $imagedir = $_SERVER['DOCUMENT_ROOT']."/CurriculumOnline/images/uploaded/".$_POST['email'].".png";
    move_uploaded_file($_FILES['foto']['tmp_name'], $imagedir);

  	header('location:../../index.php?resp=succeful');
  }
?>
