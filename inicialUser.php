<?php 



session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( ($_SESSION['logado'] == False) ) {
  //Destrói
  session_destroy();

  //Limpa
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  
  //Redireciona para a página de autenticação
  header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" co,k,ntent="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Controle de dados</title>

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet">
  <!--<script src="js/xlsx.js"></script>-->
  <!-- <script src="js/xlsx.full.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.6.0/jszip.min.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>

  <body>

    <!-- Navigation -->
<?php include "nav.php" ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h2 class="my-4">Sobre a iniciativa:
        <small></small>
      </h2>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <a href="index.php">
            <img class="img-fluid" src="imagens/painel.jpg" alt="">
          </a>
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Painel de controle MI</h3>
          <p>Este projeto foi desenvolvido por Carlos Junior, no intuito de melhorar cada vez mais a confiabilidade da informação.</p>
          <h3 class="my-3">Detalhes do Projeto:</h3>
          <ul>
            <li>Controle de programação</li>
            <li>Verificação de status de PT </li>
            <li>Rendimento de Horas</li>
            <li>Verificação de status das ordens de manutenção</li>
          </ul>
        </div>

      </div>
      <!-- /.row -->
      <br>
      <!-- Related Projects Row -->
      <h4 class="my-4">Gráficos:</h4>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="graph.php">
            <img class="img-fluid" src="imagens/rend.jpg" alt="">
          </a>
        </div>



      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Desenvolvido por Carlos Junior, chave: AJ10</p>
      </div>
      <!-- /.container -->
    </footer>

      <!-- Bootstrap core JavaScript -->
                      <!-- INICIO SCRIPTS  -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="js/jquery.min.js"></script> <!-- Include all
  compiled plugins (below), or include individual files as needed -->
   <script src="bootstrap/js/bootstrap.min.js"></script> <!--Script para ocultar-->

  </body>

</html>