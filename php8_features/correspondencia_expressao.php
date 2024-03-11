<?php

  $busca = 35;

  switch($busca){ //Comparacao por igualdade/equalidade (==)
    case '2':
      $retornoSwitch = 'Encontrou o texto 2';
      break;
    case 2:
      $retornoSwitch = 'Encontrou o numero 2';
      break;
    default:
      $retornoSwitch = 'Nao encontrou';
  }

  echo "Resultado switch: ".$retornoSwitch;
  echo "<hr />";

/* 
  $retornoMatch = match($busca){ //Comparacao do identidade/estrita (===)
    '2' => 'Encontrou o texto 2',
    2 => 'Encontrou o numero 2',
    5, '8', 12, 'X' => 'Encontrou os numeros 5 ou 12, ou os textos 8 ou X',
    default => 'Nao Encontrou',
    };
 */

  //Match com condicionais e operacoes logicas
  $retornoMatch = match(true) {
    $busca < 20 => 'Encontrou',
    $busca >= 20 && $busca <= 30 => 'Encontrou um valor maior que 20 e menor que 30',
    default => 'Nao encontrou'
  };


  echo "Resultado match: ".$retornoMatch;

?>