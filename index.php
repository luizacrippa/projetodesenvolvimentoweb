<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">

</head>
<body>
	
	<div id="valor"></div>

	<?php

		session_cache_expire(30);
		session_start();

	    if(isset($_POST['cliente'])){
	      include('menu.php');
	      include('cliente.php');

	    }elseif(isset($_POST['produto'])){
	      include('menu.php');
	      include ('produto.php');

	    }elseif(isset($_POST['pedido'])){
	      include('menu.php');
	      include ('pedido.php');

	    }elseif(isset($_POST['validaLogin'])){
	      include ('login.php');

	    }elseif (isset($_POST['gravarCliente'])) {
	      include ('menu.php');
	      include('cliente.php');

	    }elseif (isset($_POST['adicionarPedido'])) {
	      include ('menu.php');
	      include('pedido.php');

	    }elseif (isset($_POST['gravarProduto'])) {
	      include ('menu.php');
	      include('produto.php');

	    }else{
	      include('telalogin.php');
	    }
  ?>

  <?php
	session_start();
	$tempo_atual = @mktime(date("Y/m/d H:i:s"));
	$tempo_permitido = 1800; // tempo em segundos até redirecionar
	$fim = "";
	if(@$_SESSION['Cookie_countdown']=="") {
	$tempo_entrada = @mktime(date("Y/m/d H:i:s"));
	$tempo_cookie = '3600'; // em segundos
	$_SESSION['Cookie_countdown'] = $tempo_entrada;
	} else {
	$tempo_gravado = $_SESSION['Cookie_countdown'];
	$tempo_gerado = $tempo_atual-$tempo_gravado;
	$fim.= $tempo_permitido-$tempo_gerado;
	if($fim <= 0) {
	echo "tempo esgotado";
	$_SESSION['Cookie_countdown'] = "";
	} else {
	}
	}
?>


  


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script language="JavaScript">
		var contador = '<?php if($fim=="") { echo $tempo_permitido+1; } else { echo "$fim"; } ?>';
		function Conta() {
		if(contador <= 0) {
		location.href='telalogin.php';
		return false;
		}
		contador = contador-1;
		setTimeout("Conta()", 1000);
		document.getElementById("valor").innerHTML = contador;
		}
		window.onload = function() {
		Conta();
		}
	</script>



</body>
</html>