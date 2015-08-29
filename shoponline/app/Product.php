<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class Product extends Model
{
    protected $guarded = ['id'];
    protected $table = 'product';
    public $properties = array('id', 'key_product', 'name_product', 'status', 'price_import', 'price', 'cost', 'image',
        'information', 'category_id', 'size_id', 'color_id', 'madein_id',
        'material_id', 'brand_id', 'created_at', 'updated_at');
    public $timestamps = true;


    const PATH_IMAGE = 'upload/product';
    const CHECK_NEW = 7;

    
   

    public static function mapProductIdToInformationProduct()
    {
        $products = self::all()->toArray();

        if ($products == null) {
            return null;
        }
        foreach ($products as $product) {
            $mapProductIdToInformationProduct[$product['id']] = $product;
        }
        return $mapProductIdToInformationProduct;
    }

    

    

    
    public function getViewFiveProductRelationForPageProduct($dataProductByIdCategory){
        $result = null;
        foreach($dataProductByIdCategory as $product){
            $linkImage = url('/').'/upload/product/$product[image]';
            $nameProduct = $product['name_product'];
            $linkToProduct = change_alias($product['name_product']).'-'.$product['id'];
            $cost = number_format($product['price'],2);
            $checkNew = Carbon::now()->subDay(self::CHECK_NEW) <  $product['created_at'];
            if($checkNew == true){
                $stickNew = "<div class='circle ribbon ribbon-new'>New</div>";
            }else {
                $stickNew = null;
            }
            
            $result .="<div class='product' data-product-id='".$product[id]."'>
                  <div class='entry-media'>
                    <img data-src='".$linkImage."' alt='' class='lazyOwl thumb' />
                    <div class='hover'>
                      <a href='home' class='entry-url'></a>
                      <ul class='icons unstyled'>
                        ".$checkNew."
                        <li>
                          <a href='".$linkImage."' class='circle' data-toggle='lightbox'><i class='iconfont-search'></i></a>
                        </li>
                        <li>
                          <a href='' class='circle add-to-cart'><i class='iconfont-shopping-cart'></i></a>
                        </li>
                      </ul>
                      <div class='rate-bar'>
                        <input type='range' value='4.5' step='0.5' id='backing".$product[id]."' />
                        <div class='rateit' data-rateit-backingfld='#backing1' data-rateit-starwidth='12' data-rateit-starheight='12' data-rateit-resetable='false'  data-rateit-ispreset='true' data-rateit-min='0' data-rateit-max='5'></div>
                      </div>
                    </div>
                  </div>
                  <div class='entry-main'>
                    <h5 class='entry-title'>
                      <a href='#'>".$nameProduct."</a>
                    </h5>
                    <div class='entry-price'>
                      
                      <strong class='accent-color price'>$ ".$cost."</strong>
                    </div>
                    <div class='entry-links clearfix'>
                      <a href='#' class='pull-left m-r'>+ Add to Wishlist</a>
                      <a href='#' class='pull-right'>+ Add to Compare</a>
                    </div>
                  </div>
                </div>";
        }
        return $result;
    }

}

