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
					<div class="block block-lastest-pro">
						<div class="block-title">
							<strong><span>Latest Products</span></strong>
						</div>
						<div class="block  vt-slider lastest-slider  row">
							<div class="slider-inner">
								<div class="container-slider">
									<div class="products-grid">
										<div class="item">
											<div class="item-wrap">
												<div class="item-image">
													<a class="product-image no-touch" href="#"
														title="Ipad Air and iOS7">
														<img class="first_image"
															src="{{asset('fontend/images/product/larg/demo6.jpg')}}"
															alt="Product demo" />
													</a>
													<div class="item-btn">
														<div class="box-inner">
															<a title="Add to wishlist" href="#"
																class="link-wishlist">&nbsp;</a>
															<a title="Add to compare" href="#"
																class="link-compare">&nbsp;</a>
															<span class="qview">
																<a class="vt_quickview_handler"
																	data-original-title="Quick View"
																	data-placement="left" data-toggle="tooltip"
																	href="#"><span>Quick View</span></a>
															</span>
														</div>
													</div>
													<a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
												</div>
												<div class="pro-info">
													<div class="pro-inner">
														<div class="pro-title product-name"><a href="#">Ipad Air and
																iOS7</a></div>
														<div class="pro-content">
															<div class="wrap-price">
																<div class="price-box">
																	<span class="regular-price">
																		<span class="price">$800.00</span></span>
																</div>
															</div>
															<div class="ratings">
																<div class="rating-box">
																	<div class="rating" style="width:80%"></div>
																</div>
																<span class="amount"><a href="#">1(s)</a></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end item wrap -->
										</div>
										<div class="item">
											<div class="item-wrap">
												<div class="item-image">
													<a class="product-image no-touch" href="#"
														title="Ipad Air and iOS7">
														<img class="first_image"
															src="{{asset('fontend/images/product/larg/demo7.jpg')}}"
															alt="Product demo" />
													</a>
													<div class="item-btn">
														<div class="box-inner">
															<a title="Add to wishlist" href="#"
																class="link-wishlist">&nbsp;</a>
															<a title="Add to compare" href="#"
																class="link-compare">&nbsp;</a>
															<span class="qview">
																<a class="vt_quickview_handler"
																	data-original-title="Quick View"
																	data-placement="left" data-toggle="tooltip"
																	href="#"><span>Quick View</span></a>
															</span>
														</div>
													</div>
													<a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
												</div>
												<div class="pro-info">
													<div class="pro-inner">
														<div class="pro-title product-name"><a href="#">Ipad Air and
																iOS7</a></div>
														<div class="pro-content">
															<div class="wrap-price">
																<div class="price-box">
																	<span class="regular-price">
																		<span class="price">$800.00</span></span>
																</div>
															</div>
															<div class="ratings">
																<div class="rating-box">
																	<div class="rating" style="width:80%"></div>
																</div>
																<span class="amount"><a href="#">1(s)</a></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end item wrap -->
										</div>
										<div class="item">
											<div class="item-wrap">
												<div class="item-image">
													<a class="product-image no-touch" href="#"
														title="Ipad Air and iOS7">
														<img class="first_image"
															src="{{asset('fontend/images/product/larg/demo8.jpg')}}"
															alt="Product demo" />
													</a>
													<div class="item-btn">
														<div class="box-inner">
															<a title="Add to wishlist" href="#"
																class="link-wishlist">&nbsp;</a>
															<a title="Add to compare" href="#"
																class="link-compare">&nbsp;</a>
															<span class="qview">
																<a class="vt_quickview_handler"
																	data-original-title="Quick View"
																	data-placement="left" data-toggle="tooltip"
																	href="#"><span>Quick View</span></a>
															</span>
														</div>
													</div>
													<a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
												</div>
												<div class="pro-info">
													<div class="pro-inner">
														<div class="pro-title product-name"><a href="#">Ipad Air and
																iOS7</a></div>
														<div class="pro-content">
															<div class="wrap-price">
																<div class="price-box">
																	<span class="regular-price">
																		<span class="price">$800.00</span></span>
																</div>
															</div>
															<div class="ratings">
																<div class="rating-box">
																	<div class="rating" style="width:80%"></div>
																</div>
																<span class="amount"><a href="#">1(s)</a></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end item wrap -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block block-compare">
						<div class="block-title">
							<strong><span>COMPARE PRODUCTS (2)</span></strong>
						</div>
						<div class="content">
							<ul>
								<li><a href="#">Ipad Air and iOS7</a></li>
								<li><a href="#">Ipad Air and iOS7</a></li>
							</ul>
						</div>
						<div class="actions">
							<a class="btn-clear" href="#">
								Clear all
							</a>
							<a class="go-compare" href="#">
								COMPARE
							</a>
						</div>

					</div>
					<div class="block box-banner">
						<div id="box-banner" class="carousel slide" data-ride="carousel" data-interval="1500">
							<ol class="carousel-indicators">
								<li class="active" data-target="#box-banner" data-slide-to="0"></li>
								<li data-target="#box-banner" data-slide-to="1"></li>
								<li data-target="#box-banner" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active"><a href="#"><img
											src="{{asset('fontend/images/banner13.png')}}" alt="banner" /></a>
									<div class="std">
										<span class="t1">up to 45%</span>
										<span class="t2">Nokia Lumia 920</span>
										<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus
											qui blan ditiis prasixer esentium</span>
									</div>
									<a class="gt-shop" href="#">Shop Now</a>
								</div>
								<div class="item"><a href="#"><img src="{{asset('fontend/images/banner14.png')}}"
											alt="banner" /></a>
									<div class="std">
										<span class="t1">up to 50%</span>
										<span class="t2">Nokia Lumia 920</span>
										<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus
											qui blan ditiis prasixer esentium</span>
									</div>
									<a class="gt-shop" href="#">Shop Now</a>

								</div>
								<div class="item"><a href="#"><img src="{{asset('fontend/images/banner15.png')}}"
											alt="banner" /></a>
									<div class="std">
										<span class="t1">up to 80%</span>
										<span class="t2">Nokia Lumia 920</span>
										<span class="t3">At verov eos et accusamus et iusto ods un dignissimos ducimus
											qui blan ditiis prasixer esentium</span>
									</div>
									<a class="gt-shop" href="#">Shop Now</a>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="main" class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-main">
					<div class="product-essential">
						<!--  -->
						@foreach($details_product as $key => $details_pro)
						<div class="card">
							<div class="container-fliud">
								<div class="wrapper row">
									<div class="preview col-md-6">
										<div class="preview-pic tab-content">
											<div class="tab-pane active" id="pic-1"><img name="product_image"
													src="{{URL::to('images/'.$details_pro->product_image)}}"
													alt="">
											</div>
											<div class="tab-pane" id="pic-2"><img
													src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_4.jpg"
													alt="Học thiết kế web bán hàng Online">
											</div>
											<div class="tab-pane" id="pic-3"><img
													src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg"
													alt="Học thiết kế web bán hàng Online">
											</div>
											<div class="tab-pane" id="pic-4"><img
													src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_6.jpg"
													alt="Học thiết kế web bán hàng Online">
											</div>
											<div class="tab-pane" id="pic-5"><img
													src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_7.jpg"
													alt="Học thiết kế web bán hàng Online">
											</div>
										</div>
										<ul class="preview-thumbnail nav nav-tabs">
											<li><a data-target="#pic-2" data-toggle="tab"><img
														src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_4.jpg"
														alt="Học thiết kế web bán hàng Online"></a>
											</li>
											<li><a data-target="#pic-3" data-toggle="tab"><img
														src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg"
														alt="Học thiết kế web bán hàng Online"></a>
											</li>
											<li><a data-target="#pic-4" data-toggle="tab"><img
														src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_6.jpg"
														alt="Học thiết kế web bán hàng Online"></a>
											</li>
											<li><a data-target="#pic-5" data-toggle="tab"><img
														src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_7.jpg"
														alt="Học thiết kế web bán hàng Online"></a>
											</li>
										</ul>
									</div>
									<div class="details col-md-6">
										<h3 class="product-title" name="product_name">{{$details_pro->product_name}}</h3>
										<div class="rating">
											<div class="stars"> <span class="fa fa-star checked"></span> <span
													class="fa fa-star checked"></span> <span
													class="fa fa-star checked"></span> <span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<p class="product-description" name="product_desc">{{$details_pro->product_desc}}</p>
												<h4 class="price" name="product_price">{{number_format($details_pro->product_price).'VNĐ'}}</h4>
												<p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm
													này <strong>(87 bình chọn)</strong>
												</p>
												<h5 class="sizes">Kích cỡ: <span class="size" data-toggle="tooltip"
														title="small">s</span> <span class="size" data-toggle="tooltip"
														title="medium">m</span> <span class="size" data-toggle="tooltip"
														title="large">l</span> <span class="size" data-toggle="tooltip"
														title="xtra large">xl</span>
												</h5>
												<h5 class="colors">Màu: <span class="color orange not-available"
														data-toggle="tooltip" title="Not In store"></span> <span
														class="color green"></span> <span class="color blue"></span>
												</h5>
												<form action="{{URL::to('/save-cart')}}" method="post">
												{{csrf_field()}}
												<div class="action">
														<input type="hidden" name="productid_hiden" value="{{$details_pro->product_id}}">
														<button class="add-to-cart btn btn-default" type="submit">MUA NGAY
												</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!--  -->
							</div>
							<div class="tab-detail">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#home">Description</a></li>
									<li><a data-toggle="tab" href="#menu2">Review</a></li>
								</ul>

								<div class="tab-content">
									<div id="home" class="tab-pane fade in active">

									</div>

									<div id="menu2" class="tab-pane fade">
										<h3>Customer Reviews 1 item(s)</h3>
										<p><span tyle="float:left;">1 Item(s)</span> <span style="float:right;">Show
												<select>
													<option>6</option>
													<option selected>10</option>
													<option>12</option>
													<option>15</option>
													<option>20</option>
												</select>per page</span></p>
										<br />
										<p><a href="#>">7uptheme</a></p>
										<p>At verov eos et accusamus et iusto ods un dignissimos ducimus qui blan ditiis
											prasixer
											esentium</p>
										<table class="ratings-table">
											<colgroup>
												<col class="review-label" />
												<col class="review-value" />
											</colgroup>
											<tbody>
												<tr>
													<th>Quality</th>
													<td>
														<div class="rating-box">
															<div class="rating" style="width:80%;"></div>
														</div>
													</td>
												</tr>
												<tr>
													<th>Price</th>
													<td>
														<div class="rating-box">
															<div class="rating" style="width:80%;"></div>
														</div>
													</td>
												</tr>
												<tr>
													<th>Value</th>
													<td>
														<div class="rating-box">
															<div class="rating" style="width:100%;"></div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<p>Review by 7uptheme / (Posted on 4/14/2015)</p>
										<div class="form-add">
											<h2>Write Your Own Review</h2>
											<form action="" method="post" id="review-form">
												<input name="form_key" type="hidden" value="JbT1G5uAkBcFDot6" />
												<h3>You're reviewing: <span>Ipad Air and iOS7</span>
												</h3>
												<div class="fieldset">
													<h4>How do you rate this product? <em class="required">*</em></h4>
													<span id="input-message-box"></span>
													<table class="data-table review-summary-table ratings"
														id="product-review-table">
														<col width="1" />
														<col />
														<col />
														<col />
														<col />
														<col />
														<thead>
															<tr>
																<th>&nbsp;</th>
																<th>
																	<div class="rating-box">
																		<span class="rating nobr"
																			style="width:20%;"></span>
																	</div>
																</th>
																<th>
																	<div class="rating-box">
																		<span class="rating nobr"
																			style="width:40%;"></span>
																	</div>
																</th>
																<th>
																	<div class="rating-box">
																		<span class="rating nobr"
																			style="width:60%;"></span>
																	</div>
																</th>
																<th>
																	<div class="rating-box">
																		<span class="rating nobr"
																			style="width:80%;"></span>
																	</div>
																</th>
																<th>
																	<div class="rating-box">
																		<span class="rating nobr"
																			style="width:100%;"></span>
																	</div>
																</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th>Price</th>
																<td class="value"><label for="Price_1"><input
																			type="radio" name="ratings[3]" id="Price_1"
																			value="11" class="radio" /></label></td>
																<td class="value"><label for="Price_2"><input
																			type="radio" name="ratings[3]" id="Price_2"
																			value="12" class="radio" /></label></td>
																<td class="value"><label for="Price_3"><input
																			type="radio" name="ratings[3]" id="Price_3"
																			value="13" class="radio" /></label></td>
																<td class="value"><label for="Price_4"><input
																			type="radio" name="ratings[3]" id="Price_4"
																			value="14" class="radio" /></label></td>
																<td class="value"><label for="Price_5"><input
																			type="radio" name="ratings[3]" id="Price_5"
																			value="15" class="radio" /></label></td>
															</tr>
															<tr>
																<th>Value</th>
																<td class="value"><label for="Value_1"><input
																			type="radio" name="ratings[2]" id="Value_1"
																			value="6" class="radio" /></label></td>
																<td class="value"><label for="Value_2"><input
																			type="radio" name="ratings[2]" id="Value_2"
																			value="7" class="radio" /></label></td>
																<td class="value"><label for="Value_3"><input
																			type="radio" name="ratings[2]" id="Value_3"
																			value="8" class="radio" /></label></td>
																<td class="value"><label for="Value_4"><input
																			type="radio" name="ratings[2]" id="Value_4"
																			value="9" class="radio" /></label></td>
																<td class="value"><label for="Value_5"><input
																			type="radio" name="ratings[2]" id="Value_5"
																			value="10" class="radio" /></label></td>
															</tr>
															<tr>
																<th>Quality</th>
																<td class="value"><label for="Quality_1"><input
																			type="radio" name="ratings[1]"
																			id="Quality_1" value="1"
																			class="radio" /></label></td>
																<td class="value"><label for="Quality_2"><input
																			type="radio" name="ratings[1]"
																			id="Quality_2" value="2"
																			class="radio" /></label></td>
																<td class="value"><label for="Quality_3"><input
																			type="radio" name="ratings[1]"
																			id="Quality_3" value="3"
																			class="radio" /></label></td>
																<td class="value"><label for="Quality_4"><input
																			type="radio" name="ratings[1]"
																			id="Quality_4" value="4"
																			class="radio" /></label></td>
																<td class="value"><label for="Quality_5"><input
																			type="radio" name="ratings[1]"
																			id="Quality_5" value="5"
																			class="radio" /></label></td>
															</tr>
														</tbody>
													</table>
													<input type="hidden" name="validate_rating" class="validate-rating"
														value="" />
													<ul class="form-list">
														<li>
															<label for="review_field" class="required"><em>*</em>Let us
																know your
																thoughts</label>
															<div class="input-box">
																<textarea name="detail" id="review_field" cols="5"
																	rows="3" class="required-entry"></textarea>
															</div>
														</li>
														<li class="inline-label">
															<label for="summary_field"
																class="required"><em>*</em>Summary of Your
																Review</label>
															<div class="input-box">
																<input type="text" name="title" id="summary_field"
																	class="input-text required-entry" value="" />
															</div>
														</li>
														<li class="inline-label">
															<label for="nickname_field"
																class="required"><em>*</em>What's your
																nickname?</label>
															<div class="input-box">
																<input type="text" name="nickname" id="nickname_field"
																	class="input-text required-entry" value="" />
															</div>
														</li>
													</ul>
												</div>
												<div class="buttons-set">
													<button type="submit" title="Submit Review"
														class="button"><span><span>Submit
																Review</span></span></button>
												</div>
											</form>

										</div>
									</div>
								</div>
							</div>

							<div id="upsell_pro" class="products-grid">
								<div class="inner">
									<div class="title">
										<span>Upsell Products</span>
									</div>
									<div class="block  vt-slider vt-slider5  row">
										<div class="slider-inner">
											<div class="container-slider">
												<div class="products-grid">
													<div class="item">
														<div class="item-wrap">
															<div class="item-image">
																<a class="product-image no-touch" href="#"
																	title="Ipad Air and iOS7">
																	<img class="first_image"
																		src="{{asset('fontend/images/product/larg/demo6.jpg')}}"
																		alt="Product demo" />
																</a>
																<div class="item-btn">
																	<div class="box-inner">
																		<a title="Add to wishlist" href="#"
																			class="link-wishlist">&nbsp;</a>
																		<a title="Add to compare" href="#"
																			class="link-compare">&nbsp;</a>
																		<span class="qview">
																			<a class="vt_quickview_handler"
																				data-original-title="Quick View"
																				data-placement="left"
																				data-toggle="tooltip"
																				href="#"><span>Quick View</span></a>
																		</span>
																	</div>
																</div>
																<a title="Add to cart" class="btn-cart"
																	href="#">&nbsp;</a>
															</div>
															<div class="pro-info">
																<div class="pro-inner">
																	<div class="pro-title product-name"><a href="#">Ipad
																			Air and
																			iOS7</a></div>
																	<div class="pro-content">
																		<div class="wrap-price">
																			<div class="price-box">
																				<span class="regular-price">
																					<span
																						class="price">$800.00</span></span>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating" style="width:80%">
																				</div>
																			</div>
																			<span class="amount"><a
																					href="#">1(s)</a></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end item wrap -->
													</div>
													<div class="item">
														<div class="item-wrap">
															<div class="item-image">
																<a class="product-image no-touch" href="#"
																	title="Ipad Air and iOS7">
																	<img class="first_image"
																		src="{{asset('fontend/images/product/larg/demo7.jpg')}}"
																		alt="Product demo" />
																</a>
																<div class="item-btn">
																	<div class="box-inner">
																		<a title="Add to wishlist" href="#"
																			class="link-wishlist">&nbsp;</a>
																		<a title="Add to compare" href="#"
																			class="link-compare">&nbsp;</a>
																		<span class="qview">
																			<a class="vt_quickview_handler"
																				data-original-title="Quick View"
																				data-placement="left"
																				data-toggle="tooltip"
																				href="#"><span>Quick View</span></a>
																		</span>
																	</div>
																</div>
																<a title="Add to cart" class="btn-cart"
																	href="#">&nbsp;</a>
															</div>
															<div class="pro-info">
																<div class="pro-inner">
																	<div class="pro-title product-name"><a href="#">Ipad
																			Air and
																			iOS7</a></div>
																	<div class="pro-content">
																		<div class="wrap-price">
																			<div class="price-box">
																				<span class="regular-price">
																					<span
																						class="price">$800.00</span></span>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating" style="width:80%">
																				</div>
																			</div>
																			<span class="amount"><a
																					href="#">1(s)</a></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end item wrap -->
													</div>
													<div class="item">
														<div class="item-wrap">
															<div class="item-image">
																<a class="product-image no-touch" href="#"
																	title="Ipad Air and iOS7">
																	<img class="first_image"
																		src="{{asset('fontend/images/product/larg/demo8.jpg')}}"
																		alt="Product demo" />
																</a>
																<div class="item-btn">
																	<div class="box-inner">
																		<a title="Add to wishlist" href="#"
																			class="link-wishlist">&nbsp;</a>
																		<a title="Add to compare" href="#"
																			class="link-compare">&nbsp;</a>
																		<span class="qview">
																			<a class="vt_quickview_handler"
																				data-original-title="Quick View"
																				data-placement="left"
																				data-toggle="tooltip"
																				href="#"><span>Quick View</span></a>
																		</span>
																	</div>
																</div>
																<a title="Add to cart" class="btn-cart"
																	href="#">&nbsp;</a>
															</div>
															<div class="pro-info">
																<div class="pro-inner">
																	<div class="pro-title product-name"><a href="#">Ipad
																			Air and
																			iOS7</a></div>
																	<div class="pro-content">
																		<div class="wrap-price">
																			<div class="price-box">
																				<span class="regular-price">
																					<span
																						class="price">$800.00</span></span>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating" style="width:80%">
																				</div>
																			</div>
																			<span class="amount"><a
																					href="#">1(s)</a></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end item wrap -->
													</div>
													<div class="item">
														<div class="item-wrap">
															<div class="item-image">
																<a class="product-image no-touch" href="#"
																	title="Ipad Air and iOS7">
																	<img class="first_image"
																		src="{{asset('fontend/images/product/larg/demo9.jpg')}}"
																		alt="Product demo" />
																</a>
																<div class="item-btn">
																	<div class="box-inner">
																		<a title="Add to wishlist" href="#"
																			class="link-wishlist">&nbsp;</a>
																		<a title="Add to compare" href="#"
																			class="link-compare">&nbsp;</a>
																		<span class="qview">
																			<a class="vt_quickview_handler"
																				data-original-title="Quick View"
																				data-placement="left"
																				data-toggle="tooltip"
																				href="#"><span>Quick View</span></a>
																		</span>
																	</div>
																</div>
																<a title="Add to cart" class="btn-cart"
																	href="#">&nbsp;</a>
															</div>
															<div class="pro-info">
																<div class="pro-inner">
																	<div class="pro-title product-name"><a href="#">Ipad
																			Air and
																			iOS7</a></div>
																	<div class="pro-content">
																		<div class="wrap-price">
																			<div class="price-box">
																				<span class="regular-price">
																					<span
																						class="price">$800.00</span></span>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating" style="width:80%">
																				</div>
																			</div>
																			<span class="amount"><a
																					href="#">1(s)</a></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end item wrap -->
													</div>
													<div class="item">
														<div class="item-wrap">
															<div class="item-image">
																<a class="product-image no-touch" href="#"
																	title="Ipad Air and iOS7">
																	<img class="first_image"
																		src="{{asset('images/product/larg/demo10.jpg')}}"
																		alt="Product demo" />
																</a>
																<div class="item-btn">
																	<div class="box-inner">
																		<a title="Add to wishlist" href="#"
																			class="link-wishlist">&nbsp;</a>
																		<a title="Add to compare" href="#"
																			class="link-compare">&nbsp;</a>
																		<span class="qview">
																			<a class="vt_quickview_handler"
																				data-original-title="Quick View"
																				data-placement="left"
																				data-toggle="tooltip"
																				href="#"><span>Quick View</span></a>
																		</span>
																	</div>
																</div>
																<a title="Add to cart" class="btn-cart"
																	href="#">&nbsp;</a>
															</div>
															<div class="pro-info">
																<div class="pro-inner">
																	<div class="pro-title product-name"><a href="#">Ipad
																			Air and
																			iOS7</a></div>
																	<div class="pro-content">
																		<div class="wrap-price">
																			<div class="price-box">
																				<span class="regular-price">
																					<span
																						class="price">$800.00</span></span>
																			</div>
																		</div>
																		<div class="ratings">
																			<div class="rating-box">
																				<div class="rating" style="width:80%">
																				</div>
																			</div>
																			<span class="amount"><a
																					href="#">1(s)</a></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end item wrap -->
													</div>
												</div>
											</div>
											<div class="navslider">
												<a class="prev" href="#">Prev</a>
												<a class="next" href="#">Next</a>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
