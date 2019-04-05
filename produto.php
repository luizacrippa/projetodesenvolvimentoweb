<?php require 'validaLogin.php'; ?>

	<div class="container">
		<div class="row formulario">
      		<div class="col-md-12">
        		<div class="display-4"><b><i>Produtos</b></i></div>
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
	            <div class="form-group col-md-10 ">
	              <label for="inputNome">Descrição do Produto:</label><br>
	              <input name="nome"  type="text" class="form-control" id="inputDescricao" name="descricao" placeholder="Digite descrição completa para venda" required>
	            </div>

	        </div>
	            
	        <div class="form-row">

	            <div class="form-group col-md-2">
	              <label for="cep">Preço:</label>
	              <input name="preco"  type="text" class="form-control" id="inputPrice" placeholder="R$" required="">
	            </div>
	             <div class="form-group col-md-5">
	              <label for="inputFoto">Foto: </label>
	              <input name="foto"  type="file" class="form-control border-0" id="inputFoto" required>
	            </div>

	        </div>
	      
	          <div id="botao">
	            <button type="submit" class="btn btn-danger mb-2" name="gravarProduto" id="gravarProduto">GRAVAR</button>
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