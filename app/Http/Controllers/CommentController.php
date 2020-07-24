<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // GET ALL
    public function index()
    {
    	// TODO : 
    	return view('comments.comments')->with(
    		[
    			'comments'		=>	Comment::paginate(20)
    		]
    	);
    }

    // Get id
    public function show($id)
    {
    	// TODO : 
    	return view('comments.comment')->with(
    		[
    			'comment'		=>	Comment::find($id)
    		]
    	);
    }

    // POST
    public function store(Request $request)
    {
    	// TODO : 
    }
}
