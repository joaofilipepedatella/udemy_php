<?php

  try{
    echo '<h3> *** TRY *** </h3>';
    //$sql = 'Select * from clientes';
    //mysql_query($sql); //Sem validar a query, gera um erro;

    if(!file_exists('require_arquivo_a.php')){
      //throw new Error('O arquivo em questao nao esta disponivel atualmente ' .date('d/m/Y H:i:s'));
      throw new Exception('O arquivo em questao nao esta disponivel atualmente ' .date('d/m/Y H:i:s'));
    }

  } catch(Error $e){
    echo '<h3> *** CATCH ERROR *** </h3>';
    echo $e;
    //armazenando erros em banco de dados;

  } catch (Exception $e){

    echo '<h3> *** CATCH EXCEPTION *** </h3>';
    echo "Mensagem: {$e->getMessage()} <br/>";
  } finally {
    echo '<h3> *** FINALLY *** </h3>';
  }


?>