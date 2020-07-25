<?php

namespace App\Http\Controllers\shared;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;

class CategoriesMasterController extends Controller
{
	// Tujuan dibuat MasterController : jika kedepannya ada perubahan logic,
	// cukup diubah melalui MasterController, sehingga tidak berpengaruh ke
	// Controller, maupun API Controller

	// GET ALL
    public function index()
    {
    	// TODO : 
    	// return new CategoriesResource(Category::paginate());
    }

    // Get id
    public function show($id)
    {
    	// TODO : 
    }

    // POST
    public function store(Request $request)
    {
    	// TODO : 
    }
}

?>