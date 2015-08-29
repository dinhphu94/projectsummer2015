@extends('admin.layouts.modal')
@section('content')
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab">{{{
            trans('admin/modal.general') }}}</a></li>
</ul>
        <form class="form-horizontal" action="{{ URL::action('Admin\ProductController@index') }}"
              method="Post" enctype="multipart/form-data" accept="image/*">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="portlet">
                
                <div class="portlet-body col-xs-12 col-sm-8">
                    <div class=" form-group">
                        <label for="username"
                               class="col-sm-3 control-label"><?php echo Lang::get('messages.key_product'); ?>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="key_product"
                                   value="{{ old('key_product')}}" id="key_product"
                                   placeholder="<?php echo Lang::get('messages.key_product'); ?>"
                                   required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name_product"
                               class="col-sm-3 control-label"><?php echo Lang::get('messages.name_product'); ?></label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name_product"
                                   id="name_product"
                                   placeholder="<?php echo Lang::get('messages.name_product'); ?>"
                                   required="required"/>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="image"
                               class="col-sm-3 control-label"><?php echo Lang::get('messages.image_product'); ?></label>

                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" id="image" required="required"
                                   onchange="loadFile(event)"/>
                        </div>
                    </div>
                    <hr />
                    <div class="form-group">
                        <label for="price_import"
                               class="col-sm-3 control-label"><?php echo Lang::get('messages.price_import'); ?></label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price_import"
                                   id="price_import"
                                   placeholder="<?php echo Lang::get('messages.price_import'); ?>"
                                   required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price"
                               class="col-sm-3 control-label"><?php echo Lang::get('messages.price'); ?></label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price"
                                   id="price"
                                   placeholder="<?php echo Lang::get('messages.price'); ?>"
                                   required="required"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="cost"
                               class="col-sm-3 control-label"><?php echo Lang::get('messages.cost'); ?></label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cost"
                                   id="cost"
                                   placeholder="<?php echo Lang::get('messages.cost'); ?>"
                                   required="required" readonly/>

                        </div>
                    </div>

                    <hr />

                    <div class="form-group">
                        <label for="style_id" class="col-sm-3 control-label">
                            <?php echo Lang::get('messages.category'); ?>
                        </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_id" id="category_id" required="required">
                            <?php echo $getViewAllCategoryForSelectTag; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="size" class="col-sm-3 control-label">
                            <?php echo Lang::get('admin/products.size'); ?></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="size" id="size" required="required">
                               <?php echo $getViewAllSizeForSelectTag; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="color" class="col-sm-3 control-label">
                            <?php echo Lang::get('admin/products.color'); ?></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="color" id="color" required="required">
                               <?php echo $getViewAllColorForSelectTag; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="brand" class="col-sm-3 control-label">
                            <?php echo Lang::get('admin/products.brand'); ?></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="brand" id="brand" required="required">
                               <?php echo $getViewAllBrandForSelectTag; ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="madein_id" class="col-sm-3 control-label">
                            <?php echo Lang::get('messages.madein'); ?></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="madein_id" id="madein_id" required="required">
                               <?php echo $getViewAllMadeInForSelectTag; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="material_id" class="col-sm-3 control-label">
                            <?php echo Lang::get('messages.material'); ?></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="material_id" id="material_id" required="required">
                               <?php echo $getViewAllMaterialForSelectTag; ?>

                            </select>
                        </div>
                    </div>
                    


                </div>
                <div class="porlet-body-right col-xs-12 col-sm-3">
                    <img id="output" class="img-responsive"/>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="information" class="col-sm-2 control-label">
                            <?php echo Lang::get('messages.information'); ?></label>
                        <div class="col-sm-10">
                            <textarea name="information" id="information"></textarea>
                        </div>
                    </div>
                </div>

                <br>
                    <div class="form-group">
                        
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-sm btn-success">
                                <span class="glyphicon glyphicon-ok-circle"></span> 
                            
                                <?php echo Lang::get('admin/modal.create'); ?>
                            </button>
                        </div>
                    </div>
                
            </div>
        </form>

@stop

@section('scripts')

    <script src="{{Asset('admin/assets/js/jquery.number.js')}}" type="text/javascript"></script>
    <script src="{{Asset('admin/assets/js/product.js')}}" type="text/javascript"></script>
    <script src="{{Asset('admin/assets/js/ckeditor/ckeditor.js')}}"
            type="text/javascript"></script>

<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };

    CKEDITOR.replace('information', {
                toolbar: [
                    {name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates','Image','Flash','Table']},
                    ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', 'Bold', 'Italic'],
                    '/'// Line break - next group will be placed in new line.

                ],
                height: ['100px'],
                weight: ['100%']

            }
    );

</script>
@stop