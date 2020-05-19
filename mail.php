<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  $text = "
    <html>
      <p>
        Mensagem Advinda do Site <epncontabilidade.com.br> <br/> <br/>
        Nome: ".$nome." <br/>
        Email: ".$email." <br/>
        Telefone: ".$telefone." <br/>
        Mensagem: ".$mensagem."
      </p>
    </html>
  ";

  $assunto = "Contato do Site!";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: EPN Contabilidade <servicos@epncontabilidade.com>';

  mail("servicos@epncontabilidade.com",$assunto,$text,$headers);

  header('location:index.html');

?>
