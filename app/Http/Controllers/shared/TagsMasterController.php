<?php

namespace App\Http\Controllers\shared;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagsMasterController extends Controller
{
    // Tujuan dibuat MasterController : jika kedepannya ada perubahan logic,
	// cukup diubah melalui MasterController, sehingga tidak berpengaruh ke
	// Controller, maupun API Controller

	// GET ALL
    public function index()
    {
    	// TODO : 
    	
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
