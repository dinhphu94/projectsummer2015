<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Color extends Model
{
    protected $guarded = ['id'];
    protected $table = 'color';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['color_name','created_at','updated_at'];
    public $timestamps = true;


    public function mapIdToInfoColor()
    {
        $allColor = self::all();
        $newArray = null;
        foreach ($allColor as $color) {
            $newArray[$color['id']] = $color;
        }
        return $newArray;
    }

    public static function mapIdColorToInformationColor()
    {
        $colors = self::all()->toArray();

        if ($colors == null) {
            return null;
        }
        foreach ($colors as $color) {
            $mapIdColorToInformationColor[$color['id']] = $color;
        }
        return $mapIdColorToInformationColor;
    }

    public static function getViewColorForSelectTag($all){
        $mapIdColorToInformationColor = self::mapIdColorToInformationColor();

        if(empty($mapIdColorToInformationColor)){
            return null;
        }

        $result   = null;
        foreach ($all as $item) {
            if(!array_key_exists($item,$mapIdColorToInformationColor)){
                continue;
            }
            $colorName = $mapIdColorToInformationColor[$item]['color_name'];
            $result .= "<option value='" . $item . "'> $colorName </option>";
        }
        return $result;
    }

    public static function getViewAllColorForSelectTag($idSelected = 0)
    {
        $all = self::all()->toArray();
        $result   = null;
        foreach ($all as $item) {
            if ($idSelected != 0 && $item['id'] == $idSelected) {
                $result .= "<option value='" . $item['id'] . "' selected='selected'> $item[color_name] </option> ";
            } else {
                $result .= "<option value='" . $item['id'] . "'> $item[color_name] </option> ";
            }
        }
        return $result;
    }

    public static function arrayFromIdColorToNameColor(){
        $all = self::all()->toArray();
        if($all == null){
            return null;
        }
        $newArray = array();
        foreach($all as $item){
            $newArray[$item['id']] = $item['color_name'];
        }
        return $newArray;
    }

}

