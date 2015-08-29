@extends('app')
@section('title')GFashion | Store-locator @endsection

@section('styles')
<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="{{Asset('shop/css/innerpage.css')}}">
	<link rel="stylesheet" href="{{Asset('shop/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{Asset('shop/css/owl.theme.css')}}">
	<!-- // PARTICULAR PAGES CSS FILES -->
@endsection
@push('bodyclass')<body>@endpush
@section('content')
<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="{{URL::to('home')}}">Home</a></li>
						<li class="active">Store Locator</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
			<div class="container">
				<div class="row">
				
					<!-- SIDEBAR -->
					<aside class="col-xs-12 col-sm-4 col-md-3">
						<section class="sidebar m-t-b">
							<section class="side-section">
								<h3 class="uppercase text-bold"><span class="text-xs">Usefull Pages</span></h3>
								
								<ul class="nav nav-tabs nav-stacked">
									<li><a href="index-3.html">Homepage</a></li>															
									<li><a href="about-us.html">About us</a></li>															
									<li><a href="products-2.html">Shop</a></li>															
									<li><a href="product-2.html">Single Product Details</a></li>															
									<li><a href="contact-us-2.html">Contact us</a></li>															
								</ul>
							</section>
								
							<!-- PROMO -->
							<div class="promo inverse-background" style="background: url('images/demo/Barn-Dress-Girl_t.jpg') no-repeat; background-size: auto 100%;">
								<div class="inner text-center np">
									<div class="ribbon">
										<h6 class="nmb">New Arrivals</h6>
										<h5 class="text-semibold uppercase nmb">Leather Fashion</h5>
										<div class="space10"></div>
										<a href="products.html" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> Shop Now</span></a>
									</div>
								</div>
							</div>
							<!-- // PROMO -->
						</section>
					</aside>
					<!-- // SIDEBAR -->
			
					<section class="col-xs-12 col-sm-8 col-md-9">
						<section class="section">
									
							<form class="clearfix" role="form">
								<div class="row">
									<div class="col-xs-12 col-sm-4">
										<div class="form-group stylish-input">
											<label for="inputZIPcode">Enter Post Code or store</label>
											<input type="text" id="inputZIPcode" class="form-control" required />
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group stylish-input">
											<label for="inputLocation">Country / State / City</label>
											<select id="inputLocation" class="form-control">
												<option>-- SELECT ONE --</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4">
										<div class="form-group stylish-input">
											<label for="inputRadius">Radius</label>
											<select id="inputRadius" class="form-control">
												<option>1000 m</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<button type="submit" class="btn btn-primary uppercase m-r-sm">submit</button>
										<button type="reset" class="btn btn-default uppercase">reset</button>
									</div>
								</div>
							</form>
							
							<div class="m-t-lg clearfix">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<ul class="store-list unstyled">
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
											<li>
												<h4 class="entry-title">
													<a href="#">Support Center</a>
													<small>(0.7 km)</small>
												</h4>
												<div class="row">
													<dl class="col-xs-7 col-sm-7">
														<dt>Address</dt>
														<dd>Lower Ground Suite 7<br/>32a Oxford Street</dd>
													</dl>
													<dl class="col-xs-5 col-sm-5">
														<dt class="phone">Phone</dt>
														<dd>(01) 23 456 789</dd>
														<dd>(02) 23 456 789</dd>
													</dl>
												</div>
											</li>
										</ul>
									</div>
									<div class="col-xs-12 col-sm-6">
										<div id="store-locator-gmap" class="gmap"></div>
									</div>
								</div>
							</div>
							
						</section>
					</section>
			
				</div>
			</div>
		</main>
		<!-- // SITE MAIN CONTENT -->
@endsection

@push('script')
<!-- Particular Page Javascripts -->
	<script src="{{Asset('shop/js/products.js')}}"></script>
	<script src="{{Asset('shop/js/owl.carousel.js')}}"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="{{Asset('shop/js/gmap3.min.js')}}"></script>
	<!-- // Particular Page Javascripts -->
@endpush