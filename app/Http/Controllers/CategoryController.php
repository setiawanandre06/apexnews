<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoriesResource;

class CategoryController extends Controller
{
	// GET ALL
    public function index()
    {
    	// TODO : 
    	// return view('categories.categories')->with(
    	// 	[
    	// 		'categories'	=>	new CategoriesResource(Category::paginate())
    	// 	]
    	// );
    }

    // Get id
    public function show($id)
    {
    	// TODO : 
    }

    // POST
    public function store(Request request)
    {
    	// TODO : 
    }
}
