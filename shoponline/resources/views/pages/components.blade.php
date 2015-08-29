@extends('app')
@section('title')GFashion | Components @endsection

@section('styles')
<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="{{Asset('shop/css/innerpage.css')}}">
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
						<li class="active">Checkout</li>
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
					<aside class="col-xs-12 col-sm-4 col-md-3 affix-top">
						<div class="sidebar">
							<nav class="nav-side side-section">
								<ul class="nav nav-tabs nav-stacked">
									<li><a href="#ui-typography">Typography</a></li>
									<li><a href="#ui-buttons">Buttons</a></li>
									<li><a href="#ui-lists">Lists</a></li>
									<li><a href="#ui-forms">Forms</a></li>
									<li><a href="#ui-tab">Tabs</a></li>
									<li><a href="#ui-accordion">Accordion</a></li>
								</ul>
							</nav>
						</div>
					</aside>
					<!-- // SIDEBAR -->
				
					<section class="col-xs-12 col-sm-8 col-md-9">
						
						<!-- TYPOGRAPHY -->
						<section class="section" id="ui-typography">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<h1>Heading 1 <small>Secondary Text</small></h1>
									<h2>Heading 2 <small>Secondary Text</small></h2>
									<h3>Heading 3 <small>Secondary Text</small></h3>
									<h4>Heading 4 <small>Secondary Text</small></h4>
									<h5>Heading 5 <small>Secondary Text</small></h5>
									<h6>Heading 6 <small>Secondary Text</small></h6>
								</div>
								<div class="space40 visible-xs"></div>
								<div class="col-xs-12 col-sm-6">
<pre class="code">
&lt;h1&gt;Heading 1 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h1&gt;
&lt;h2&gt;Heading 2 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h2&gt;
&lt;h3&gt;Heading 3 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h3&gt;
&lt;h4&gt;Heading 4 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h4&gt;
&lt;h5&gt;Heading 5 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h5&gt;
&lt;h6&gt;Heading 6 &lt;small&gt;Secondary Text&lt;/small&gt;&lt;/h6&gt;
</pre>
								</div>
							</div>
						</section>
						<!-- // TYPOGRAPHY -->
						
						<!-- BUTTONS -->
						<section class="section" id="ui-buttons">
							<button type="button" class="btn btn-default">Default</button>
							<button type="button" class="btn btn-primary">Primary</button>
							<button type="button" class="btn btn-success">Success</button>
							<button type="button" class="btn btn-info">Info</button>
							<button type="button" class="btn btn-warning">Warning</button>
							<button type="button" class="btn btn-danger">Danger</button>
							<button type="button" class="btn btn-link">Link</button>
							<div class="space30"></div>
							<p>
								<button type="button" class="btn btn-primary btn-lg">Large button</button>
								<button type="button" class="btn btn-default btn-lg">Large button</button>
								<button type="button" class="btn btn-default btn-lg btn-round">Large Round button</button>
							</p>
<pre class="code m-b m-t">
&lt;button type="button" class="btn btn-primary btn-lg"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default btn-lg"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default btn-lg btn-round"&gt;Large Round button&lt;/button&gt;
</pre>
							<p>
								<button type="button" class="btn btn-primary">Default button</button>
								<button type="button" class="btn btn-default">Default button</button>
								<button type="button" class="btn btn-default btn-round">Default Round button</button>
							</p>
<pre class="code m-b m-t">
&lt;button type="button" class="btn btn-primary"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default btn-round"&gt;Large Round button&lt;/button&gt;
</pre>
							<p>
								<button type="button" class="btn btn-primary btn-sm">Small button</button>
								<button type="button" class="btn btn-default btn-sm">Small button</button>
								<button type="button" class="btn btn-default btn-sm btn-round">Small Round button</button>
							</p>
