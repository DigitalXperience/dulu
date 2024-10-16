<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Dashboard</title>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('/assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('/assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">


</head>
<body>
<!-- partial:index.partial.html -->
<!-- Check out the dark themed version on my github: https://github.com/emkelley -->


<body>
    <nav class="navbar topNav">
        <div class="container ">
            <div class="navbar-brand">
                <a class="navbar-item" href="./accueil">
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
 
    @include('.admin._includes-admin.menu')

    <div class="container">
        <div class="columns">
            <div class="column is-12 main">
                <span class="heading">Stats</span>
                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$not_paid}}</p>
                                <p class="subtitle">commission payée</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$paid}}</p>
                              <p class="subtitle">commission a payer</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$commandes}}</p>
                                <p class="subtitle">Commandes</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$commandes_encours}}</p>
                                <p class="subtitle">Commandes en cours</p>
                            </article>
                        </div>
                       
                    </div>
                </section>
                
            </div>
        </div>
        
    </div>
</body>

</html>
<!-- partial -->
  <script  src="{{asset('/assets/js/script.js')}}"></script>
  <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js" ></script>
    <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
  

</body>
</html>
