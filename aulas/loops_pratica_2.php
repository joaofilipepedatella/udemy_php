<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    $funcionarios = [
      ['nome' => 'Joao', 'salario' => 2500, 'data de nascimento' => '21/08/1989'], 
      ['nome' => 'Julia', 'salario' => 3500], 
      ['nome' => 'Maria', 'salario' => 5000],
      ['nome' => 'Mario', 'salario' => 1500],
    ];

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    foreach($funcionarios as $idx => $funcionario){
      foreach($funcionario as $idx2 => $valor){
        echo "$idx2 - $valor <br />";
      }
      echo '<hr />';
    }



  ?>
</body>
</html>