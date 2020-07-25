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
        // author & post = fungsi untuk membuat relasi antara table comment dg table user & post
        $comments = Comment::with(['author','post'])->paginate(20);
    	return view('comments.comments')->with(
    		[
    			'comments'		=>	$comments
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
