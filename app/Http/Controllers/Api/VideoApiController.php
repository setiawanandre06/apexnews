<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoApiController extends Controller
{
    public $masterController;

	public function __construct()
	{
		$this->masterController = new VideosMasterController();
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
