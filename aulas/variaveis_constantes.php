<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php 
    
    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_dev'); 
    define('BD_SENHA', 'senha_dev'); 

    //..logica..//

    //define('BD_URL', 'endereco_bd_prod'); -> nao pode pois ja foi definida anteriormente.

    echo BD_URL . '<br/>';
    echo BD_USUARIO . '<br/>';
    echo BD_SENHA . '<br/>';
  ?>
</body>
</html>