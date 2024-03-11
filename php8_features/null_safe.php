<?php

  $objeto = null;

  /* if(isset($objeto) && $objeto != null){
    $objeto->total();
  }

  $objeto?->total(); */

  class Funcionario {
    public function __construct(
      private string $nome = "",
      private float $salario = 0,
    ){}

    public function info(){
      return "Nome: $this->nome -- Salario: $this->salario";
    }
  }

  class FolhaPagamento {

    private $funcionarios = null;

    public function __construct(){
      $this->funcionarios = [
        new Funcionario('Maria', 12000),
        new Funcionario('Joao', 15000),
        new Funcionario('Jorge', 10000),
        new Funcionario('Jose', 13000),
        new Funcionario('Amanda', 19000),
      ];
    }

    public function getTotalFuncionarios(){
      return count($this->funcionarios);
    }

    public function getFuncionario(){
      return $this->funcionarios[4];
    }
  }

  $folhaPagamento = new FolhaPagamento();
  //$folhaPagamento = null; //Se ocorresse um erro e fosse setado null

  //if(isset($folhaPagamento) && $folhaPagamento != null) //ao inves disso
  echo $folhaPagamento?->getTotalFuncionarios();          //so escrever isso
  echo '<hr />';
  print_r($folhaPagamento?->getFuncionario()?->info());

?>