<?php

//Arquivo index responsável pela iniciação;

require 'sistema/configuracao.php';
include './sistema/Nucleo/Helpers.php';
include './sistema/Nucleo/Mensagem.php';
include './sistema/Nucleo/Controlador.php';

use sistema\Nucleo\Controlador;

$controlador = new Controlador();
echo '<hr>';
var_dump($controlador);
