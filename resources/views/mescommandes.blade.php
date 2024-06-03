




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Invitations</title>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">

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
                    $price=$user->PRODUCT_PRICE*$user->PRODUCT_QUANTITY
                    @endphp
                    @switch ($user->DILIVARY_STATUS) 
                        @case ('1')
                            @php
                                $Status='EN ATTENTE'    
                            @endphp
                            
                            @break
                        @case ("2"):
                            @php
                                $Status='EN COURS'    
                            @endphp
                            @break
                        @case ("3"):
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
  <script  src="{{asset('assets/js/script.js')}}"></script>
  <script  src="{{asset('assets/js/invitations.js')}}"></script>

</body>
</html>
