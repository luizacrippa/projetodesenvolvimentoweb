<?php
require 'validaLogin.php';

$id = '';
$nome = '';
$endereco = '';
$numero = '';
$observacao = '';
$cep = '';
$bairro = '';
$cidade = '';
$estado = '';
$telefone = '';
$email = '';

if (isset($_POST['editaCliente'])) {

	$filtro = array('auxId' => $_POST['idCliente']);
	$rs = $pdo->prepare("SELECT id_cliente,nome,endereco,numero,observacao,cep,bairro,cidade,estado,telefone,email FROM tb_clientes WHERE id_cliente LIKE :auxId");
	if ($rs->execute($filtro)) {
		if ($rs->rowCount() > 0) {
			while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
				$id = $row->id_cliente;
				$nome = $row->nome;
				$endereco = $row->endereco;
				$numero = $row->numero;
				$observacao = $row->observacao;
				$cep = $row->cep;
				$bairro = $row->bairro;
				$cidade = $row->cidade;
				$estado = $row->estado;
				$telefone = $row->telefone;
				$email = $row->email;
			}
		}
	}
}
?>

<div class="container">

	<div class="row formulario">
		<div class="col-md-12">
			<div class="display-4"><b><i>Cadastro de Clientes</i></b></div>
		</div>
	</div>
	<br>

	<div class="row cadastro">
		<div class="col-md-12">
			<form class="form-group needs-validation justify-content-center" method="POST" action="index.php" novalidate>

				<div class="form-row">
					<div class="col-md-2">
						<label for="idCliente">Código :</label>
						<input readonly value="<?php echo $id; ?>" type="text" name="idCliente" id="idCliente" class="form-control" arria-describeby="idClienteHelp" placeholder="ID Cliente">
						<small id="idClienteHelp" class="form-text text-muted">Informe o id do cliente.</small>
					</div>

					<div class="form-group col-md-10">
						<label for="inputNome">Nome Cliente:</label>
						<input  value="<?php echo $nome; ?>" name="nome" type="text" class="form-control" id="inputNome" placeholder="Nome" required="">
					</div>

				</div>

				<div class="form-row">
					<div class="form-group col-md-10">
						<label for="inputAddress">Endereço:</label>
						<input value="<?php echo $endereco; ?>" name="endereco"  type="text" class="form-control" id="inputAddress" placeholder="" required="">
					</div>
					<div class="form-group col-md-2">
						<label for="numero">Número:</label>
						<input value="<?php echo $numero; ?>" name="numero"  type="text" class="form-control" id="numero" placeholder="" required="">
					</div>

				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="inputAddress">Observação:</label>
						<input value="<?php echo $observacao; ?>" name="observacao"  type="text" class="form-control" id="inputAddress" placeholder="" required="">
					</div>
				</div>


				<div class="form-row">

					<div class="form-group col-md-2">
						<label for="cep">CEP:</label>
						<input value="<?php echo $cep; ?>" name="cep"  type="text" class="form-control" id="cep" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="inputCity">Bairro:</label>
						<input value="<?php echo $bairro; ?>" name="bairro"  type="text" class="form-control" id="inputNeighborhood" required="">
					</div>
					<div class="form-group col-md-4">
						<label for="inputCity">Cidade:</label>
						<input value="<?php echo $cidade; ?>" name="cidade" type="text" class="form-control" id="inputCity" required="">
					</div>
					<div class="form-group col-md-2">
						<label for="estado">Estado:</label>
						<select id="estado" name="estado" class="form-control">
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="RS">RS</option>
							<option value="SC">SC</option>

						</select>
					</div>

				</div>


				<div class="form-row">	

					<div class="form-group col-md-4">
						<label for="phone_with_ddd">Telefone:</label>
						<input value="<?php echo $telefone; ?>" name="telefone" type="text" class="form-control" maxlength="12" placeholder="(__)_____-______" id="phone_with_ddd" required>
					</div>

					<div class="form-group col-md-8">
						<label for="phone_with_ddd">E-mail:</label>
						<input value="<?php echo $email; ?>" name="email" type="text" class="form-control"  placeholder="" id="email" required>
					</div>

				</div>


				<?php
				if (isset($_POST['adicionarCliente'])) {
					echo "<div class='form-row'><div class='col'>";
					echo "<button type='submit' name='gravarCliente' id='addClienteDB' class='btn btn-danger form-control'><i class='fas fa-save'></i> Salvar</button>";
					echo "</div></div>";
				} elseif (isset($_POST['editaCliente'])) {
					echo "<div class='form-row'><div class='col'>";
					echo "<button type='submit' name='editaClienteForm' id='editClienteDB' class='btn btn-secondary form-control'><i class='fas fa-save'></i> Salvar</button>";
					echo "</div><div class='col'>";
					echo "<button type='submit' name='deletaCliente' id='excluiClienteDB' class='btn btn-danger form-control'><i class='far fa-trash-alt'></i> Excluir</button>";
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