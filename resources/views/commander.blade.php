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

<style>
    .number-input {
      display: flex;
      align-items: center;
    }

    .number-input button {
      background-color: #f2f2f2;
      border: none;
      padding: 8px 12px;
      cursor: pointer;
    }

    .number-input input {
      width: 80px;
      padding: 8px;
      text-align: center;
      border: 1px solid #ccc;
    }
  </style>

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
				<div class="mb-5">
                    <div class="best-product best-indicator row">
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
                <form id="form" action="/commande/saveHaut" method="post">
                    @csrf
                    <input type="hidden" name="product_name" id="product_name">   
                    <h2>Confimation de livrasion</h2>
                    <div class="form-row">
                        <div class="col-sm-6 my-1">
                            <label for="total">Unique Amount (*FCFA)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">CFA</div>
                                </div>
                                <input type="text" class="form-control" name="total" id="total" readonly="readonly">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 my-1">
                            <label for="price">Total (*FCFA)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">CFA</div>
                                </div>
                                <input type="text" class="form-control" name="price" id="price" readonly="readonly">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 my-1">
                            <label for="number"> Nombre d'article</label><br>
                            <div class="number-input">
                                <button onclick="updateAmount(this);">-</button>
                                <input type="number" class="form-control nombre" name="number" id="number" min="0" value="1"></input>  
                                <button onclick="updateAmount(this);">+</button>
                            </div>  
                        </div>
                        <div class="col-sm-6 my-1">
                            <label for="number"> Votre Numero</label><br>
                            <input type="text" class="form-control" name="telephone" id="telephone" placeholder="+237 6** *** ***"></input>   
                        </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


</body>
</html>
