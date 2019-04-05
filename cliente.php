<?php require 'validaLogin.php'; ?>

	<div class="container">

		<div class="row formulario">
      		<div class="col-md-12">
        		<div class="display-4"><b><i>Cadastro de Clientes</i></b></div>
      		</div>
    	</div>
    	<br>
    
	    <div class="row cadastro">
	      <div class="col-md-12">
	        <form class="form-group needs-validation justify-content-center" method="POST" novalidate>

	          <div class="form-row">

	          	<div class="form-group col-md-2">
	              <label for="inputCodigo">Código:</label>
	              <input name="codigo"  type="text" class="form-control" id="inputCodigo" placeholder="Código" required="">
	            </div>
	            <div class="form-group col-md-10">
	              <label for="inputNome">Nome Cliente:</label>
	              <input name="nome" type="text" class="form-control" id="inputNome" placeholder="Nome" required="">
	            </div>

	        </div>

	        <div class="form-row">
	        	<div class="form-group col-md-10">
		            <label for="inputAddress">Endereço:</label>
		            <input name="endereco"  type="text" class="form-control" id="inputAddress" placeholder="" required="">
	          </div>
	          <div class="form-group col-md-2">
		            <label for="numero">Número:</label>
		            <input name="numero"  type="text" class="form-control" id="numero" placeholder="" required="">
		      </div>

	        </div>

	        <div class="form-row">
	        	<div class="form-group col-md-12">
		            <label for="inputAddress">Observação:</label>
		            <input name="observacao"  type="text" class="form-control" id="inputAddress" placeholder="" required="">
	          </div>
	        </div>


	        <div class="form-row">

	        	<div class="form-group col-md-1">
	              <label for="cep">CEP:</label>
	              <input name="cep"  type="text" class="form-control" id="cep" required="">
	            </div>
	            <div class="form-group col-md-4">
	              <label for="inputCity">Bairro:</label>
	              <input name="bairro"  type="text" class="form-control" id="inputNeighborhood" required="">
	            </div>
	            <div class="form-group col-md-4">
	              <label for="inputCity">Cidade:</label>
	              <input name="cidade" type="text" class="form-control" id="inputCity" required="">
	            </div>
	            <div class="form-group col-md-3">
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
	              <input name="telefone" type="text" class="form-control" maxlength="12" placeholder="(__)_____-______" id="phone_with_ddd" required>
	            </div>
	           
	            <div class="form-group col-md-8">
	              <label for="phone_with_ddd">E-mail:</label>
	              <input  name="email" type="text" class="form-control" maxlength="12" placeholder="" id="email" required>
	            </div>

	         </div>


	          <div id="botao">
	            <button type="submit" class="btn btn-danger mb-2" name="gravarCliente" id="gravarCliente">GRAVAR NOVO CLIENTE</button>
	          </div>
	          
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