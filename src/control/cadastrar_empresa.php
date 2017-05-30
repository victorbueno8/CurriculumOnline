<?php
  require_once "class-autoloader.php";

  if(isset($_POST['submit'])) {
    $udao = new UsuarioDAO();
    $usuario = new Usuario($_POST['email'],md5($_POST['senha']),$_POST['perfil']);
  	$udao->insertUsuario($usuario);

    $edao = new EmpresaDAO();
    $empresa = new Empresa($_POST['email'],$_POST['razao_social'],$_POST['nome_fantasia'],$_POST['cnpj'],$_POST['responsavel'],$_POST['endereco'],$_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['segmento'],$_POST['atividade'],$_POST['porte'],$_POST['info_gerais']);
    $edao->insertEmpresa($empresa);

    $ecDAO = new Empresa_contatoDAO();
    for($i=1; $i<5; $i++){
  		if($_POST["contato{$i}"] != ""){
  			$contato = new Empresa_contato($_POST['email'],$_POST["contato{$i}"],$_POST["tipo{$i}"]);
  			$ecDAO->insertEmpresa_contato($contato);
  		}
  	}

//    $file_ext=strtolower(end(explode('.',$_FILES['foto']['name'])));
    $imagedir = $_SERVER['DOCUMENT_ROOT']."/images/uploaded/".$_POST['email'].".png";
    move_uploaded_file($_FILES['foto']['tmp_name'], $imagedir);

    header('location:../../index.php?resp=succeful');
  }

?>
