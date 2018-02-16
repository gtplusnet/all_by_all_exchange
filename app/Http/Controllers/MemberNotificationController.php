<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MemberNotificationController extends Controller
{
	public function index()
    {
	    $data["Page"] = "Notification";
        return view ("member.notification");
    }
}

