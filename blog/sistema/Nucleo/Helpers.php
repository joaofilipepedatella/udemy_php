<?php

namespace sistema\Nucleo;

class Helpers
{
  public static function validarCpf(string $cpf): bool
  {
    $cpf = self::limparNumero($cpf);

    if (mb_strlen($cpf) != 11 or preg_match('/(\d)\1{10}/', $cpf)) {
      return false;
    }
    for ($t = 9; $t < 11; $t++) {
      for ($d = 0, $c = 0; $c < $t; $c++) {
        $d += $cpf[$c] * (($t + 1) - $c);
      }

      $d = ((10 * $d) % 11) % 10;

      if ($cpf[$c] != $d) {
        return false;
      }
    }
    return true;
  }

  public static function limparNumero(string $numero): string
  {
    return preg_replace('/[^0-9]/', '', $numero);
  }

  public static function dataAtual(): string
  {
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomeDiasDaSemana = [
      'Domingo',
      'Segunda-Feira',
      'Terça-Feira',
      'Quarta-Feira',
      'Quinta-Feira',
      'Sexta-Feira',
      'Sábado',
    ];

    $nomesDosMeses = [
      'Janeiro',
      'Fevereiro',
      'Março',
      'Abril',
      'Mario',
      'Junho',
      'Julho',
      'Agosto',
      'Setembro',
      'Outubro',
      'Novembro',
      'Dezembro',
    ];

    $dataFormatada = $nomeDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomesDosMeses[$mes] . ' de ' . $ano . '.';

    return $dataFormatada;
  }

  public static function url(string $url): string
  {
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if (str_starts_with($url, '/')) {
      return $ambiente . $url;
    }

    return $ambiente . '/' . $url;
  }

  public static function localhost(): bool
  {
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

    if ($servidor == 'localhost') {
      return true;
    }
    return false;
  }

  public static function validarUrl(string $url): bool
  {
    if (mb_strlen($url) < 10) {
      return false;
    }
    if (!str_contains($url, '.')) {
      return false;
    }
    if (str_contains($url, 'http://') or str_contains($url, 'https://')) {
      return true;
    }
    return false;
  }

  public static function validarUrlComFiltro(string $url): bool
  {
    return filter_var($url, FILTER_VALIDATE_URL);
  }




  public static function validarEmail(string $email): bool
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  /**
   * Conta o tempo decorrido de uma data
   * @param string $data
   * @return string
   */
  public static function contarTempo(string $data)
  {
    $agora = strtotime(date('Y-m-d H:i')); // Data atual no formato Americano;
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round(($diferenca / 60) / 60);
    $dias = round((($diferenca / 60) / 60) / 24);
    $semanas = round(((($diferenca / 60) / 60) / 24) / 7);
    $meses = round((((($diferenca / 60) / 60) / 24) / 7) / 4);
    $anos = round(((((($diferenca / 60) / 60) / 24) / 7) / 4) / 12);


    if ($segundos <= 60) {
      return 'agora';
    } else if ($minutos <= 60) {
      return $minutos == 1 ? 'há 1 minutos' : 'há ' . $minutos . ' minutos.';
    } else if ($horas <= 24) {
      return $horas == 1 ? 'há 1 hora' :  'há ' . $horas . ' horas.';
    } else if ($dias <= 7) {
      return $dias == 1 ? 'ontem' : 'há ' . $dias . ' dias.';
    } else if ($semanas <= 4) {
      return $semanas  == 1 ? 'há 1 semana' :  'há ' . $semanas . ' semanas';
    } else if ($meses <=  12) {
      return $meses == 1 ? 'há 1 mês' : 'há ' . $meses . ' meses';
    } else {
      return $anos == 1 ? 'há 1 ano' : 'há ' . $anos . " anos";
    }
  }
  /**
   * Formata um valor com ponto e virgula
   * @param float $valor
   * @return string
   */
  public static function formatarValor(float $valor = null): string
  {
    return number_format(($valor ?: 0), 2, ',', '.');
  }

  /**
   * Formata um numero com pontos
   * @param int $numero
   * @return string
   */
  public static function formatarNumero(int $numero = null): string
  {
    return number_format($numero ? $numero : 0, 0, '.', '.');
  }

  public static function saudacao(): string
  {
    $hora = date('H');

    /* if ($hora >= 0 && $hora <= 5) {
    $saudacao = "Boa madrugada!";
  } else if ($hora >= 6 and $hora <= 12) {
    $saudacao = "Bom dia!";
  } else if ($hora >= 13 and $hora <= 18) {
    $saudacao = "Boa tarde!";
  } else {
    $saudacao = "Boa noite!";
  } */

    /* switch($hora){
    case $hora >= 0 and $hora <= 5:
      $saudacao = "Boa Madrugada!";
      break;
    
    case $hora >= 6 and $hora <= 12:
      $saudacao = "Bom Dia!";
      break;

    case $hora >= 13 and $hora <= 18:
      $saudacao = "Boa Tarde!";
      break;
    
    default:
      $saudacao = "Boa Noite!";
  } */

    $saudacao = match (true) {
      $hora >= 0 and $hora < 6 => "Boa Madrugada!",
      $hora >= 6 and $hora < 12 => "Bom Dia!",
      $hora >= 12 and $hora < 18 => "Boa Tarde!",
      default => "Boa Noite!",
    };
    return $saudacao;
  }

  /**
   * Resume um texto
   * 
   * @param string $texto texto para resumir
   * @param int $limite quantidade de caracteres
   * @param string $continue opcional - o que deve ser exibido ao final do resumo
   * @return string texto resumido
   */

  public static function resumirTexto(string $texto, int $limite, string $continue = '...'): string
  {
    $textoLimpo = trim(strip_tags($texto));
    if (mb_strlen($textoLimpo) <= $limite) {
      return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
  }
}
