<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\SoftwareIssue;

class AdminJsonResponseController extends Controller
{
    /*
    |---------------------------------------------
    | LOAD ALL SOFTWARE ISSUES
    |---------------------------------------------
    */
    public function loadIssues(){
    	$software_issues 	= new SoftwareIssue();
    	$data 				= $software_issues->loadAllIssues();

    	// return response
    	return response()->json($data);
    }
}
