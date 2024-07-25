
    @include('_includes.menu')

    <div class="container">
        <div class="columns">
            <div class="column is-12 main">
                <span class="heading">Recentes Commandes</span>
                <section id="order">
                    <div class="order-body">
                    @if (isset($userCommande))
                        @switch ($userCommande->DILIVARY_STATUS) 
                            @case ('1')
                                @php
                                    $Status_user='EN ATTENTE'    
                                @endphp
                                
                                @break
                            @case ("2"):
                                @php
                                    $Status_user='EN COURS'    
                                @endphp
                                @break
                            @case ("3"):
                                @php
                                    $Status_user='LIVRAIE'    
                                @endphp
                                @break
                            @default
                                @php
                                    $Status_user='ANNULE'    
                                @endphp
                        @endswitch


                        <article class="media order shadow delivered">
                            <figure class="media-left">
                                <i class="fa fas-box"></i>
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Package for {{$userCommande->NOM}} </strong>
                                        <br>
                                        <small>{{$userCommande->USER_TELEPHONE}} | Tracking ID:
                                            <strong>{{$userCommande->id}}</strong>
                                        </small>
                                    </p>
                                </div>
                            </div>
                            <div class="media-right">
                                <div class="tags has-addons">
                                    <span class="tag is-light">Status:</span>
                                    <span class="tag is-delivered">{{$Status_user}}</span>
                                </div>
                            </div>
                        </article>
                        @endif

                        @if (isset($childCommande))
                        @switch ($childCommande->DILIVARY_STATUS) 
                            @case ('1')
                                @php
                                    $Status_child='EN ATTENTE'    
                                @endphp
                                
                                @break
                            @case ("2"):
                                @php
                                    $Status_child='EN COURS'    
                                @endphp
                                @break
                            @case ("3"):
                                @php
                                    $Status_child='LIVRAIE'    
                                @endphp
                                @break
                            @default
                                @php
                                    $Status_child='ANNULE'    
                                @endphp
                        @endswitch
                            <article class="media order shadow">
                                <figure class="media-left">
                                    <i class="fas fa-box"></i>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>Package for {{$childCommande->NOM}} (child) </strong>
                                            <br>
                                            <small>{{$childCommande->USER_TELEPHONE}} | Tracking ID:
                                                <strong>{{$childCommande->id}}</strong>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                                <div class="media-right">
                                    <div class="tags has-addons">
                                        <span class="tag is-light">Status:</span>
                                        <span class="tag is-success">{{$Status_child}}</span>
                                    </div>
                                </div>
                            </article>
                        @endif
                       
                    </div>
                </section>
                <span class="heading">Stats</span>
                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$dilivadRows}}</p>
                                <p class="subtitle">Total Deliveries</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$selectedRows}}</p>
                                <p class="subtitle">Products</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{$openRows}}</p>
                                <p class="subtitle">Open Orders</p>
                            </article>
                        </div>
                    </div>
                </section>
                <div class="columns">
                </div>
            </div>
        </div>
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
<!-- partial -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
    <script src="assets/js/popper.min.js" ></script>

  <script  src="{{asset('assets/js/script.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
  const ctx = document.getElementById('orderChart');
  const ctx_1 = document.getElementById('ticketChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  new Chart(ctx_1, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 25, 3],
        borderWidth: 5
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


</body>
</html>
