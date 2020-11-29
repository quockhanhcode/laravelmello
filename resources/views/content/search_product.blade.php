@extends('home')
@section('content')
<div class="content">
	<div class="breadcrumbs">    
		<div class="container">
			<div class="row">
				<ul>
					<li class="home">
						<a href="home-01.html" title="Go to Home Page">Home</a>
						<span>|</span>
					 </li>
					<li class="category3">
					<strong>Mobile</strong>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<div class="row">
			<div id="box-left" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class="block block-layered-nav">
				<div class="block-title">
					<strong><span>Mobile</span></strong>
				</div>
				<div class="block-content">
				  <dl id="narrow-by-list">
					   <dt id="tab1" class="tab-accordion accordion-close">Apple</dt>
					   <dd class="tabcontent1" style="display:none;">
					   <ol>
						<li ><a  href="grid.html?cat=5">Iphone 4</a></li>
						<li ><a  href="grid.html?cat=6">Ipad 4s</a></li>
						<li ><a  href="grid.html?cat=6">Ipad 5</a></li>
						<li ><a  href="grid.html?cat=6">Ipad 5s</a></li>
						<li ><a  href="grid.html?cat=6">Ipad 6s</a></li>
						</ol>
						</dd>
						<dt id="tab11" class="tab-accordion accordion-open">Samsung</dt>
						<dd class="tabcontent11">
					   <ol>
						<li ><a  href="grid.html?cat=5">Samsung Glaxy S I</a></li>
						<li ><a  href="grid.html?cat=6">Sangsung Glaxy S II</a></li>
						<li ><a  href="grid.html?cat=6">Samsung Glaxy S III</a></li>
						<li ><a  href="grid.html?cat=6">Samsung Glaxy Note II</a></li>
						<li ><a  href="grid.html?cat=6">Samsung Glaxy Note III</a></li>
						</ol>
						</dd>
						<dt id="tab12" class="tab-accordion accordion-close">HTC</dt>
						<dd class="tabcontent12" style="display:none;">
					    <ol>
						<li ><a  href="grid.html?cat=5">HTC Desire X</a></li>
						<li ><a  href="grid.html?cat=6">HTC Desire Y</a></li>
						</ol>
						</dd>
						<dt id="tab13" class="tab-accordion accordion-close">Blackberry</dt>
						<dd class="tabcontent13" style="display:none;">
					    <ol>
						<li ><a  href="grid.html?cat=5">Blackberry X</a></li>
						<li ><a  href="grid.html?cat=6">Blackberry Y</a></li>
						</ol>
						</dd>
				</dl>
				</div>
				<div class="block-title-shop-by">
				<strong><span>Shop by</span></strong>
				</div>
				<div class="block-content">
				  <dl id="narrow-by-list">
						<dt id="tab2" class="tab-accordion accordion-open"> Price</dt>
						<dd class="tabcontent2">
							<div class="price">
							<div class="range-wrap"><div id="slider-range"></div>
							</div>
							<div class="text-box"><div class="price-from">
								$ <input type="text" name="min" id="minPrice" class="priceTextBox" value="400"/></div><div class="price-to"> <input type="text" name="max" id="maxPrice" class="priceTextBox" value="1000"/></div>					
								<a class="go" href="javascript:void(0)">Fillter</a>
								<input type="hidden" id="amount" readonly="readonly" style="background:none; border:none;" value="$400 - $1000" />
							</div>
							</div>	
						</dd>
						<dt id="tab4" class="tab-accordion accordion-close">Color</dt>
							<dd class="tabcontent4" style="display:none;"><ol>
							<li class='licolor'><a  class='itemcolor colorwhite' href="grid.html?color=25">White_#ffffff</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#e66054' href="grid.html?color=8">Blue _#e66054</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#d0b7cc' href="grid.html?color=10">Green_#d0b7cc</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#107a8e' href="grid.html?color=9">Yellow _#107a8e</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#a7bc93' href="grid.html?color=24">Pink_#a7bc93</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#d3b627' href="grid.html?color=23">Lightblue_#d3b627</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#b4b3ae' href="grid.html?color=22">Gray_#b4b3ae</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#502006' href="grid.html?color=21">Red_#502006</a></li>
							<li class='licolor'><a  class='itemcolor' style='background:#311e21' href="grid.html?color=20">violet_#311e21</a></li>
							</ol>
							</dd>
						<dt id="tab3" class="tab-accordion accordion-open">Manufacturer</dt>
						  <dd class="tabcontent3">
						  <ol>
							<li ><a  href="grid.html?manufacturer=11">Apple </a>(2)</li>
							<li > <a   href="grid.html?manufacturer=13">Samsung</a>(5) </li>
							<li ><a href="grid.html?manufacturer=14">HTC</a>(3) </li>
							<li ><a   href="grid.html?manufacturer=12">Blackberry</a>(2) </li>
							</ol>
							</dd>
							
							<dt id="tab5" class="tab-accordion accordion-close">Size</dt>
						   <dd class="tabcontent5" style="display:none;">
						   <ol> 
						    <li class="size"><a href="grid.html?size=4">L</a></li>
						    <li class="size"><a  href="grid.html?size=3">S</a></li>
							<li class="size"><a  href="grid.html?size=5">X</a></li>
							<li class="size"><a  href="grid.html?size=6">XL</a></li>
							</ol>
							</dd>
						   </dl>
						</div>
			</div>
			<div class="block block-compare">
				<div class="block-title">
					<strong><span>COMPARE PRODUCTS (2)</span></strong>
				</div>
				<div class="content">
				<ul>
				<li><a href="detail.html">Ipad Air and iOS7</a></li>
				<li><a href="detail.html">Ipad Air and iOS7</a></li>
				</ul>
				</div>
				<div class="actions">
					<a class="btn-clear" href="detail.html">
					clear all
					</a>
					<a class="go-compare" href="detail.html">
					Compare
					</a>
				</div>
				
			</div>
			<div class="block box-banner">	
			<div id="box-banner" class="carousel slide" data-ride="carousel" data-interval="1500"><ol class="carousel-indicators">
			<li class="active" data-target="#box-banner" data-slide-to="0"></li>
			<li data-target="#box-banner" data-slide-to="1"></li>
			<li data-target="#box-banner" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			<div class="item active"><a href="detail.html"><img src="{{asset('fontend/images/banner13.png')}}" alt="banner" /></a>
				<div class="std">
				<span class="t1">up to 45%</span>
				<span class="t2">Nokia Lumia 920</span>
				<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			</div>
			<div class="item"><a href="detail.html"><img src="{{asset('fontend/images/banner14.png')}}" alt="banner" /></a>
				<div class="std">
				<span class="t1">up to 50%</span>
				<span class="t2">Nokia Lumia 920</span>
				<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			
			</div>
			<div class="item"><a href="detail.html"><img src="{{asset('fontend/images/banner15.png')}}" alt="banner" /></a>
				<div class="std">
				<span class="t1">up to 80%</span>
				<span class="t2">Nokia Lumia 920</span>
				<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium</span>
				</div>
				<a class="gt-shop" href="detail.html">Shop Now</a>
			
			</div>
			</div>
			</div>
			</div>
			</div>
			<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
				<div class="page-title category-title">
					<h1>Mobile</h1>
				</div>
				<div id="catalog-listing">
					<div class="category-products page-product-list">
						<ol class="products-list">
                            @foreach($search_product as $key => $result)
						   <li class="item">
							  <div class="inner-item ">
								 <div class="item-image">
									<div class="inner"> 
									   <a class="product-image no-touch" href="detail.html" title="My Download Product">  
									   <img class="first_image" src="{{asset('images/'.$result->product_image)}}" alt="My Download Product" /> 
									   </a>                
									</div>
								 </div>
								 <div class="product-shop">
									<div class="inner">
									   <h2 class="product-name"><a class="product-image" href="{{URL::to('/chi-tiet-san-pham/'.$result->product_id)}}" title="My Download Product">{{$result->product_name}}</a></h2>
									   <div class="price-box">
										  <span class="regular-price" id="product-price-12">
										  <span class="price">{{number_format($result->product_price).'VNĐ'}}</span>                                    
										  </span>
									   </div>
									   <div class="ratings">
										  <div class="rating-box">
											 <div class="rating" style="width:80%"></div>
										  </div>
										  <span class="amount"><a href="detail.html">1(s)</a></span>
									   </div>
									   
									   <div class="desc std">
										  At vero eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum un deleniti atqueste sites excep turiitate non provide ntsimils.                        
									   </div>
									   <div class="wrap-btn-prolist">
										  <div class="item-btn">
											 <div class="box-inner">
												<a title="Add to wishlist" href="detail.html" class="link-wishlist">&nbsp;</a>
												<a title="Add to compare" href="detail.html" class="link-compare">&nbsp;</a>
												<span class="qview"><a href="detail.html" ></a>
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="detail.html"><span>Quick View</span></a>
											   </span>
											 </div>
                                          </div>
                                          <form action="{{URL::to('save-cart')}}" method="post">
                                              {{csrf_field()}}
                                              <input type="hidden" name="productid_hiden" value="{{$result->product_id}}">
                                              <button type="submit" title="Add to cart" class="btn-cart"><span>Add to Cart</span></button>
                                          </form>
									   </div>
									</div>
								 </div>
							  </div>
                           </li>
                           @endforeach
						</ol>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>		
</div>
@endsection