<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lar Doce Lar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" href="log.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins|Roboto+Slab|Patua+One" rel="stylesheet">
      <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body style="text-align: center;">
  <nav>
      <a href="index.html"><img src="img/log2.jpg" alt="log"></a>
      <ul>
          <li><a href="index.html" class="menu">SOBRE</a></li>
          <li><a href="index.html" class="menu">IMÓVEIS</a></li>
    <li><a href="index.html" class="menu">SERVIÇOS</a></li>
          <li><a href="#index.html" class="menu">CONTATO</a></li>
          
      </ul>
  </nav>
    <?php

    if($_POST){
      
        if(!empty($_POST['nome']) && !empty($_POST['registro']) && !empty($_POST['cpf'])){

    ?>

        <img src="img/boleto_bb.png">

    <?php

        }else{
            $error = 'Campo(s) Vazio(s): ';
            if(empty($_POST['nome'])){
              $error = $error . 'Nome';
            }
        
            if(empty($_POST['registro'])){
              $error = $error . ' Registro';
            }
        
            if(empty($_POST['cpf'])){
              $error = $error . ' Cpf';
            }
        
            echo $error;
        
          }
        }
        
    ?>
      <footer class="text-white" style="background-color: #047011">
      
        <div class="container">
          <p>&copy;2017 Desenvolvido por Bruna D´Aloia</p>
          <p>Quer falar com a gente? &nbsp <a href="index.html#contato" class="navbar-brand">Fale conosco</a></p>
        </div>
      </footer>
    </body>
	</html>