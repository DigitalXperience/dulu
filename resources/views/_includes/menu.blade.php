<?php 
//cho basename($_SERVER['PHP_SELF']);

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav container">
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'accueil') echo "active"; ?>">
        <a class="nav-link" href="/accueil">
            <i class="fa fa-tachometer-alt"></i>&nbsp; Tableau de Bord
        </a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'invitations') echo "active"; ?>">
        <a class="nav-link" href="/invitations">
            <i class="fa fa-list"></i>&nbsp; Invitations
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/commander">
            <i class="fa fa-shopping-cart"></i>
            </i>&nbsp; Commander
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Commandes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/mescommandes">
                <i class="fa fa-list"></i>&nbsp; Mes commandes
            </a>
            <a class="dropdown-item" href="/commandesChild">
                <i class="fa fa-shopping-cart"></i>
                </i>&nbsp; Mes Commandes Fils
            </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/logout">
                <i class="fa fa-sign-out"></i>&nbsp; Logout
            </a>
            <a class="dropdown-item" href="/parametres">
                <i class="fa fa-cog"></i>&nbsp; Paramètres
            </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
