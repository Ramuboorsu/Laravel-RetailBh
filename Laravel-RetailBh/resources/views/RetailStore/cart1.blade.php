<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="csrf-token" content="{{ csrf_token() }}">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Retail Store</title>
		<!--Script For plus minus action-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{asset('frontend')}}/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{asset('frontend')}}/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="{{asset('frontend')}}/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{asset('frontend')}}/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{asset('frontend')}}/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{asset('frontend')}}/style.css"/>
<script src="{{asset('frontend')}}/main.js"></script>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		 <![endif]-->
		 

		 <script>
				$(document).ready(function(){
				
				var quantitiy=0;
				   $('.quantity-right-plus').click(function(e){

				   	var id = $(this).attr("id");
				   	var val =$('#qty-'+id).val();
			
						// Stop acting like a button
						e.preventDefault();
						// Get the field name
						var quantity = parseInt($('#qty-'+id).val());
						// var productAmount = parseInt($('#pro_price-'+id).val());
						// If is not undefined
							
							$('.qty-'+id).val(quantity + 1);
							var totqnty = quantity + 1;
				$.ajax({
                            url:"/action",
                            type:"POST",
                            data:{
                              quentity:1,
                              totqnty:totqnty,pid:id,'_token':$('meta[name="csrf-token"]').attr('content')},
                          success:function(data){
                        alert("item quentity updated");
                        location.reload();
                            }
                             });

							// var pAmount = ((quantity +1) * productAmount);
							// alert(quantity);

							// $("h3#pAmount-"+id).html("Price:Rsss." + pAmount);
				            
                            
							// Increment	
					});
				
					 $('.quantity-left-minus').click(function(e){
					 	
					 	var id = $(this).attr("id");
				   	var val =$('#qty-'+id).val();
				  
				 
						// Stop acting like a button
						e.preventDefault();
						// Get the field name
						var quantity = parseInt($('#qty-'+id).val());
						var productAmount = parseInt($('#pro_price-'+id).val());
						// If is not undefined
							
							$('.qty-'+id).val(quantity - 1);
							var totqnty = quantity - 1;
				$.ajax({
                            url:"/action",
                            type:"POST",
                            data:{
                              quentity:1,
                              totqnty:totqnty,pid:id,'_token':$('meta[name="csrf-token"]').attr('content')},
                          success:function(data){
                        alert("item quentity updated");
                         location.reload();
                            }
                             });
							
					});
					
				});
						 </script>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER 
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			 /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
                        <div class="col-md-3">
							<!--<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>-->
							<p style="color: antiquewhite; font-size: 50px">E-COM</p>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="/wishlist">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty" id="wishlistcnt">0</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
								    <a href="#">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty" id="cartcnt">0</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												
												<div class="product-img">
													<img src="" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$pro_price</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
        <br><br><br><br><br>
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="/index">Home</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Hot Deals</a>
							<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Action</a></br>
									<a class="dropdown-item" href="#">Another action</a></br>
									<a class="dropdown-item" href="#">Something else here</a></br>
									<a class="dropdown-item" href="#">Something </a></br>
									<a class="dropdown-item" href="#">else here</a>
                            </div>
						</li>

						<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Electronics</a>
								<div class="dropdown-menu">
										<a class="dropdown-item" href="/store1/1">Audio Devices</a></br>
										<a class="dropdown-item" href="/store1/2" id="Access">Accessories</a></br>
										<a class="dropdown-item" href="/store1/3">Storage Devices</a></br>
										<a class="dropdown-item" href="/store1/4">PC Accessories</a></br>
										<a class="dropdown-item" href="/store1/5">Office Supplies</a>
								</div>
							</li>

							<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Men</a>
									<div class="dropdown-menu">
											<a class="dropdown-item" href="/store1/6">Clothing</a></br>
											<a class="dropdown-item" href="/store1/7">Footwear</a></br>
											<a class="dropdown-item" href="/store1/8">Accessories</a></br>
											<a class="dropdown-item" href="/store1/9">Something </a></br>
											<a class="dropdown-item" href="/store1/10">else here</a>
									</div>
								</li>

								<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Women</a>
										<div class="dropdown-menu">
												<a class="dropdown-item" href="/store1/11">Clothing</a></br>
												<a class="dropdown-item" href="/store1/12">Westren Wear</a></br>
												<a class="dropdown-item" href="/store1/13">Accessories</a></br>
												<a class="dropdown-item" href="/store1/14">Footwear</a></br>
												<a class="dropdown-item" href="/store1/15">Beauty & Grooming</a>
										</div>
									</li>


					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Your Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.html">Home</a></li>
							<li class="active">Blank</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		
			<!-- container -->
			
				<!-- row -->
			
                	@if(Session::has('idd'))
