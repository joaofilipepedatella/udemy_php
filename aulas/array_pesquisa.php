<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    //in_array(); -> retorna true/false para existencia do que esta sendo procurado;

    //array_search(); -> retorna o índice do valor pesquisado caso ele exista;

    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    echo '<br />';

    echo in_array('Maçã',$lista_frutas);
    //true => texto = 1;
    //false => texto = vazio;

    echo '<br />';

    $existe = in_array('Pêra', $lista_frutas);

    if($existe){
      echo 'Sim, o valor pesquisado existe no array.';
    } else {
      echo 'Não, o valor pesquisado não existe no array';
    };

    echo '<br />';

    $existe2 = array_search('Uva', $lista_frutas);
    //true => texto = número do índice;
    //null => texto = vazio;

    if($existe2 != null){
      echo 'Sim, o valor pesquisado existe no array.';
    } else {
      echo 'Não, o valor pesquisado não existe no array';
    };

    echo '<hr />';

    $lista_coisas = [
      'frutas' => $lista_frutas,
      'pessoas' => ['Joao', 'Maria']
    ];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('Uva', $lista_coisas['frutas']);
    echo '<br />';
    echo array_search('Uva', $lista_coisas['frutas']);

  ?>
</body>
</html>