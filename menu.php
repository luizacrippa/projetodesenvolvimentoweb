<?php require 'validaLogin.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<title>Index</title>

</head>
<body>



	<div class="jumbotron jumbotron-fluid py-3">
      <div class="container">
      <form method="post" action="index.php" class="justify">
        <div class="row navbar">
          <div class="col-md-1">
          </div>
          <button type="submit" name= "cliente" class="btn btn-danger mb-2 ml-4 col-md-2">Clientes</button>
          <button type="submit" name="produto" class="btn btn-danger mb-2 ml-4 col-md-2">Produtos</button>
          <button type="submit" name="pedido" class="btn btn-danger mb-2 ml-4 col-md-2">Pedidos</button>
          <button type="submit" name="index" class="btn btn-danger mb-2 ml-4 col-md-2">Sair</button>
          <div class="col-md-1">
          </div>
        </div>
      </form>
    </div>
  </div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>