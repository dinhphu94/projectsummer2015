<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Size extends Model
{
    protected $guarded = ['id'];
    protected $table = 'size';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['size_value','created_at','updated_at'];
    public $timestamps = true;


    public static function mapIdSizeToInformationSize(){
        $sizes = self::all()->toArray();
        if($sizes == null){
            return null;
        }
        foreach($sizes as $size){
            $mapIdSizeToInformationSize[$size['id']] = $size;
        }
        return $mapIdSizeToInformationSize;
    }

    public static function getViewAllSizeForSelectTag($idSelected = 0)
    {
        $all = self::all()->toArray();
        $result   = null;
        foreach ($all as $item) {
            if ($idSelected != 0 && $item['id'] == $idSelected) {
                $result .= "<option value='" . $item['id'] . "' selected='selected'> $item[size_value] </option> ";
            } else {
                $result .= "<option value='" . $item['id'] . "'> $item[size_value] </option> ";
            }
        }
        return $result;
    }


}

