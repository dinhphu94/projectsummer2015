@extends('admin.layouts.default')
@section('title')Admin | Categories @stop

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ Asset('admin/assets/css/jstreestyle.css')}}"/>

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


  <div class="row">
    <div class="col-md-12">
        <form class="form-horizontal form-row-seperated"
              action="{{ URL::action('Admin\CategoryController@update', $result->id) }}" method="Post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">

            <div class="portlet">
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-shopping-cart"></i><?php echo Lang::get('messages.edit_user'); ?>
                        </div>
                        <div class="actions btn-set">
                            <a href="{{ URL::action('UsersController@index') }}" name="back" class="btn default"><i
                                    class="fa fa-angle-left"></i> <?php echo Lang::get('messages.list_users'); ?></a>
                            <button class="btn default" type="reset"><i
                                    class="fa fa-reply"></i><?php echo Lang::get('messages.reset'); ?></button>
                            <button class="btn green" type="submit"><i
                                    class="fa fa-check"></i> <?php echo Lang::get('messages.update'); ?></button>
                        </div>
                    </div>
                    <div class="portlet-body col-xs-12 col-sm-8">
                        <div class=" form-group">
                            <label for="username"
                                   class="col-sm-2 control-label"><?php echo Lang::get('messages.users_username'); ?></label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username"
                                       value="{{ old('username', $result['username'])}}" id="username"
                                       placeholder="<?php echo Lang::get('messages.users_username'); ?>"
                                       />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
@section('js')

<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@stop
