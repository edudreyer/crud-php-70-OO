<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Tipo;

if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: ?status=error');
  exit;
}

// MOSTRAR DADOS DO TIPO
$obTipo = Tipo::getTipo($_GET['codigo']);

//VALIDAÇÃO DO TIPO
if(!$obTipo instanceof Tipo){
  header('location: /tipo/?status=error');
  exit;
}

//echo '<pre>';
//var_dump($obTipo);
//exit;

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])) {
  
  $id = (int)$obTipo->codigo_usu;
  $obTipo->codigo_usu   = $id; 
  $obTipo->excluir();

  header('location: /tipo/?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/confimar-exclusao-tipo.php';
include __DIR__ . '/includes/footer.php'; 
