<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Material extends Model
{
    protected $guarded = ['id'];
    protected $table = 'material';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['material_name','created_at','updated_at'];
    public $timestamps = true;

    public static function getViewAllMaterialForSelectTag($idSelected = 0)
    {
        $all = self::all()->toArray();
        $result   = null;
        foreach ($all as $item) {
            if ($idSelected != 0 && $item['id'] == $idSelected) {
                $result .= "<option value='" . $item['id'] . "' selected='selected'> $item[material_name] </option> ";
            } else {
                $result .= "<option value='" . $item['id'] . "'> $item[material_name] </option> ";
            }
        }
        return $result;
    }

    public static function arrayFromIdMaterialToNameMaterial(){
        $all = self::all()->toArray();
        if($all == null){
            return null;
        }
        $newArray = array();
        foreach($all as $item){
            $newArray[$item['id']] = $item['material_name'];
        }
        return $newArray;
    }
}

