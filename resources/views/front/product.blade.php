
<!DOCTYPE html>
<html lang="en">
    <head>
    
        @include('front.layout.meta')
        
       
        <!-- Libs CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/front/css/bootstrap/css/bootstrap.min.css') }}">
        <link href="{{ asset('public/front/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/themecss/lib.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/js/minicolors/miniColors.css') }}" rel="stylesheet">
        
        <!-- Theme CSS
        ============================================ -->
        <link href="{{ asset('public/front/css/themecss/so_searchpro.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/themecss/so_megamenu.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/themecss/so-categories.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/themecss/so-newletter-popup.css') }}" rel="stylesheet">
    
        <link href="{{ asset('public/front/css/footer/footer1.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/header/header4.css') }}" rel="stylesheet">
        <link id="color_scheme" href="{{ asset('public/front/css/theme.css') }}" rel="stylesheet"> 
        <link id="color_scheme" href="{{ asset('public/front/css/home4.css') }}" rel="stylesheet">
        <link href="{{ asset('public/front/css/responsive.css') }}" rel="stylesheet">
    
         <!-- Google web fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700' rel='stylesheet' type='text/css'>
        <style type="text/css">
             body{font-family:'Roboto', sans-serif}
        </style>
    
    </head>

<body class="res layout-subpage layout-1 banners-effect-5">
    <div id="wrapper" class="wrapper-fluid">
    <!-- Header Container  -->
    @include('front.layout.header')
    <!-- //Header Container  -->

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Smartphone & Tablets</a></li>
			<li><a href="#">Chicken swinesha</a></li>
			
		</ul>
		
		<div class="row">
	
			<!--Left Part Start -->
			<aside class="col-sm-4 col-md-3 content-aside" id="column-left">
				<div class="module category-style">
                	<h3 class="modtitle">Categories</h3>
                	<div class="modcontent">
                		<div class="box-category">
                			<ul id="cat_accordion" class="list-group">
                				<li class="hadchild"><a href="" class="cutom-parent">Smartphone & Tablets</a>   <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: block;">
                						<li><a href="">Men's Watches</a></li>
                						<li><a href="">Women's Watches</a></li>
                						<li><a href="">Kids' Watches</a></li>
                						<li><a href="">Accessories</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a class="cutom-parent" href="">Electronics</a>   <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="">Cycling</a></li>
                						<li><a href="">Running</a></li>
                						<li><a href="">Swimming</a></li>
                						<li><a href="">Football</a></li>
                						<li><a href="">Golf</a></li>
                						<li><a href="">Windsurfing</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a href="" class="cutom-parent">Shoes</a>   <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a href="" class="cutom-parent">Watches</a>  <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="">Men's Watches</a></li>
                						<li><a href="">Women's Watches</a></li>
                						<li><a href="">Kids' Watches</a></li>
                						<li><a href="">Accessories</a></li>
                					</ul>
                				</li>
                				<li class="hadchild"><a href="" class="cutom-parent">Jewellery</a>    <span class="button-view  fa fa-plus-square-o"></span>
                					<ul style="display: none;">
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                						<li><a href="">Sub Categories</a></li>
                					</ul>
                				</li>
                				<li class=""><a href="" class="cutom-parent">Health &amp; Beauty</a>  <span class="dcjq-icon"></span></li>
                				<li class=""><a href="" class="cutom-parent">Kids &amp; Babies</a>    <span class="dcjq-icon"></span></li>
                				<li class=""><a href="" class="cutom-parent">Sports</a>  <span class="dcjq-icon"></span></li>
                				<li class=""><a href="" class="cutom-parent">Home &amp; Garden</a><span class="dcjq-icon"></span></li>
                				<li class=""><a href="" class="cutom-parent">Wines &amp; Spirits</a>  <span class="dcjq-icon"></span></li>
                			</ul>
                		</div>
                		
                		
                	</div>
                </div>
            	<div class="module product-simple">
                    <h3 class="modtitle">
                        <span>Latest products</span>
                    </h3>
                    <div class="modcontent">
                        <div class="extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class=" extraslider-inner">
                                <div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Mandouille short ">
                                                    <img src="{{ asset('public/front/image/catalog/demo/product/80/8.jpg') }}" alt="Mandouille short">
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Mandouille short">Mandouille short </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$55.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$76.00 </span>&nbsp;

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Xancetta bresao ">
                                                        <img src="{{ asset('public/front/image/catalog/demo/product/80/7.jpg') }}" alt="Xancetta bresao">
                                                        </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Xancetta bresao">
                                                            Xancetta bresao 
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$80.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$89.00 </span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Sausage cowbee ">
                                                            <img src="{{ asset('public/front/image/catalog/demo/product/80/6.jpg') }}" alt="Sausage cowbee">
                                                            </a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Sausage cowbee">
                                                            Sausage cowbee 
                                                        </a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                           
                                            <div class="content_price price">
                                                <span class="price product-price">
                                                                $66.00 
                                                            </span>
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Chicken swinesha ">
                                                <img src="{{ asset('public/front/image/catalog/demo/product/80/5.jpg') }}" alt="Chicken swinesha">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Chicken swinesha">
                                                            Chicken swinesha 
                                                        </a>
                                            </div>
                                             <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price">$45.00 </span>&nbsp;&nbsp;

                                                <span class="price-old">$56.00 </span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                </div>
                               
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
                <div class="module banner-left hidden-xs ">
                	<div class="banner-sidebar banners">
                      <div>
                        <a title="Banner Image" href="#"> 
                          <img src="{{ asset('public/front/image/catalog/banners/banner-sidebar.jpg') }}" alt="Banner Image"> 
                        </a>
                      </div>
                    </div>
                </div>
            </aside>
            <!--Left Part End -->

			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				
				<div class="product-view row">
					<div class="left-content-product">
				
						<div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
							<div class="large-image  ">
								<img itemprop="image" class="product-image-zoom" src="{{ asset('public/thumbnail').'/'.$product->p_thumbnail }}" data-zoom-image="{{ asset('public/thumbnail').'/'.$product->p_thumbnail }}" title="Chicken swinesha" alt="Chicken swinesha">
							</div>
							
							<div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
								@foreach ($product->gallery as $key=>$gallery)
									<a data-index="{{ $key }}" class="img thumbnail " data-image="{{ asset('public/gallery').'/'.$gallery->image }}">
										<img src="{{ asset('public/gallery').'/'.$gallery->image }}" alt="Loading image">
									</a>
								@endforeach
							</div>
							
						</div>

						<div class="content-product-right col-md-7 col-sm-12 col-xs-12">
							<div class="title-product">
								<h1>{{ $product->name }}</h1>
							</div>
							<!-- Review ---->
							<div class="box-review form-group">
								<div class="ratings">
									<div class="rating-box">
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
									</div>
								</div>

								<a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>	| 
								<a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
							</div>

							<div class="product-label form-group">
								@if ($product->product_size)
									<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                        @if ($product->sale_price)
                                            <span class="price-new p-price" name="{{ $product->sale_price }}" itemprop="price">Rs. {{ $product->sale_price }}</span>
                                            <span class="price-old p-price" name="{{ $product->price }}">Rs. {{ $product->price }}</span>
                                        @else
                                            <span class="price-new p-price" name="{{ $product->price }}" itemprop="price">Rs. {{ $product->price }}</span>
                                        @endif
									</div>
								@endif
								<div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
							</div>

							<div class="product-box-desc">
								<div class="inner-box-desc">
									<div class="reward"><span>Category:</span> {{ $product->category['name'] }}</div>
									<div class="brand"><span>Brand:</span><a href="#">{{ $product->brand['name'] }}</a></div>
									<div class="model"><span>Product Code:</span> #PRD0{{ $product->id }}</div>
								</div>
							</div>


							<div id="product">
								<h4>Available Options</h4>
								@if (count($product->color_product) > 0)
									<div class="image_option_type form-group required">
										<label class="control-label">Colors</label>
										<ul class="product-options clearfix">
											@foreach ($product->color_product as $color)
											@php
												$col = \App\Color::find($color->color_id);
											@endphp
												<li class="radio">
													<label>
														<input class="image_radio" type="radio" name="option[]" value="{{ $col->code }}"> 
														<span style="background: {{ $col->code }}" class="img-thumbnail icon icon-color"></span><i class="fa fa-check"></i>
														<label> </label>
													</label>
												</li>
											@endforeach

										</ul>
									</div>
								@endif

								@foreach ($product->product_size as $row)
									@if (json_decode($row->size) != NULL)
										<div class="image_option_type form-group required">
											<label class="control-label">Size</label>
											<ul class="product-options clearfix">
												<select name="size" id="size" class="form-control" style="width: 52%;" required>
													<option disabled selected>Choose Size</option>
													@foreach (json_decode($row->size) as $size)
														<option value="{{ $size }}">{{ $size }}</option>
													@endforeach
												</select>
											</ul>
										</div>
									@endif
								@endforeach

								<div class="form-group box-info-product">
									<div class="option quantity">
										<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
											<label>Qty</label>
											<input class="form-control" type="text" id="quantity" name="quantity"
											value="1" readonly>
											<input type="hidden" name="product_id" value="50">
											<span class="input-group-addon product_quantity_down">−</span>
											<span class="input-group-addon product_quantity_up">+</span>
										</div>
									</div>
									<div class="cart">
										<input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Add to Cart">
									</div>
									<div class="add-to-links wish_comp">
										<ul class="blank list-inline">
											<li class="wishlist">
												<a class="icon" data-toggle="tooltip" title=""
												onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
												</a>
											</li>
											<li class="compare">
												<a class="icon" data-toggle="tooltip" title=""
												onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
												</a>
											</li>
										</ul>
									</div>

								</div>

							</div>
							<!-- end box info product -->

						</div>
				
					</div>
				</div>
				<!-- Product Tabs -->
				<div class="producttab ">
					<div class="tabsslider  vertical-tabs col-xs-12">
						<ul class="nav nav-tabs col-lg-2 col-sm-3">
							<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
						</ul>
						<div class="tab-content col-lg-10 col-sm-9 col-xs-12">
							<div id="tab-1" class="tab-pane fade active in">
								{!! $product->p_detail !!}
							</div>
							<div id="tab-review" class="tab-pane fade">
								<form>
									<div id="review">
										<table class="table table-striped table-bordered">
											<tbody>
												<tr>
													<td style="width: 50%;"><strong>Super Administrator</strong></td>
													<td class="text-right">29/07/2015</td>
												</tr>
												<tr>
													<td colspan="2">
														<p>Best this product opencart</p>
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
										<div class="text-right"></div>
									</div>
									<h2 id="review-title">Write a review</h2>
									<div class="contacts-form">
										<div class="form-group"> <span class="icon icon-user"></span>
											<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
										</div>
										<div class="form-group"> <span class="icon icon-bubbles-2"></span>
											<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
										</div> 
										<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>
										
										<div class="form-group">
										 <b>Rating</b> <span>Bad</span>&nbsp;
										<input type="radio" name="rating" value="1"> &nbsp;
										<input type="radio" name="rating"
										value="2"> &nbsp;
										<input type="radio" name="rating"
										value="3"> &nbsp;
										<input type="radio" name="rating"
										value="4"> &nbsp;
										<input type="radio" name="rating"
										value="5"> &nbsp;<span>Good</span>
										
										</div>
										<div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
									</div>
								</form>
							</div>
							<div id="tab-4" class="tab-pane fade">
								<a href="#">Monitor</a>,
								<a href="#">Apple</a>				
							</div>
						</div>
					</div>
				</div>
				<!-- //Product Tabs -->

				<!-- Related Products -->
			<div class="related titleLine products-list grid module ">
				<h3 class="modtitle">Related Products  </h3>
		
				<div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
					<div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Pastrami bacon">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/9.jpg') }}" class="img-1 img-responsive" alt="Pastrami bacon">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/2.jpg') }}" class="img-2 img-responsive" alt="Pastrami bacon">
                                        </a>
                                    </div>
                                    
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Pastrami bacon</a></h4>
                                        <div class="price">$42.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/8.jpg') }}" class="img-1 img-responsive" alt="image">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/3.jpg') }}" class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price"> <span class="price-new">$46.00</span>
                                            <span class="price-old">$55.00</span>
                                        </div>
                                        <h4><a href="product.html" title="Chicken swinesha" target="_self">Chicken swinesha</a></h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Kielbasa hamburg">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/5.jpg') }}" class="img-1 img-responsive" alt="Pastrami bacon">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/6.jpg') }}" class="img-2 img-responsive" alt="Pastrami bacon">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-new"> New </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        
                                        <h4><a href="product.html" title="Kielbasa hamburg" target="_self">Kielbasa hamburg</a></h4>
                                        <div class="price">$55.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Sausage cowbee">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/7.jpg') }}" class="img-1 img-responsive" alt="image">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/4.jpg') }}" class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        
                                        <h4><a href="product.html" title="Sausage cowbeea" target="_self">Sausage cowbee</a></h4>
                                        <div class="price">$60.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Kielbasa hamburg">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/2.jpg') }}" class="img-1 img-responsive" alt="Pastrami bacon">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/6.jpg') }}" class="img-2 img-responsive" alt="Pastrami bacon">
                                        </a>
                                    </div>
                                    
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        
                                        <h4><a href="product.html" title="Drumstick tempor" target="_self">Drumstick tempor</a></h4>
                                        <div class="price">$75.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Balltip nullaelit">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/8.jpg') }}" class="img-1 img-responsive" alt="image">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/2.jpg') }}" class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-new"> New </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        
                                        <h4><a href="product.html" title="Balltip nullaelit" target="_self">Balltip nullaelit</a></h4>
                                        <div class="price">$80.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-inner product-layout transition product-grid">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.html" target="_self" title="Lamboudin ribeye">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/3.jpg') }}" class="img-1 img-responsive" alt="image">
                                            <img src="{{ asset('public/front/image/catalog/demo/product/320/9.jpg') }}" class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');">  <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                        </button>
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        
                                        <h4><a href="product.html" title="Lamboudin ribeye" target="_self">Lamboudin ribeye</a></h4>
                                        <div class="price">$63.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>

			<!-- end Related  Products-->
			</div>	
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->
	

	<!-- Footer Container -->
    @include('front.layout.footer')
    <!-- //end Footer Container -->

    </div>
	
	




	
	
    <!-- Include Libs & Plugins-->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('public/front/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/themejs/libs.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/unveil/jquery.unveil.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/countdown/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/datetimepicker/moment.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/modernizr/modernizr-2.6.2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/minicolors/jquery.miniColors.min.js')}}"></script>
    
    <!-- Theme files -->
    
    <script type="text/javascript" src="{{ asset('public/front/js/themejs/application.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('public/front/js/themejs/homepage.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('public/front/js/themejs/toppanel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/themejs/so_megamenu.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/front/js/themejs/addtocart.js')}}"></script> 
    <script src="{{ asset('public/front/js/popper.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            // show cart items in header
			$.get('{{ route("myCartPage.getCart-onLoad") }}', function(response){
				$('#cart').empty().append(response);
			});

            $('#button-cart').click(function(e){
                e.preventDefault();
                var product_id = '{{ $product->id }}';
                var quantity = $('#quantity').val();
                var price = $('.p-price').attr('name');
                var size = $('#size').val();
                var color = $('input[type="radio"]:checked').val();
                if(color == undefined){
                    color = 'Defaul Color'
                }
                if(size == undefined){
                    size = 'Defaul Size'
                }
                $.ajax({
                    url: "{{ route('add-to-cart') }}",
                    type: "POST",   
                    data: {
                    "_token": "{{ csrf_token() }}",
                    product_id: product_id,
                    quantity: quantity,
                    price: price,
                    size: size,
                    color: color,
                    },
                    success: function(data){
                        $('#cart').empty().append(data);
                    },
                    error: function(data){
                        alert('Unable to add to cart this product.');
                    }
                });
            });
        });
    </script>
	
</body>
</html>