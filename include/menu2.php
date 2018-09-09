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
<nav class="blue" role="navigation">
    <div class="nav-wrapper">
	<a href="index.php"><img id="logo" src="img/logo.png" width="75"></a>
	<a href="index.php" class="brand-logo hide-on-med-and-down">Fábrica de Software</a>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars fa-lg"></i></a>
      <ul class="right hide-on-med-and-down hide-on-med-only">
        <li style="outline: none;"><a class="dropdown-trigger" style="outline: none;" href="#!" data-target="dropdown1"><i class="fas fa-plus-square fa-lg left"></i> Cadastro<i class="fas fa-sort-down fa-sm right"></i></a></li>
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
            <a class="collapsible-header" style="outline: none;" id="arrow"><i class="fas fa-plus-square fa-lg left"></i>Cadastro<i class="fas fa-sort-down fa-sm right"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="cadastroIntegrante.php" class="blue-text">Integrantes</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      </li>
      <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg"></i>Sair</a></li>
    </ul>