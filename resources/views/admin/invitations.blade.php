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

<link rel="stylesheet" href="{{asset('assets/css/invitations.css')}}">

</head>
<body>

    @include('admin._includes-admin.topnav')

    @include('admin._includes-admin.menu')
   
    <!-- partial:index.partial.html -->
<div class="container2">
        <div class="container-top rows">
            <div class="left col-md-8">
                @if (session('status'))
                    <div id="stats" style="display: block;">
                        {{session('status')}}   
                    </div>
                @endif
                <h2>Suivie les invitations</h2>
                <!--    <p>Vous pouvez envoyer des invitations aussi</p> -->
            </div>
            
        </div>
        <div class="container-body">
            
            <table id="table">
                <tr>
                  <th>Membre</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                    @php
                        $i=1
                    @endphp
                    @foreach ($rows as $user )
                        <tr>
                            <td>{{$user->NOM}} {{$user->PRENOM}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->STATUT}}</td>
                            @if ($user->STATUT == 'EN ATTENTE')
                                <td>
                                    <a href="refuser/{{{$user->id}}}">
                                        <i class="fa fa-thumbs-down" aria-hidden="true" style="color: red;font-size: x-large;"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="active/{{{$user->id}}}">
                                        <i class="fa fa-thumbs-up" aria-hidden="true" style="color: green;font-size: x-large;"></i>
                                    </a>
                                    
                                </td>
                            @endif
                            
                        </tr>
                    @endforeach
            </table>
            {{ $rows->links('pagination::bootstrap-4') }}
        </div>
    </div>
</body>

</html>
<!-- partial -->
  <script  src="{{asset('assets/js/script.js')}}"></script>
  <script  src="{{asset('assets/js/invitations.js')}}"></script>
  <script>
    displaystat();
    function displaystat(){
        stat=document.getElementById('stats')
        if(stat){
            setTimeout(function() {
                stat.style.display="none";
            }, 3000);
        }
    }
        
    </script>
</body>
</html>
