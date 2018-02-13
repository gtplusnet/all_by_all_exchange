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

    public function dashboard()
    {
    	$data["Page"] = "Dashboard";
    	return view ("front.dashboard", $data);
    }

    public function cash_in()
    {
        $data["Page"] = "Cash In";
        return view ("front.cash_in", $data);
    }

    public function cash_out()
    {
        $data["Page"] = "Cash Out";
        return view ("front.cash_out", $data);
    }

    public function notification()
    {
        $data["Page"] = "Notification";
        return view ("front.notification", $data);
    }
}

