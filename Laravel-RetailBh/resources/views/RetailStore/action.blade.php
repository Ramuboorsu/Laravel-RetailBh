
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<?php if(isset($_POST['action']))
{
 ?>
<script src="{{asset('frontend')}}/jquery.min.js"></script>
		<script src="{{asset('frontend')}}/bootstrap.min.js"></script>
		<script src="{{asset('frontend')}}/slick.min.js"></script>
		<script src="{{asset('frontend')}}/nouislider.min.js"></script>
		<script src="{{asset('frontend')}}/jquery.zoom.min.js"></script>
		<script src="{{asset('frontend')}}/main.js"></script>
<div class="section">
			<!-- container -->
			<div class="container" >
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<a href="/store1/1">
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('frontend')}}/img/shop01.png" alt="">
							</div>
							<div class="shop-body" style="z-index:0;">
								<h3>Laptop<br>Collection</h3>
								<a class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div></a>
					<!-- /shop -->

					<!-- shop -->
					<a href="/store1/2">
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('frontend')}}/img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div></a>
					<!-- /shop -->

					<!-- shop -->
					<a href="/store1/3">
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('frontend')}}/img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div></a>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section" style="z-index:0;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										 <?php
		                                   $prod=DB::table('products')->select('*')->get();
		                                   foreach($prod as $pro){
                                           $productid=$pro->product_id;
		                                   $pro_title=$pro->product_title;
		                                   $pro_image=$pro->product_image;
		           	                       $pro_price=$pro->product_price;
		           	                       ?>
										<div class="product">

											<div class="product-img">
												<img src="{{asset('frontend')}}/img/<?php echo $pro_image; ?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $pro_title; ?></a></h3>
												<h4 class="product-price"><?php echo $pro_price; ?> <del class="product-old-price"><?php echo $pro_price; ?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist store" id="{{$productid}}" ><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn added" id="{{$productid}}"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<?php
									}
									?>
										<!-- /product -->

										<!-- product -->
										<!--  -->
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
                                     
                                      <?php
		           $prod=DB::table('products')->select('*')->get();
		           foreach($prod as $pro){

		           	$pro_title=$pro->product_title;
		           	$pro_image=$pro->product_image;
		           	$pro_price=$pro->product_price;

		        
		           ?>

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{asset('frontend')}}/img/<?php echo $pro_image; ?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#"><?php echo $pro_title; ?></a></h3>
												<h4 class="product-price"><?php echo $pro_price; ?><del class="product-old-price"><?php echo $pro_price; ?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<?php
									}
									?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling111</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
						    <?php		                                
		                    $prod=DB::table('products')->select('*')->where('product_cat',1)->limit(3)->get();
		                    foreach($prod as $pro){
		                 	$pro_title=$pro->product_title;
		                	$pro_image=$pro->product_image;
		           	        $pro_price=$pro->product_price;
		                    ?>
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('frontend')}}/img/<?php echo $pro_image ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $pro_title ?></a></h3>
										<h4 class="product-price"><?php echo $pro_price ?><del class="product-old-price"><?php echo $pro_price ?></del></h4>
									</div>
								</div>
								<?php
									}
									?>
		
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<?php		                                
		                    $prod=DB::table('products')->select('*')->where('product_cat',1)->limit(3)->get();
		                    foreach($prod as $pro){
		                 	$pro_title=$pro->product_title;
		                	$pro_image=$pro->product_image;
		           	        $pro_price=$pro->product_price;
		                    ?>
									<div class="product-img">
										<img src="{{asset('frontend')}}/img/<?php echo $pro_image ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $pro_title ?></a></h3>
										<h4 class="product-price"><?php echo $pro_price ?><del class="product-old-price"><?php echo $pro_price ?></del></h4>
									</div>
									<?php
								}
								?>
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<?php		                                
		                    $prod=DB::table('products')->select('*')->where('product_cat',1)->limit(3)->get();
		                    foreach($prod as $pro){
		                 	$pro_title=$pro->product_title;
		                	$pro_image=$pro->product_image;
		           	        $pro_price=$pro->product_price;
		                    ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('frontend')}}/img/<?php echo $pro_image ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $pro_title ?></a></h3>
										<h4 class="product-price"><?php echo $pro_price ?><del class="product-old-price"><?php echo $pro_price ?></del></h4>
									</div>
								</div>
								<?php
							}
							?>
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<?php		                                
		                    $prod=DB::table('products')->select('*')->where('product_cat',1)->limit(3)->get();
		                    foreach($prod as $pro){
		                 	$pro_title=$pro->product_title;
		                	$pro_image=$pro->product_image;
		           	        $pro_price=$pro->product_price;
		                    ?>
									
									<div class="product-img">
										<img src="{{asset('frontend')}}/img/<?php echo $pro_title ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $pro_image ?></a></h3>
										<h4 class="product-price"><?php echo $pro_price ?><del class="product-old-price"><?php echo $pro_price ?></del></h4>
									</div>
									<?php
								}
								?>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<?php		                                
		                    $prod=DB::table('products')->select('*')->where('product_cat',1)->limit(3)->get();
		                    foreach($prod as $pro){
		                 	$pro_title=$pro->product_title;
		                	$pro_image=$pro->product_image;
		           	        $pro_price=$pro->product_price;
		                    ?>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{asset('frontend')}}/img/<?php echo $pro_image ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $pro_title ?></a></h3>
										<h4 class="product-price"><?php echo $pro_price ?><del class="product-old-price"><?php echo $pro_price ?></del></h4>
									</div>
								</div>
								<?php
							}
							?>
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<?php		                                
		                    $prod=DB::table('products')->select('*')->where('product_cat',1)->limit(3)->get();
		                    foreach($prod as $pro){
		                 	$pro_title=$pro->product_title;
		                	$pro_image=$pro->product_image;
		           	        $pro_price=$pro->product_price;
		                    ?>
							
									<div class="product-img">
										<img src="{{asset('frontend')}}/img/<?php echo $pro_title ?>" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $pro_image ?></a></h3>
										<h4 class="product-price"><?php echo $pro_price ?><del class="product-old-price"><?php echo $pro_price ?></del></h4>
									</div>
									<?php
								}
								?>

								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>



					<?php
		}

