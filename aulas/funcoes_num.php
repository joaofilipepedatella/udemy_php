<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    $num = 13.2;
    //ceil() -> Arredonda para cima;
    echo ceil($num);
    echo '<hr />';

    //floor() -> Arredonda para baixo;
    echo floor($num);
    echo '<hr />';

    //round() -> Arredonda de acordo com as casas decimais;
    echo round($num);
    echo '<hr />';

    //rand() -> Retorna um número inteiro aleatório (de 0 até randmax);
    echo rand();
    echo '<br />' .getrandmax(); //Mostra o valor máximo a ser pego pelo rand();
    echo '<br />';
    echo rand(0, 100); //Retorna um número de 0 a 100;
    echo '<hr />';

    //sqrt() -> retorna a raíz quadrada de um número;
    echo sqrt(9);





  ?>
</body>
</html>