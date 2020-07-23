<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriesResource;

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
    	// return new CategoriesResource($this->masterController->index());
    }

    // Get id
    public function show($id)
    {
    	// TODO : 
    }
}
