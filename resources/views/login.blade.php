


<!DOCTYPE html>
<html lang="en" class="loading">

<!-- Mirrored from localhost/youth/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jun 2018 12:03:50 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyDULU WEAR | Affronte la vie sec</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/ico/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
</head>
<body data-col="1-column" class=" 1-column  blank-page blank-page">
    <div class="wrapper login-page">
		<div class="main-panel">
			<div class="main-content">
				<div class="content-wrapper">
					<section id="login">
						<div class="container-fluid">
							<div class="row full-height-vh">
								<div class="col-12 d-flex align-items-center justify-content-center">
									<div class="card bg-degrade text-center width-800">
										<div class="card-img overlap">
											<img alt="element 06" class="mb-1" src="{{asset('assets/img/logo2.png')}}" width="190">
										</div>
										<div class="card-body">
											<div class="card-block">    
												<h2 class="white">Connexion</h2>
                                                <form class="needs-validation" action="/login/registration" methode="get">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                        <label for="validationTooltip01">Nom</label>
                                                        <input type="text" class="form-control" id="new_user_nom" name="new_user_nom" placeholder="Votre nom" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        </div>
                                                        
                                                        <div class="col-md-4 mb-3">
                                                        <label for="validationTooltip02">Prenom</label>
                                                        <input type="text" class="form-control" id="new_user_prenom" name="new_user_prenom" placeholder="Votre prenom" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                        <label for="validationTooltip01">Parent id</label>
                                                        <input type="text" class="form-control" id="parent_id" name="parent_id" value="{{$_POST['parent_id']}}" readonly="readonly">
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationTooltipUsername">Email</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="new_user_email" name="new_user_email" value="{{$_POST['email_address']}}" aria-describedby="validationTooltipUsernamePrepend" required>
                                                            <div class="invalid-tooltip">
                                                            Please choose a unique and valid username.
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                        <label for="validationTooltip04">Numero de telephone</label>
                                                        <input type="number" class="form-control" id="new_user_telephone" name="new_user_telephone" placeholder="Votre numero de telephone" required>
                                                        <div class="invalid-tooltip">
                                                            Please provide a valid state.
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
    </div>
    <script src="{{asset('assets/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/customizer.js')}}" type="text/javascript"></script>
</body>

<!-- Mirrored from localhost/youth/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jun 2018 12:04:15 GMT -->
</html>