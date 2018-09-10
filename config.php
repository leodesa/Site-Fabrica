<!DOCTYPE html>
<html lang="br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Fábrica de Software</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php include('include/menu2.php'); ?>
  <br>
  <br>
  <br>
  <br>
	<div class="row">
	<div class="container col l6 m6 s12">
      <div class="col s12 m12 l12 z-depth-2">
		  <form class="container" method="post" action="DAO.php">
			<h4 class="blue-text center-align">Alterar senha</h4><br>
			<div class="row">
				<div class="input-field col l12 m12 s12">
					<i class="material-icons prefix">lock_outline</i>
					<input id="senha" name="senha" type="password" class="validate">
					<label for="senha">Nova senha</label>
				</div>
				</div>
			<div class="row">
				<div class="input-field col l12 m12 s12">
					<i class="material-icons prefix">lock_outline</i>
					<input id="senhar" name="senhar" type="password" class="validate">
					<label for="senhar">Repetir nova senha</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col l12 m12 s12">
					<i class="material-icons prefix">lock</i>
					<input id="senhaAt" name="senhaAt" type="password" class="validate">
					<label for="senhaAt">Senha atual</label>
				</div>
			  <br><br>
			  <br><br>
			<div class="input-field col l12 m12 s12">
				<button class="btn waves-effect blue right" type="button" name="logar" onclick="SenhaUser();">Salvar
					<i class="material-icons right">save</i>
				</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
	<div class='container col l6 m6 s12'>
	<div class="col s12 m12 l12 z-depth-2">
		  <form class="container" method="post" action="DAO.php">
			<h4 class="blue-text center-align">Alterar usuário</h4><br>
			<div class="row">
				<div class="input-field col l12 m12 s12">
					<i class="material-icons prefix">person_outline</i>
					<input id="new_user" name="new_user" type="password" class="validate">
					<label for="new_user">Novo nome de usuário</label>
				</div>
				</div>
			<div class="row">
				<div class="input-field col l12 m12 s12">
					<i class="material-icons prefix">lock_outline</i>
					<input id="senhaUser" name="senhaUser" type="password" class="validate">
					<label for="senhaUser">Senha atual</label>
				</div>
			</div>
			<div class="row">
			  <br><br>
			  <br><br>
			<div class="input-field col l12 m12 s12">
				<button class="btn waves-effect blue right" type="button" onclick="NomeUser();"name="logar">Salvar
					<i class="material-icons right">save</i>
				</button>
			</div>
		  </div>
		</form>
	</div>
    </div>
    </div>
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
