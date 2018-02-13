<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MemberDashboardController extends Controller
{
	public function index()
    {
	    $data["Page"] = "Dashboard";
        return view ("member.dashboard");
    }
}

