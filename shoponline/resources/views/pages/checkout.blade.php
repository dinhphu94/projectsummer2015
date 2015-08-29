@extends('app')
@section('title')GFashion | Checkout @endsection

@section('styles')
<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="{{Asset('shop/css/innerpage.css')}}">
	<!-- // PARTICULAR PAGES CSS FILES -->
@endsection

@push('bodyclass')<body>@endpush
@section('content')
<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
		
			<div class="container">
				<div class="row">
					
					<div class="m-t-b clearfix">
						<!-- SIDEBAR -->
						<aside class="col-xs-12 col-sm-4 col-md-3">
							<section class="side-section">
								<h3 class="uppercase text-bold"><span class="text-xs">Usefull Pages</span></h3>
								
								<ul class="nav nav-tabs nav-stacked">
									<li><a href="{{URL::to('home')}}">Homepage</a></li>															
									<li><a href="{{URL::to('')}}">About us</a></li>															
									<li><a href="{{URL::to('products')}}">Shop</a></li>															
									<li><a href="product-2.html">Single Product Details</a></li>															
									<li><a href="{{URL::to('contacts')}}">Contact us</a></li>															
								</ul>
							</section>
								
							<!-- PROMO -->
							<div class="promo inverse-background" style="background: url('shop/images/demo/Barn-Dress-Girl_t.jpg') no-repeat; background-size: auto 100%;">
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
						</aside>
						<!-- // SIDEBAR -->
						
						<section class="col-xs-12 col-sm-8 col-md-9">
							<div class="panel-group checkout" id="checkout-collapse">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1">
												<span class="step">01</span>
												Checkout Infomation
											</a>
										</h4>
									</div>
									<div id="checkout-collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<form>
														<fieldset>
															<legend class="title">New Customer</legend>
															<div class="inner">
																<p>Checkout Options:</p>
																<div class="form-account">
																	<div class="radio">
																		<input type="radio" name="customer" id="radio-register" class="prettyCheckable" checked="checked" data-label="Register Account" />
																	</div>
																	<div class="radio">
																		<input type="radio" name="customer" id="radio-guest" class="prettyCheckable" data-label="Guest Checkout" />
																	</div>
																</div>
																<p class="light-color">Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc [...]</p>
																<div class="space20 clearfix"></div>
																<button  class="btn btn-default btn-round uppercase padder">Continue</button>
															</div>
														</fieldset>
													</form>
												</div>
												<div class="space40 visible-xs"></div>
												<div class="col-xs-12 col-sm-6">
													@include('errors.check')
													<form class="form-horizontal" role="form" method="POST" action="{!! URL::to('auth/login') !!}">
														<fieldset>
															<legend class="title">Returning Customer</legend>
															<div class="inner">
																<p>I'm a Returning Customer</p>
																<div class="form-login">
																	<div class="form-group stylish-input">
																		<input type="hidden" name="_token" value="{{ csrf_token() }}">
																		<label for="email" class="col-xs-12 col-sm-3 control-label required">Email</label>
																		<div class="col-lg-7">
																			<input type="text" class="form-control" id="email" placeholder="Email" name="email"/>
																		</div>
																	</div>
																	<div class="form-group stylish-input">
																		<label for="password" class="col-xs-12 col-sm-3 control-label required">Password</label>
																		<div class="col-lg-7">
																			<input type="password" class="form-control" autocomplete="off" id="password" placeholder="Password" name="password"/>
																			<a href="#" class="help-block">Forgot your password?</a>
																		</div>
																	</div>
																</div>
																<button type="submit" class="btn btn-primary btn-round padder">Login</button>
															</div>
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
												<span class="step">02</span>
												Register Account
											</a>
										</h4>
									</div>
									<div id="checkout-collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											@include('errors.check')
											<form class="form-horizontal" role="form" method="POST" action="{!! URL::to('auth/register') !!}">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-8">
														<div class="form-group stylish-input">
															<label for="inputFirstname" class="col-sm-4 col-lg-4 control-label required">Name</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" autocomplete="off" id="name" placeholder="name" name="name"/>
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputEmail2" class="col-sm-4 col-lg-4 control-label required">E-Mail</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" autocomplete="off" id="email" placeholder="Email" name="email" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputPhone" class="col-sm-4 col-lg-4 control-label required">Telephone</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" autocomplete="off" id="telephone" placeholder="telephone" name="telephone"/>
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputFax" class="col-sm-4 col-lg-4 control-label required">Password</label>
															<div class="col-sm-8 col-lg-8">
																<input type="password" class="form-control" type="password" autocomplete="off" id="password" placeholder="password" name="password"/>
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputCompany" class="col-sm-4 col-lg-4 control-label required">Password-Confirmation</label>
															<div class="col-sm-8 col-lg-8">
																<input type="password" class="form-control" type="password" id="password_confirmation" autocomplete="off" placeholder="password_confirmation" name="password_confirmation"/>
															</div>
														</div>
														<div class="form-group stylish-input">
															<lable class="col-sm-4 col-lg-4 control-lable required"></lable>
															<div class="col-sm-8 col-lg-8">
																<div class="g-recaptcha" data-sitekey="6LewwwoTAAAAAArB1_jcNihsgYLVox1RBlo2QQyP"> </div>
															{!! Recaptcha::render() !!}
														    </div>
													    </div>
													    <div class="col-sm-8 col-lg-8"></div>
													    <button type="submit" class="btn btn-primary btn-round padder">Register</button>
												</div>
												
												
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse3">
												<span class="step">03</span>
												Billing Infomation
											</a>
										</h4>
									</div>
									<div id="checkout-collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="form-horizontal" role="form">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-6">
														<div class="form-group stylish-input">
															<label for="inputFirstname" class="col-sm-4 col-lg-4 control-label required">First Name</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputFirstname" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputLastname" class="col-sm-4 col-lg-4 control-label required">Last Name</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputLastname" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputEmail2" class="col-sm-4 col-lg-4 control-label required">E-Mail</label>
															<div class="col-sm-8 col-lg-8">
																<input type="email" class="form-control" id="inputEmail2" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputPhone" class="col-sm-4 col-lg-4 control-label required">Telephone</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputPhone" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputFax" class="col-sm-4 col-lg-4 control-label">Fax</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputFax" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputCompany" class="col-sm-4 col-lg-4 control-label">Company</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputCompany" />
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-6">
														<div class="form-group stylish-input">
															<label for="inputAddress1" class="col-sm-4 col-lg-4 control-label required">Address 1</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputAddress1" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputAddress2" class="col-sm-4 col-lg-4 control-label">Address 2</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputAddress2" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputCity" class="col-sm-4 col-lg-4 control-label required">City</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputCity" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputPostcode" class="col-sm-4 col-lg-4 control-label required">Post Code</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputPostcode" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputCountry" class="col-sm-4 col-lg-4 control-label required">Country</label>
															<div class="col-sm-8 col-lg-8">
																<select class="form-control" id="inputCountry">	
																	<option>select country</option>
																</select>
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputState" class="col-sm-4 col-lg-4 control-label required">Region/state</label>
															<div class="col-sm-8 col-lg-8">
																<select class="form-control" id="inputState">
																	<option>select state/region</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="space20 clearfix"></div>
												<button class="btn btn-primary">Continue</button>
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse4">
												<span class="step">04</span>
												Delivery Details
											</a>
										</h4>
									</div>
									<div id="checkout-collapse4" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="form-horizontal" role="form">
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-6">
														<div class="form-group stylish-input">
															<label for="inputFirstname" class="col-sm-4 col-lg-4 control-label required">First Name</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputFirstname" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputLastname" class="col-sm-4 col-lg-4 control-label required">Last Name</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputLastname" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputEmail2" class="col-sm-4 col-lg-4 control-label required">E-Mail</label>
															<div class="col-sm-8 col-lg-8">
																<input type="email" class="form-control" id="inputEmail2" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputPhone" class="col-sm-4 col-lg-4 control-label required">Telephone</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputPhone" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputFax" class="col-sm-4 col-lg-4 control-label">Fax</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputFax" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputCompany" class="col-sm-4 col-lg-4 control-label">Company</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputCompany" />
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-6">
														<div class="form-group stylish-input">
															<label for="inputAddress1" class="col-sm-4 col-lg-4 control-label required">Address 1</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputAddress1" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputAddress2" class="col-sm-4 col-lg-4 control-label">Address 2</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputAddress2" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputCity" class="col-sm-4 col-lg-4 control-label required">City</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputCity" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputPostcode" class="col-sm-4 col-lg-4 control-label required">Post Code</label>
															<div class="col-sm-8 col-lg-8">
																<input type="text" class="form-control" id="inputPostcode" />
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputCountry" class="col-sm-4 col-lg-4 control-label required">Country</label>
															<div class="col-sm-8 col-lg-8">
																<select class="form-control" id="inputCountry">	
																	<option>select country</option>
																</select>
															</div>
														</div>
														<div class="form-group stylish-input">
															<label for="inputState" class="col-sm-4 col-lg-4 control-label required">Region/state</label>
															<div class="col-sm-8 col-lg-8">
																<select class="form-control" id="inputState">
																	<option>select state/region</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="space20 clearfix"></div>
												<button class="btn btn-primary">Continue</button>
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse5">
												<span class="step">05</span>
												Payment Method
											</a>
										</h4>
									</div>
									<div id="checkout-collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="paymethod" role="form">
												<div class="form-group stylish-input">
													<input type="radio" id="deliverymethod1" class="prettyCheckable" name="deliverymethod" data-label="Method 1" />
													<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit.</p>
												</div>
												<div class="form-group stylish-input">
													<input type="radio" id="deliverymethod2" class="prettyCheckable" name="deliverymethod" data-label="Method 2" />
													<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit.</p>
												</div>
												<div class="form-group stylish-input">
													<input type="radio" id="deliverymethod3" class="prettyCheckable" name="deliverymethod" data-label="Method 3" />
													<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit.</p>
												</div>
												<div class="space20 clearfix"></div>
												<button class="btn btn-primary">Continue</button>
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse6">
												<span class="step">06</span>
												Delivery Methods
											</a>
										</h4>
									</div>
									<div id="checkout-collapse6" class="panel-collapse collapse">
										<div class="panel-body">
											<form class="paymethod" role="form">
												<div class="form-group stylish-input">
													<input type="radio" id="paymethod1" class="prettyCheckable" name="paymethod" data-label="Direct Bank Transfer" />
													<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit.</p>
												</div>
												<div class="form-group stylish-input">
													<input type="radio" id="paymethod2" class="prettyCheckable" name="paymethod" data-label="C.O.D" />
													<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit.</p>
												</div>
												<div class="form-group stylish-input">
													<input type="radio" id="paymethod3" class="prettyCheckable" name="paymethod" data-label="PayPal" />
													<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit.</p>
												</div>
												<div class="space20 clearfix"></div>
												<button class="btn btn-primary">Continue</button>
											</form>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse7">
												<span class="step">07</span>
												Account & Billing Details
											</a>
										</h4>
									</div>
									<div id="checkout-collapse7" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="row">
												<div class="col-xs-12 col-sm-6 pull-right center-sm">
													<table class="shop-summary">
														<tr>
															<th>Sub Total:</th>
															<td>$1170.00</td>
														</tr>
														<tr>
															<th>Eco tax (-2.00)</th>
															<td>$2.00</td>
														</tr>
														<tr>
															<th>Vat (10.0 %):</th>
															<td>$117.00</td>
														</tr>
														<tr class="total">
															<th>Total:</th>
															<td>$1053.00</td>
														</tr>
														<tr>
															<th><a href="#" class="btn btn-default btn-round uppercase">Checkout</a></th>
															<td><a href="#" class="btn btn-primary btn-round uppercase">Continue Shopping</a></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						
					</div>
				
				</div>
			</div>
		
		</main>
		<!-- // SITE MAIN CONTENT -->
@endsection

@push('script')
<!-- Particular Page Javascripts -->
	<script src="{{Asset('shop/js/products.js')}}"></script>
	<!-- // Particular Page Javascripts -->
@endpush