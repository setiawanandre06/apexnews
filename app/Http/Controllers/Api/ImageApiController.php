<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageApiController extends Controller
{
    public $masterController;

	public function __construct()
	{
		$this->masterController = new ImagesMasterController();
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
