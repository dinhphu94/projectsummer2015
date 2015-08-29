@extends('admin.layouts.default') @section('content')
@section('styles')
    
@stop
@section('content')
<div class="main">
        
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-spinner"></i>{{ trans('admin/color.color') }}</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">{{ trans('admin/modal.home') }}</a></li>
                        <li><i class="fa fa-spinner"></i>{{ trans('admin/color.color') }}</li>                           
                    </ol>
                </div>
            </div>
                    <form class="form-horizontal" action="{{ URL::action('Admin\GalleryController@index') }}"
                          method="Post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="image" class="col-sm-2 control-label">{{ trans('admin/gallery.insert_image')}}</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="filediv"><input name="images[]" type="file" id="file"/></div>
                            <input type="button" id="add_more" class="upload btn btn-primary" value="Add More Files"/>
                            <input type="hidden" name="product_id" value="" />
                            <input type="submit" value="Upload File" name="submit" id="upload" class="upload btn btn-primary"/>

                        </div>
                    </div>
                    </form>
                

                <div class="portlet-body" style="padding-top: 20px !important;">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>
                                    {{trans('admin/gallery.id')}}
                                </th>

                                <th>
                                    {{trans('admin/gallery.image')}}
                                </th>
                                <th>
                                    {{trans('admin/gallery.image_name')}}
                                </th>
                                <th>
                                    {{trans('messages.delete')}}
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>


                </div>

</div>

@stop
@section('jscode')

        <script>
            var i = 0;      // Declaring and defining global increment variable.
            $(document).ready(function() {
                //  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
                $('#add_more').click(function() {
                    $(this).before($("<div/>", {
                        id: 'filediv'
                    }).fadeIn('slow').append($("<input/>", {
                        name: 'images[]',
                        type: 'file',
                        id: 'file'
                    }), $("<br/><br/>z")));
                });
                // Following function will executes on change event of file input to select different file.
                $('body').on('change', '#file', function() {
                    if (this.files && this.files[0]) {
                        i += 1; // Incrementing global variable by 1.
                        var z = i - 1;
                        var x = $(this).parent().find('#previewimg' + z).remove();
                        $(this).before("<div id='imgUpload" + i + "' class='imgUpload'><img id='previewimg" + i + "' src=''/></div>");
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[0]);
                        $(this).hide();
                        $("#imgUpload" + i).append($("<i id='img' class='glyphicon glyphicon-remove'></i>").click(function() {
                            $(this).parent().parent().remove();
                        }));
                    }
                });
                // To Preview Image
                function imageIsLoaded(e) {
                    $('#previewimg' + i).attr('src', e.target.result);
                };
                $('#upload').click(function(e) {
                    var name = $(":file").val();
                    if (!name) {
                        alert("First Image Must Be Selected");
                        e.preventDefault();
                    }
                });
            });
        </script>
@stop