<pre class="code m-b m-t">
&lt;button type="button" class="btn btn-primary btn-sm"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default btn-sm"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default btn-sm btn-round"&gt;Large Round button&lt;/button&gt;
</pre>
							<p>
								<button type="button" class="btn btn-primary btn-xs">Extra small button</button>
								<button type="button" class="btn btn-default btn-xs">Extra small button</button>
								<button type="button" class="btn btn-default btn-xs btn-round">Extra small Round button</button>
							</p>
<pre class="code m-b m-t">
&lt;button type="button" class="btn btn-primary btn-xs"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default btn-xs"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-default btn-xs btn-round"&gt;Large Round button&lt;/button&gt;
</pre>
						</section>
						<!-- // BUTTONS -->
						
						<!-- LISTS -->
						<section class="section" id="ui-lists">
							<div class="row">
								<div class="col-sm-4">
									<ul>
										<li>List Item 1</li>
										<li>List Item 2</li>
										<li>List Item 3</li>
									</ul>
<pre class="code m-t">
&lt;ul&gt;
	&lt;li&gt;List Item 1&lt;/li&gt;
	&lt;li&gt;List Item 2&lt;/li&gt;
	&lt;li&gt;List Item 3&lt;/li&gt;
&lt;/ul&gt;
</pre>
								</div>
								<div class="col-sm-4">
									<ol>
										<li>List Item 1</li>
										<li>List Item 2</li>
										<li>List Item 3</li>
									</ol>
<pre class="code m-t">
&lt;ol&gt;
	&lt;li&gt;List Item 1&lt;/li&gt;
	&lt;li&gt;List Item 2&lt;/li&gt;
	&lt;li&gt;List Item 3&lt;/li&gt;
&lt;/ol&gt;
</pre>
								</div>
								<div class="col-sm-4">
									<ul class="unstyled">
										<li>List Item 1</li>
										<li>List Item 2</li>
										<li>List Item 3</li>
									</ul>
<pre class="code m-t">
&lt;ul class="unstyled"&gt;
	&lt;li&gt;List Item 1&lt;/li&gt;
	&lt;li&gt;List Item 2&lt;/li&gt;
	&lt;li&gt;List Item 3&lt;/li&gt;
&lt;/ul&gt;
</pre>
								</div>
							</div>
							<div class="space40"></div>
							<ul class="menu iconed-list unstyled clearfix">
								<li>
									<span class="list-icon"><i class="round-icon text-sm iconfont-map-marker"></i></span>
									<div class="list-content">Lorem ipsum maecenas dapibus luctus euismod 133/2 New York City</div>
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
<pre class="code m-t">
&lt;ul class="menu iconed-list unstyled clearfix"&gt;
	&lt;li&gt;
		&lt;span class="list-icon"&gt;&lt;i class="round-icon text-sm iconfont-map-marker"&gt;&lt;/i&gt;&lt;/span&gt;
		&lt;div class="list-content"&gt;Lorem ipsum maecenas dapibus luctus euismod 133/2 New York City&lt;/div&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;span class="list-icon"&gt;&lt;i class="round-icon text-sm iconfont-phone"&gt;&lt;/i&gt;&lt;/span&gt;
		&lt;div class="list-content"&gt;(+00)1344356-675&lt;/div&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;span class="list-icon"&gt;&lt;i class="round-icon text-sm iconfont-envelope-alt"&gt;&lt;/i&gt;&lt;/span&gt;
		&lt;div class="list-content"&gt;support@themina.net&lt;/div&gt;
	&lt;/li&gt;
&lt;/ul&gt;
</pre>
						</section>
						<!-- // LISTS -->
						
						<!-- FORMS -->
						<section class="section" id="ui-forms">
							<div class="row">
								<div class="col-xs-12 col-sm-5">
									<form role="form">
										<div class="form-group stylish-input">
											<label for="input1">Text Input:</label>
											<input type="text" id="input1" class="form-control" />
										</div>
										<div class="form-group stylish-input">
											<label class="required" for="input2">Required Text Input:</label>
											<input type="text" id="input2" class="form-control" />
										</div>
										<div class="form-group stylish-input">
											<label for="dd1">Dropdown:</label>
											<select id="dd1" class="form-control">
												<option>-- SELECT ONE --</option>
											</select>
										</div>
									</form>
								</div>
								<div class="space40 visible-xs"></div>
								<div class="col-xs-12 col-sm-7">
