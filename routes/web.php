<?php

use Illuminate\Support\Facades\Route;

use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Image;
use App\Video;
use App\Tag;

use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoriesResource;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group( function(){  // Semua route akan dilindungi oleh authentication middleware

	Route::post('categories', 'CategoryController@store')->name('save-category');
	Route::get('categories', 'CategoryController@index');
	Route::get('categories/{id}', 'CategoryController@show');

	Route::get('tags', 'TagController@index');
	Route::get('tags/{id}', 'TagController@show');

	Route::get('comments', 'CommentController@index');
	Route::get('comments/{id}', 'CommentController@show');

});

// Route::get('test', function () {
	// $post = Post::all();
	// return $post;  -> laravel akan mengubah $post menjadi json secara otomatis

	// return new PostsResource ($post);  // akan menambah element data di luar json
	// return new PostsResource(\App\Post::paginate(20));  // return 20 data per page

	// return new CategoryResource(\App\Category::find(5));
	// return new CategoriesResource(\App\Category::paginate(5));
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
