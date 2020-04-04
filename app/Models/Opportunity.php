<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $table = 'opportunity';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public static function get_opportunity_type_name($id)
    {
        if($id=='all'){
            return "All";
        }else {
            $object = Opp_type::find($id);
            if($object){
                return $object->type;
            }else{
                return "Undefined";
            };
        }
    }
}
