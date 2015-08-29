<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Madein extends Model
{
    protected $guarded = ['id'];
    protected $table = 'madein';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['madein_name','created_at','updated_at'];
    public $timestamps = true;

    public static function getViewAllMadeInForSelectTag($idSelected = 0)
    {
        $all = self::all()->toArray();
        $result   = null;
        foreach ($all as $item) {
            if ($idSelected != 0 && $item['id'] == $idSelected) {
                $result .= "<option value='" . $item['id'] . "' selected='selected'> $item[madein_name] </option> ";
            } else {
                $result .= "<option value='" . $item['id'] . "'> $item[madein_name] </option> ";
            }
        }
        return $result;
    }

    public static function arrayFromIdMadeinToNameMadein(){
        $all = self::all()->toArray();
        if($all == null){
            return null;
        }
        $newArray = array();
        foreach($all as $item){
            $newArray[$item['id']] = $item['madein_name'];
        }
        return $newArray;
    }

}