<pre class="code">
&lt;form role="form"&gt;
	&lt;div class="form-group stylish-input"&gt;
		&lt;label for="input1"&gt;Text Input:&lt;/label&gt;
		&lt;input type="text" id="input1" class="form-control" /&gt;
	&lt;/div&gt;
	&lt;div class="form-group stylish-input"&gt;
		&lt;label class="required" for="input2"&gt;Required Text Input:&lt;/label&gt;
		&lt;input type="text" id="input2" class="form-control" /&gt;
	&lt;/div&gt;
	&lt;div class="form-group stylish-input"&gt;
		&lt;label for="dd1"&gt;Dropdown:&lt;/label&gt;
		&lt;select id="dd1" class="form-control"&gt;
			&lt;option&gt;-- SELECT ONE --&lt;/option&gt;
		&lt;/select&gt;
	&lt;/div&gt;
&lt;/form&gt;
</pre>
								</div>
								<div class="space60"></div>
								<div class="col-xs-12 col-sm-5">
									<form role="form">
										<div class="form-group stylish-input">
											<input type="checkbox" name="chk" class="prettyCheckable m-r" data-label="pretty checked checkbox" checked="checked" />
											<br/>
											<input type="checkbox" name="chk" class="prettyCheckable" data-label="pretty checkbox" />
										</div>
										<div class="form-group stylish-input">
											<input type="radio" name="radio" class="prettyCheckable m-r" data-label="pretty checked checkbox" checked="checked" />
											<br/>
											<input type="radio" name="radio" class="prettyCheckable" data-label="pretty checkbox" />
										</div>
									</form>
								</div>
								<div class="space40 visible-xs"></div>
								<div class="col-xs-12 col-sm-7">
<pre class="code">
&lt;form role="form"&gt;
	&lt;div class="form-group stylish-input"&gt;
		&lt;input type="checkbox" name="chk" class="prettyCheckable m-r" data-label="pretty checked checkbox" checked="checked" /&gt;
		&lt;br/&gt;
		&lt;input type="checkbox" name="chk" class="prettyCheckable" data-label="pretty checkbox" /&gt;
	&lt;/div&gt;
	&lt;div class="form-group stylish-input"&gt;
		&lt;input type="radio" name="radio" class="prettyCheckable m-r" data-label="pretty checked checkbox" checked="checked" /&gt;
		&lt;br/&gt;
		&lt;input type="radio" name="radio" class="prettyCheckable" data-label="pretty checkbox" /&gt;
	&lt;/div&gt;
&lt;/form&gt;
</pre>
								</div>
							</div>
						</section>
						<!-- // FORMS -->
						
						<!-- TABS -->
						<section class="section" id="ui-tabs">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab-1" data-toggle="tab">Tab 1</a></li>
								<li><a href="#tab-2" data-toggle="tab">Tab 2</a></li>
								<li><a href="#tab-3" data-toggle="tab">Tab 3</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade in active" id="tab-1">
									<p>Sed accumsan commodo ullamcorper. Fusce vestibulum auctor augue, ut sagittis nisl rutrum mollis.</p>
								</div>
								<div class="tab-pane fade" id="tab-2">
									<p>Morbi porttitor porta nisl vel viverra. Class aptent taciti sociosqu ad litora torquent per conubia.</p>
								</div>
								<div class="tab-pane fade" id="tab-3">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
								</div>
							</div>
							<div class="space40"></div>
							<div class="clearfix"></div>
