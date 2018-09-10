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
  <?php include('include/menu.php');?>
  <br>
    <form class="container" action="DAO.php" method="post" enctype="multipart/form-data">
      <h4 class="blue-text center-align">Solicitação de Contato</h4><br>
	  <br>
        <div class="row">
        <div class="input-field col l8 m12 s12 push-l2">
          <i class="material-icons prefix">person</i>
          <input id="nome" name="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col l8 m12 s12 push-l2">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>
      <div class="row">
		<div class="input-field col l8 m12 s12 push-l2">
            <i class="material-icons prefix">format_align_justify</i>
            <textarea id="mensagem" name="mensagem" class="materialize-textarea" data-length="1000"></textarea>
            <label for="mensagem">Mensagem</label>
        </div>
        <div id="op" class="col l8 m12 s6 push-l2">
        <br>
        <br>
          <button class="btn waves-effect blue right" id="integrante" type="submit" name="cadastrar">Contatar
            <i class="material-icons right">send</i>
          </button>
          <br><br><br>
        </div>
        </div>
    </form>
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
