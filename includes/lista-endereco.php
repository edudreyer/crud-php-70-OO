<section class="text-center">
  <div class="container">
    <h3 class="jumbotron-heading">Lista de Endereços do <?=$obUsuario->nome_usu;?> <a href="/endereco/insert/<?=$obUsuario->codigo_usu;?>" class="btn btn-success my-2"><i class="bi bi-person-plus-fill"></i> Cadastar</a></h3> 
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
          <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">CEP</th>
              <th scope="col">logradouro</th>
              <th scope="col">cidade</th>
              <th scope="col">UF</th>
              <th scope="col">Local</th>
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>


            <?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Operação realizada com sucesso!!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Erro ao executar tarefa!!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($obEnderecos as $endereco){
               $resultados .=  '   <tr>';
               $resultados .=  '       <th scope="row">'.$endereco->codigo_end.'</th>';
               $resultados .=  '       <td>'.$endereco->cep_end.'</td>';
               $resultados .=  '       <td>'.$endereco->logradouro_end.'</td>';
               $resultados .=  '       <td>'.$endereco->cidade_end.'</td>';
               $resultados .=  '      <td>'.$endereco->uf_end.'</td>';
               $resultados .=  '      <td><a  href="" class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModa'.$endereco->codigo_end.'"><i class="bi bi-eye-fill"></i></a></td>';
               $resultados .=  '      <td><a href="/endereco/edit/'.$endereco->codigo_end.'" class="btn btn-primary my-2"><i class="bi bi-pencil-fill"></i></a></td>';
               $resultados .=  '     <td><a href="/endereco/delete/'.$endereco->codigo_end.'" class="btn btn-danger my-2"><i class="bi bi-trash-fill"></i></a> </td>';
               $resultados .=  '   </tr>';
      

               $endereco_google = $endereco->logradouro_end .  ' ' . $endereco->numero_end . ' - ' . $endereco->bairro_end . ' - ' . $endereco->cidade_end . ' - ' . $endereco->uf_end; 
               ?>

              <!-- Modal -->
              <div class="modal fade" id="exampleModa<?php echo $endereco->codigo_end ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Localização</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <iframe frameborder="0" width="100%" src="<?php echo $maps = "https://www.google.com.br/maps/place/".$endereco_google ; ?>"></iframe>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>



            <?php
               }  

               $resultados = strlen($resultados) ? $resultados : '<tr>
                                                                     <td colspan="7" class="text-center">
                                                                            Nenhuma endereço cadastrado.
                                                                     </td>
                                                                  </tr>';
               echo $resultados;
               ?>
               <?=$mensagem?>

          

                </tbody>
              </table>
              <div class="form-group">
                    <a href="javascript:history.back()">
                      <button type="button" class="btn btn-primary">Voltar</button>
                    </a>
              </div>
             </div>
            </div>
          </div>
      </div>
