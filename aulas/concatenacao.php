<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    $nome = "João Filipe";
    $cor = "verde";
    $idade = "34";

    //Operador

    echo 'Olá, ' . $nome . '. Vi que você tem ' . $idade . ' anos, gosta de videogame, e sua cor favorita é ' . $cor .'.';

    echo '<br />';

    //Aspas duplas

    echo "Olá, $nome, vi que você tem $idade anos, gosta de videogame, e sua cor favorita é $cor .";

    //Aspas simples >> Nao funcionara
    echo "Olá, $nome, vi que você tem $idade anos, gosta de videogame, e sua cor favorita é $cor .";
  ?>
</body>
</html>