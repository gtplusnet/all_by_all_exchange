<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MainController extends Controller
{
	public function index()
    {
	    $data["Page"] = "Home";
        return view ("front.home");
    }

    public function signup()
    {
		$data['Page'] = "User";
    	return view ("front.layout", $data);
    }
}

