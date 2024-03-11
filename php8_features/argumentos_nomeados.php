<?php
  function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
    echo "Destinatarios: ".$destinatarios."<br />" ;
    echo "CC: ".$cc."<br />";
    echo "Assuntos: ".$assunto."<br />";
    echo "Mensagem: ".$mensagem."<br />";
  }

  //Exemplo com a nova feature do PHP8 Argumentos Nomeados
  sendEmail(
    assunto: "Argumentos Nomeados",
    destinatarios: "testeprogramacaophp@gmail.com",    
    mensagem: "Dominando a feature de argumentos nomeados do PHP 8."
  );

  echo "<hr />";
  //Exemplo de como chamar a funcao de forma convencional
  //Respeitando a ordem dos parametros
  sendEmail(
    "testeprogramacaophp@gmail.com",
    "teste@teste.com",
    "Argumentos Nomeados",
    "Dominando a feature de argumentos nomeados do PHP 8."
  );

  echo "<hr />";
  //Exemplo dando erro na chamada pois falta um argumento
  sendEmail(
    "testeprogramacaophp@gmail.com",
    "Argumentos Nomeados",
    "Dominando a feature de argumentos nomeados do PHP 8."
  );

  echo "<hr />";

?>