<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>@section('title')Admin - Admin Template @show</title>
	    	
		
		<!-- Import google fonts - Heading first/ text second -->
        
        <!--[if lt IE 9]>
<link href="http://fonts.useso.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="{{Asset('admin/assets/ico/favicon.ico')}}" type="image/x-icon" />    

	    <!-- Css files -->
	    

	    <link href="{{Asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet">		
		
		    
	    <link href="{{Asset('admin/assets/css/style.min.css')}}" rel="stylesheet">
	    <link href="{{Asset('admin/assets/css/colorbox.css')}}" rel="stylesheet">
		
		
		
        




	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    @yield('styles')
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{{ asset('admin/assets/js/jquery.colorbox.js') }}}"></script>

	    
	   <script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>


	    
	    <!--<script src="{{asset('admin/assets/js/bootstrap-dataTables-paging.js')}}"></script>
        <script src="{{asset('admin/assets/js/datatables.fnReloadAjax.js')}}"></script>
        <script src="{{asset('admin/assets/js/modal.js')}}"></script>
        
	    
         
	<!-- <link href="{{ asset('admin/assets/css/jquery.bootgrid.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/style.css')}}" rel="stylesheet">
 -->
	</head>
<body>

@include('admin.partials.header')
@include('admin.partials.sidebar')

		
<a href="{{{ URL::to('admin/users/delete') }}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span>{{
                    trans("admin/modal.new") }}
                                
                    </a>
                </div>
           
    
@stack('script')





@yield('js')
<!-- <script src="{{ Asset('admin/assets/js/jquery.bootgrid.min.js')}}"></script>
<script src="{{ Asset('admin/assets/js/jquery.bootgrid.fa.min.js')}}"></script> -->

@yield('jscode')

</body>
</html>
