<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Gallery extends Model {
    protected $guarded = ['id'];
    protected $table = 'gallery';
    public $properties = array('id','product_id','image_name','image_path', 'imageType');
    public $timestamps = true;


}