<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
    	'title', 'url', 'post_id', 'featured'
    ];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
