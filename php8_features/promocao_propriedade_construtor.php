<?php


  /* 
    Metodo antigo

    class Produto {
    public string $nome ="";
    public float $valor = 0;  

    public function __construct($nome, $valor){
      $this->nome = $nome;
      $this->valor = $valor;
    }
  } */

  //Metodo PHP8 passando os atributos nos parametros do construtor;
  class Produto {
    public function __construct(public string $nome ="", public float $valor = 0){}
  }

  $produto = new Produto('Smartphone', 1500);

  echo "Produto: ".$produto->nome;
  echo "<br>Valor: R$ ".$produto->valor;

  echo "<hr />";

  //Juntando argumentos nomeados e promocao do construtor;
  $produto2 = new Produto(valor: 4500, nome: 'Geladeira');

  echo "Produto: ".$produto2->nome;
  echo "<br>Valor: R$ ".$produto2->valor;

?>