<?php
$sum=0;
 $prod=DB::table('cart')->select('*')->where('user_id',Session::get('idd'))->get();
		                foreach($prod as $pro){
                        $productid=$pro->p_id;
                        $proqnty=$pro->qty;
                        $prqty=$pro->qty;

		                

$sel1=DB::table('products')->select('*')->where('product_id', $productid)->get();


                        foreach($sel1 as $sel){
                        $pro_title=$sel->product_title;
		           	    $pro_image=$sel->product_image;
		           	    $pro_price=$sel->product_price;
                          
                              $sum=$sum+($prqty*$pro_price);


                        ?>
                        <div class="section">
                        <div class="container">
                        	<div class="row">
                        
                <div class="col-md-3">
					<div class="cart-img1">
						
					<img id="cartimg1" src="{{asset('frontend')}}/img/<?php echo $pro_image; ?>" alt="">
					</div> <br><br>
          
		
                </div>  <br>
                
                <div class="col-md-6">
						
								<h2>Dell</h2>
								
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<h5>Price:Rs.{{ $pro_price  }} </h5>
					
                </div>    
                <div class="col-md-3">
                        <div class="cart-plusminus">
                                <form>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" id="{{$productid}}">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="hidden" id="pro_price-{{$productid}}" value="{{ $pro_price }}" />
                                            <input type="text" id="qty-{{$productid}}" name="quantity" class="form-control input-number qty-{{$productid}}" value="{{$prqty}}" min="1" max="100"/ style="z-index:0;">
                                            
                                            <span class="input-group-btn" >
                                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" id="{{$productid}}" style="z-index:0;">
                                                    <span class="glyphicon glyphicon-plus" ></span>
                                                </button>
                                            </span>
                                            
                                        </div>
                                        <br>
                                        <h5>TotalPrice:Rs.{{ $prqty*$pro_price }} </h5>
                                    </div>
                                      </form>
                                          <br><br>
                                     
                        </div>
                </div>
            </div>
        </div>


                           <?php
            }


            echo "<hr>";
        }

            ?>
            <div>
             	<h3 class="button btn">Rs:{{$sum}}/-</h3>
					<a href="/checkout" class="button button3">PLACEORDER</a>
				  </div>
				  <br>
				  <br>
				  <br>

@else
<?php
$sum=0;
 $prod=DB::table('cart')->select('*')->where('user_id',-1)->get();
		                foreach($prod as $pro){
                        $productid=$pro->p_id;
		                 $prqty=$pro->qty;

$sel1=DB::table('products')->select('*')->where('product_id', $productid)->get();

                        foreach($sel1 as $sel){
                        $pro_title=$sel->product_title;
		           	    $pro_image=$sel->product_image;
		           	    $pro_price=$sel->product_price;
                           $sum=$sum+($prqty*$pro_price);

                        ?>
           <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                        
                <div class="col-md-3">
					<div class="cart-img1">
						<img id="cartimg1" src="{{asset('frontend')}}/img/<?php echo $pro_image; ?>" alt="">
					</div> <br><br>


		
                </div>  <br>
                <div class="col-md-6">
						
								<h2>{{  $pro_title}}</h2>
								
							
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					00000000
					<h5>Price:Rs.{{ $pro_price  }} </h5>
                </div>    
                
                <div class="col-md-3">
                        <div class="cart-plusminus">

                        	
                                <form>
                                        <div class="input-group" >
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" id="{{$productid}}">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="hidden" id="pro_price-{{$productid}}" value="{{ $pro_price }}" />
                                            <input type="text" id="qty-{{$productid}}" name="quantity" class="form-control input-number qty-{{$productid}}" value="{{$prqty}}" min="1" max="100"/ style="z-index:0;">
                                            
                                            <span class="input-group-btn" >
                                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" id="{{$productid}}" style="z-index:0;">
                                                    <span class="glyphicon glyphicon-plus" ></span>
                                                </button>
                                            </span>
                                            
                                        </div>
                                        <br>
                                        <div>
                                        <h5>TotalPrice:Rs.{{ $prqty*$pro_price }} </h5>
                                    </div>
                                      </form>
                                          
                                     
                        </div>
                </div>
                    
				</div>
				<!-- /row -->
				
				
			</div>
			<!-- /container -->
		</div>

                           <?php
            }

            echo "<hr>";
           
        }

        
            ?>
             <div>
             	<h3 class="button btn">Rs:{{$sum}}/-</h3>
					<a href="/checkout" class="button button3">PLACEORDER</a>
				  </div>
				  <br>
				  <br>
				  <br>


@endif
<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
<meta add if needed>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('frontend')}}/jquery.min.js"></script>
		<script src="{{asset('frontend')}}/bootstrap.min.js"></script>
		<script src="{{asset('frontend')}}/slick.min.js"></script>
		<script src="{{asset('frontend')}}/nouislider.min.js"></script>
		<script src="{{asset('frontend')}}/jquery.zoom.min.js"></script>
	
	</body>
</html>
