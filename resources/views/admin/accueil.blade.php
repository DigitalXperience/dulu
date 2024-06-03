<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Dashboard</title>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Check out the dark themed version on my github: https://github.com/emkelley -->


<body>
    <nav class="navbar topNav">
        <div class="container ">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://ericmkelley.com">
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
        <!-- <div class="columns">
            <div class="column is-12 main">
                <span class="heading">Recentes Commandes</span>
                <section id="order">
                    <div class="order-body">
                        <article class="media order shadow delivered">
                            <figure class="media-left">
                                <i class="fa fas-box"></i>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Package for John Smith Delivered</strong>
                                        <br>
                                        <small>Boston - West Palm Beach | Tracking ID:
                                            <strong>90872373904439</strong>
                                        </small>
                                    </p>
                                </div>
                            </div>
                            <div class="media-right">
                                <div class="tags has-addons">
                                    <span class="tag is-light">Status:</span>
                                    <span class="tag is-delivered">Delivered</span>
                                </div>
                            </div>
                        </article>
                        <article class="media order shadow">
                            <figure class="media-left">
                                <i class="fas fa-box"></i>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Package for Jane Doe Dispatched</strong>
                                        <br>
                                        <small>Los Angeles - Shenzhen | Tracking ID:
                                            <strong>937347947904439</strong>
                                        </small>
                                    </p>
                                </div>
                            </div>
                            <div class="media-right">
                                <div class="tags has-addons">
                                    <span class="tag is-light">Status:</span>
                                    <span class="tag is-success">In Transit</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
                <span class="heading">Stats</span>
                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">8365</p>
                                <p class="subtitle">Total Deliveries</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">2172</p>
                                <p class="subtitle">Products</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">24</p>
                                <p class="subtitle">Open Orders</p>
                            </article>
                        </div>
                    </div>
                </section>
                <div class="columns">
                </div>
            </div>
        </div> -->
        <br>
        <span class="heading">Recent Orders</span>
        <br>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <canvas id="orderChart"></canvas>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <canvas id="ticketChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- partial -->
  <script  src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>
