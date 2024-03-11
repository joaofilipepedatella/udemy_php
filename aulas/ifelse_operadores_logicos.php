<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    //Operadores logicos
    /* 
    E: AND ou && -> As duas condições são verdadeiras.
    Ou: OR ou || -> Pelo menos uma condição é verdadeira.
    Xor: XOR -> Apenas uma das condições deve ser verdadeira, não ambas. (v XOR x = f)
    Negação: ! -> Inverte o resultado retornado pela expressão
    */

    if (!(3 == 4)) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }
  ?>
</body>
</html>