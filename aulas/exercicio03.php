<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Curso PHP
  </title>
</head>
<body>
  <?php
    $numeros = [];

    while(count($numeros) <= 5){
      $num = rand(1, 60);

      if(!in_array($num, $numeros)){
        $numeros[] = $num;
      }
    }
    echo '<pre>';
    print_r($numeros);
    echo '</pre>';



  ?>
</body>
</html>