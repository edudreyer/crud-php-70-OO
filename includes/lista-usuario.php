<section class="text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Lista de Usuário</h1>
    <p>
      <a href="/usuario/insert/" class="btn btn-success my-2"><i class="bi bi-person-plus-fill"></i> Cadastar</a>
    </p>
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
              <th scope="col">Nome Completo</th>
              <th scope="col">E-mail</th>
              <th scope="col">Telefone</th>
              <th scope="col">Data</th>
              <th scope="col">End</th>
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

      case 'error2':
        $mensagem = '<div class="alert alert-danger">Erro ao executar tarefa, favor excluir os endereços antes do usuário!!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($Usuarios as $usuario){
               $resultados .=  '   <tr>';
               $resultados .=  '     <th scope="row">'.$usuario->codigo_usu.'</th>';
               $resultados .=  '     <td>'.$usuario->nome_usu.'</td>';
               $resultados .=  '     <td>'.$usuario->email_usu.'</td>';
               $resultados .=  '     <td>'.$usuario->telefone_usu.'</td>';
               $resultados .=  '     <td>'.date('d/m/Y',strtotime($usuario->dt_nasc_usu)) .'</td>';
               $resultados .=  '     <td><a href="/usuario/mapa/'.$usuario->codigo_usu.'/" class="btn btn-primary my-2"><i class="bi bi-map-fill"></i></a></td>';
               $resultados .=  '     <td><a href="/usuario/edit/'.$usuario->codigo_usu.'" class="btn btn-primary my-2"><i class="bi bi-pencil-fill"></i></a></td>';
               $resultados .=  '     <td><a href="/usuario/delete/'.$usuario->codigo_usu.'" class="btn btn-danger my-2"><i class="bi bi-trash-fill"></i></a> </td>';
               $resultados .=  '   </tr>';
               
   }  

   


   $resultados = strlen($resultados) ? $resultados : '<tr>
                                                         <td colspan="7" class="text-center">
                                                                Nenhuma usúario encontrada
                                                         </td>
                                                      </tr>';
   echo $resultados;

   ?>
   <?=$mensagem?>

                </tbody>
              </table>
            </div>
            </div>
          </div>
      </div>
