<section class="text-center">
	<div class="container">
	  <h1 class="jumbotron-heading"><?=TITLE?></h1>
	</div>
</section>
<form method="post">
	<input type="hidden" name="dt_cadastro_usu" class="form-control" value="<?=$obUsuario->dt_cadastro_usu?>" >
	<div class="form-group">
		<label>Nome completo</label>
		<input type="text" name="nome_usu" class="form-control" value="<?=$obUsuario->nome_usu?>" required="">
	</div>
	<div class="form-group">
		<label>E-mail</label>
		<input type="email" name="email_usu" class="form-control" value="<?=$obUsuario->email_usu?>" required="">
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="telefone_usu" id="telefone_usu" value="<?=$obUsuario->telefone_usu?>" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_usu" id='cpf_usu' value="<?=$obUsuario->cpf_usu?>" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>Data de nascimento</label>
		<input type="text" name="dt_nasc_usu" id="dt_nasc_usu" value="<?= $obUsuario->dt_nasc_usu != '' ? date('d/m/Y', strtotime($obUsuario->dt_nasc_usu)) : ''?>" class="form-control">
	</div>

	 <div class="form-group">
      <a href="javascript:history.back()">
        <button type="button" class="btn btn-primary">Cancelar</button>
      </a>

      <button type="submit" class="btn btn-success"><?=BUTTON?></button>
    </div>
</form>
<script src="/assets/js/custom.js?v=2.2"></script>