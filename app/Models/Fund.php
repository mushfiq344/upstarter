<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $table = 'funding_types';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function get_funding_type_name($id)
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
