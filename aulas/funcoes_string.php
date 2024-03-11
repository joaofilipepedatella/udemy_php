<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $texto = 'curso completo de PHP';

    //string to lower
    echo $texto . '<br />';
    echo strtolower($texto);
    echo '<hr />';

    //string to upper
    echo $texto . '<br />';
    echo strtoupper($texto);
    echo '<hr />';
    
    //upper case first
    echo $texto . '<br />';
    echo ucfirst($texto);
    echo '<hr />';

    //string length -> inclui os caracteres em branco!!
    echo $texto . '<br />';
    echo strlen($texto);
    echo '<hr />';

    //string replace -> Case Sensitive
    echo $texto . '<br />';
    echo str_replace('PHP', 'JavaScript', $texto);
    echo '<hr />';

    echo '22.20' . '<br />';
    echo str_replace('.', ',', '22.20');
    echo '<hr />';
 
    //string replace -> Case Sensitive
    echo $texto . '<br />';
    echo substr($texto, 1, 4); //Posição inicial - quantos caracteres após ele.
    echo '<hr />';

    echo $texto . '<br />';
    echo substr($texto, 6, 8); //Posição inicial - quantos caracteres após ele.
    echo '<hr />';

    echo $texto . '<br />';
    echo substr($texto, 0, 14) . '...'; //Posição inicial - quantos caracteres após ele.
    echo '<hr />';
  ?>
</body>
</html>