<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use App\Http\Resources\TagResource;
use App\Http\Resources\PostResource;

class TagApiController extends Controller
{
 //    public $masterController;

	// public function __construct()
	// {
	// 	$this->masterController = new TagsMasterController();
	// }

	// GET ALL
    public function index()
    {
    	// TODO : 
        $tags = Tag::paginate();
        return TagResource::collection($tags);
    }

    // Get id
    public function posts($id)
    {
    	// TODO : 
        $tag = Tag::find($id);
        $posts = $tag->posts;
        return PostResource::collection($posts);
    }
}
