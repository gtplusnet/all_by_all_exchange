<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MemberLoginController extends Controller
{
    public function login()
    {
    	$data['Page'] = "Login";
    	return view ("member.member_login", $data);
    }
}
