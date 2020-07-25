<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\PostsResource;
use App\Http\Resources\PostResource;
use App\Http\Controllers\shared\CategoriesMasterController;

class CategoryApiController extends Controller
{
	public $masterController;

	public function __construct()
	{
		$this->masterController = new CategoriesMasterController();
	}

	// GET ALL
    public function index()
    {
    	// TODO : 
        $categories = Category::all();
        return new CategoriesResource($categories);
    	// return new CategoriesResource($this->masterController->index());
    }

    // Get id
    public function show($id)
    {
    	// TODO : 
    }

    public function posts($id)
    {
        // TODO : 
        $posts = Category::find($id)->posts()->paginate();
       
        return PostResource::collection($posts);
    }
}
