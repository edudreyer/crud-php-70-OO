<section class="text-center">
	<div class="container">
	  <h1 class="jumbotron-heading"><?=TITLE?></h1>
	</div>
</section>
<form method="post">
	<div class="form-group">
		<label>Tipo de endereço</label>
		<input type="text" name="tipo_ten" class="form-control" value="<?=$obTipo->tipo_ten?>" required="">
	</div>

	 <div class="form-group">
      <a href="javascript:history.back()">
        <button type="button" class="btn btn-primary">Cancelar</button>
      </a>

      <button type="submit" class="btn btn-success"><?=BUTTON?></button>
    </div>
</form>
<script src="/assets/js/custom.js?v=1"></script>