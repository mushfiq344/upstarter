<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opp_type extends Model
{
    protected $table = 'opportunity_type';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function get_opportunity_type_name($id)
    {
        if($id=='all'){
            return "All";
        }else {
            $object = self::find($id);
            if($object){
                return $object->type;
            }else{
                return "Undefined";
            };
        }
    }
}
