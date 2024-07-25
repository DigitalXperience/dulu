<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Paramètres</title>
  <link rel="shortcut icon" type="image/png" href="assets/img/gulu_logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('assets/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">


</head>
<body>
    
    @include('_includes.topnav')

    @include('_includes.menu')
    <div class="container main" style="padding-left:0px;">
        
        <div class="d-block d-md-none menu">

            <div class="bar"></div>
        
        </div>
        
        <div class="row align-items-center" style="height:100%">
        
        <div class="col-md-9">
            
            <div class="container content clear-fix">
        
            <h2 class="mt-5 mb-5">Profile Settings</h2>
            
            <div class="row mb-5" style="height:100%">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li class="alert alert-danger">
                            {{$error}};
                        </li>
                    @endforeach 
                </ul>
                    
                <div class="col-md-9">
                    <div class="container">
                        <form id="form" action="/parametres/action" method="post">
                        @csrf
                            <div class="form-group">
                                <label for='nom'>Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{$user->NOM}}">
                            </div>
                            <div class="form-group">
                                <label for='prenom'>Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" value="{{$user->PRENOM}}">
                            </div>
                            <div class="form-group">
                                <label for='email'>Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user->EMAIL}}">
                            </div>
                            <div class="form-group">
                                <label for='number'>Numéro</label>
                                <input type="number" class="form-control" id="number" name="number" value="{{$user->TELEPHONE}}">
                            </div>
                            <div class="form-group">
                                <label for='mdp'>Mot de passe</label>
                                <input type="password" class="form-control" id="mdp" name="mdp" required>
                            </div>
                            <div class="form-group">
                                <label for='mdp_confirm'>confirme mot de passe</label>
                                <input type="password" class="form-control" id="mdp_confirm" name="mdp_confirm" required>
                            </div>
                            <div class="row">      
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-warning btn-block">Cancel</button>
                                </div>
                            </div>

                        </form>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
            
        </div>
    
    </div>
    
</div>
<script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
    <script src="assets/js/popper.min.js" ></script>

    
<!-- partial -->
<script  src="{{asset('assets/js/script.js')}}"></script>
<script>
    // Get the password and confirm password input fields
    const passwordInput = document.getElementById('mdp');
    const confirmPasswordInput = document.getElementById('mdp_confirm');
    const passwordMessage = document.getElementById('password-message');
    // Get the button element
    const button = document.getElementById('myButton');
    const form = document.getElementById('myForm');
    confirmPasswordInput.addEventListener('input', function() {
    // Get the values of the password and confirm password fields
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    // Check if the passwords match
    if (password === confirmPassword) {
        passwordMessage.textContent = 'Passwords match';
        passwordMessage.style.color = 'green';
        form.addEventListener('submit', function(event) {
        // Check if the form is valid
        if (!form.checkValidity()) {
            // Prevent the form from being submitted
            event.preventDefault();
        }
        });
    } else {
        passwordMessage.textContent = 'Passwords do not match';
        passwordMessage.style.color = 'red';
        // Disable the button
        button.disabled = true;
    }
    });
</script>

</body>
</html>
