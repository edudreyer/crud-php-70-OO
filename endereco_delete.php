<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Endereco;

if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: ?status=error');
  exit;
}

// MOSTRAR DADOS DO ENDERECOS
$obEndereco = Endereco::getEndereco($_GET['codigo']);

//VALIDAÇÃO DO ENDERECOS
if(!$obEndereco instanceof Endereco){
  header('location: /?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])) {
  $id = (int)$obEndereco->codigo_end;
  $obEndereco->codigo_end = $id; 
  $obEndereco->excluir();
  header('location: /usuario/mapa/'.$obEndereco->codigo_usu_end.'/?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/confimar-exclusao-endereco.php';
include __DIR__ . '/includes/footer.php'; 
