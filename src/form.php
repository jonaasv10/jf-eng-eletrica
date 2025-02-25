<?php
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $telefone = $_POST['telefone'];
  $assunto = addslashes($_POST['assunto']);

  $para = "vieiramaduro@gmail.com";
  $assunto = "Coleta de dados - JF Engenharia Elétrica";
  $corpo = "Nome: ".$nome."\n". "Email: ".$email."\n". "Telefone: ".$telefone."\n". "Assunto:".$assunto;
  $cabeca = "From teste@jfengenharia.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

  if(mail($para, $assunto, $corpo, $cabeca)){
    echo("E-mail enviado com sucesso!");
  } else{
    echo("Houve um erro ao enviar o e-mail!");
  }

?>
