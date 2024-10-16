



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav container">
        <li class="nav-item m-2 <?php if(basename($_SERVER['PHP_SELF']) == 'accueil') echo "active"; ?>">
            <a class="nav-link" href="accueil">
                <i class="fa fa-tachometer-alt"></i>&nbsp; Tableau de Bord
            </a>
        </li>
        
        <li class="nav-item m-2  <?php if(basename($_SERVER['PHP_SELF']) == 'invitations') echo "active"; ?>">
            <a class="nav-link" href="invitations">
                <i class="fa fa-list"></i>&nbsp; Invitations
            </a>
        </li>
        <li class="nav-item m-2 <?php if(basename($_SERVER['PHP_SELF']) == 'arbre') echo "active"; ?>">
            <a class="nav-link" href="arbre">
                <i class="fa fa-shopping-cart"></i>
                    &nbsp; Mon Arbre
            </a>
        </li>
        <li class="nav-item m-2">
            <a class="nav-link" href="commandes">
                <i class="fa fa-list"></i>&nbsp; Les commandes
            </a>
        </li>
        <li class="nav-item m-2">
            <a class="nav-link" href="/logout">
                <i class="fa fa-sign-out"></i>&nbsp; Logout
            </a>
        </li>
    </ul>
    </div>
</nav>
