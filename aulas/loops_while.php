<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    $num = 1;
    //operadores de comparacao / logicos

    echo '--inicio do loop-- <br />';
    while($num < 10){
      $num++; //criterio de parada

      if($num == 2 || $num == 6){
        continue; //Como atendeu, retorna ao inicio do loop;
      }
      
      echo "$num <br />";



      /* 
      if($num > 100) {
        break; //interrompe o loop completamente;
      } */
    }
    echo '--fim do loop--';






  ?>
</body>
</html>