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
  <?php include('include/menu.php'); ?>
    <form class="container">
        <div class="row">
        <div class="input-field col l6 m8 s12 push-l3 push-m2">
          <i class="material-icons prefix">account_circle</i>
          <input id="user" name="user" type="text" class="validate">
          <label for="user">Login</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col l6 m8 s12 push-l3 push-m2">
          <i class="material-icons prefix">enhanced_encryption</i>
          <input id="senha" name="senha" type="password" class="validate">
          <label for="senha">Senha</label>
          <br><br>
          <button class="btn waves-effect blue" type="submit" name="logar">Logar
            <i class="material-icons right">send</i>
          </button>
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
