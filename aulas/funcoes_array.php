<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

  //is_array()

  $array = ['String', 'Number', 'Boolean', 'Null'];

  $retorno = is_array($array);

  if($retorno){
    echo 'Sim, é um array.';
  }else {
    echo 'Não é um array.';
  }

  echo '<hr />';

  //array_keys()

  $array2 = [1 => 'a', 7 => 'b', 18 => 'c'];

  echo '<pre>';
    print_r($array2);
  echo '</pre>';

  $chaves_array = array_keys($array2);
  
  echo '<pre>';
    print_r($chaves_array);
  echo '</pre>';

  echo '<hr />';

  //sort()

  echo '<pre>';
    print_r($array);
  echo '</pre>';

  sort($array); //retorna true/false -> por isso que tem um novo print;

  echo '<pre>';
    print_r($array);
  echo '</pre>';

  echo '<hr />';

  //asort()

  $array3 = ['String', 'Number', 'Boolean', 'Null'];

  echo '<pre>';
    print_r($array3);
  echo '</pre>';

  asort($array3);
  
  echo '<pre>';
    print_r($array3);
  echo '</pre>';

  echo '<hr />';

  //count()

  echo '<pre>';
    print_r($array3);  
    echo count($array3);
  echo '</pre>';
  
  echo '<hr />';

  //array_merge()

  $novo_array = array_merge($array, $array2, $array3);

  echo '<pre>';
    print_r($novo_array);  
  echo '</pre>';

  echo '<hr />';

  //explode()

  $string = '01/03/2024';
  $array_retorno = explode('/', $string);

  echo '<pre>';
  echo $string.'<br />';
  print_r($array_retorno);  
  echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
  echo '</pre>';

  echo '<hr />';

  //implode()

  $array4 = ['a', 'b', 'c', 'd', 'e', 'f'];
  $string_retorno = implode(', ', $array4);
  echo '<pre>';
  print_r($string_retorno);  
  echo '</pre>';




  ?>
</body>
</html>