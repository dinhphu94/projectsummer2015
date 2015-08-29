@extends('admin.layouts.default')
@section('title')Admin | Categories @stop

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ Asset('admin/assets/plugins/jstree/dist/themes/default/style.css')}}"/>

@stop

@section('content')

 <div class="main">       
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-folder-open"></i>{{trans('admin/category.category')}}</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">{{trans('messages.home')}}</a></li>
                        <li><i class="fa fa-folder-open"></i>{{trans('admin/category.category')}}</li>                           
                    </ol>
                </div>
            </div>

    
    <div class="col-xs-12 col-md-6">
        <div id="jstree">
         
        </div>
    </div>

    <div class="col-xs-8 col-md-6">
        <div class="col-xs-12">
            <form class="form-horizontal form-row-seperated" action="{{ URL::action('Admin\CategoryController@index') }}"
                  method="Post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="portlet">
                    
                    <div class="portlet-body">
                        <div class="form-group">
                            <label for="category_name"
                                   class="col-sm-2 control-label"><?php echo Lang::get('admin/category.category_name'); ?>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="category_name"

                                       id="category_name"
                                       required="required"
                                       placeholder="<?php echo Lang::get('admin/category.category_name'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="parent"
                                   class="col-sm-2 control-label"><?php echo Lang::get('admin/category.category_parent'); ?>
                            </label>

                            <div class="col-sm-8">

                                <select class="form-control" name="parent" id="parent">
                                    <option value="0">Root</option>
                                    <?php echo $getAllCategoryForSelectTag; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-ok-circle"></span> 
                            
                                <?php echo Lang::get('messages.create'); ?>
                            </button>
                        </div>
                    </div>
                    </div>
                </div>

            </form>
        </div>

        <!--edit-->
        <hr style="border: 2px solid" />
        <div class="col-xs-12">
            <form class="form-horizontal form-row-seperated" action="{{ URL::action('Admin\CategoryController@update') }}"
                  method="Post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" id="id_edit">
                <div class="portlet">
                    
                    <div class="portlet-body">
                        <div class="form-group">
                            <label for="category_name"
                                   class="col-sm-2 control-label"><?php echo Lang::get('admin/category.category_name'); ?>
                            </label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="category_name"
                                       value="{{ old('category_name', '')}}"
                                       id="category_name_edit"

                                       placeholder="<?php echo Lang::get('admin/category.category_name'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="parent"
                                   class="col-sm-2 control-label"><?php echo Lang::get('admin/category.category_parent'); ?>
                            </label>

                            <div class="col-sm-8">

                                <select class="form-control" name="parent" id="parent_edit">
                                    <option value="0">Root</option>
                                    <?php echo $getAllCategoryForSelectTag; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                        
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-ok-circle"></span> 
                            
                                <?php echo Lang::get('admin/modal.update'); ?>
                            </button>
                        </div>
                    </div>
                    </div>
                </div>

            </form>
        </div>
        
  </div>
<div class="col-xs-8 col-md-8">
        <form class="form-horizontal form-row-seperated" action="{{ URL::action('Admin\CategoryController@delete') }}"
              method="Post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input  type="hidden" name="id" id="id_delete">
            <button type="submit" onclick="return confirm('Do you want to delete this category?')" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> 
                            
                                <?php echo Lang::get('admin/modal.delete'); ?>
                            </button>

        </form>
    </div>
</div>

@stop

@section('js')




@stop

@section('jscode')
<script src="{{ Asset('admin/assets/plugins/jstree/dist/jstree.js')}}"></script>
<script>
    $(function () {
        var test;
        $.ajax({
            async: true,
            type: "GET",
            url: "{{action('Admin\CategoryController@getDataForJstree')}}",
            dataType: "json",

            success: function (json) {
                createJSTrees(json);
            },

            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
               
            }

        });
    


        // 6 create an instance when the DOM is ready


        function createJSTrees(jsonData) {

            $('#jstree').jstree({
                'core': {
                    "animation": 0,
                    "check_callback": true,
                    "themes": { "stripes": true },
                    'data': jsonData
                },
                "plugins": [
                     "search", "json_data",
                    "state", "types", "wholerow"
                ]

            });


        }

        $("#jstree2").click(function () {
            var v = $('#jstree').jstree(true).get_json();
            var mytext = JSON.stringify(v);
            $('#data').val(mytext);
        });
        $('#jstree').on('changed.jstree', function (e, data) {
            var id, name, parent, i, j, r = [];
            for (i = 0, j = data.selected.length; i < j; i++) {
                r.push(data.instance.get_node(data.selected[i]).id,
                    data.instance.get_node(data.selected[i]).text,
                    data.instance.get_node(data.selected[i]).parent

                );

            }
            //console.log(r);
           // $('#category_name').val(r[1]);
            //$('#event-change').html('Selected: ' + r[0]);

            var optionValue = r[0];
            $("#parent").val(optionValue)
                .find("option[value=" + optionValue + "]").attr('selected', true);

            //for form edit
            $('#category_name_edit').val(r[1]);
            if(r[2]=="#"){
                r[2]=0;
            }
            var optionValue = r[2];
            $("#parent_edit").val(optionValue)
                .find("option[value=" + optionValue + "]").attr('selected', true);
            $('#id_edit').val(r[0]);

            //for form delete
            $('#id_delete').val(r[0]);
        });


    });

</script>


@stop