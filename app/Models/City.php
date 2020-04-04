<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city_list';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
