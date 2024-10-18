<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Invitations</title>
  <link rel="shortcut icon" type="image/png" href="assets/img/gulu_logo.png">

  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/invitations.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

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
                <tr>
                  <th>Membres</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
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
            <form id="form">
                <h2>Envoyer une invitation</h2>
                <div class="form-group">
                    <label for="link">Votre lien</label>
                    <input type="text" id="link"  class="form-control" value="https://duluwear.com/?ref={{session('user_id')}}" required disabled>
                </div>
                <button class="btn btn-success" onclick="copyToClipboard()">Copiez le lien</button>
            </form>
        </div>
    </div>
</body>

</html>
<!-- partial -->
  <script  src="{{asset('assets/js/script.js')}}"></script>
  <script  src="{{asset('assets/js/invitations.js')}}"></script>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
    <script src="assets/js/popper.min.js" ></script>
</body>
</html>
