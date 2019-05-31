<?php
	if (isset($_SESSION['logado'])) { //verifica se a sessão já não estava aberta e destrói a sessão

	$_SESSION = array();
	session_unset();
	session_destroy();

	}

	if ($_POST['usuario'] == "admin" && $_POST['senha'] == "12345") {
		$_SESSION['logado'] = true;
		include('menu.php');		
	}else{
		include('logoff.php');
	}
	

?>