<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Entity\Endereco;

if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: ?status=error');
  exit;
}


$obUsuario = Usuario::getUsuario($_GET['codigo']);

//VALIDAÇÃO DO USUARIO
if(!$obUsuario instanceof Usuario){
  header('location: /?status=error');
  exit;
}

//echo '<pre>';
//var_dump($obUsuario);
//exit;

// MOSTRAR ENDERECOS DO USUARIO


//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])) {
  
  $id = (int)$obUsuario->codigo_usu;
  $obEnderecos = Endereco::getEnderecoUsuario($id);

  //VALIDAÇÃO DE TEM ENDERECOS CDASTRADOS ANTES DE EXCLUIR ( FK )
  if($obEnderecos instanceof Endereco){
	  header('location: /?status=error2');
	  exit;
   }

  $obUsuario->codigo_usu   = $id; 
  $obUsuario->excluir();

  header('location: /?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/confimar-exclusao.php';
include __DIR__ . '/includes/footer.php'; 
