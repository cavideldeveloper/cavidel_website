<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\SoftwareIssue;

class IssueReportController extends Controller
{
    /*
    |---------------------------------------------
    | REPORT ISSUES 
    |---------------------------------------------
    */
    public function reportIssue(Request $request){
    	$software_issue = new SoftwareIssue();
    	$data 			= $software_issue->logIssue($request);

    	// return response
    	return response()->json($data);
    }
}
