<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumImgs extends Model
{
    protected $table = 'album_imgs'; 
    protected $primaryKey = 'ai_id';
    public $timestamps = false;

    public function album(){
    	return $this->belongsTo('App\Models\Album','album_id');
    }
}
