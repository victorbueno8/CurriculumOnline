<?php
  require_once "class-autoloader.php";

  if(isset($_GET['email']) && $_SESSION['perfil'] == 'candidato'){
		$empresa = new EmpresaDAO();
    $contatoDAO = new Empresa_contatoDAO();

		$empresaDados = $empresa->selectEmpresa($_GET['email']);
		$empresaContato = $contatoDAO->selectEmpresa_contato($_GET['email']);

	} else if(isset($_SESSION['email']) && $_SESSION['perfil'] == 'empresa'){
    $empresa = new EmpresaDAO();
    $contatoDAO = new Empresa_contatoDAO();

		$empresaDados = $empresa->selectEmpresa($_SESSION['email']);
		$empresaContato = $contatoDAO->selectEmpresa_contato($_SESSION['email']);
    $avatar = $empresaDados->getAvatarUrl();
	}
?>
