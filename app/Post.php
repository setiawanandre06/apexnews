<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title', 'content', 'post_type',
    	'author_id', 'category_id', 'meta_data'  
    ];

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }

    public function author()
    {
    	// belongsTo(<model class>, <foreign key>, <primary key>)
    	return $this->belongsTo(User::class, 'author_id', 'id');  // This will define, which author_id this post belongs to
    }

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id', 'id');  // This will define, which category_id this post belongs to
    }

    public function images()
    {
    	return $this->hasMany(Image::class);
    }

    public function videos()
    {
    	return $this->hasMany(Video::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function link()
    {
        return '/posts/' . $this->id;
    }
    // author_id & category_id ditaruh di fillable supaya jika ingin menghapus
    // current author_id, bisa di assign secara manual
}
