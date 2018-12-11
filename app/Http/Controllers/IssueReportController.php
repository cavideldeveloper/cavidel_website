<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\SoftwareIssue;
use Cavidel\Project;

class IssueReportController extends Controller
{
    /*
    |---------------------------------------------
    | AUTHENTICATE SOFTWARE KEY
    |---------------------------------------------
    */
    public function __construct(){
        $this->middleware('verify_software')->only('reportIssue');
    }

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

    /*
    |---------------------------------------------
    | VERIFY APP KEY
    |---------------------------------------------
    */
    public function verifyKey(Request $request){
        $verify_project = Project::where("app_key", $request->app_key)->first();
        if($verify_project !== null){
            $data = [
                'status'    => 'success',
                'message'   => 'Key is valid',
            ];
        }else{
            $data = [
                'status'    => 'error',
                'message'   => 'Key is invalid',
            ];
        }

        // return response
        return response()->json($data);
    }

    /*
    |-----------------------------------------
    | VERIFY SOFWARE KEY FROM LARAVEL PACKAGE
    |-----------------------------------------
    */
    public function verifySoftwareKey(Request $request){
        // body
        $software_key = "C-".$request->software_key;
        $verify_project = Project::where("app_key", $software_key)->first();
        if($verify_project !== null){

            if($verify_project->status == "active"){
                $data = [
                    'status'    => true,
                    'message'   => 'Key is valid',
                ];
                $status = 200;
            }else{
                $data = [
                    'status'    => false,
                    'message'   => 'Software expired!',
                ];
                $status = 401;
            }
                
        }else{
            $data = [
                'status'    => false,
                'message'   => 'Key is invalid',
            ];
            $status = 401;
        }

        // return response.
        return response()->json($data, $status);
    }
}
