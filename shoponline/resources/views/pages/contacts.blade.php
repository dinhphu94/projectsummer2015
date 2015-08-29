@extends('app')
@section('title')GFashion | Contacts-us @endsection

@section('styles')
<link rel="stylesheet" href="{{Asset('shop/css/innerpage.css')}}">
<link rel="stylesheet" href="{{Asset('shop/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{Asset('shop/css/owl.theme.css')}}">
@endsection

@push('bodyclass')<body>@endpush
@section('content')
<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="{{URL::to('home')}}">Home</a></li>
						<li class="active">Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
				
			<div class="container">
				<div class="row">
				
					<section class="section">
						<section class="col-xs-12 col-sm-12">
							<!-- GOOGLE MAP: You can config map to your cordination in `{{Asset('shop/js/scripts.js')}}` -->
							<div id="gmap" class="gmap"></div>
						</section>
					</section>
					
					<section class="section">
						<section class="col-xs-12 col-sm-8 col-md-9">
						
							<h3 class="uppercase text-bold"><span class="text-xs">What about sending us a message</span></h3>
							<div class="row">
								<div id="frm-contact-us">
									<form id="contact-form" class="clearfix" role="form">
										<div class="col-xs-12 col-sm-12 col-md-5">
											<div class="form-group stylish-input">
												<label for="contactName" class="required">Name</label>
												<input type="text" class="form-control" id="contactName" name="name" data-validate="^[�-�\w\s]{2,30}$" require />
											</div>
											<div class="form-group stylish-input">
												<label for="contactEmail" class="required">Email</label>
												<input type="email" class="form-control" id="contactEmail" name="email" data-validate="^[_A-Za-z0-9-\+]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,})$" require />
											</div>
											<div class="form-group stylish-input">
												<label for="contactSubject">Subject</label>
												<input type="text" class="form-control" name="subject" id="contactSubject" />
											</div>
										</div>
										<div class="space10 visible-xs visible-sm"></div>
										<div class="col-xs-12 col-sm-12 col-md-7">
											<div class="form-group stylish-input">
												<label for="contactMSG" class="required">Message</label>
												<textarea id="contactMSG" class="form-control" name="message" style="height: 178px;" data-validate=".{2,400}$" required></textarea>
											</div>
										</div>
										<div class="space10"></div>
										<div class="col-xs-12 col-sm-12">
											<button class="btn btn-default btn-round pull-right">Send Message</button>
										</div>
									</form>
									
									<div class="space40"></div>
									<div class="clearfix"></div>
									<!-- CONTACT FORM ALERTS -->
									<div class="alert alert-success" id="contact_success" style="display: none;">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<div class="alert-inner">
											<strong>Thanks,</strong> your message recieved successfully. We'll get back to you as soon as possible.
										</div>
									</div>
									<!-- /success msg -->
									
									<div class="alert alert-danger" id="contact_fail" style="display: none;">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<div class="alert-inner"></div>
									</div>
									<!-- /error msg -->
									<!-- /CONTACT FORM ALERTS -->

								</div>
							</div>
						
						</section>
				
						<!-- SIDEBAR -->
						<aside class="col-xs-12 col-sm-4 col-md-3">
						
							<section class="sidebar">
								<section class="side-section">
									<h3 class="uppercase text-bold"><span class="text-xs">place for nice title</span></h3>
									<p class="light-color text-xs">Sed ornare cras donec litora integer curabitur orci, at nullam aliquam libero nam himenaeos, amet massa  amet ut ipsum viverra mauris rhoncus neque aenean rhoncus gravida orci facilisis quis dui consectetur.</p>
								</section>
								
								<section class="side-section">
									<h3 class="uppercase text-bold"><span class="text-xs">Contact infomation</span></h3>
									<div class="light-color text-xs">
										<p>Lorem ipsum maecenas dapibus luctus</p>
										<ul class="menu iconed-list unstyled">
											<li>
												<span class="list-icon"><i class="round-icon text-sm iconfont-map-marker"></i></span>
												<div class="list-content">121 King Street, Melbourne Victoria 3000 Australia</div>
											</li>
											<li>
												<span class="list-icon"><i class="round-icon text-sm iconfont-phone"></i></span>
												<div class="list-content">(+00)1344356-675</div>
											</li>
											<li>
												<span class="list-icon"><i class="round-icon text-sm iconfont-envelope-alt"></i></span>
												<div class="list-content">support@themina.net</div>
											</li>
										</ul>
									</div>
								</section>
							</section>
							
						</aside>
						<!-- // SIDEBAR -->
						
						<div class="clearfix"></div>
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
	<script src="{{Asset('shop/js/contact.js')}}"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="{{Asset('shop/js/gmap3.min.js')}}"></script>
	<!-- // Particular Page Javascripts -->
@endpush