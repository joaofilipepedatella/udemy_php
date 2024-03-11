<?php
  //modelo
  class Funcionario{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getter setter (overloading / sobrecarga)
    function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    function __get($atributo){
      return $this->$atributo;
    }

    //getter setters
    //setters -> void
   /*  function setNome($nome) {
      $this->nome = $nome;
    }

    function setNumFilhos($numFilhos) {
      $this->numFilhos = $numFilhos;
    } */

    /* //getters -> com return
    function getNome() {
      return $this->nome;
    }

    function getNumFilhos() {
      return $this->numFilhos;
    } */


    //metodos
    function resumirCadFunc() {
      return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s).";
    }

    function modificarNumFilhos($numFilhos) {
      //Afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
    }
  }

  $y = new Funcionario();
  $y->__set('nome', 'Jose');
  $y->__set('numFilhos', 2);
  echo $y->resumirCadFunc();
  //echo $y->__get('nome') . ' tem ' . $y->__get('numFilhos') . ' filho(s).';

  echo '<hr />';

  $x = new Funcionario();
  $x->__set('nome', 'Joao');
  $x->__set('numFilhos', 0);
  echo $x->resumirCadFunc();
  //echo $x->__get('nome') . ' tem ' . $x->__get('numFilhos') . ' filho(s)';

?>