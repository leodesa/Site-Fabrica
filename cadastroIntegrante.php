<?php
	include('classes/CRUD.class.php');
	include("conexao.php");
	$CRUD = new CRUD;
	$CRUD->verificarNivel(1);
?>
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
<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h5>Buscar integrante</h5>
      <div class="row">
        <div class="input-field col l6 m6 s12">
          <input id="nomeI" name="nomeI" type="text" class="validate">
          <label for="nomeI">Nome</label>
        </div>
        <div class="input-field col l6 m6 s12">
          <input id="sobrenomeI" name="sobrenomeI" type="text" class="validate">
          <label for="sobrenomeI">Sobrenome</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col l4 m3 s12">
          <input id="matriculaI" type="text" name="matriculaI" maxlength="4" class="validate">
          <label for="matriculaI">Matrícula</label>
        </div>
        <div class="input-field col l8 m9 s12">
          <input id="linkI" name="linI" type="text" class="validate">
          <label for="linkI">Link para o Lattes</label>
        </div>
        </div>
    </div>
	<div class="result"></div>
    <div class="modal-footer">
      <a href="#!" class="blue btn" onclick="BuscarIntegrante();"><i class="material-icons left">search</i>Buscar</a>
    </div>
  </div>
  <?php include('include/menu2.php');?>
  <br>
  <br>
  <br>
    <form class="container" action="DAO.php" method="post" enctype="multipart/form-data">
      <h4 class="blue-text center-align">Cadastro de integrantes</h4><br>
	  <div class="container">
		<div class="row">
		  <a class="blue btn right modal-trigger" href="#modal1" onclick="limparIntegrante();"><i class="material-icons left">search</i> Buscar</a>
		</div>
	  </div>
	  <br>
	  <br>
        <div class="row">
        <div class="input-field col l4 m6 s12 push-l2">
          <i class="material-icons prefix">person</i>
          <input id="idIntegrante" name="idIntegrante" type="hidden" class="validate">
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
          <i class="material-icons prefix">featured_play_list</i>
          <input id="matricula" type="text" name="matricula" maxlength="4" class="validate">
          <label for="matricula">Matrícula</label>
        </div>
        <div class="input-field col l6 m9 s12 push-l2">
          <i class="material-icons prefix">insert_link</i>
          <input id="link" name="link" type="text" class="validate">
          <label for="link">Link para o Lattes</label>
        </div>
		<div class="input-field col l8 m12 s12 push-l2">
          <div class="input-field col s12">
            <textarea id="textarea2" name="descricao" class="materialize-textarea" data-length="1000"></textarea>
            <label for="textarea2">Breve descrição</label>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="file-field input-field col l6 m10 s12 push-l2">
          <div class="btn blue">
          <span>Foto</span>
          <input type="file" name="foto" id="foto">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" id="nomeFoto" name="nomeFoto" type="text">
        </div>
		</div>
		<div class="file-field input-field col l2 m2 s6 push-l2" style=>
			<div id="wrapper z-depth-5">       
				<div id="image-holder" style="width:100px;height:100px;background:#f0f0f0;"></div>
			</div>
		</div>
        <br><br>
		<div id="op" class="col l8 m12 s6 push-l2">
		<br>
		<br>
          <button class="btn waves-effect blue right" id="integrante" type="submit" name="cadastrar">Cadastrar
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
