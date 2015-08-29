<!DOCTYPE html>
<html lang="en">
	<head>
		
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>@section('title')Admin - Admin Template @show</title>


	    	
		
		<!-- Import google fonts - Heading first/ text second -->
        <link rel='stylesheet' type='text/css' href='http://fonts.useso.com/css?family=Open+Sans:400,700|Droid+Sans:400,700' />
        <!--[if lt IE 9]>
<link href="http://fonts.useso.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="{{Asset('admin/assets/ico/favicon.ico')}}" type="image/x-icon" />    

	    <!-- Css files -->
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
          <link href="{{Asset('colorbox.css')}}" rel="stylesheet">

	    <link href="{{Asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">		
		<link href="{{Asset('admin/assets/css/jquery.mmenu.css')}}" rel="stylesheet">		
		<link href="{{Asset('admin/assets/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/css/climacons-font.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/plugins/xcharts/css/xcharts.min.css')}}" rel=" stylesheet">		
		<link href="{{Asset('admin/assets/plugins/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/plugins/morris/css/morris.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/plugins/dropzone/css/dropzone.css')}}" rel="stylesheet">	    
	    <link href="{{Asset('admin/assets/css/style.min.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/css/add-ons.min.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/css/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
		<link href="{{Asset('admin/assets/css/sb-admin-2.css')}}" rel="stylesheet">
		
		
        




	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    @yield('styles')
	    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
	    <script src="{{asset('admin/assets/js/my.js')}}"></script>
	    @include('admin.partials.script')
	    
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

@yield('content')

@include('admin.partials.end')

<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-danger').delay(3000).slideUp(300);
</script>

        
        <script type="text/javascript">
                $(function () {
            $('.metismenu > ul').metisMenu();
        });
    </script>
@stack('script')



@yield('js')
<!-- <script src="{{ Asset('admin/assets/js/jquery.bootgrid.min.js')}}"></script>
<script src="{{ Asset('admin/assets/js/jquery.bootgrid.fa.min.js')}}"></script> -->

@yield('jscode')

</body>
</html>