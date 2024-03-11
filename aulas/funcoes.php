<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    //void (sem retorno)
    function exibirBoasVindas(){
      echo "Bem-vindo ao curso de PHP";
    }

    exibirBoasVindas();

    echo '<br />';
    //return (com retorno)
    function calcularAreaTerreno($largura, $comprimento){
      $area = $largura * $comprimento;
      return $area;
    }

    echo calcularAreaTerreno(15, 10);
    echo '<br />';
    echo calcularAreaTerreno(35, 45);
    echo '<br />';
    echo calcularAreaTerreno(14.5, 24.3);
    echo '<br />';
    echo calcularAreaTerreno(22, 92);
    echo '<br />';

  ?>
</body>
</html>