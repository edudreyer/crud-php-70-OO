<?php
ini_set('display_errors', 0 );
error_reporting(0);

require __DIR__ . '/vendor/autoload.php';
use \App\Entity\Tipo;

// DEFINIÇÃO DE TITULO E BOTAO
define('TITLE','Cadastrar tipo de endereço');
define('BUTTON','Cadastrar');


//VALIDAÇÃO DO POST
if(isset($_POST['tipo_ten'])) {
  
  $obTipo = new Tipo;
  $obTipo->tipo_ten     = $_POST['tipo_ten'];
  $obTipo->cadastrar();

  header('location: /tipo/?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/cadastro-tipo.php';
include __DIR__ . '/includes/footer.php'; 
