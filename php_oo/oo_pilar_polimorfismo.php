<?php

  class Carro extends Veiculo {

    public $teto_solar = true;

    function __construct($placa, $cor){
      $this->placa = $placa;
      $this->cor = $cor;
    }

    function abrirTetoSolar() {
      echo 'Abrir teto solar';
    }

    function alterarPosicaoVolante(){
      echo 'Alterar posição do volante';
    }
  }

  class Moto extends Veiculo {

    public $contraPesoGuidao = true;

    function __construct($placa, $cor){
      $this->placa = $placa;
      $this->cor = $cor;
    }

    function empinar(){
      echo 'Empinar';
    }

    function trocarMarcha(){
      echo 'embreagem com a mao, marcha com o pe';
    }
  }

  class Veiculo {
    public $placa = null;
    public $cor = null;

    function acelerar(){
      echo 'Acelerar';
    }

    function frear(){
      echo 'Frear';
    }

    function trocarMarcha(){
      echo 'embreagem com o pe, marcha com a mao';
    }
  }

  class Caminhao extends Veiculo {

  }

  $carro = new Carro('ABC1234', 'Branco');
  $moto = new Moto('XYZ9876', 'Preta');
  $caminhao = new Caminhao();

  $carro->trocarMarcha();
  echo '<br />';
  $moto->trocarMarcha();
  echo '<br />';
  $caminhao->trocarMarcha();

?>