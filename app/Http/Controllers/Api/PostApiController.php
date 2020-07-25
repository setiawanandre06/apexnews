<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostsResource;
use App\Http\Resources\PostResource;
use App\Post;

class PostApiController extends Controller
{
 //    public $masterController;

	// public function __construct()
	// {
	// 	$this->masterController = new PostsMasterController();
	// }

	// GET ALL
    public function index()
    {
    	// TODO : 
        $posts = Post::paginate();
        return PostResource::collection($posts);
    }

    // Get id
    public function show($id)
    {
    	// TODO : 
    }
}
