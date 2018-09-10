<head>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <style type="text/css">
      #arrow{
        margin-left:14px!important;
      }
    </style>
</head>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="cadastroIntegrante.php" class="blue-text">Integrantes</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="config.php" class="blue-text">Configurações</a></li>
</ul>
<nav class="blue" role="navigation">
    <div class="nav-wrapper">
	<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars fa-lg"></i></a>
	<div class="container">
	<img src="img/logo.png" width="75" class="hide-on-med-only hide-on-small-only">
	<a href="cadastro.php" class="brand-logo show-on-small-and-up">Fábrica de Software</a>
	
      <ul class="right hide-on-med-and-down hide-on-med-only">
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons prefix left">note_add</i>Cadastro<i class="material-icons right">arrow_drop_down</i></a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><i class="material-icons prefix left">account_box</i>Conta<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="logout.php">Sair<i class="material-icons right">exit_to_app</i></a></li>
      </ul>
    </div>
    </div>
  </nav>

  <ul id="slide-out" class="sidenav">
      <br>
      <div class="row col s12 center-align">
        <img class="responsive-img" width="100" src="img/logo.png">
      </div>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion" style="outline: none;">
          <li style="outline: none;">
            <a class="collapsible-header" style="outline: none;" id="arrow"><i class="material-icons prefix left">note_add</i>Cadastro<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="cadastroIntegrante.php" class="blue-text">Integrantes</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
	  <li class="no-padding">
        <ul class="collapsible collapsible-accordion" style="outline: none;">
          <li style="outline: none;">
            <a class="collapsible-header" style="outline: none;" id="arrow"><i class="material-icons prefix left">account_box</i>Conta<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="config.php" class="blue-text">Configurações</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a href="logout.php">Sair<i class="material-icons left">exit_to_app</i></a></li>
    </ul>