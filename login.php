<?php
session_start();
if (isset($_SESSION['logado'])) {
  header('location: ./responderquizz.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="author" content="Letícia">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
  <!--Link de Vinculo com o CSS-->
  <link rel="stylesheet" type="text/css" href="page1.css">
  <!--<link rel="stylesheet" type="text/css" href="./assets/css/login.css"> ??? -->

  <title>Quizz</title>
</head>

  <body>
    <!--CONEXÃO COM A PAGE DE MENU FIXO-->
    <?php
    include("barramenu.php");
    ?>

    <div class="container">
      <div class="text-center" style="background:rgba(0,0,0,0.5);">
        <h1 style="color:#fff; font: 40px MuseoSans100;">Quizz</h1>
      </div>
      <hr>
      <div id="form-login">
        <form role="form" data-parsley-validate="" novalidate="" class="mb-lg" action="autenticar.php" method="POST">
          <div class="form-group has-feedback">
            <input name="login" id="usuario" type="text" placeholder="Insira o usuario" autocomplete="off" required
              class="form-control">
            <span class="fa fa-user form-control-feedback text-muted"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="senha" id="senha" type="password" placeholder="Senha" required class="form-control">
            <span class="fa fa-lock form-control-feedback text-muted"></span>
          </div>
          <button type="submit" value="Entrar" class="btn btn-block btn-primary mt-lg">Entrar</button>
        </form>
      </div>
    </div>
  </body>
</html>