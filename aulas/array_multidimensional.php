<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    //$lista_coisas = array();
    $lista_coisas = [];

    $lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
    $lista_coisas['pessoas'] = [1 => 'Maria', 2 => 'João', 3 => 'José', 4 => 'Limari'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo '<hr />';

    echo $lista_coisas['frutas'][3];
    echo '<br />';
    echo $lista_coisas['pessoas'][2];


  ?>
</body>
</html>