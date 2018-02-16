<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Tbl_anyband_user;
use Session;
use Crypt;
use Redirect;
use View;
use Input;
use File;
use Image;      
use Validator;

class MemberRegisterController extends Controller
{
    public function register(Request $request)
    {
      $data['Page'] = "Register";
      return view ("member.member_register", $data);
    }
}


    