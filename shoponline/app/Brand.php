<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Brand extends Model
{
    protected $guarded = ['id'];
    protected $table = 'brand';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['brand_name','created_at','updated_at'];
    public $timestamps = true;


    public static function mapIdBrandToInformationBrand(){
        $brands = self::all()->toArray();
        if($brands == null){
            return null;
        }
        foreach($brands as $brand){
            $mapIdBrandToInformationBrand[$brand['id']] = $brand;
        }
        return $mapIdBrandToInformationBrand;
    }

    public static function getViewAllBrandForSelectTag($idSelected = 0)
    {
        $all = self::all()->toArray();
        $result   = null;
        foreach ($all as $item) {
            if ($idSelected != 0 && $item['id'] == $idSelected) {
                $result .= "<option value='" . $item['id'] . "' selected='selected'> $item[brand_name] </option> ";
            } else {
                $result .= "<option value='" . $item['id'] . "'> $item[brand_name] </option> ";
            }
        }
        return $result;
    }


}

