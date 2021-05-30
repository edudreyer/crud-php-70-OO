<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Tipo;

// MOSTRAR DADOS DOS TIPOS
$Tipos = Tipo::getTipos();

require_once __DIR__ . '/includes/header.php'; 
require_once __DIR__ . '/includes/lista-tipo.php';
require_once __DIR__ . '/includes/footer.php'; 
