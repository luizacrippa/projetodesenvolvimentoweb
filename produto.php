<?php 
require 'validaLogin.php';


$id = '';
$descricao = '';
$valor = '';
$imagem = '';

if (isset($_POST['editaProduto'])) {

	$filtro = array('auxId' => $_POST['idProduto']);
	$rs = $pdo->prepare("SELECT id_produto,descricao,valor,imagem FROM tb_produtos WHERE id_produto LIKE :auxId");
	if ($rs->execute($filtro)) {
		if ($rs->rowCount() > 0) {
			while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
				$id = $row->id_produto;
				$descricao = $row->descricao;
				$valor = $row->valor;
				$imagem = $row->imagem;
			}
		}
	}
}

?>

	<div class="container">
		<div class="row formulario">
      		<div class="col-md-12">
        		<div class="display-4"><b><i>Cadastro de Produtos</b></i></div>
      		</div>
    	</div>
    	<br>
	    <div class="row cadastro">
	      <div class="col-md-12">
	        <form class="form-group needs-validation justify-content-center" method="POST" enctype="multipart/form-data" novalidate>

	        <div class="form-row">

	            <div class="form-group col-md-2">
	              <label for="idProduto">Código :</label>
						<input readonly value="<?php echo $id; ?>" type="text" name="idProduto" id="idProduto" class="form-control" arria-describeby="idProdutoHelp" placeholder="ID Produto">
						<small id="idProdutoHelp" class="form-text text-muted">Informe o id do produto.</small>
	            </div>
	            <div class="form-group col-md-10 ">
	              <label for="inputNome">Descrição do Produto:</label><br>
	              <input value="<?php echo $descricao; ?>" name="descricao"  type="text" class="form-control" id="inputDescricao" placeholder="Digite descrição completa para venda" required>
	            </div>

	        </div>
	            
	        <div class="form-row">

	            <div class="form-group col-md-2">
	              <label for="cep">Preço:</label>
	              <input value="<?php echo $valor; ?>" name="valor"  type="text" class="form-control" id="inputPrice" placeholder="R$" required="">
	            </div>
	             <div class="form-group col-md-5">
	              <label for="inputFoto">Foto: </label>
	              <input value="<?php echo $imagem; ?>" name="imagem" type="file" class="form-control border-0" id="inputFoto" required>
	            </div>

	        </div>

	        <?php
				if (isset($_POST['adicionarProduto'])) {
					echo "<div class='form-row'><div class='col'>";
					echo "<button type='submit' name='gravarProduto' id='addProdutoDB' class='btn btn-danger form-control'><i class='fas fa-save'></i> Salvar</button>";
					echo "</div></div>";
				} elseif (isset($_POST['editaProduto'])) {
					echo "<div class='form-row'><div class='col'>";
					echo "<button type='submit' name='editaProdutoForm' id='editProdutoDB' class='btn btn-secondary form-control'><i class='fas fa-save'></i> Salvar</button>";
					echo "</div><div class='col'>";
					echo "<button type='submit' name='deletaProduto' id='excluiProdutoDB' class='btn btn-danger form-control'><i class='far fa-trash-alt'></i> Excluir</button>";
					echo "</div></div>";
				}
				?>
	          
	        </form>
	      </div>
	    </div>
  	</div>
  	

	<div>
		<footer>
			<div class="footer-copyright text-center py-2"><b>@ 2019, Luíza Crippa</b>
			</div>
		</footer>
	</div>