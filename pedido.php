<?php require 'validaLogin.php'; ?>

<div class="container">

	<div class="row formulario">
    	<div class="col-md-12">
      		<div class="display-4"><b><i>Pedidos</i></b></div>
    	</div>
  	</div>
  	<br>
    
	    <div class="row cadastro">
	      <div class="col-md-12">
	        <form class="form-group needs-validation justify-content-center" method="POST" novalidate>

	          	<div class="form-row">

		          	<div class="form-group col-md-1">
		            	<label for="inputPedido">Pedido: </label>
		            	<input name="pedido"  type="number" class="form-control" id="inputPedido" placeholder="Número" required="">
		         	 </div>
		          	<div class="form-group col-md-4">
		              <label for="phone_with_ddd">Telefone:</label>
		              <input name="telefone"  type="text" class="form-control" maxlength="12" placeholder="(__)_____-______" id="phone_with_ddd" required>
		          	</div>
		          	<div class="form-group col-md-2">
		              <label for="inputCodigo">Código Cliente:</label>
		              <input name="codigo"  type="text" class="form-control" id="inputCodigo" placeholder="Código" required="">
		          	</div>
		          	<div class="form-group col-md-5">
		              <label for="inputNome">Nome Cliente:</label>
		              <input name="nome"  type="text" class="form-control" id="inputNome" placeholder="Nome completo do Cliente" required="">
		          	</div>
		     	</div>

		     	<div class="form-row">

		     		<div class="form-group col-md-5">
			            <label for="inputAddress">Endereço:</label>
			            <input name="endereco"  type="text" class="form-control" id="inputAddress" placeholder="Nome da rua" required="">
			        </div>
			        <div class="form-group col-md-1">
		            	<label for="numero">Número:</label>
		            	<input name="numero"  type="text" class="form-control" id="numero" placeholder="" required="">
		          	</div>
		          	<div class="form-group col-md-2">
		              	<label for="cep">CEP:</label>
		              	<input name="cep"  type="text" class="form-control" id="cep" placeholder="88500-XXX" required="">
		            </div>
		            <div class="form-group col-md-2">
		              	<label for="inputState">Bairro:</label>
		              	<input name="bairro"  type="text" class="form-control" id="inputNeighborhood" placeholder="Ex.: Coral" required="">
		            </div>
		            <div class="form-group col-md-2">
		             	<label for="inputCity">Cidade:</label>
		              	<input name="cidade"  type="text" class="form-control" id="inputCity" placeholder="Ex.: Lages" required="">
		            </div>
	    	            
	          	</div>

	          <div class="form-row">
	            	<div class="form-group col-md-9">
			            <label for="inputObs">Obs.: </label>
			            <input name="observacao"  type="text" class="form-control" id="inputObs" placeholder="Digite aqui sua observação do endereço" name="observacao" required>
		            </div>
		            <div class="form-group col-md-3">
			            <label for="inputData">Data/Hora Local: </label>
			            <input name="hora"  type="datetime-local" class="form-control" id="inputData" name="data" required>
		          	</div>
	            
	          </div>

	          <hr>
		        <div class="form-row">
		          <div class="form-group col-md-1">
		            <label for="inputProduto">Produto: </label>
		            <input type="text" class="form-control" id="inputProduto" placeholder="Código" name="codigoProduto" required>
		          </div>
		          <div class="form-group col-md-4">
		            <label for="inputDesc">Descrição: </label>
		            <input type="text" class="form-control" id="inputDesc" placeholder="Digite descrição completa para vender" name="descricaoProduto" required>
		          </div>
		          <div class="form-group col-md-1">
		            <label for="inputPreco">Preço: </label>
		            <input type="text" class="form-control" id="inputPreco" placeholder="R$: " name="preco" required>
		          </div>
		          <div class="form-group col-md-1">
		            <label for="inputQntd">Quant: </label>
		            <input type="text" class="form-control" id="inputQntd" name="quantidade" required>
		          </div>
		          <div class="form-group col-md-1">
		            <label for="inputTotal">Total R$: </label>
		            <input type="text" class="form-control" id="inputTotal" name="total" required>
		          </div>
		          <div class="form-group col-md-4">
		            <label for="inputObsProd">Obs.: </label>
		            <input type="text" class="form-control" id="inputObsProd" name="obsProduto" required>
		          </div>
		        </div>

		        <div id="botao">
		          <button type="submit" class="btn btn-danger mb-2" id="adicionarPedido" name="adicionarPedido">Adicionar</button>
		        </div>
		        <hr>
		      </form>

		      <table class="table table-bordered">
		        <thead>
		          <tr>
		            <th scope="col">Código</th>
		            <th scope="col">Descrição</th>
		            <th scope="col">Preço</th>
		            <th scope="col">Quantidade</th>
		            <th scope="col">Total R$</th>
		            <th scope="col">Obs.:</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <th scope="row">1</th>
		            <td>Maça</td>
		            <td>2,00</td>
		            <td>20</td>
		            <td>40,00</td>
		            <td>Maça branca</td>
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