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
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
    	<img id="logo" src="img/logo.png">
      <a id="logo-container" href="index.php" class="brand-logo">Fábrica de Software
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Principal</a></li>
        <li><a href="softwares.php">Softwares</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="envolvidos.php">Envolvidos</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Principal</a></li>
        <li><a href="softwares.php">Softwares</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="envolvidos.php">Envolvidos</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_login" type="text" class="validate">
          <label for="icon_login">Login</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">enhanced_encryption</i>
          <input id="icon_password" type="password" class="validate">
          <label for="icon_password">Senha</label>
        </div>
      </div>
    </form>
  </div>
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Contato</h5>
          <p class="grey-text text-lighten-4">
            Faculdade Vale do Salgado <br> 
            Cidade de Icó, Ceará <br>
            Prof. Adriano Lima Candido <br>
            Cel. (88) 9 9729-2878</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Siga também!</h5>
          <ul>
            <li><a class="redes white-text" href="https://www.facebook.com"><img class="redes" src="img/facebook.png" href="#">Facebook</a></li>
            <li><a class="redes white-text" href="https://www.instagram.com"><img class="redes" src="img/instagram.png" href="#">Instagram </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
