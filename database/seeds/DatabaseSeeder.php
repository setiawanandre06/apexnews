<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        factory(\App\User::class, 100)->create();  // Creates 100 fake users for testing
        factory(\App\Post::class, 1500)->create();  // Creates 1500 fake posts for testing
        factory(\App\Category::class, 10)->create();  // Creates 10 fake categories for testing
        factory(\App\Tag::class, 50)->create();  // Creates 50 fake tags for testing
        factory(\App\Image::class, 2500)->create();  // Creates 2500 fake images for testing
        factory(\App\Video::class, 500)->create();  // Creates 500 fake videos for testing
        factory(\App\Comment::class, 2500)->create();  // Creates 2500 fake comments for testing

        $tags = \App\Tag::all();  // Get all the tags

        App\Post::all()->each(function ($post) use ($tags)
        {
        	$post->tag()->attach(
        		$tag->random(rand(1, 50))->pluck('id')->toArray()
        	);
        });
    }
}
