<?php

  session_start();

  /* echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  remover indices do array de sessao;
  unset();

  unset($_SESSION['s']); //para remover o indice apenas se existir

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';


  destruir a variavel de sessao;
  session_destroy();

  session_destroy(); //sera destruida
  forçar um redirecionamento

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>'; */

  session_destroy();

  header('Location: index.php');


?>