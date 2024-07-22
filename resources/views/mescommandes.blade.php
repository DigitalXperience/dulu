




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Invitations</title>
  <link rel="shortcut icon" type="image/png" href="assets/img/gulu_logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/commande.css')}}">

</head>
<body>

    @include('_includes.topnav')

    @include('_includes.menu')
   
    <!-- partial:index.partial.html -->
    <div class="container2">
        <div class="container-body">
            <table id="table">
                <tr>
                  <th>Product Name</th>
                  <th>Product Quantity</th>
                  <th>Product unic price</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th>Numero de telephone</th>
                  <th>Date de creation</th>

                </tr>
                    @php
                        $i=1
                    @endphp
                    @foreach ($commande as $user )
                        @php
                            $price=$user->PRODUCT_PRICE*$user->PRODUCT_QUANTITY;
                        @endphp
                        @switch ($user->DILIVARY_STATUS) 
                            @case ('1')
                                @php
                                    $Status='EN ATTENTE'    
                                @endphp
                                
                                @break
                            @case ("2")
                                @php
                                    $Status='EN COURS'    
                                @endphp
                                @break
                            @case ("3")
                                @php
                                    $Status='LIVRAIE'    
                                @endphp
                                @break
                            @default
                                @php
                                    $Status='ANNULE'    
                                @endphp
                        @endswitch
                        <tr>
                            <td>{{$user->PRODUCT_NAME}}</td>
                            <td>{{$user->PRODUCT_QUANTITY}}</td>
                            <td>{{$user->PRODUCT_PRICE}}</td>  
                            <td>{{$price}}</td>
                            <td>{{$Status}}</td>
                            <td>{{$user->USER_TELEPHONE}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach
            </table>

        
            
        </div>
    </div>
</body>

</html>

<!-- partial -->
  <script  src="{{asset('assets/js/dulu_member_script.js')}}"></script>
  <script  src="{{asset('assets/js/invitations.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    
</body>
</html>
