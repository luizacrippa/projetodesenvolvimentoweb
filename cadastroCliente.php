<?php require 'validaLogin.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container">
  <div class="row formulario">
    <div class="col-md-12">
      <div class="display-4"><b><i>Clientes</i></b></div>
    </div>
  </div>
  <br>

  <div class="row cadastro">
    <div class="col-md-12">
      <form action="index.php" method="post">
      <div id="botao">
        <button type="submit" class="btn btn-danger mb-2" id="botao" name="adicionarCliente">Adicionar Cliente</button>
      </div>
      <hr>
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Endereço:</th>
          <th scope="col">Número:</th>
          <th scope="col">Observação:</th>
          <th scope="col">CEP:</th>
          <th scope="col">Bairro:</th>
          <th scope="col">Cidade:</th>
          <th scope="col">Estado:</th>
          <th scope="col">Telefone:</th>
          <th scope="col">E-mail:</th>
          <th scope="col"><button type="submit" class="btn btn-warning">Editar</button></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Luíza Crippa</td>
          <td>Rua Ex-Combatentes da FEB</td>
          <td>152</td>
          <td>Casa</td>
          <td>88501-420</td>
          <td>Centro</td>
          <td>Lages</td>
          <td>SC</td>
          <td>4899963-8621</td>
          <td>luucrippa@gmail.com</td>
          <td><button type="submit" name="editar" class="btn btn-warning"> Editar: 1</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>

  <div>
    <footer>
      <div class="footer-copyright text-center py-2"><b>@ 2019, Luíza Crippa</b>
      </div>
    </footer>
  </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>