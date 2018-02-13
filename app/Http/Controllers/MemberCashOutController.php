<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MemberCashOutController extends Controller
{
	public function index()
    {
	    $data["Page"] = "Cash Out";
        return view ("member.cash_out");
    }
}

