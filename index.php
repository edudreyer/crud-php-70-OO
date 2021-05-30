<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Usuario;

// MOSTRAR DADOS DO USUARIO
$Usuarios = Usuario::getUsuarios();

require_once __DIR__ . '/includes/header.php'; 
require_once __DIR__ . '/includes/lista-usuario.php';
require_once __DIR__ . '/includes/footer.php'; 
