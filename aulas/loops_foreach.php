<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php 

    $items = ['sofa', 'mesa', 'cadeira', 'fogao', 'geladeira'];

    echo '<pre>';
      print_r($items);
    echo '<pre>';

    foreach($items as $item){
        echo "$item ";

        if($item =="mesa"){
          echo "(Compre uma mesa e ganha 25% de desconto em cadeiras!)";
        }

        echo '<hr />';
    }





  ?>
</body>
</html>