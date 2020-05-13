<?php
   
   if (isset($_POST['email']) && !empty($_POST['email'])){

  $nome = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $messagem = addslashes($_POST['message']);

  $to = "vini_fortunato.silva@outlook.com";
  $subject = "contato Rio Grande site";
  $body =  "Nome: ".$nome."\r\n".
  "email: ".$email."\r\n".
  "menssagem: " .$messagem;

  $header = "From: vini_fortunato.silva@outlook.com"."\r\n".
   "Replay-To:".$email."\r\n".
   "X=Mailer:PHP/".phpversion();

  if (mail($to,$subject,$body,$header)){

      echo ("email enviado com sucesso");
      
  }else{
    echo ("Falha ao enviar o email");
  }
  
}
?>