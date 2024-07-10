<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MyDULU WEAR - Dashboard</title>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('assets/css/commande_style.css')}}">

<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">
<link rel='stylesheet' href='{{asset('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css')}}'>
<link rel="stylesheet" href="{{asset('assets/css/dulu_member_style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
<!-- font-awesome css -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<!-- responsive css -->
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/commande.css')}}">


</head>
<body>
    
    @include('_includes.topnav')

    @include('_includes.menu')
    <div class="contain">
        <!-- Start Product Area Three -->
        <div class="product-area-3 area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						<h2>Products</h2>
						</div>
					</div>
				</div>
				<div class="row mb-5">
                    <div class="best-product best-indicator">
						<!-- Start single product -->
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-5">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="single-product single-product-2">
                                        <div class="single-product-img green">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="first-img" src="{{asset('assets/img/vue-face-t-shirt-blanc-isole_125540-1194.avif')}}" alt="" style="height: 202px;">
                                                </a>
                                            </div>
										</div>
									</div>
								</div>
						        <!-- Start product content -->
                                <div class="col-md-6 col-sm-6">
									<div class="single-product single-product-2">
										<div class="product-content">
											<h3 class="product-name">
												<a href="#">Product Title</a>
											</h3>
											<div class="price-box">
												<span class="new-price">15,000 FCFA</span>
											</div>
											<div class="pro-rating no-rating">
												<a href="#"><i class="fa fa-star-o"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
											</div>
											<div class="product-decs">
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines.</p>
											</div>
											<div class="add-cart">
												<button data-toggle="modal" data-target="#productModal" class="btn btn-warning" id="modalHaut" >COMMANDER</button>
											</div>
										</div>
									</div>
								</div>
				            </div>
				        </div>
						<!-- End single product -->
						
						<!-- Start single product -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="single-product single-product-2">
                                        <div class="single-product-img blue">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="first-img" src="{{asset('assets/img/gant-hockey-glace-bleu-isole-fond-transparent_191095-17274.jpg')}}"" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start product content -->
                                <div class="col-md-6 col-sm-6 pl-5">
                                    <div class="single-product single-product-2">
                                        <div class="product-content">
                                            <h3 class="product-name">
                                                <a href="#">Product Title</a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price">20,000 FCFA</span>
                                            </div>
                                            <div class="pro-rating no-rating">
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                            </div>
                                            <div class="product-decs">
                                                <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines.</p>
                                            </div>
                                            <div class="add-cart">
                                                <button data-toggle="modal" data-target="#productModal" class="btn btn-warning" id="modalAutre">COMMANDER</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- End single product -->
		            </div>
		        </div>
                <!-- <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <button type="button" class="btn btn-primary">TOUT COMMANDER</button>
						</div>
					</div>
				</div> -->
			</div>
		</div>
        <!-- End Product Area Three -->

        <div class="modal" id="modal">
            <div class="modal-container">
                <form id="form" class="form-horizontal row" action="/commande/saveHaut" method="post">
                    @csrf
                    <input type="hidden" name="product_name" id="product_name">
                    

                    <h2>Confimation de livrasion</h2>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="total">Unique Amount (*FCFA)</label>
                        <div class="input-group">
                            <div class="input-group-addon">CFA</div>
                            <input type="text" class="form-control" name="total" id="total" readonly="readonly">
                            <div class="input-group-addon">.00</div>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="price">Total (*FCFA)</label>
                        <div class="input-group">
                            <div class="input-group-addon">CFA</div>
                            <input type="text" class="form-control" name="price" id="price" readonly="readonly">
                            <div class="input-group-addon">.00</div>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-6 col-sm-12 col-xs-12 m-5">

                        <label for="number"> Nombre d'article</label><br>
                        <input type="number" class="form-control nombre" name="number" id="number" min="0" value="1"></input>  
                        
                        <button type="button" value="plus" class="btn btn-success" onclick="updateAmount(this);">
                            +  
                        </button> 
                        <button type="button" value="minus"  class="btn btn-warning"  onclick="updateAmount(this);">
                            -  
                        </button> 
                    </div>
                    <div class="form-group col-md-6 col-sm-12 col-xs-12 m-5">
                        <label for="number"> Votre Numero</label><br>
                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="+237 6** *** ***"></input>   
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <button type="submit" class="btn btn-primary">CONFIRM</button>
						</div>
					</div>
                </form>
                
            </div>
        </div>
    </div>
</body>

</html>
<!-- partial -->
<!-- <script  src="{{asset('assets/js/script.js')}}"></script> -->
<script  src="{{asset('assets/js/commande.js')}}"></script>

</body>
</html>
