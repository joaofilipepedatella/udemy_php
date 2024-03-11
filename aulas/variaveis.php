<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
   //string
   $nome = "João Filipe";

   //int
   $idade = 34;

   //float
   $peso = 96.4;

   //boolean
   $estudante_sn = true; //(true = 1) ou (false = vazio)

   // ... lógica ... 

   $idade = '35'; //Sobreposição com outra tipagem no valor.
  ?>

  <h1>Ficha cadastral</h1>
  <br>
  <p>Nome: <?= $nome ?> </p>
  <p>Idade: <?= $idade ?> </p>
  <p>Peso: <?= $peso ?> </p>
  <p>Estudante: <?= $estudante_sn ?> </p>
</body>
</html>