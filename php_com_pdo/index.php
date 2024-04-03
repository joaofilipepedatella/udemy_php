<?php

$dsn = 'mysql:host=localhost; dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {
  $conexao = new PDO($dsn, $usuario, $senha); //Conexão com o banco de dados mysql

  //criação da tabela no banco de dados
  $query = '
    create table if not exists tb_usuarios(
      id int not null primary key auto_increment,
      nome varchar(50) not null,
      email varchar(100) not null,
      senha varchar(32) not null
    )
  ';
  
  $retorno = $conexao->exec($query);

  echo $retorno;

}catch(PDOException $e){
  echo 'Erro: ' . $e->getCode() . '<br> Mensagem: ' . $e->getMessage(); 
}

