<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - ADMIN</title>
  <link rel="shortcut icon" type="image/png" href="/assets/img/gulu_logo.png">

  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('/assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('/assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('/assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/arbre.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">


</head>
<body>
<!-- partial:index.partial.html -->
<!-- Check out the dark themed version on my github: https://github.com/emkelley -->


<body>
    

    @include('admin._includes-admin.topnav')

    @include('admin._includes-admin.menu')
    <div class="container">
        <div class="tree">
            <ul>
                <li>
                    <a href="#">{{session('user_name')}}</a>
                    <ul>
                        @foreach ($rows as $user )
                            <li>
                                <a href="#">{{$user->PRENOM}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
<!-- partial -->
<script  src="{{asset('/assets/js/script.js')}}"></script>
    <script  src="{{asset('/assets/js/invitations.js')}}"></script>
    <script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery-3.3.1.slim.min.js')}}" ></script>
    <script src="{{asset('/assets/js/popper.min.js')}}" ></script>

</body>
</html>
