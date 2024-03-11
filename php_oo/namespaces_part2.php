<?php
  require "./bibliotecas/lib1/lib1.php";
  require "./bibliotecas/lib2/lib2.php";

  use A\Cliente;
  use B\Cliente as ClienteB;

  $c = new Cliente();
  print_r($c); 
  echo $c->__get('nome');

  $c = new ClienteB();
  print_r($c); 
  echo $c->__get('nome');








?>