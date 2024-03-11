<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>

<body>
  <h3>
    Pós-incremento
  </h3>
  <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo 'O valor contido em a é ' . $a++ . ' <br />'; //Ele adiciona depois de retornar o numero.
    echo "O valor atualizado é $a <br />";
  ?>
  <h3>
    Pré-incremento
  </h3>
  <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo 'O valor contido em a é ' . ++$a . ' <br />'; //Ele adiciona uma unidade e retorna o numero atualizado.
    echo "O valor atualizado é $a <br />";
  ?>
  <h3>
    Pós-decremento
  </h3>
  <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo 'O valor contido em a é ' . $a-- . ' <br />'; //Ele diminui depois de retornar o numero.
    echo "O valor atualizado é $a <br />";
  ?>
  <h3>
    Pré-decremento
  </h3>
  <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo 'O valor contido em a é ' . --$a . ' <br />'; //Ele diminui uma unidade e retorna o numero atualizado.
    echo "O valor atualizado é $a <br />";
  ?>
</body>

</html>