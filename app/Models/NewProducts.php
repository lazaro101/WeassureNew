<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewProducts extends Model
{
    protected $table = 'newproducts';
    protected $primaryKey = 'np_id';
    public $timestamps = false;

}
