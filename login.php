<!DOCTYPE html>
<html lang="br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Fábrica de Software</title>

  <!-- CSS  -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php include('include/menu.php'); ?>
  <br>
  <br>
  <br>
  <br>
    <form class="container" method="post" action="DAO.php">
        <div class="row">
        <div class="input-field col l6 m8 s12 push-l3 push-m2">
          <i class="material-icons prefix">person_outline</i>
          <input id="usuario" name="usuario" type="text" class="validate">
          <label for="usuario">Login</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col l6 m8 s12 push-l3 push-m2">
          <i class="material-icons prefix">lock_outline</i>
          <input id="senha" name="senha" type="password" class="validate">
          <label for="senha">Senha</label>
          <br><br>
          <button class="btn waves-effect blue right" type="submit" name="logar">Entrar
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <?php include('include/rodape.php'); ?>


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/init.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/script.js"></script>

  </body>
</html>
