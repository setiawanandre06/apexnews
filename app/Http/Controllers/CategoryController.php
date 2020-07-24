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
    	// TODO : Return categories view
    	return view('categories.categories')->with(  // Dipanggil dari folder resources->views
    		[
                'categories'    =>  Category::all()
    			// 'categories'	=>	new CategoriesResource(Category::paginate())
    		]
    	);
    }

    // Get id
    public function show($id)
    {
    	// TODO : Return category view with specific id
        return view('categories.category')->with(
            [
                'category'      =>  Category::Find($id)
            ]
        );
    }

    // POST
    public function store(Request $request)
    {
    	// TODO : 
        $request->validate([
            'category_title'    =>  'required',
            'category_color'    =>  'required'
        ]);

        $category = new Category();
        $category->title = $request->get('category_title');
        $category->color = $request->get('category_color');
        $category->save();
        return redirect()->back()->with('message', 'Category Created');
    }
}
