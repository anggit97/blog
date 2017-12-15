<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = array('title', 'body', 'post_image','user_id','category_id','slug_title');

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTo('App\category');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag','tag_posts','post_id','tag_id');
    }
}
