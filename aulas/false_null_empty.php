<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

  //false (true/false) => boolean;
  //null e empty => valores especiais;

  $funcionario1 = null;
  $funcionario2 = "";

  //valores null;
  if(is_null($funcionario1)){
    echo "A variável é null";
  } else {
    echo "A variável nao é null";
  }

  echo '<br />';

  if(is_null($funcionario2)){
    echo "A variável é null";
  } else {
    echo "A variável nao é null";
  }

  echo '<hr />';
  
  //valores vazios;
  if(empty($funcionario1)){
    echo "A variável é vazia";
  } else {
    echo "A variável nao é vazia";
  }

  echo '<br />';

  if(empty($funcionario2)){
    echo "A variável é vazia";
  } else {
    echo "A variável nao é vazia";
  }



  ?>
</body>
</html>