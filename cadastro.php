<!DOCTYPE html>
<html lang="br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Fábrica de Software</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/edit.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <nav class="blue" role="navigation">
    <div class="nav-wrapper container">
      <a href="index.php"><img id="logo" src="img/logo.png" width="75"></a>
      <a href="index.php" class="brand-logo">Fábrica de Software
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Sair</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Sair</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <form class="container">
      <h4 class="blue-text center-align">Cadastro de integrantes</h4>
        <div class="row">
        <div class="input-field col l4 m6 s12 push-l2">
          <i class="material-icons prefix">person</i>
          <input id="nome" name="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col l4 m6 s12 push-l2">
          <input id="sobrenome" name="sobrenome" type="text" class="validate">
          <label for="sobrenome">Sobrenome</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col l2 m3 s12 push-l2">
          <i class="material-icons prefix">assignment_ind</i>
          <input id="matricula" type="text" name="matricula" maxlength="4" class="validate">
          <label for="matricula">Matrícula</label>
        </div>
        <div class="input-field col l6 m9 s12 push-l2">
          <i class="material-icons prefix">assignment</i>
          <input id="link" name="link" type="text" class="validate">
          <label for="link">Link para o Lattes</label>
        </div>
        </div>
        <div class="row">
        <div class="file-field input-field col l8 m9 s12 push-l2">
          <div class="btn blue">
          <span>Foto</span>
          <input type="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" name="foto">
        </div>
        <br><br>
          <button class="btn waves-effect blue" type="submit" name="cadastrar">Cadastrar
            <i class="material-icons right">send</i>
          </button>
          <br><br><br>
        </div>
        </div>
    </form>

  <?php include('include/rodape.php'); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
