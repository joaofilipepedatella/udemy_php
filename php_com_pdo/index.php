<?php

$dsn = 'mysql:host=localhost; dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {
  $conexao = new PDO($dsn, $usuario, $senha); //Conexão com o banco de dados mysql

  $query = '
    select * from tb_usuarios where id=1
  ';

  $stmt = $conexao->query($query);

  $usuario = $stmt->fetch(PDO::FETCH_OBJ);

  echo '<pre>';
  print_r($usuario);
  echo '</pre>';

  echo $usuario->nome;

} catch (PDOException $e) {
  echo 'Erro: ' . $e->getCode() . '<br> Mensagem: ' . $e->getMessage();
}
