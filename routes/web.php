<?php

use Illuminate\Support\Facades\Route;

use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Image;
use App\Video;

use App\Http\Resources\PostResource;

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

Route::get('test', function () {
	$post = Post::find(10);
	return new PostResource ($post);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
