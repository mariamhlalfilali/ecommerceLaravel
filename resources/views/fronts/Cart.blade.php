<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Furniture</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('logo/favicon.png')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

        <!--linear icon css-->
		<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
    /* Style général du panier */
    .single-product-area {
        padding: 50px;
        border: 2px solid orange;
        border-radius: 10px;
    }

    /* Style du titre du panier */
    .product-bit-title {
        margin-bottom: 30px;
        font-size: 24px;
        font-weight: bold;
    }

    /* Style du tableau du panier */
    .shop_table.cart {
        width: 100%;
        margin-bottom: 30px;
        border-collapse: collapse;
    }

    /* Style de l'en-tête du tableau */
    .shop_table.cart thead th {
        font-weight: bold;
        background-color: orange;
        color: white;
        padding: 10px;
        text-align: left;
    }

    /* Style des lignes du tableau */
    .shop_table.cart tbody tr {
        border-bottom: 1px solid #ccc;
    }

    /* Style des cellules du tableau */
    .shop_table.cart td {
        padding: 10px;
    }

    /* Style du total du panier */
    .cart_totals {
        margin-top: 30px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    /* Style des sous-totaux du panier */
    .cart-subtotal th {
        font-weight: bold;
    }

    /* Style du total de la commande */
    .order-total th {
        font-weight: bold;
    }

    /* Style des messages d'alerte */
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
    }

    .alert-danger {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
    }
