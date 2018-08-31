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
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="tituloSecudario header center blue-text text-lighten-2">Envolvidos no Projeto</h1>
        <div class="row center">
          <h5 class="tituloSecudario header col s12 light">Stakeholders</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <ul class="center pessoas">
  	<li class="pessoa"><a class="pessoa" href="http://lattes.cnpq.br/1894380906052388">
  		<img class="foto" src="img/fotos/adriano.png"><div class="center nome">Adriano Lima</div></a></li>
  	<li class="pessoa"><a class="pessoa" href="http://lattes.cnpq.br/1235438287461428">
  		<img class="foto" src="img/fotos/carlos.png"><div class="center nome">Carlos Williamy</div></a></li>
  	<li class="pessoa"><a class="pessoa" href="http://lattes.cnpq.br/4651344709997602">
  		<img class="foto" src="img/fotos/karlos.png"><div class="center nome">Karlos Oliveira</div></a></li>
  	<li class="pessoa"><a class="pessoa" href="http://lattes.cnpq.br/2245306643503713">
  		<img class="foto" src="img/fotos/leonardo.png"><div class="center nome">Leonardo Sá</div></a></li>
  </ul>

  <?php include('include/rodape.php'); ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