if(isset($_POST['cartcount']))
{
?>
@if(Session::has('idd'))
<?php
$cnt = DB::table('cart')->select('*')->where('user_id',Session::get('idd'))->count();
echo $cnt;

?>
@else
<?php
$cnt = DB::table('cart')->select('*')->where('user_id','<',0)->count();
echo $cnt;
?>

@endif


<?php
}

?>
<?php
if(isset($_POST['addtocart']))
{
	$pid=$_POST['id'];
	$ip_add =getenv("REMOTE_ADDR");
?>
@if(Session::has('idd'))
<?php
$ip_add =getenv("REMOTE_ADDR");
$sel = DB::table('cart') ->select('*')->where('p_id',$pid)->where('user_id',Session::get('idd'))->count();
if($sel > 0)
{
	echo '<script>alert("item already added");</script>';
}
else
{
	
$ins = DB::table('cart') ->insert(['p_id'=>$pid,'ip_add'=>$ip_add,'user_id'=>Session::get('idd'),'qty'=>1]);
echo '<script>alert("item  added");</script>';
}
?>
@else
<?php
$sel = DB::table('cart') ->select('*')->where('p_id',$pid)->where('user_id',-1)->count();
if($sel > 0)
{
	echo '<script>alert("item already added");</script>';
}
else
{
$ins = DB::table('cart') ->insert(['p_id'=>$pid,'ip_add'=>$ip_add,'user_id'=>-1,'qty'=>1]);
echo '<script>alert("item  added");</script>';
}


?>

@endif
<?php
}


if(isset($_POST['countwishlist']))
{
?>
@if(Session::has('idd'))
<?php
$cnt = DB::table('wishlist')->select('*')->where('user_id',Session::get('idd'))->count();
echo $cnt;

?>
@else
<?php
$cnt = DB::table('wishlist')->select('*')->where('user_id','<',0)->count();
echo $cnt;
?>

@endif
<?php
}

?>



<?php
if(isset($_POST['wishlistcntd'])){
	$pid=$_POST['id'];
	$ip_add =getenv("REMOTE_ADDR");

?>
@if(Session::get('idd'))
<?php
$sel3=DB::table('wishlist')->select('*')->where('p_id',$pid)->where('user_id',Session::get('idd'))->count();
if($sel3 > 0){
	echo '<script>alert("already added to wishlist")</script>';
}
else{
$ins3=DB::table('wishlist')->insert(['p_id'=>$pid,'ip_add'=>$ip_add,'user_id'=>Session::get('idd'),'qty'=>1]);
echo '<script>alert("added to wishlist")</script>';
}

?>
@else
<?php
$sel4=DB::table('wishlist')->select('*')->where('p_id',$pid)->where('user_id',-1)->count();
if($sel4 > 0)
{
    echo '<script>alert("already added to wishlist")</script>';

}
else{
$ins4=DB::table('wishlist')->insert(['p_id'=>$pid,'ip_add'=>$ip_add,'user_id'=>-1,'qty'=>1]);
echo '<script>alert("added to wishlist")</script>';
}

?>
@endif
	<?php
}
?>

<?php
if(isset($_POST['quentity'])){
	$totqnty=$_POST['totqnty'];
	$pid=$_POST['pid'];
	

?>
@if(Session::get('idd'))
<?php
if($totqnty!=0)
{
$selup=DB::table('cart')->where('p_id',$pid)->where('user_id',Session::get('idd'))->update(['qty'=>$totqnty]);
if($selup ){
	echo '<script>alert("updated")</script>';
}
else{
	echo '<script>alert("not updated")</script>';
}
}
else
{
$selup=DB::table('cart')->where('p_id',$pid)->where('user_id',Session::get('idd'))->delete();
if($selup ){
	echo '<script>alert("deleted")</script>';
}
else{
	echo '<script>alert("not deleted")</script>';
}	
}
?>
@else
<?php
if($totqnty!=0)
{
$selup=DB::table('cart')->where('p_id',$pid)->where('user_id',-1)->update(['qty'=>$totqnty]);
if($selup ){
	echo '<script>alert("updated")</script>';
}
else{
	echo '<script>alert("not updated")</script>';
}
}
else{
	$selup=DB::table('cart')->where('p_id',$pid)->where('user_id',-1)->delete();
if($selup ){
	echo '<script>alert("deleted")</script>';
}
else{
	echo '<script>alert("not deleted")</script>';
}

}
?>

@endif
	<?php
}
?>

