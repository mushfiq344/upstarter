<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subs extends Model
{
    protected $table = 'subscribers';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
