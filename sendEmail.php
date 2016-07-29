<?php
/**
 * Created by PhpStorm.
 * User: julio
 * Date: 28/07/16
 * Time: 22:06
 */
  $para ='adprovidencia@gmail.com';
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];

  $message = "<strong>Mensagem de Contato</strong><br><br>";
  $message .= "<strong> Nome : </strong> $nome <br>";
  $message .= "<strong>E-mail : </strong> $email";
  $message .= "<strong> Mensagem </strong> $mensagem";
  $headers = "Content-type: text/html; charset=utf-8\n";


  if(mail($para, $assunto, $message, $headers)){
      header("Location: index.html");
  }else{
      echo "Ocorreu um erro";
  }

?>