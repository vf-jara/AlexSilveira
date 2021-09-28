<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $mensagem = addslashes($_POST['mensagem']);

  $to = "atendimento@alexsilveira.com";
  $subject = "Novo Contato em alexsilveira.com";
  $body = "Nome: ".$nome."\n".
          "Email: ".$email. "\n".
          "Mensagem: ".$mensagem;
  $header = "From: atendimento@alexsilveira.com"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X-Mailer:PHP/".phpversion();

  if(mail($to,$subject,$body,$header)){
     header('location:/mensagem-enviada');
  }else{
    echo('location:/mensagem-nao-enviada');
  }

}

?>
