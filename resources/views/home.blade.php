<!DOCTYPE html>
<html xml:lang="en" lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('fontend/images/logodefault.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/style/css/style-main.css')}}" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
	<link rel="stylesheet" href="{{asset('fontend/style/css/details.css')}}">
	<title>MELLO</title>
</head>
<body class="home home-01">
	<!--begin header-->
	<div id="box-header">
		<div class="header-container">
			<div class="header">
				<div class="box-header-01">
					<div class="container">
						<div class="row">
							<div class="logo">
								<a href="{{URL::to('/')}}"><img src="{{asset('fontend/images/logodefault.png')}}"
										alt="" /></a>
							</div>
							<div class="menu">
								<div class="box-main-menu">
									<div class="main-menu">
										<ul>
										@foreach($category as $key => $cate )
											<li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
										@endforeach
										</ul>
									</div>
								</div>
								<div>
								</div>
							</div>
							<div class="account-and-cart">
								<div class="my-account">
									<div class="content">
										<ul class="left">
											<li><a class="top-link-myaccount" href="#">My Account</a></li>
											<li><a class="top-link-wishlist" href="#">My Wishlist</a></li>
											<li><a class="top-link-checkout" href="#">Checkout</a></li>
											<li><a class="top-link-login" href="{{URL::to('/login-admin')}}">Log In</a></li>
										</ul>
										<ul class="right">
											<li class="language"><a href="#" class="selected"><img
														src="fontend/images/flags/flag-french.jpg" alt="" />French</a>
												<ul>
													<li><a href="home-01.html"><img src="fontend/images/flags/flag-default.jpg"
																alt="" />English</a></li>
													<li><a href="home-02.html"><img src="fontend/images/flags/flag-french.jpg"
																alt="" />French</a></li>
												</ul>
											</li>
											<li class="monney last"><a href="#" class="selected">EUR</a>
												<ul>
													<li><a href="#"><span>&euro;</span> EUR</a></li>
													<li><a href="#"><span>$</span> USD</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="box-cart">
									<div class="cart-mini">
										<a class="title" href="{{URL::to('show-cart')}}">
											<span class="item">0</span>
										</a>
										<?php
