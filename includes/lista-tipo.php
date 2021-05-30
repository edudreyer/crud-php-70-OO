<section class="text-center">
  <div class="container">
    <h3 class="jumbotron-heading">Lista de tipos <a href="/tipo/insert/" class="btn btn-success my-2"><i class="bi bi-person-plus-fill"></i> Cadastar</a></h3> 
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
              <th scope="col">Tipo</th>
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
  foreach($Tipos as $tipo){
               $resultados .=  '   <tr>';
               $resultados .=  '       <th scope="row">'.$tipo->codigo_ten.'</th>';
               $resultados .=  '       <td>'.$tipo->tipo_ten.'</td>';
               $resultados .=  '      <td><a href="/tipo/edit/'.$tipo->codigo_ten.'" class="btn btn-primary my-2"><i class="bi bi-pencil-fill"></i></a></td>';
               $resultados .=  '     <td><a href="/tipo/delete/'.$tipo->codigo_ten.'" class="btn btn-danger my-2"><i class="bi bi-trash-fill"></i></a> </td>';
               $resultados .=  '   </tr>';
               
   }  

   $resultados = strlen($resultados) ? $resultados : '<tr>
                                                         <td colspan="2" class="text-center">
                                                                Nenhuma endereço cadastrado.
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
