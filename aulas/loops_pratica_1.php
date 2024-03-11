<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php


    $registros = [['titulo' => 'Noticia 1', 'conteudo' => 'conteudo 1'], ['titulo' => 'Noticia 2', 'conteudo' => 'conteudo 2'], ['titulo' => 'Noticia 3', 'conteudo' => 'conteudo 3'], ['titulo' => 'Noticia 4', 'conteudo' => 'conteudo 4'], ['titulo' => 'Noticia 5', 'conteudo' => 'conteudo 5'] ];

    echo '<pre>';
    print_r($registros);
    echo '</pre> <br />';

/*     $idx = 0;  variavel eh definida dentro do for */

/*     while($idx < count($registros)){ //leitura dinamica de quantos indices há no array;

      echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
      echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
      echo '<hr />';
      $idx++;
    }; */

/*     do {
      echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
      echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
      echo '<hr />';
      $idx++;
    } while($idx < count($registros)); */

    for($idx = 0; $idx < count($registros); $idx++){
      echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
      echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
      echo '<hr />';
    }




  ?>
</body>
</html>