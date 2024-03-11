<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  
  <?php
    $idade = 18;
    $peso = 49;
    $doador = false;

    if (($idade <= 69 && $idade >= 16) && $peso >= 50){
      $doador = true;
    } else {
      $doador = false;
    }
  ?>

  <h1>Pode doar Sangue?</h1>
  <p>Idade:  <?= $idade ?></p>
  <p>Peso: <?= $peso ?></p>
  <p> 
    <?php 
    if($doador == true){
      echo "Atende aos requisitos";
    } else {
      echo "Não atende aos requistos";
    }
    ?>
  </p>
</body>
</html>