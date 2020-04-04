<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state_list';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
