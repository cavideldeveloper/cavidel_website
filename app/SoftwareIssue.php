<?php

namespace Cavidel;

use Illuminate\Database\Eloquent\Model;
use Cavidel\Mail\NotifyDevelopers;

class SoftwareIssue extends Model
{
    /*
    |---------------------------------------------
    | LOG SOFTWARE ISSUES
    |---------------------------------------------
    */
    public function logIssue($payload){
    	$new_issue 						= new SoftwareIssue();
    	$new_issue->software_name 		= $payload->software_name;
    	$new_issue->software_key 		= $payload->software_key;
    	$new_issue->software_issue 		= $payload->software_issue;
    	$new_issue->software_status 	= $payload->software_status;
    	$new_issue->reporter_ip 		= $payload->reporter_ip;
    	$new_issue->reporter_browser 	= $payload->reporter_browser;
    	$new_issue->reporter_location 	= $payload->reporter_location;
    	if($new_issue->save()){
    		$data = [
    			'status' 	=> 'success',
    			'message' 	=> 'Thanks for contacting our software team, We are currently working on your request',
    		];
    	}else{
    		$data = [
    			'status' 	=> 'error',
    			'message' 	=> 'failed to log issue',
    		];
    	}

    	// return 
    	return $data;
    }

    /*
    |---------------------------------------------
    | LOAD ALL SOFTWARE ISSUES
    |---------------------------------------------
    */
    public function loadAllIssues(){
        $software_issue = SoftwareIssue::orderBy("id", "DESC")->get();

        // return
        return $software_issue;
    }

    /*
    |-----------------------------------------
    | COUNT ALL SOFTWARE ISSUES
    |-----------------------------------------
    */
    public function countAllSoftwareIssues(){
        // body
        $software_issues = SoftwareIssue::count();

        // return
        return $software_issues;
    }
}
