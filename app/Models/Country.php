<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country_list';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
