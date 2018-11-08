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
        if(count($software_issue) > 0){
            $issues_box = [];
            foreach ($software_issue as $si) {
                $project_info = Project::where("app_key", $si->software_key)->first();

                $data = [
                    "id"                =>  $si->id,
                    "software_name"     =>  $si->software_name,
                    "software_key"      =>  $si->software_key,
                    "software_issue"    =>  $si->software_issue,
                    "software_status"   =>  $si->software_status,
                    "reporter_ip"       =>  $si->reporter_ip,
                    "reporter_browser"  =>  $si->reporter_browser,
                    "reporter_location" =>  $si->reporter_location,
                    "project_info"      =>  $project_info,
                    "created_at"        =>  $si->created_at->diffForHumans(),
                    "updated_at"        =>  $si->updated_at->diffForHumans()
                ];

                array_push($issues_box, $data);
            }
        }else{
            $issues_box = [];
        }

        // return
        return $issues_box;
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
