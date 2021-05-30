<?php
ini_set('display_errors', 0 );
error_reporting(0);

require __DIR__ . '/vendor/autoload.php';
use \App\Entity\Usuario;

// DEFINIÇÃO DE TITULO E BOTAO
define('TITLE','Cadastrar Usuário');
define('BUTTON','Cadastrar');


//VALIDAÇÃO DO POST
if(isset($_POST['nome_usu'],$_POST['email_usu'],$_POST['telefone_usu'],$_POST['cpf_usu'])) {
  
  // AJUSTAR DATA EM FORMATO EN
  $dt_nasc_usu = date('Y-m-d', strtotime($_POST['dt_nasc_usu']));
  $obUsuario = new Usuario;
  $obUsuario->nome_usu     = $_POST['nome_usu'];
  $obUsuario->email_usu    = $_POST['email_usu'];
  $obUsuario->telefone_usu = $_POST['telefone_usu'];
  $obUsuario->cpf_usu      = $_POST['cpf_usu'];
  $obUsuario->dt_nasc_usu  = $dt_nasc_usu;
  $obUsuario->dt_cadastro_usu  = date('Y-m-d H:i:s');
  $obUsuario->cadastrar();

  header('location: /?status=success');
  exit;

}

include __DIR__ . '/includes/header.php'; 
include __DIR__ . '/includes/cadastro-usuario.php';
include __DIR__ . '/includes/footer.php'; 
