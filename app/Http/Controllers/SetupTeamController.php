<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;

class SetupTeamController extends Controller
{
    /*
    |-----------------------------------------
    | SHOW DESIGNATION
    |-----------------------------------------
    */
    public function index(Request $request){
    	// body
    	return view("__admin.designation");
    }
}
