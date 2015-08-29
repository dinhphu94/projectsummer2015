@extends('admin.layouts.default')
@section('title')Admin | Users @endsection

@section('styles')
              
        <link href="{{ asset('admin/assets/css/jquery.dataTables.min.css')}}" rel="stylesheet">
        
        <!-- DataTables -->
       
        <!-- Bootstrap JavaScript -->
        

@stop
@section('content')

<div class="main">
		
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-users"></i> Users</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-users"></i>Users</li>						  	
					</ol>
				</div>
			</div>
         <div class="page-header">   
        <h3>
            Users
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{{ URL::to('admin/users/create') }}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span>{{
                    trans("admin/modal.new") }}
                                
                    </a>
                </div>
            </div>
        </h3>
    </div>

			<div class="row" >
				<div class="col-sm-12" >
				<table class="table table-striped table cell-border hover " id="table" style="text-align:center;">
					<thead >
						<tr>
							<th width="15%" style="text-align:center;">name</th>
							<th width="15%" style="text-align:center;">email</th>	
							<th width="15%" style="text-align:center;">actived</th>	
							<th width="25%" style="text-align:center;" >created_at</th>
							

							<th width="15%" style="text-align:center;">actions</th>
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
@parent
<script type="text/javascript">
        var oTable;
        $(document).ready(function () {
            oTable = $('#table').DataTable({
                "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "className":"align-center",
                "sPaginationType": "bootstrap",
                "processing": true,
                "serverSide": true,
                "ajax": "{{ URL::to('admin/users/data') }}",
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
                    return '<img src="'+data.split(",")[0]+'"></>';
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
@stop