<section class="text-center">
	<div class="container">
	  <h1 class="jumbotron-heading"><?=TITLE?></h1>
	</div>
</section>
<form method="post">
	<input type="hidden" name="codigo_usu_end" id="codigo_usu_end" value="<?=$obUsuario->codigo_usu?>">
	<div class="form-group">
		<label>Tipo</label>

		<select class="form-control pula" name="tipo_end" >
		  <option>Selecione o tipo</option>

		   <?php
			   $resultados = '';
			   foreach($obTipo as $tipo){
   			       $selectfrom = ( $obEnderecos->tipo_end == $tipo->codigo_ten ) ? 'selected' : ''; 
	               $resultados .=  '<option  value='.$tipo->codigo_ten .'  '.$selectfrom.'>'.$tipo->tipo_ten .'</option>';               
	   			}
	   			echo $resultados;
   		   ?>	
		</select>
	</div>
	<div class="form-group">
		<label>CEP</label>
		<input type="cep_end" name="cep_end"  id="cep_end" class="form-control pula" value="<?=$obEnderecos->cep_end?>" required="">
	</div>
	<div class="form-group">
		<label>Rua, Logradouro, Travessa</label>
		<input type="text" name="logradouro_end" id="logradouro_end" value="<?=$obEnderecos->logradouro_end?>" class="form-control pula" required="">
	</div>
	<div class="form-group">
		<label>Numero</label>
		<input type="text" name="numero_end" id='numero_end' value="<?=$obEnderecos->numero_end?>" class="form-control pula" required="">
	</div>
	<div class="form-group">
		<label>Complemento</label>
		<input type="text" name="complemento_end" id="complemento_end" value="<?=$obEnderecos->complemento_end?>" class="form-control pula">
	</div>
	<div class="form-group">
		<label>Bairro</label>
		<input type="text" name="bairro_end" id="bairro_end" value="<?=$obEnderecos->bairro_end?>" class="form-control pula">
	</div>
	<div class="form-group">
		<label>Cidade</label>
		<input type="text" name="cidade_end" id="cidade_end" value="<?=$obEnderecos->cidade_end?>" class="form-control pula">
	</div>
	<div class="form-group">
		<label>UF</label>
		<input type="text" name="uf_end" id="uf_end" value="<?=$obEnderecos->uf_end?>" class="form-control pula">
	</div>

	 <div class="form-group">
      <a href="javascript:history.back()">
        <button type="button" class="btn btn-primary">Cancelar</button>
      </a>

      <button type="submit" class="btn btn-success"><?=BUTTON?></button>
    </div>
</form>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script src="/assets/js/custom.js?v=2"></script>
