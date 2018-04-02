<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $primaryKey = 'album_id';
    public $timestamps = false;

    public function albumimgs(){
    	return $this->hasMany('App\Models\AlbumImgs','album_id');
    }
}
