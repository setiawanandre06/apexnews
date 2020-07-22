<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
    	'title'
    ];

    public function post()
    {
    	return $this->belongsToMany(Post::class);
    }
}
