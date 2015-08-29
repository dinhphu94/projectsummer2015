@extends('admin.layouts.default')
@section('title')Admin | Products @endsection

@section('styles')
        <!-- DataTables -->
        <link href="{{ asset('admin/assets/css/jquery.dataTables.min.css')}}" rel="stylesheet">
        <!-- Bootstrap JavaScript -->
        

@stop
@section('content')
<div class="main">
		
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-product"></i>{{{ trans('admin/products.products') }}}</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">{{{ trans('admin/modal.home') }}}</a></li>
						<li><i class="fa fa-product"></i>{{{ trans('admin/products.products') }}}</li>						  	
					</ol>
				</div>
			</div>

            <div class="page-header">   
        <h3>
            {{ trans('admin/products.product') }}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{{ URL::to('admin/product/create') }}}"
                       class="btn btn-sm  btn-primary"><span
                                class="glyphicon glyphicon-plus-sign"></span>{{
                    trans('admin/modal.new') }}
                                
                    </a>
                </div>
            </div>
        </h3>
    </div>

			<div class="row">
				<div class="col-sm-12">
				<table class="table table-striped table cell-border" id="table">
					<thead>
						<tr>
                            <th>{{{ trans('admin/products.image') }}}</th>
							<th>{{{ trans('admin/products.product_name') }}}</th>
                            <th>{{{ trans('admin/products.price') }}}</th>

							<th>{{{ trans('admin/products.size') }}}</th>
                            <th>{{{ trans('admin/products.color') }}}</th>	
							
                            <th>{{{ trans('admin/products.brand') }}}</th>
                            <th>{{{ trans('admin/products.material') }}}</th>
                            <th>{{{ trans('admin/products.category_name') }}}</th>
                            
                            
                            <th>{{{ trans('admin/modal.action')}}}</th>
						</tr>
					</thead>
					<tbody>		
					</tbody>	
				</table>

			</div>


		</div>

</div>

@stop

@push('script')

<script src="{{{ asset('admin/assets/js/jquery.dataTables.js') }}}"></script>
<script type="text/javascript">

        var oTable;
        $(document).ready(function () {
            oTable = $('#table').DataTable({
                "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "sPaginationType": "bootstrap",
                "processing": true,
                "serverSide": true,
                "ajax": "{{ URL::to('admin/product/data') }}",
                "fnDrawCallback": function (oSettings) {
                    $(".iframe").colorbox({
                        iframe: true,
                        width: "80%",
                        height: "80%",
                        onClosed: function () {
                            oTable.ajax.reload();
                        }
                    });
                }
                 
                /*"aoColumnDefs": [{"aTargets": [0], "mData": "avatar", "sClass": "center","mRender": function ( data, type, full ) {
                    if(data == null) {
                    return '<img src="{{Asset('images/img_profile.jpg')}}"" style="width:40px;height:40px";></>';
                    } else {
                    return '<img src="'+data.split(",')[0]+'"></>';
                    }
                }
            }] , */
                /*"fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
  //var imgLink = aData['imageLink']; // if your JSON is 3D
   var imgLink = aData[0]; // where 4 is the zero-origin column for 2D

  var imgTag = '<img src="' + imgLink + '"/>';
  $('td:eq(0)', nRow).html(imgTag); // where 4 is the zero-origin visible column in the HTML

  return nRow;*/
/*},*/
                
            });
        });
    </script>
@endpush