<?php

//Arquivo index responsável pela iniciação;
require 'vendor/autoload.php';
//require 'rotas.php';

use sistema\Modelo\PostModelo;

$posts = (new PostModelo())->ler(5);

foreach($posts as $post){
  echo $post->titulo.'<br>';
}


?>