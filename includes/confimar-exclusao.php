<section class="text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Excluir Usuário</h1>
  </div>
</section>
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
          

          <form method="post">

                <div class="form-group">
                  <p>Você deseja realmente excluir o usuário <strong><?=$obUsuario->nome_usu?></strong>?</p>
                </div>

                <div class="form-group">
                  <a href="javascript:history.back()">
                    <button type="button" class="btn btn-primary">Cancelar</button>
                  </a>

                  <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
                </div>
            </div>
            </div>
          </div>
      </div>
