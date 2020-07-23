<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagApiController extends Controller
{
    public $masterController;

	public function __construct()
	{
		$this->masterController = new TagsMasterController();
	}

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
}
