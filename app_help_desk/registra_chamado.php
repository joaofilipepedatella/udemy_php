<?php

  session_start();

  //Montagem do texto
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);

  //implode('#', $_POST);
  $texto = $_SESSION['id'] . '#' .  $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;


  //abrindo arquivo
  $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
  //escrevendo o texto
  fwrite($arquivo, $texto);
  //fechando arquivo
  fclose($arquivo);

  //echo $texto;
  header('Location: consultar_chamado.php');
?>