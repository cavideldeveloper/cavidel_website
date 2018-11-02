<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthenticationController extends Controller
{
    /*
    |---------------------------------------------
    | SHOW AUTHENTICATION FORM
    |---------------------------------------------
    */
    public function showLogin(){
    	return view('__auth.login');
    }
}
