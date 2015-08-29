@extends('admin.layouts.modal') @section('content')
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab">{{{
            trans('admin/modal.general') }}}</a></li>
</ul>
<form class="form-horizontal" method="post"
    action="@if (isset($data)){{ URL::to('admin/brand/' . $data->id . '/edit') }}
    @endif"
    autocomplete="off">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="tab-content">
        <div class="tab-pane active" id="tab-general">
            <div class="col-md-12">
                <div class="form-group {{{ $errors->has('brand_name') ? 'has-error' : '' }}}">
                    <label class="col-md-2 control-label" for="brand_name">{{
                        trans('admin/brand.brand_name') }}</label>
                    <div class="col-md-10">
                        <input class="form-control" type="brand_name" tabindex="4"
                            placeholder="{{ trans('admin/brand.brand_name') }}" name="brand_name"
                            id="brand_name"
                            value="{{{ Input::old('brand_name', isset($data) ? $data->brand_name : null) }}}" />
                        {{ $errors->first('brand_name', '<label class="control-label"
                            for="brand_name">:message</label>')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button type="reset" class="btn btn-sm btn-warning close_popup">
                <span class="glyphicon glyphicon-ban-circle"></span> {{
                trans("admin/modal.cancel") }}
            </button>
            <button type="reset" class="btn btn-sm btn-default">
                <span class="glyphicon glyphicon-remove-circle"></span> {{
                trans("admin/modal.reset") }}
            </button>
            <button type="submit" class="btn btn-sm btn-success">
                <span class="glyphicon glyphicon-ok-circle"></span> 
                    @if (isset($data))
                        {{ trans("admin/modal.edit") }}
                    @else
                        {{trans("admin/modal.create") }}
                    @endif
            </button>
        </div>
    </div>
</form>
@stop @section('scripts')
<script type="text/javascript">
    $(function() {
        $("#roles").select2()
    });
</script>
@stop