<pre class="code">
&lt;ul class="nav nav-tabs"&gt;
	&lt;li class="active"&gt;&lt;a href="#tab-1" data-toggle="tab"&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="#tab-2" data-toggle="tab"&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="#tab-3" data-toggle="tab"&gt;Tab 3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content"&gt;
	&lt;div class="tab-pane fade in active" id="tab-1"&gt;
		&lt;p&gt;Sed accumsan commodo ullamcorper. Fusce vestibulum auctor augue, ut sagittis nisl rutrum mollis.&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane fade" id="tab-2"&gt;
		&lt;p&gt;Morbi porttitor porta nisl vel viverra. Class aptent taciti sociosqu ad litora torquent per conubia.&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class="tab-pane fade" id="tab-3"&gt;
		&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.&lt;/p&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
						</section>
						<!-- // TABS -->
						
						<!-- ACCORDION -->
						<section class="section" id="ui-accordion">
							<div class="panel-group checkout" id="checkout-collapse">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1">
												<span class="step">01</span>
												Collapse 01
											</a>
										</h4>
									</div>
									<div id="checkout-collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>Sed accumsan commodo ullamcorper. Fusce vestibulum auctor augue, ut sagittis nisl rutrum mollis.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
												<span class="step">02</span>
												Collapse 02
											</a>
										</h4>
									</div>
									<div id="checkout-collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Morbi porttitor porta nisl vel viverra. Class aptent taciti sociosqu ad litora torquent per conubia.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse3">
												<span class="step">03</span>
												Collapse 03
											</a>
										</h4>
									</div>
									<div id="checkout-collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Suspendisse quis dui hendrerit, venenatis metus eu, elementum ante. Quisque fringilla libero sit amet quam.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="space40"></div>
							<div class="clearfix"></div>
<pre class="code">
&lt;div class="panel-group checkout" id="checkout-collapse"&gt;
	&lt;div class="panel panel-default"&gt;
		&lt;div class="panel-heading"&gt;
			&lt;h4 class="panel-title"&gt;
				&lt;a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1"&gt;
					&lt;span class="step"&gt;01&lt;/span&gt;
					Collapse 01
				&lt;/a&gt;
			&lt;/h4&gt;
		&lt;/div&gt;
		&lt;div id="checkout-collapse1" class="panel-collapse collapse in"&gt;
			&lt;div class="panel-body"&gt;
				&lt;p&gt;Sed accumsan commodo ullamcorper. Fusce vestibulum auctor augue, ut sagittis nisl rutrum mollis.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="panel panel-default"&gt;
		&lt;div class="panel-heading"&gt;
			&lt;h4 class="panel-title"&gt;
				&lt;a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2"&gt;
					&lt;span class="step"&gt;02&lt;/span&gt;
					Collapse 02
				&lt;/a&gt;
			&lt;/h4&gt;
		&lt;/div&gt;
		&lt;div id="checkout-collapse2" class="panel-collapse collapse"&gt;
			&lt;div class="panel-body"&gt;
				&lt;p&gt;Morbi porttitor porta nisl vel viverra. Class aptent taciti sociosqu ad litora torquent per conubia.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="panel panel-default"&gt;
		&lt;div class="panel-heading"&gt;
			&lt;h4 class="panel-title"&gt;
				&lt;a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse3"&gt;
					&lt;span class="step"&gt;03&lt;/span&gt;
					Collapse 03
				&lt;/a&gt;
			&lt;/h4&gt;
		&lt;/div&gt;
		&lt;div id="checkout-collapse3" class="panel-collapse collapse"&gt;
			&lt;div class="panel-body"&gt;
				&lt;p&gt;Suspendisse quis dui hendrerit, venenatis metus eu, elementum ante. Quisque fringilla libero sit amet quam.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
						</section>
						<!-- // ACCORDION -->
						
					</section>
						
				</div>
			</div>
		</main>
		<!-- // SITE MAIN CONTENT -->
@endsection