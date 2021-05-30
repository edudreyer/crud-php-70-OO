<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Entity\Endereco;

// DEFINIÇÃO DE TITULO E BOTAO
define('TITLE','Editar Usuário');
define('BUTTON','Editar');

if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: ?status=error');
  exit;
}

// MOSTRAR DADOS DO USUARIO
$obUsuario = Usuario::getUsuario($_GET['codigo']);

// MOSTRAR ENDERECOS
$whereUsuEnd = 'codigo_usu_end = '.$_GET['codigo'].''; 
$obEnderecos = Endereco::getEnderecos($whereUsuEnd);

//VALIDAÇÃO DO USUARIO
if(!$obUsuario instanceof Usuario){
  header('location: /?status=error');
  exit;
}

//echo '<pre>';
//var_dump($obEndereco);

//VALIDAÇÃO DO POST
if(isset($_POST['nome_usu'],$_POST['email_usu'],$_POST['telefone_usu'],$_POST['cpf_usu'])) {
  $id = (int)$obUsuario->codigo_usu;
  // AJUSTAR DATA EM FORMATO EN
  $data = str_replace("/", "-", $_POST["dt_nasc_usu"]);
  $data = date('Y-m-d', strtotime($data));

  $obUsuario = new Usuario;
  $obUsuario->codigo_usu   = $id;
  $obUsuario->nome_usu     = $_POST['nome_usu'];
  $obUsuario->email_usu    = $_POST['email_usu'];
  $obUsuario->telefone_usu = $_POST['telefone_usu'];
  $obUsuario->cpf_usu      = $_POST['cpf_usu'];
  $obUsuario->dt_nasc_usu  = $data;
  $obUsuario->dt_cadastro_usu  = $_POST['dt_cadastro_usu'];
  $obUsuario->dt_alteracao_usu  = date('Y-m-d H:i:s');
  $obUsuario->atualizar();

  header('location: /?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/cadastro-usuario.php';
//include __DIR__ . '/includes/lista-endereco.php';
include __DIR__ . '/includes/footer.php'; 
