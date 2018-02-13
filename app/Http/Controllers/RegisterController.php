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

class RegistrationController extends Controller
{
    public function registration(Request $request)
    {
      $data['Page'] = "Register";
      return view ("front.registration", $data);
    }

    public function thank_you()
    {
    	 $data['Page'] = "Thank you!";
    	 return view ("front.thank_you", $data);
    }
}


    