<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // GET ALL
    public function index()
    {
    	// TODO : Returns tags view
    	return view ('tags.tags')->with(  // Dipanggil dari folder resources->views
    		[
                'tags'    	=>  Tag::all()
    			// 'categories'	=>	new CategoriesResource(Category::paginate())
    		]
    	);
    }

    // Get id
    public function show($id)
    {
    	// TODO : Return tag view with id
    	return view ('tags.tag')->with(
    		[
    			'tag'		=>	Tag::find($id)
    		]
    	);
    }

    // POST
    public function store(Request $request)
    {
    	// TODO : 
    }
}
