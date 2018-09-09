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
  <?php include('include/menu.php'); ?>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="tituloSecudario header center blue-text">Envolvidos no Projeto</h1>
        <div class="row center">
          <h5 class="tituloSecudario header col s12 light">Stakeholders</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <ul class="center pessoas">
  <br>
  <br>
  <div class='row center'>
  <?php
    //Conectando ao banco de dados
    
	include('conexao.php');
	$qryLista3 = mysqli_query($mysqli, "SELECT membros.nome, membros.sobrenome, membros.link, membros.foto, membros.descricao FROM membros WHERE status='1' ORDER BY membros.nome, membros.sobrenome ASC");
	$sql3 = "SELECT membros.nome, membros.sobrenome, membros.link, membros.foto, membros.descricao FROM membros WHERE status='1' ORDER BY membros.nome, membros.sobrenome ASC" or die("Erro ao selecionar");
	$query3 = $mysqli->query($sql3);
	$row3 = $query3->num_rows;
		if($row3>0){
			while($ress = mysqli_fetch_array($qryLista3)){
				echo "<div class='col l3 s12 m4'>
						<div class='card'>
						<div class='card-image waves-effect waves-block waves-light'>
						  <img class='activator' src='fotos/$ress[3]'>
						</div>
						<div class='card-content'>
						  <span class='card-title activator grey-text text-darken-4'>$ress[0] $ress[1]<i class='material-icons right'>more_vert</i></span>
						  <p><a href='$ress[2]' target='_blank'>Currículo Lattes</a></p>
						</div>
						<div class='card-reveal'>
						  <span class='card-title grey-text text-darken-4'>$ress[0] $ress[1]<i class='material-icons right'>close</i></span>
						  <p>$ress[4]</p>
						</div>
					  </div>
					</div>";
			}
		}else{
			echo "<table class='centered'><tr class='modal-close'><td>Nenhum resultado encontrado</td></tr></table>";		
		}
?>
</div>
<br>
  <br>
  </ul>

  <?php include('include/rodape.php'); ?>


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/init.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>
