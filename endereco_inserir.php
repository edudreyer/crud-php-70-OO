<?php
ini_set('display_errors', 0 );
error_reporting(0);

require __DIR__ . '/vendor/autoload.php';
use \App\Entity\Usuario;
use \App\Entity\Endereco;
use \App\Entity\Tipo;

// DEFINIÇÃO DE TITULO E BOTAO
define('TITLE','Cadastrar Endereço');
define('BUTTON','Cadastrar');


// MOSTRAR TIPOS 
$obTipo = Tipo::getTipos();

// MOSTRAR DADOS DO USUARIO
$obUsuario = Usuario::getUsuario($_GET['codigo']);

// MOSTRAR ENDERECOS DO ENDERECO
$obEnderecos = Endereco::getEnderecos($_GET['codigo']);


//VALIDAÇÃO DO POST
if(isset($_POST['codigo_usu_end'],$_POST['tipo_end'],$_POST['logradouro_end'],$_POST['cep_end'])) {
    
  $obEnderecos = new Endereco;
  $obEnderecos->codigo_usu_end  = $_POST['codigo_usu_end'];
  $obEnderecos->tipo_end        = $_POST['tipo_end'];
  $obEnderecos->cep_end         = $_POST['cep_end'];
  $obEnderecos->logradouro_end  = $_POST['logradouro_end'];
  $obEnderecos->numero_end      = $_POST['numero_end'];
  $obEnderecos->complemento_end = $_POST['complemento_end'];
  $obEnderecos->bairro_end      = $_POST['bairro_end'];
  $obEnderecos->cidade_end      = $_POST['cidade_end'];
  $obEnderecos->uf_end          = $_POST['uf_end'];
  $obEnderecos->cadastrar();


//echo '<pre>';
//var_dump($obEnderecos);
//echo '</pre>';
//exit;

  header('location: /usuario/mapa/'.$_POST['codigo_usu_end'].'/?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/cadastro-endereco.php';
include __DIR__ . '/includes/footer.php'; 
