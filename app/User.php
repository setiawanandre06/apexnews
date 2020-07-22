<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// This is a User Model

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
        'api_token', 'user_type', 'liked_post', 
        'disliked_post', 'favorites', 'favorite_categories',
        'preferences', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        // hasMany (<model class>, <foreign key>, <primary key>)
        return $this->hasMany(Post::class, 'author_id', 'id');  // This will define, a user can have many posts.
    }

    public function comments()
    {
        // hasMany (<model class>, <foreign key>, <primary key>)
        return $this->hasMany(Comments::class, 'author_id', 'id');  // This will define, a user can have many comments.
    }
}