</style>
    </head>
    <body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
				</ol><!-- /ol-->
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					
					
				</div><!-- /.carousel-inner-->

			</div><!--/#header-carousel-->

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                    <li class="dropdown">

										@auth
											@php
												$user = auth()->user();
												if ($user) {
													$user->load('panier');
												}
											@endphp


											<a href="/cartfront/{{ auth ()->user()->id }}" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart"></span>
											<span class="badge badge-bg-1">{{$user->panier ? count($user->panier) : 0}}</span>
				                        	</a>
											
										@endauth





				                    </li><!--/.dropdown-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
			@include('fronts.Nav')

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->

		

		</section><!--/.populer-products-->
		<!--populer-products end-->

		<!--new-arrivals start -->
		<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    <br><br>
    <div class="single-product-area">
        
        <div class="zigzag-bottom"></div>
        <div class="container">
            <!-- Alert for add product to cart-->
        @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
            
        <!-- Alert error -->
        @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                @if(count($produits)>0)
                                    <table cellspacing="0" class="shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <br><br>
                                            @foreach($produits as $panier)
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a href="/supprimerPanier/{{$panier->id}}">X</a>
                                                    </td>

                                                    <td class="product-thumbnail">
                                                        <a href="/single-product/{{$panier->id_produit}}"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{asset('products/'.$panier->photo)}}"></a>
                                                    </td>
                                                    
                                                    <td class="product-name">
                                                        <a href="/single-product/{{$panier->id_produit}}">{{$panier->nom}}</a>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="amount">{{$panier->prix}} DH</span>
                                                    </td>

                                                    <td class="product-quantity">
                                                        <div class="quantity buttons_added">
														<input type="number" size="4" class="input-text qty text" title="Qt" value="1" min="0" step="1" onchange="updateSubtotal(this, {{$panier->prix}})">
                                                        </div>
                                                    </td>

                                                    <td class="product-subtotal">
                                                        <span class="amount">{{$panier->prix}} DH</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h2>le panier est vide !!</h2>
                                @endif
                            </form>                        </div>  
                            <div class="cart_totals">
                                @isset($sommeAchat)
                                    <h2>Cart Totals</h2>
                            
                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">{{$sommeAchat}} DH</span></td>
                                            </tr>
                            
                                            <tr class="shipping">
                                                <th>Shipping and Handling</th>
                                                <td>Free Shipping</td>
                                            </tr>
                                                <br><br>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td>
                                                    <strong>
                                                        <span id="orderTotal" class="amount">{{$sommeAchat}} DH</span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endisset
                            </div>

                      
                    </div>                    
                </div>
            </div>
        </div>
    </div>        
		<br><br><br>
					<div class="col-md-3 col-sm-4">
					

		<!--new-arrivals end -->


		<!--feature start -->
		
		<!--feature end -->


		<!-- clients strat -->
		<section id="clients"  class="clients">
			<div class="container">
				<div class="owl-carousel owl-theme" id="client">
						<div class="item">
							<a href="#">
								<img src="{{asset('images/clients/c1.png')}}" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="{{asset('images/clients/c2.png')}}" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="{{asset('images/clients/c3.png')}}" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="{{asset('images/clients/c4.png')}}" alt="brand-image" />
							</a>
						</div><!--/.item-->
						<div class="item">
							<a href="#">
								<img src="{{asset('images/clients/c5.png')}}" alt="brand-image" />
							</a>
						</div><!--/.item-->
					</div><!--/.owl-carousel-->

			</div><!--/.container-->

		</section><!--/.clients-->	
		<!-- clients end -->

		<!--newsletter strat -->
		<section id="newsletter"  class="newsletter">
			<div class="container">
				<div class="hm-footer-details">
					<div class="row">
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>information</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">about us</a></li><!--/li-->
										<li><a href="#">contact us</a></li><!--/li-->
										<li><a href="#">news</a></li><!--/li-->
										<li><a href="#">store</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>collections</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">wooden chair</a></li><!--/li-->
										<li><a href="#">royal cloth sofa</a></li><!--/li-->
										<li><a href="#">accent chair</a></li><!--/li-->
										<li><a href="#">bed</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6 col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>my accounts</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-menu">
									<ul>
										<li><a href="#">my account</a></li><!--/li-->
										<li><a href="#">wishlist</a></li><!--/li-->
										<li><a href="#">Community</a></li><!--/li-->
										<li><a href="#">order history</a></li><!--/li-->
										<li><a href="#">my cart</a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-menu-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
						<div class=" col-md-3 col-sm-6  col-xs-12">
							<div class="hm-footer-widget">
								<div class="hm-foot-title">
									<h4>newsletter</h4>
								</div><!--/.hm-foot-title-->
								<div class="hm-foot-para">
									<p>
										Subscribe  to get latest news,update and information.
									</p>
								</div><!--/.hm-foot-para-->
								<div class="hm-foot-email">
									<div class="foot-email-box">
										<input type="text" class="form-control" placeholder="Enter Email Here....">
									</div><!--/.foot-email-box-->
									<div class="foot-email-subscribe">
										<span><i class="fa fa-location-arrow"></i></span>
									</div><!--/.foot-email-icon-->
								</div><!--/.hm-foot-email-->
							</div><!--/.hm-footer-widget-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.hm-footer-details-->

			</div><!--/.container-->

		</section><!--/newsletter-->	
		<!--newsletter end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>
					<p>
						&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="{{asset('js/jquery.js')}}"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
		
		<!-- bootsnav js -->
		<script src="{{asset('js/bootsnav.js')}}"></script>

		<!--owl.carousel.js-->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="{{asset('js/custom.js')}}"></script>
		<script>
			// Fonction pour mettre à jour le sous-total en fonction de la quantité
function updateSubtotal(input, prix) {
  var quantite = parseInt(input.value); // Récupérer la valeur de la quantité en tant qu'entier
  
  // Vérifier si la quantité est un nombre valide
  if (!isNaN(quantite) && quantite >= 0) {
    var sousTotal = quantite * prix; // Calculer le sous-total
    var spanElement = input.parentNode.parentNode.nextElementSibling.querySelector('.amount'); // Récupérer l'élément <span> où afficher le résultat
    
    // Vérifier si l'élément <span> existe
    if (spanElement) {
      spanElement.textContent = sousTotal + " DH"; // Mettre à jour le contenu avec le sous-total
    }
  }
}

		</script>
        
    </body>
	
</html>

    