$content = Cart::content();
?>
										<div class="block-content">
											<div class="inner">
												<p class="block-subtitle">Recently added item(s)</p>
												@foreach($content as $cart_content)
												<ol id="cart-sidebar" class="mini-products-list">
													<li class="item">
														<a href="#" class="product-image">
															<img src="{{URL::to('images/' .$cart_content->options->image)}}"
																alt="" />
														</a>
														<a href="{{URL::to('/delete-to-cart/'.$cart_content->rowId)}}" onclick="return confirm('Are you sure?');" class="btn-remove">Remove This Item</a>
														<a href="#" title="Edit item" class="btn-edit">Edit item</a>
														<div class="product-details">
															<p class="product-name"><a title="Fashion Product 09"
																	href="#">{{$cart_content->name}}</a></p>
															<span class="price">{{number_format($cart_content->price).'VNĐ'}}</span>
															<div class="qty-abc">
																<a title="Decrement" class="qty-change-left"
																	href="#">down</a>
																<input class="input-text qty" type="text" value="1" />
																<a title="Increment" class="qty-change-right"
																	href="#">up</a>
															</div>
														</div>
													</li>
												</ol>
												@endforeach
												<div class="summary">
													<p class="subtotal">
														<span class="label">Subtotal:</span> <span
															class="price">{{Cart::subtotal().'VNĐ'}}</span>
													</p>
												</div>
												<div class="actions">
													<div class="a-inner">
														<a class="btn-mycart" href="#" title="View my cart">view my
															cart</a>
														<a href="" title="Checkout" class="btn-checkout">Checkout</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bgr-menu">
					</div>
				</div>
				<div class="box-header-02">
					<div class="container">
						<div class="row">
							<ul>
								<li><a href="#">Overview </a></li>
								<li><a href="#">Devices </a></li>
								<li><a href="#">Postpaid Plans</a></li>
								<li><a href="#">Prepaid Plans</a></li>
								<li><a href="#">Broadband Plans </a></li>
								<li><a href="#">Add-Ons </a></li>
								<li><a href="#">FAQs </a></li>
								<li><a href="#">Blog </a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="box-header-03">
					<div class="container">
						<div class="row">
							<span class="shipping"><a href="#">Free Shipping-Free Returns</a></span>
							<span class="gift"><a href="#">Signature Gift Wrapping</a></span>
							<span class="customer"><a href="#">24/7 Customer Care</a></span>
							<div class="box-search">
								<form action="{{URL::to('/search-product')}}" method="POST">
								{{csrf_field()}}
									<button><span>search</span></button>
									<ul class="drop-search">
										<li>
											<span class="selected">All Categories </span>
											<ul>
												<li>All Categories </li>
												<li>Cate 1</li>
												<li>Cate 2</li>
												<li>Cate 3</li>
											</ul>
										</li>
									</ul>
									<input name="keywords_submit" type="text" value="" placeholder="search..." />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end header-->
	<!--begin content-->
	@yield('content')
			<!--end content-->
			<!--begin footer-->
			<div id="box-footer">
				<div class="box-footer-top">
					<div class="container">
						<div class="row">
							<div class="row">
								<div class="box-connect col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="block-title"><span>Connect with</span></div>
									<a href="#" class="face-book">face book</a>
									<a href="#" class="tweeter">tweeter</a>
									<a href="#" class="no-name">no-name</a>
									<a href="#" class="pinseter">pinseter</a>
									<a href="#" class="google">google+</a>
									<a href="#" class="init">init</a>
								</div>
								<div class="box-tweeter col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div class="block-title"><span>tweeter</span></div>
									<div class="content">
										Leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque tincidunt.
										Vestibulum finibus ceo aliquet, dictum orci at, varius ligula. Duis aliquet
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer-middle">
					<div class="container">
						<div class="row">
							<div class="row">
								<div class="block block-info col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<div class="block-title"><span>Information</span></div>
									<div class="block-content">
										<ul>
											<li><a href="#">Site Map</a></li>
											<li><a href="#">Search Terms</a></li>
											<li><a href="#">Advanced Search</a></li>
											<li><a href="#">Our stores</a></li>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Contact Us</a></li>
										</ul>
									</div>
								</div>
								<div class="block block-customer col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<div class="block-title"><span>Customer Service</span></div>
									<div class="block-content">
										<ul>
											<li><a href="#">View Cart</a></li>
											<li><a href="#">My Account</a></li>
											<li><a href="#">Order Status</a></li>
											<li><a href="#">Shop By Brand</a></li>
											<li><a href="#">Trade-in Program</a></li>
											<li><a href="#">Testimonial</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								<div class="block block-galary col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<div class="block-title"><span>Gallery</span></div>
									<div id="links" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#links" data-slide-to="0" class="active"></li>
											<li data-target="#links" data-slide-to="1"></li>
											<li data-target="#links" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<a href="{{asset('fontend/images/product/larg/demo1.jpg')}}"
													title="Glary image 01" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo1.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo2.jpg')}}"
													title="Glary image 02" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo2.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo3.jpg')}}"
													title="Glary image 03" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo3.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo4.jpg')}}"
													title="Glary image 04" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo4.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo5.jpg')}}"
													title="Glary image 05" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo5.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo6.jpg')}}"
													title="Glary image 06" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo6.jpg')}}"
														alt="" />
												</a>
											</div>
											<div class="item">
												<a href="{{asset('fontend/images/product/larg/demo7.jpg')}}"
													title="Glary image 07" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo7.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo8.jpg')}}"
													title="Glary image 08" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo8.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo9.jpg')}}"
													title="Glary image 09" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo9.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo10.jpg')}}"
													title="Glary image 10" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo10.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo11.jpg')}}"
													title="Glary image 11" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo11.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo12.jpg')}}"
													title="Glary image 12" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo12.jpg')}}"
														alt="" />
												</a>
											</div>
											<div class="item">
												<a href="{{asset('fontend/images/product/larg/demo13.jpg')}}"
													title="Glary image 13" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo13.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo13.jpg')}}"
													title="Glary image 13" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo13.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo13.jpg')}}"
													title="Glary image 13" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo13.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo13.jpg')}}"
													title="Glary image 13" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo13.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo13.jpg')}}"
													title="Glary image 13" data-gallery>
													<img src="{{asset('fontend/images/product/larg/demo13.jpg')}}"
														alt="" />
												</a>
												<a href="{{asset('fontend/images/product/larg/demo13.jpg')}}"
													title="Glary image 13" data-gallery>
													<img src="{{asset('images/product/larg/demo13.jpg')}}"
														alt="" />
												</a>
											</div>
										</div>
									</div>
									<div class="block-content">
										<ul>
											<li><a href="#" class="view-all">View all</a></li>
										</ul>
									</div>
									<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
									<div id="blueimp-gallery" class="blueimp-gallery">
										<!-- The container for the modal slides -->
										<div class="slides"></div>
										<!-- Controls for the borderless lightbox -->
										<h3 class="title">&nbsp;</h3>
										<a class="prev">
											<< /a>
												<a class="next">></a>
												<a class="close">�</a>
												<a class="play-pause"></a>
												<ol class="indicator"></ol>
												<!-- The modal dialog, which will be used to wrap the lightbox content -->
												<div class="modal fade">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close"
																	aria-hidden="true">&times;</button>
																<h4 class="modal-title">&nbsp;</h4>
															</div>
															<div class="modal-body next"></div>
															<div class="modal-footer">
																<button type="button"
																	class="btn btn-default pull-left prev">
																	<i class="glyphicon glyphicon-chevron-left"></i>
																	Previous
																</button>
																<button type="button" class="btn btn-primary next">
																	Next
																	<i class="glyphicon glyphicon-chevron-right"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
									</div>

								</div>
								<div class="block block-cu col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<div class="block-title"><span>Contact us</span></div>
									<div class="block-content">
										<ul>
											<li class="item1"><span>Our business address is 1063 <br />Freelon Street
													San Francisco</span></li>
											<li class="item2"><span>+ 020.566.6666</span></li>
											<li class="item3"><a href="mailto:support@7-Up.com">support@7-Up.com</a>
											</li>
										</ul>
										<div class="phone-nb"><a href="tel:0906868757">090.68.68.757</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer-bottom">
					<div class="container">
						<div class="row">
							<div class="box-left">
								<ul>
									<li class="home"><a>MELLO</a></li>
									<li><a href="#">About Us </a><span>|</span></li>
									<li><a href="#">Delivery & Returns</a><span>|</span></li>
									<li><a href="#">Terms & Conditions</a><span>|</span></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
								<h6>Mello &copy; 2015 Magento Demo Store. All Rights Reserved. Designed by <a
										title="Visit VnThemePro.Com!" href="7uptheme.com">7-Up</a></h6>
							</div>
							<div class="box-right">
								<ul>
									<li><img src="{{asset('fontend/images/p1.png')}}" alt="" /></li>
									<li><img src="{{asset('fontend/images/p2.png')}}" alt="" /></li>
									<li><img src="{{asset('fontend/images/p3.png')}}" alt="" /></li>
									<li><img src="{{asset('fontend/images/p4.png')}}" alt="" /></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<a id="gototop">Top</a>
				<!--js-->
				<script type="text/javascript" src="{{asset('fontend/js/jquery-1.11.1.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('fontend/style/bootstrap/js/bootstrap.min.js')}}"></script>
				<script src="{{asset('fontend/js/galary-image/js/jquery.blueimp-gallery.min.js')}}"></script>
				<script src="{{asset('fontend/js/galary-image/js/bootstrap-image-gallery.js')}}"></script>
				<script type="text/javascript" src="{{asset('fontend/js/owl-carousel/owl.carousel.js')}}"></script>
				<script type="text/javascript" src="{{asset('fontend/js/slideshow/jquery.themepunch.revolution.js')}}"></script>
				<script type="text/javascript" src="{{asset('fontend/js/slideshow/jquery.themepunch.plugins.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('fontend/js/theme.js')}}"></script>

			</div>
			<!--end footer-->
			
</body>

</html>