<?php include 'conectaBanco.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="CSS/style.css">

</head>
<body>

	
	
	<div id="valor"></div>

	<?php

	session_cache_expire(30);
	session_start();
	require 'validaLogin.php';

	if(isset($_POST['btncliente'])){
		include('menu.php');
		include('cadastroCliente.php');

	}elseif(isset($_POST['adicionarCliente']) || isset($_POST['editaCliente'])){
		include('menu.php');
		include ('cliente.php');

	}elseif(isset($_POST['btnproduto'])){
		include('menu.php');
		include ('cadastroProduto.php');

	}elseif(isset($_POST['adicionarProduto']) || isset($_POST['editaProduto'])){
		include('menu.php');
		include ('produto.php');

	}elseif(isset($_POST['btnpedido'])){
		include('menu.php');
		include ('pedido.php');

	}elseif(isset($_POST['validaLogin'])){
		include ('login.php');

	}elseif (isset($_POST['gravarCliente'])) {
		include('insertCliente.php');

	}elseif (isset($_POST['adicionarPedido'])) {
		include ('menu.php');
		include('pedido.php');

	}elseif (isset($_POST['gravarProduto'])) {
		include('insertProduto.php');

	}elseif (isset($_POST['deletaCliente'])) {
		include('deletarCliente.php');

	}elseif (isset($_POST['editaClienteForm'])) {
		include('editarCliente.php');

	}elseif (isset($_POST['deletaProduto'])) {
		include('deletarProduto.php');

	}elseif (isset($_POST['editaProdutoForm'])) {
		include('editarProduto.php');

	}elseif (isset($_POST['btnadicionarPedido'])) {
		include('acaoPedido.php');

	}elseif (isset($_POST['deletaPedido'])) {
		include('acaoPedido.php');

	}else{
		include('telalogin.php');
	}
	?>

	<?php
	$tempo_atual = time();
		$tempo_permitido = 1800; // tempo em segundos até redirecionar
		$fim = -1;
		
		if(isset($_SESSION['Cookie_countdown'])) {
			$tempo_gravado = $_SESSION['Cookie_countdown'];
			$tempo_gerado = $tempo_atual-$tempo_gravado;
			$fim = $tempo_permitido - $tempo_gerado;
			if($fim <= 0) {
				echo "tempo esgotado";
				$_SESSION['Cookie_countdown'] = "";
			} else {
				$_SESSION['Cookie_countdown'] = time(); // tempo começa a contar novamente
				$tempo_gravado = $_SESSION['Cookie_countdown'];
				$tempo_gerado = $tempo_atual-$tempo_gravado;
				$fim = $tempo_permitido - $tempo_gerado;
			}
		}
		?>

		<!-- JavaScript (Opcional) -->
		<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
		<script type="text/javascript">

			function removerCampos(id){
				var node1 = document.getElementById('destino');
				node1.removeChild(node1.childNodes[0]);
			}

			$(document).ready(function(){
				$("select[name='cliente']").change(function(){
					var itemSelecionado = $('#cliente').val();
					console.log($('#cliente').val());
					$.getJSON('function.php', {
						cliente: itemSelecionado
					},function(json) {
						$("#endereco").val(json.endereco);
						$("#numero").val(json.numero);
						$("#telefone").val(json.telefone);
						$("#codigoCliente").val(json.id_cliente);
						$("#cep").val(json.cep);
						$("#bairro").val(json.bairro);
						$("#cidade").val(json.cidade);
						$("#obs").val(json.observacao);
					});
				});
			});

			$(document).ready(function(){
		       $("select[name='produtos']").change(function(){
		         var itemSelecionado = $('#produtos').val();
		         $.getJSON('function.php', {
		           produtos: itemSelecionado
		         },function(json) {
		           $("#codigoProduto").val(json.codigoProduto);
		           $("#preco").val(json.preco);
		         });
		       });
		     });

		     function calculaPreco() {

		       var quant = parseInt(document.getElementById('quantidade').value, 10);
		       var valor = parseInt(document.getElementById('preco').value, 10);

		       var soma = quant * valor;
		       console.log(soma);

		       $("#total").val(soma);
		       document.getElementById('total').innerHTML = parseFloat(soma);

		     }
		</script>




		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<script language="JavaScript">
			var contador = '<?php if($fim <= 0) { echo $tempo_permitido+1; } else { echo "$fim"; } ?>';
			function Conta() {
				if(contador <= 0) {
					location.href='telalogin.php';
					return false;
				}
				contador = contador-1;
				setTimeout("Conta()", 1000);
				var minutos = Math.floor(contador / 60);
				var segundos = contador - minutos * 60;

				document.getElementById("valor").innerHTML ="" + minutos + ":" + segundos;
			}
			window.onload = function() {
				Conta();
			}
		</script>



	</body>
	</html>