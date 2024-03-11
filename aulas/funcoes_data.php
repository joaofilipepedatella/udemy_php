<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  
  <?php

    //recuperação da data atual;
    $dataAtual = date("d/m/Y");
    
    echo "Data Atual: $dataAtual ";

    echo "<hr />";

    //dia/mes/ano horas:minutos
    $dataAtual = date("d/m/Y H:i"); //A hora vem de acordo com a timezone do sistema operacional;
    
    echo "Data Atual com horas: $dataAtual ";

    echo "<hr />";

    //Pegar a timezone do sistema operacional;

    echo date_default_timezone_get();

    echo "<hr />";

    //Forçar a timezone do sistema operacional;
    date_default_timezone_set('Europe/Berlin');
    $dataAtual = date("d/m/Y H:i");
    echo "Data atual com horas e timezone setada em Berlin: $dataAtual ";

    echo "<hr />";

    //strtotime
    $data_inicial = '2024-01-01';
    $data_final = '2024-03-29';

    //timestamp (js -> milissegundos / PHP -> segundos)
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
 
    echo $data_inicial . ' - '. $time_inicial;
    echo "<br />";
    echo $data_final . ' - '. $time_final;
    echo "<br />";

    $diferenca_times = $time_final - $time_inicial;
    echo 'A diferença de segundos entre a data inicial e data final é de: ' . $diferenca_times;
    echo "<br />";

    $segundos_existem_dia = 24 * 60 * 60;
    echo 'Existem '.$segundos_existem_dia.' segundos em um dia. ';
    echo "<br />";

    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
    echo 'Essa diferença, convertida para dias, resulta em: ' . $diferenca_de_dias_entre_as_datas .' dias.';
  ?>
</body>
</html>