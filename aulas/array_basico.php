<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    //Sequenciais (numericos)

    //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
    $lista_frutas[] = 'Abacaxi';

    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    
    echo '<hr />';

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    echo '<hr />';

    echo $lista_frutas[3];

    echo '<hr />';

    //Associativos

    $lista_frutas2 = [
                      'a' => 'Banana',
                      'b' => 'Maçã',
                      'c' => 'Morango',
                      'd' => 'Uva',
                      'e' => 'Abacate'
                    ];

    $lista_frutas2['f'] = 'Pêra';
    echo '<pre>';
    var_dump($lista_frutas2);
    echo '</pre>';
    echo '<hr />';

    echo $lista_frutas2['f'];

    echo '<hr />';

    

  ?>
</body>
</html>