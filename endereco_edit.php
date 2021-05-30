<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Entity\Endereco;
use \App\Entity\Tipo;


// DEFINIÇÃO DE TITULO E BOTAO
define('TITLE','Editar endereço');
define('BUTTON','Editar');

if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: ?status=error');
  exit;
}


// MOSTRAR TIPOS 
$obTipo = Tipo::getTipos();

// MOSTRAR ENDERECOS DO USUARIO
$obEnderecos = Endereco::getEndereco($_GET['codigo']);

// MOSTRAR DADOS DO USUARIO
$obUsuario = Usuario::getUsuario($obEnderecos->codigo_usu_end);


//VALIDAÇÃO DO USUARIO
if(!$obEnderecos instanceof Endereco){
  header('location: /?status=error');
  exit;
}


//VALIDAÇÃO DO POST
if(isset($_POST['codigo_usu_end'],$_POST['tipo_end'],$_POST['logradouro_end'],$_POST['cep_end'])) {
  $id = (int)$obEnderecos->codigo_end;
  $obEnderecos = new Endereco;
  $obEnderecos->codigo_end      = (int)$id;
  $obEnderecos->codigo_usu_end  = $_POST['codigo_usu_end'];
  $obEnderecos->tipo_end        = $_POST['tipo_end'];
  $obEnderecos->cep_end         = $_POST['cep_end'];
  $obEnderecos->logradouro_end  = $_POST['logradouro_end'];
  $obEnderecos->numero_end      = $_POST['numero_end'];
  $obEnderecos->complemento_end = $_POST['complemento_end'];
  $obEnderecos->bairro_end      = $_POST['bairro_end'];
  $obEnderecos->cidade_end      = $_POST['cidade_end'];
  $obEnderecos->uf_end          = $_POST['uf_end'];
  $obEnderecos->atualizar();

  header('location: /usuario/mapa/'.$obEnderecos->codigo_usu_end.'/?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/cadastro-endereco.php';
include __DIR__ . '/includes/footer.php'; 
