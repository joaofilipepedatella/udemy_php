<?php

namespace sistema\Modelo;

use sistema\Nucleo\Conexao;

class PostModelo
{
  public function ler(int $id = null): array
  {
    $where = ($id ? "WHERE id = {$id}" : '');

    $query = "SELECT * FROM posts {$where}";

    $statement = Conexao::getInstancia()->query($query);

    $resultado = $statement->fetchAll();

    return $resultado;
  }
}
