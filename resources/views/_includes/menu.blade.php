
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="assets/img/gulu_logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">`
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
  <link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
  <link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/arbre.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/commande.css')}}">


<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/invitations.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/commande.css')}}">


<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


</head>

<body>
<!-- partial:index.partial.html -->
<!-- Check out the dark themed version on my github: https://github.com/emkelley -->


<body>

<nav class="navbar topNav">
    <div class="container ">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{asset('https://ericmkelley.com')}}">
                MyDULU WEAR
            </a>
            <div class="navbar-burger burger" data-target="">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field is-grouped">
                    <p class="control">
                        <a class="" href="#">
                            <i class="fa fa-user-circle"></i>
                        </a>
                        <span>{{session('user_name')}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>
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
