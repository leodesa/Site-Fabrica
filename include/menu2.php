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
<nav class="blue">
    <div class="nav-wrapper">
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars fa-lg"></i></a>
      <ul class="right hide-on-med-and-down hide-on-med-only">
        <li style="outline: none;"><a class="dropdown-trigger" style="outline: none;" href="#!" data-target="dropdown1">Cadastros<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg right"></i> Sair</a></li>
      </ul>
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
            <a class="collapsible-header" style="outline: none;" id="arrow">Cadastros<i class="material-icons right">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="cadastroIntegrante.php" class="blue-text">Integrantes</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a href="cadastroCliente.php"><i class="fas fa-sign-out-alt fa-lg"></i>Sair</a></li>
    </ul>