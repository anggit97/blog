<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{	
	protected $fillable = array('nama_tag');

    public function posts(){
    	return $this->belongsToMany('App\Post','tag_posts','tag_id','post_id');
    }
}
