<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MemberCashInController extends Controller
{
	public function index()
    {
	    $data["Page"] = "Cash In";
        return view ("member.cash_in");
    }
}

