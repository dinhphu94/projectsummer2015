@extends('admin.layouts.modal') @section('content')
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab">{{{
            trans('admin/modal.general') }}}</a></li>
</ul>
            <form class="form-horizontal" >
                <div class="col-lg-12">
                    <div class="text-content">
  <div class="span7 offset1">
  @if(Session::has('success'))
    <div class="alert-box success">
      <h2>{!! Session::get('success') !!}</h2>
    </div>
  @endif
  <div class="secure">Upload form</div>
  {!! Form::open(array('url'=>'apply/multiple_upload','method'=>'POST', 'files'=>true)) !!}
    <div class="control-group">
      <div class="controls">
      {!! Form::file('images[]', array('multiple'=>true)) !!}
    <p class="errors">{!!$errors->first('images')!!}</p>
    @if(Session::has('error'))
    <p class="errors">{!! Session::get('error') !!}</p>
    @endif
     </div>
</div>
{!! Form::submit('Submit', array('class'=>'send-btn')) !!}
{!! Form::close() !!}
</div>
        </div>
    </form>
@stop 
@section('scripts')
<script type="text/javascript">
    $(function() {
        $("#roles").select2()
    });
</script>
@stop


