<?php require 'validaLogin.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container-fluid">
  <div class="row formulario">
    <div class="col-md-12">
      <div class="display-4"><b><i>Produtos</i></b></div>
    </div>
  </div>
  <br>

  <div class="row cadastro">
    <div class="col-md-12">
      <form action="index.php" method="post">
      <div id="botao">
        <button type="submit" class="btn btn-danger mb-2" id="botao" name="adicionarProduto">Adicionar Produto</button>
      </div>
      <hr>
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Descrição:</th>
          <th scope="col">Preço:</th>
          <th scope="col">Imagem:</th>
          
          <th scope="col"><button type="submit" class="btn btn-light"><i class="far fa-trash-alt"></i></button></th>
          <th scope="col"><button type="submit" class="btn btn-light"><i class="fas fa-edit"></i></button></th>
        </tr>
      </thead>
      <tbody>

        <?php
          //busca os clientes
            $filtro = array('auxDesc' => '%%');
            $rs = $pdo->prepare("SELECT id_produto,descricao,valor,imagem 
                FROM tb_produtos WHERE descricao LIKE :auxDesc");

            if ($rs->execute($filtro)) {
                  if ($rs->rowCount() > 0) {
                    while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                      echo "<tr>";
                      echo "<th scope='row'>{$row->id_produto}</td>";
                      echo "<td>{$row->descricao}</td>";
                      echo "<td>{$row->valor}</td>";
                      echo "<td><img src='{$row->imagem}' width=150></td>";

                  echo "<td><form action='index.php' method='POST' name='delProduto{$row->id_produto}'>
                      <input type='hidden' name='idProduto' value='{$row->id_produto}'>
                      <button class='btn btn-danger' type='submit' name='deletaProduto'><i class='far fa-trash-alt'></i></button>
                      </form></td>";
                      echo "<td><form action='index.php' method='POST' name='editProduto{$row->id_produto}'>
                      <input type='hidden' name='idProduto' value='{$row->id_produto}'>
                      <button class='btn btn-danger' type='submit' name='editaProduto'><i class='fas fa-edit'></i></button>
                      </form></td>";
                      echo "</tr>";
                    }
                  } 
                }
                 echo "</tbody>";
        ?>

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