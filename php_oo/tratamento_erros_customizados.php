<?php

  class MinhaExceptionCustom extends Exception {
    private $erro = '';

    public function __construct($erro){
      $this->erro = $erro;
    }

    public function exibirMsgErroCustom(){
      echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white; text-align: center;">';
        echo $this->erro;
      echo '</div>';
    }
  }

  try{

    throw new MinhaExceptionCustom('Esse eh um erro de teste.');

  } catch (MinhaExceptionCustom $e){
      $e->exibirMsgErroCustom();

  }
?>