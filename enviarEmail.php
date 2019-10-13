<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="5; url=index.html">
    <link rel="icon" href="log.ico">
    
    <title>Boleto</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
  </head>
  <body style="text-align: center;">  
  <?php

if($_POST){

  if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['tipo']) && !empty($_POST['finalidade'])){

    //1 – Definimos Para quem vai ser enviado o email
    $para = "bdaloia@gmail.com";
    //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
    $nome = $_POST['nome'];
    // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
    $email = $_POST['email'];
    //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
    $telefone = $_POST['telefone']; 
    
    $cpf = $_POST['cpf'];
    $tipo = $_POST['tipo'][0];
    $finalidade = $_POST['finalidade'];
    
    $assunto = 'Negociação de imóvel';

    $mensagem = "<strong>Nome:  </strong>".$nome;
    $mensagem .= "<br>  <strong>Email:</strong>".$email;
    $mensagem .= "<br>  <strong>Telefone:</strong>".$telefone;
    $mensagem .= "<br>  <strong>CPF:</strong>".$cpf;
  
    $mensagem .= '<br>  <strong>Tipo:</strong>';
    if ($_POST['tipo'][0] === 'Casa'){
      $mensagem .= "  <strong>Casa</strong>";
    }
    if ($_POST['tipo'][0] === 'Apartamento'){
      $mensagem .= "  <strong>Apartamento</strong>";
    }
    if (isset($_POST['tipo'][1])){
      $mensagem .= "  <strong>" . $_POST['tipo'][1] . "</strong>";
    }
    
    $mensagem .= "<br>  <strong>Finalidade:</strong>".$finalidade;

  //5 – agora inserimos as codificações corretas e  tudo mais.
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
    $headers .= "X-Sender:  <sistema@dominio.com.br>\n"; //email do servidor //que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.
    $headers .= "MIME-Version: 1.0\n";

    $verifica = mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

    if (mail == true){
      echo '<h2><span class="badge badge-success">Enviado!</span></h2>';
    }else{
      echo '<h2><span class="badge badge-danger">Não Enviado!</span></h2>';
    }

  }else{
    $error = 'Campo(s) Vazio(s): ';
    if(empty($_POST['nome'])){
      $error = $error . 'Nome';
    }

    if(empty($_POST['email'])){
      $error = $error . ' Email';
    }

    if(empty($_POST['telefone'])){
      $error = $error . ' Telefone';
    }

    if(empty($_POST['cpf'])){
      $error = $error . ' Cpf';
    }
    if(empty($_POST['tipo'])){
      $error = $error . ' Tipo';
    }
    if(empty($_POST['finalidade'])){
      $error = $error . ' Finalidade';
    }

    echo $error;

  }
}
  ?>
  
  
  <footer class="text-white" style="background-color: #047011">
  
    <div class="container">
      <p>&copy;2017 Desenvolvido por Bruna D´Aloia </p>
      <p>Quer falar com a gente? &nbsp <a href="index.html#contato" class="navbar-brand">Fale conosco</a></p>
    </div>
  </footer>
</body>
</html>