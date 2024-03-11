<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    //Cadastro
    $usuario_possui_cartao_loja = true;
    $valor_compra = 90;
    $valor_frete = 50;

    $recebeu_desconto_frete = true;

    if($usuario_possui_cartao_loja && $valor_compra >= 400){
      $valor_frete = 0;
    } else if($usuario_possui_cartao_loja && $valor_compra >= 300){
      $valor_frete = 10;
    } else if($usuario_possui_cartao_loja && $valor_compra >= 100){
      $valor_frete = 25;
    } else {
      $recebeu_desconto_frete = false;
    }
  ?>

  <h1>Detalhes do pedido</h1>
  <p>Possui cartao da loja? 
    <?php
      /* if($usuario_possui_cartao_loja == true){
        echo 'Sim';
      }else{
        echo 'Não';
      }    */   
    ?>
    <!-- operador ternario -->
    <?= $usuario_possui_cartao_loja ? 'Sim' : 'Não'; ?>
    
  </p>
  <p>Valor da compra: <?= $valor_compra ?> </p>

  <p>Recebeu desconto no frete? <?= $teste = $recebeu_desconto_frete ? 'Sim' : 'Não'; ?>
  </p>
    <p>Valor do frete: <?= $valor_frete ?></p>
    </body>
</html>