<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Tipo;

// DEFINIÇÃO DE TITULO E BOTAO
define('TITLE','Editar tipo de endereço');
define('BUTTON','Editar');

if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: ?status=error');
  exit;
}

// MOSTRAR DADOS DO TIPO
$obTipo = Tipo::getTipo($_GET['codigo']);


//VALIDAÇÃO DO POST
if(isset($_POST['tipo_ten'])) {
  $id = (int)$obTipo->codigo_ten;
  // AJUSTAR DATA EM FORMATO EN
  $obTipo = new Tipo;
  $obTipo->codigo_ten   = $id;
  $obTipo->tipo_ten     = $_POST['tipo_ten'];
  $obTipo->atualizar();

  header('location: /tipo/?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/cadastro-tipo.php';
include __DIR__ . '/includes/footer.php'; 
