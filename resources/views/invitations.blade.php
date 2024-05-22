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

    @include('_includes.topnav')

    @include('_includes.menu')
   
    <!-- partial:index.partial.html -->
<div class="container2">
        <div class="container-top">
            <div class="left">
                <h2>Suivie des invitations</h2>
                <p>Vous pouvez envoyer des invitations aussi</p>
            </div>
            <div class="right">
                <button id="createNew">Envoyer</button>
            </div>
        </div>
        <div class="container-body">
            <table id="table">
                    @php
                    $i=1
                    @endphp
                    @foreach ($rows as $user )
                    <tr>
                        <td>{{$user->NOM}} {{$user->PRENOM}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->STATUT}}</td>
                    </tr>
                    @endforeach
              </table>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="modal-container">
            <form id="form" class="form">
                <h2>Envoyer une invitation</h2>
                <div class="form-control">
                    <label for="name">Votre lien</label>
                    <input type="text" id="name" value="http://localhost:8000/?ref={{session('user_id')}}" required disabled>
                </div>
                <div class="form-control">
                    <label for="domain">Domain</label>
                    <input type="number" id="domain" placeholder="Please enter a domain number..." autocomplete="off" required>
                </div>
                <div class="form-control">
                    <label for="status">Status</label>
                    <input type="text" id="status" placeholder="Please enter the status..." autocomplete="off" required>
                </div>
                <button type="submit">Copiez le lien</button>
            </form>
        </div>
    </div>
</body>

</html>
<!-- partial -->
  <script  src="{{asset('assets/js/script.js')}}"></script>
  <script  src="{{asset('assets/js/invitations.js')}}"></script>

</body>
</html>
